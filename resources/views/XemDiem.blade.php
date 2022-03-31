@extends('/Template/template')

@section('xemdiem')

<link rel="stylesheet" href="/css/diem.css">
 
    {{-- Thông tin sinh viên --}}
   

        <div class="row wrap-info">
         
            @foreach ($students as $row)
            <div class="col">
                    <ul>
                        <li>
                            <span>Họ tên sinh viên:</span>
                            <b>{{$row->tensv}}</b>
                        </li>
                        <li>
                            <span>ngày sinh:</span>
                            <b>{{date('d-m-Y', strtotime($row->ngaysinh))}}</b>
                        </li>
                        <li>
                            <span>ngày sinh:</span>
                            <b>{{$row->tenkhoa}}</b>
                        </li>
                        <li>
                            <span>Nơi Sinh:</span>
                            <b>{{$row->noisinh}}</b>
                        </li>
                        <li>
                            <span>Lớp: </span>
                            <b>{{$row->lop}}</b>
                        </li>
                        @endforeach
                    </ul>
                </div>
              
                <div class="col">
                    <ul>
                      <li>
                          <span>Hình ảnh sinh viên</span>
                      </li>
                        <li>
                           <img src="{{$row->hinhsv}}" alt="{{$row->tensv}}" class="imgsv">
                        </li>
                       
                       
                    </ul>
                </div>
               
        </div>
    </div>


    {{-- Kết quả học tập --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="d-flex justify-content-center mb-2">Kết quả học tập</h4>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped border-table" id="scores-table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tên môn học</th>
                        <th scope="col">Điểm</th>
                        <th scope="col">Số tín chỉ</th>
                        <th scope="col">lần thi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $pos=0 ?>

                    @foreach ($scores as $row)
                        
                    <tr>
                      
                        <td>{{ ++$pos }}</td>
                        <td>{{ $row->tenmh }}</td>
                        <td>{{ $row->diem }}</td>
                        <td>{{ $row->sotc }}</td>
                        <td>{{ $row->lanthi }}</td>
                        
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
 
  
@endsection