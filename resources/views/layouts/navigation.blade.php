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
            <ul class="navbar-nav ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" style="color:black" href="{{ route('item') }}">菜單</a></li>
                <li class="nav-item"><a class="nav-link" style="color:black" href="{{ route('reserve') }}">線上預約</a></li>
                <li class="nav-item"><a class="nav-link" style="color:black" href="{{ route('order') }}">訂單</a></li>
                @if(\Illuminate\Support\Facades\Auth::check())
                    @if(Auth::user()->type == '0')
                        <script>alert('管理者登入成功');window.location.href='{{ route('admin.dashboard.index') }}'</script>
                    @else
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ route('user.logout') }}">登出</a></li>
                        </ul>
                        </li>
                    @endif
                @else
                        <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">登入</a></li>
                        @if (Route::has('register'))
                        <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">註冊</a></li>
                        @endif
                @endif
                </ul>
            </div>
        </div>
    </nav>