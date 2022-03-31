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

        .fa-passwd-reset>.fa-lock,
        .fa-passwd-reset>.fa-key {
            font-size: 0.85rem;
        }

    </style>

    {{-- Kết quả học tập --}}
    <div class="container">
        <div class="user">
            <h4 class="d-flex justify-content-center mb-5 mt-4">Danh sách User</h4>
        </div>
        <div class="user">
            <table class="table table-striped">
                <thead>
                    <tr>
                        {{-- 'tenmh','sotc','lanthi','diem','students.tensv','.students.lop','students.tenkhoa' --}}
                        <th scope="col">#</th>
                        <th scope="col">User Name</th>
                        <th scope="col">email</th>
                        <th scope="col" colspan="2">Hành động</th>
                    </tr>
                </thead>
                <tbody>

                    <?php $pos = 0; ?>
                    @if (count($users) > 0)
                        @foreach ($users as $user)
                            <tr>

                                {{-- <td>{{ $user->id}}</td> --}}
                                <td>{{ ++$pos }}</td>
                                <td class="sv name">{{ $user->name }}</td>
                                <td class="sv name">{{ $user->email }}</td>
                                <td>
                                    <a href="/admin/reset-pass/{{ $user->id }}" class="btn btn-primary">
                                        <span class="fa-passwd-reset fa-stack">
                                            <i class="fa fa-undo fa-stack-2x"></i>
                                            <i class="fa fa-lock fa-stack-1x"></i>
                                        </span>
                                        Reset pass
                                    </a>
                                </td>
                                <td>
                                    {{-- href="/admin/delete" --}}
                                    <a class="btn btn-danger" onclick="return confirm('Bạn chắc chắn muốn xoá user? Hành động này không thể khôi phục!!')"
                                        href="{{ route('user-delete', $user->id) }}">
                                        <i class="fa fa-trash"></i>
                                    </a>

                                </td>
                            </tr>
                        @endforeach
                    @else
                    @endif
                </tbody>
            </table>
        </div>
    </div>

@endsection
