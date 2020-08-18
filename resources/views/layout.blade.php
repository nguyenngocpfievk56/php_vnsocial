<!doctype html>
<html lang="en">
  <head>
    <title>VnSocial</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/custom.css">

    @yield('css-field')

  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">
            <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="" loading="lazy">
            VnSocial
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="/login" tabindex="-1">Đăng nhập</a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Trang cá nhân</a>
                        <a class="dropdown-item" href="#">Thông báo</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Đăng xuất</a>
                        </div>
                    </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link" href="/news" tabindex="-1">Tin tức</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">Bài đăng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1">Hỏi đáp</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Nhập từ khoá" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm</button>
            </form>
        </div>
    </nav>

    <div class="container main-container">
        @yield('content')
    </div>

    <div class="main-footer">
        &copy; 2020 - VN Social
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="/js/jquery-3.5.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>

    @yield('js-field')
  </body>
</html>