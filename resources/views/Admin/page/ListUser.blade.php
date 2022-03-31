@extends('admin/template/adminTemp')
@section('listuser')

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
            <h4 class="d-flex justify-content-center mb-5 mt-4">Danh sách User</h4>
        </div>
        <div class="row">
            <table class="table table-striped">
                <thead>
                    <tr>
                        {{-- 'tenmh','sotc','lanthi','diem','students.tensv','.students.lop','students.tenkhoa' --}}
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col"></th>
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
                  @if (count($scores) >0)
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
                          <a href="/admin/edit/{{ $row->id }}" class="btn btn-primary">
                              <i class="fa fa-pen" style="font-size: 10px;"></i>
                          </a>
                      </td>
                      <td>
                          {{-- href="/admin/delete" --}}
                          <a class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá?')"
                              href="{{ route('scores-delete', $row->id) }}">
                              <i class="fa fa-trash"></i>
                          </a>

                      </td>
                  </tr>
                 @endforeach
                                      
                  @else
                      <tr>
                          <td colspan="10">Không có dữ liệu sinh viên <a href="/form-sv">Thêm ngay</a></td>
                      </tr>
                  @endif
                </tbody>
            </table>
        </div>
    </div>

    @endsection
