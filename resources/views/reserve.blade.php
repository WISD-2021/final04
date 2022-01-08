<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>線上預約</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
</head>
<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" style="color:black" href="http://localhost:8000/">首頁</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" style="color:black" href="{{ route('item') }}">菜單</a></li>
                <li class="nav-item"><a class="nav-link" style="color:black" href="{{ route('reserve') }}">線上預約</a></li>
                <li class="nav-item"><a class="nav-link" style="color:black" href="{{ route('user.logout') }}">登出</a></li>
                <li class="nav-item"><a class="nav-link" style="color:black" href="{{ route('register') }}">註冊</a></li>
                </ul>
            </div>
        </div>
    </nav>
            <!-- Page Header-->
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                    </div>
                </div>
            </div>
        </div>
    </header>

	<form action="/reserve" method="POST" class="form-horizontal">
        {{ csrf_field() }}

        <!-- 訂位名稱 -->
        <br><br>
            <div class="form-group">
                <label for="reserve-name" class="col-sm-3 control-label">姓名</label>

                <div class="col-sm-6">
                    <input type="text" name="name" id="reserve-name" value="" class="form-control">
                </div>
            </div>

            <div class="form-group">
                <label for="reserve-people" class="col-sm-3 control-label">人數</label>

                <div class="col-sm-6">
                    <input type="text"  id="people"name="people" class="col-sm-2 control-label" value="" readonly>
                </div>
            </div>
            <br>
            <!-- 確認訂位按鈕-->

            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                        <button type="submit"  class="btn btn-success">
                            <i class="fa fa-plus"></i> 確認訂位
                        </button>
                </div>
            </div>
        </form>
    </div>
<!-- Footer-->
<footer class="border-top">
        <div class="container px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#!">
                                <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                            </a>
                        </li>
                    </ul>
                    <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2021</div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>