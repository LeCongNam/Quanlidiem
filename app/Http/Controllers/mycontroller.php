<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

//use Illuminate\Validation\Validator;
use Illuminate\Support\Facades\Validator;


class mycontroller extends Controller
{
    public function save_student(Request $request)
    {
        // Get All Value from Form
        // dd($request->all());

        $message = [];
        $validator = Validator::make($request->all(), [
            'masv' => 'required | size:9 | unique:students, "masv"',
            'tensv' => 'required | max:100 | unique:students, "tensv"',
            'ngaysinh' => 'required ',
            'noisinh' => 'required ',
            'malop' => 'required |size:7',
            'tenkhoa' => 'required ',
            'hinhsv' => 'required | mimes: jpeg,jpg, png, gif | max:1024'
        ], $message);

        if ($validator->fails()) {
            return redirect('/form-sv')->withErrors($validator)->withInput();
        } else {
            $masv = $request->input('masv');
            $tensv = $request->input('tensv');
            $ngaysinh = $request->input('ngaysinh');
            $noisinh = $request->input('noisinh');
            $malop = $request->input('malop');
            $khoa = $request->input('tenkhoa');
            $hinh = $request->input('hinhsv');

            //  Download hinh
            $hinh = $request->file('hinhsv');
            $storagePath = $hinh->move('Images', date('dmYhsi') . '_' . $hinh->getClientOriginalName());

            DB::insert('insert into students(masv, tensv, hinhsv, ngaysinh, noisinh ,malop, tenkhoa)
            values (?,?,?,?,?,?,?)', [$masv, $tensv, $storagePath, $ngaysinh, $noisinh, $malop, $khoa]);
            return view('admin/page/FormSV', ['mess' => 'OK']);
        }
    }

    public function saveScore(Request $request)
    {
        // Get All Value from Form
        // dd($request->all());


        $message = [];
        $validator = Validator::make($request->all(), [
            'masv' => 'required | size:9 ',
            'tenmh' => 'required ',
            'diem' => 'required |numeric|min:0 | max:10',
            'sotc' => 'required |numeric|min:1',
            'lop' => 'required ',
            'lanthi' => 'required| min:1 ',
        ], $message);

        if ($validator->fails()) {
            return redirect('/form-score')->withErrors($validator)->withInput();
        } else {
            $masv = $request->input('masv');
            $tenmh = $request->input('tenmh');
            $sotc = $request->input('sotc');
            $diem = $request->input('diem');
            $lop = $request->input('lop');
            $lanthi = $request->input('lanthi');

            DB::insert('insert into scores(id,tenmh, sotc,   diem,   masv,   lop,  lanthi)
                    values (?,?,?,?,?,?,?)',         [null, $tenmh, $sotc, $diem,  $masv,  $lop, $lanthi]);
            return view('admin/page/FormScore', ['mess' => 'OK']);
        }
    }


    // Get Data Query Builder
    public function getData(Request $request)
    {
        //  $mems = DB::table('students')
        // //  ->where('id','=','')->first()
        //  ->get();
        //  dd($mems);
        //  // echo $mems->ProductName;
        //  // $data = DB:table('members')->pluck('MemberName',concat('MemberId','Cost'));
        //  // {key:value,key:value...}
        //  // $data = DB::table('products')->select('productId','productName as Tên sản phẩm')->get();
        //  // $data = DB::table('products')->select(DB::raw('unit,count(*) as đếm'))
        //  //                                             ->groupBy('unit')
        //  //                                             ->get();

        $message = [];
        $validator = Validator::make($request->all(), [
            'masv' => 'required | size:9',
        ], $message);


        if ($validator->fails()) {
            return redirect('/xemdiem')->withErrors($validator)->withInput();
        } else {
            $masv = $request->input('masv');
        }


        $scores = DB::table('scores')
            ->select('*')
            ->where('masv', '=',  $masv)->get();

        $students = DB::table('students')
            ->select('*')
            ->where('masv', '=',  $masv)->get();

        //    Đúng: show điểm cho xem
        if (empty($scores) == false) {
            return view('XemDiem', compact('scores', 'students'));
        }
        // Sai Trả về thông báo
        return view('SearchAndLogin', ['mess' => 'Không tìm thấy mã sinh viên! Vui lòng thử lại']);
    }




    public function showAdmin(Request $request)
    {
        // Query data by database
        $scores = DB::table('scores')
            ->select('scores.id', 'tenmh', 'sotc', 'lanthi', 'diem', 'students.tensv', 'class.tenlop', 'students.tenkhoa', 'students.masv')
            ->join('students', 'students.masv', '=', 'scores.masv')
            ->join('class', 'students.malop', '=', 'class.malop')
            ->groupBy('scores.id', 'tenmh', 'sotc', 'lanthi', 'diem', 'students.tensv', 'class.tenlop', 'students.tenkhoa', 'students.masv')
            ->get();
        // dd($scores);

        return view('admin/page/AdminDashboard', compact('scores'));
    }



    public function editDiem(Request $request, $id)
    {
        $scores = DB::table('scores')
            ->select('*')
            ->where('id', '=', $id)
            ->get();

        // dd($scores);

        return view('admin/page/EditScore', compact('scores'));
    }


    // updateDiem

    public function updateDiem(Request $request)
    {
        $message = [];
        $validator = Validator::make($request->all(), [
            'tenmh' => 'required ',
            'diem' => 'required |numeric|min:0 | max:10',
            'lanthi' => 'required| min:1 ',
        ], $message);

        if ($validator->fails()) {
            return redirect('/form-score')->withErrors($validator)->withInput();
        } else {
            $id = $request->input('id');

            $tenmh = $request->input('tenmh');
            $lanthi = $request->input('lanthi');
            $diem = $request->input('diem');

            Db::table('scores')
                ->where('id', $id)
                ->update(['tenmh' => $tenmh, 'diem' => $diem, 'lanthi' => $lanthi]);

            return view('admin/page/EditScore', ['mess' => 'Cập nhật thành công']);
        }
    }


    public function delete(Request $request, $id)
    {
        DB::table('scores')
            ->where('id', '=', $id)
            ->delete();

        return redirect('/admin/dashboard');
    }


    // showAllUser
    public function showAllUser(Request $request)
    {
        $users = DB::table('users')->get();
        // dd($users);

        return view('admin/page/ListUser', compact('users'));
    }


    // resetPassword
    public function resetPassword(Request $request, $id)
    {
        // dd($id);
        $password = md5('abcd1234');

        Db::table('users')
            ->where('id', $id)
            ->update(['password' => $password]);

        return redirect('/admin/list-user');
    }

    // deleteUser
    public function deleteUser(Request $request, $id)
    {
        DB::table('users')
            ->where('id', '=', $id)
            ->delete();

        return redirect('/admin/list-user');
    }



    public function insertClass(Request $request)
    {
        // Get All Value from Form
        // dd($request->all());

        $message = [];
        $validator = Validator::make($request->all(), [
            'malop' => 'required | size:7| unique:class, "malop"',
            'tenlop' => 'required | max:100',
        ], $message);

        if ($validator->fails()) {
            return redirect('/form-class')->withErrors($validator)->withInput();
        } else {
            $malop = $request->input('malop');
            $tenlop = $request->input('tenlop');

            DB::insert('insert into class(malop, tenlop)
            values (?,?)', [$malop,$tenlop]);
            return view('admin/page/FormClass', ['mess' => 'OK']);
        }
    }
}
