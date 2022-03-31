@extends('/Template/adminTemp')
@section('dashboard')

    <link rel="stylesheet" href="/css/diem.css">

    <style>
        .sv {
            font-weight: bolder;
            color: rgb(206, 50, 50)
        }

        .sv.name {
            text-transform: uppercase
        }

    </style>

    {{-- Kết quả học tập --}}
    <div class="container">
        <div class="row">
            <h4 class="d-flex justify-content-center mb-5 mt-4">Kết Quả học tập của sinh viên</h4>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        {{-- 'tenmh','sotc','lanthi','diem','students.tensv','.students.lop','students.tenkhoa' --}}
                        <th scope="col">#</th>
                        <th scope="col">Tên sinh viên</th>
                        <th scope="col">Mã số sinh viên</th>
                        <th scope="col">Tên môn học</th>
                        <th scope="col">Điểm</th>
                        <th scope="col">Số tín chỉ</th>
                        <th scope="col">lần thi</th>
                        <th scope="col">Lớp</th>
                        <th scope="col">Khoa</th>
                        <th scope="col" colspan="2">Hành động</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $pos = 0; ?>

                    @foreach ($scores as $row)
                        <tr>

                            {{-- <td>{{ $row->id}}</td> --}}
                            <td>{{ ++$pos }}</td>
                            <td class="sv name">{{ $row->tensv }}</td>
                            <td class="sv name">{{ $row->masv }}</td>
                            <td>{{ $row->tenmh }}</td>
                            <td>{{ $row->diem }}</td>
                            <td>{{ $row->sotc }}</td>
                            <td>{{ $row->lanthi }}</td>
                            <td>{{ $row->lop }}</td>
                            <td>{{ $row->tenkhoa }}</td>
                            <td>
                                <a href="/admin/edit/{{ $row->id }}" class="btn btn-primary">Sửa</a>
                            </td>
                            <td>
                                {{-- href="/admin/delete" --}}
                                <a class="btn btn-danger" onclick="return confirm('Are you sure?')"
                                    href="{{ route('scores-delete', $row->id) }}">
                                    <i class="fa fa-trash"></i>
                                    Xoá
                                </a>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    @endsection
