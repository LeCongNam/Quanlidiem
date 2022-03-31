<!doctype html>
<html lang="en">

<head>
    <title>Xem điểm sinh viên</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/diem.css">
</head>
<style>
    .sv {
        font-weight: bolder;
        color: rgb(206, 50, 50)
    }

    .sv.name {
        text-transform: uppercase
    }

</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>

    {{-- Kết quả học tập --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="d-flex justify-content-center mb-5 mt-4">Kết Quả học tập của sinh viên</h4>
            </div>
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




    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
</body>

</html>
