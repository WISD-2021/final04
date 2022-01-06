<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>青椒餐廳</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <!-- <link href="css/styles.css" rel="stylesheet" /> -->
    <link rel="stylesheet" href="{{ URL::asset('css/styles.css') }}">
</head>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
        <div class="container px-4 px-lg-5">
            <a class="navbar-brand" href="http://localhost:8000/">首頁</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="{{ route('order') }}">菜單</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">線上預約</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('user.logout') }}">登出</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">註冊</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Page Header-->
    <header class="masthead" style="background-image: url('assets/img/home.jpg')">
        <div class="container position-relative px-4 px-lg-5">
            <div class="row gx-4 gx-lg-5 justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="site-heading">
                        <h1>青椒餐廳</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Main Content-->
    <div class="container px-4 px-lg-5">
        <div class="row gx-4 gx-lg-5 justify-content-center">
            <div class="col-md-10 col-lg-8 col-xl-7">
                <!-- Post preview-->
                <div class="post-preview">
                        <h2 class="post-title">餐廳介紹</h2>
                        <h5 class="post-subtitle">創造出人與人之間互動感受和彼此脈動的氣氛及充滿驚喜的細節<br><br>
                        讓光線與人文創造出舒適的環境。空間內瀰漫濃濃書香氣息，踏入室內讓身心獲得沉澱，在光和綠意伴隨下，讓人沐浴在大自然中，恣意徜徉在書海，不由得忘了時間流逝，打造出久待也不膩的人文空間。
                    </h5>
                </div>
                <!-- Divider-->
                <hr class="my-4" />
            </div>
        </div>
    </div>

            
                <ul class="noneStyle">
                    <li>
                        </div>
                    <div class="icon"></div>
                     <div class="content">
                     <img src="assets/img/stairs.png" alt="" title="" width="40px" height="40px"><span class="tt">所在樓層</span>
                            <span class="txt">3樓</span>
                        </div>
                    </li>
                </ul>
                    <ul class="noneStyle">
                    <li>
                        <div class="icon"></div>
                        <div class="content">
                        <img src="assets/img/cloche.png" alt="" title="" width="40px" height="40px"><span class="tt">菜式</span>
                            <span class="txt">頂級西式料理</span>
                        </div>
                    </li>
                </ul>
                <ul class="noneStyle">
                    <li>
                        <div class="icon">
                            <span class="icon-phone"></span>
                        </div>
                        <div class="content">
                        <img src="assets/img/phone-call.png" alt="" title="" width="40px" height="40px"><span class="tt">電話</span>
                            <span class="txt">04-12345678</a></span>
                        </div>
                    </li>
                </ul>
                <ul class="noneStyle">
                    <li>
                        <div class="icon">
                            <span class="icon-seat"></span>
                        </div>
                        <div class="content">
                        <img src="assets/img/armchair.png" alt="" title="" width="40px" height="40px"><span class="tt">座位數/包廂</span>
                            <span class="txt">30席 / 4個大包廂 / 3個小包廂</span>
                        </div>
                    </li>
                </ul>
                <ul class="noneStyle">
                    <li>
                        <div class="icon">
                            <span class="icon-clock"></span>
                        </div>
                        <div class="content">
                        <img src="assets/img/clock.png" alt="" title="" width="40px" height="40px"><span class="tt">營業時間</span>
                            <span class="txt">午餐:11:30-14:00 / 晚餐:17:30-21:00</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <hr class="my-4" />
        <div class="col flex flex-column justify-content-center align-items-center right">
            <div class="content textCenter textWhite mscrollbar">
                <div class="title f16"><h3>最低消費 / 平均餐價</h3></div>
                <div class="price">
                    <ul class="noneStyle">
                    <li><span>單點/套餐/西式桌菜
                        </span></li>
                        <li><span>**菜單僅供參考,依餐廳現場為主**</span></li>
                    </ul>
                </div>
            </div>
            <div class="links">
                <ul class="noneStyle flex">
                </ul>
            </div>
        </div>
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
