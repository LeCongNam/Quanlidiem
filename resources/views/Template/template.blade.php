<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
        integrity="sha512-Fo3rlrZj/k7ujTnHg4CGR2D7kSs0v4LLanw2qksYuRlEzO+tcaEPQogQ0KaoGN26/zrn20ImR1DfuLWnOo7aBA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Full Width Pics - Start Bootstrap Template</title>

    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <style>

    </style>
</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><i class="fa fa-home">QLSV</i></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="/">HOME</a></li>
                    <li class="nav-item"><a class="nav-link" href="/">Sinh Viên</a></li>

                    
                </ul>
                
            </div>
            <ul class="navbar-nav  my-2 my-lg-0">
                @guest
                @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                @endif

                @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/admin/dashboard" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
            </ul>
        </div>
    </nav>
    <!-- Header - set the background image for the header in the line below-->
    <a href="/">
      <header class="py-5 bg-image-full"
        style="background-image: url('https://itc.edu.vn/uploads/2/banner/z3283565571300-3ee453fefb40f5f3097e52c25f34af3c.jpg');height:500px">
        <div class="text-center my-5">
        </div>
    </header>
    </a>
    <!-- Content section-->
    <section class="py-5">

        <div class="container my-5">


            {{-- Nội dung chính ở đây --}}
            @yield('home')
            @yield('xemdiem')



        </div>
    </section>


    <div class="container">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>



    <footer id="footer" class="footer bg-overlay mt-5">
        <div class="footer-main">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-lg-4 col-md-6 footer-widget footer-about">
                        <h3 class="widget-title">Liên Hệ</h3>
                        <img loading="lazy" class="footer-logo" src="./Images/images/footer-logo.png" alt="Constra">
                        <p>Địa chỉ: 12 Trịnh Đình Thảo, Hòa Thạnh, Tân Phú, TP.HCM</p>
                        <p>Phone: (028) 39734983 - (028) 38605003</p>
                        <div class="footer-social">
                            <ul>
                                <li><a href="https://www.facebook.com/khoi.phanx" aria-label="Facebook"><i
                                            class="fab fa-facebook-f"></i> Facebook</a></li>
                                <li><a href="https://www.facebook.com/khoi.phanx" aria-label="Twitter"><i
                                            class="fab fa-twitter"></i>Twitter</a>
                                </li>
                                <li><a href="https://www.facebook.com/khoi.phanx" aria-label="Instagram">Instagram<i
                                            class="fab fa-instagram"></i></a></li>
                                <li><a href="https://www.facebook.com/khoi.phanx" aria-label="Github"><i
                                            class="fab fa-github"></i>Github</a></li>
                            </ul>
                        </div><!-- Footer social end -->
                    </div><!-- Col end -->

                    <div class="col-lg-4 col-md-6 footer-widget mt-5 mt-md-0">
                        <h3 class="widget-title">KHOA</h3>
                        <div class="working-hours">
                            We work 7 days a week, every day excluding major holidays. Contact us if you have an
                            emergency, with our
                            Hotline and Contact form.
                            <br><br> Monday - Friday: <span class="text-right">10:00 - 16:00 </span>
                            <br> Saturday: <span class="text-right">12:00 - 15:00</span>
                            <br> Sunday and holidays: <span class="text-right">09:00 - 12:00</span>
                        </div>
                    </div><!-- Col end -->

                    <div class="col-lg-3 col-md-6 mt-5 mt-lg-0 footer-widget">
                        <h3 class="widget-title">PHÒNG BAN</h3>
                        <ul class="list-arrow">
                            <li><a href="service-single.html">Phòng đào tạo</a></li>
                            <li><a href="service-single.html">Phòng kế hoạch tài chính</a></li>
                            <li><a href="service-single.html">Phòng cộng tác sinh viên</a></li>
                            <li><a href="service-single.html">Phòng Khảo thí</a></li>

                        </ul>
                    </div><!-- Col end -->
                </div><!-- Row end -->
            </div><!-- Container end -->
        </div><!-- Footer main end -->




        <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top position-fixed">
            <button class="btn btn-primary" title="Back to Top">
                <i class="fa fa-angle-double-up"></i>
            </button>
        </div>

        </div><!-- Container end -->
        </div><!-- Copyright end -->
    </footer><!-- Footer end -->


    < <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
                integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
        </script>

</body>

</html>
