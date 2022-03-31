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

    {{-- Thông tin sinh viên --}}
    <div class="container">
        <div class="row">
            <div class="col">
                <h4 class="d-flex justify-content-center mb-5 mt-4">Thông tin sinh viên</h4>
            </div>
        </div>
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
                <div class="haff"></div>
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
                <h4 class="d-flex justify-content-center mb-5 mt-4">Kết quả học tập</h4>
            </div>
        </div>
        <div class="row">
            <table class="table table-striped">
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
