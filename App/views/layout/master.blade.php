<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @if( isset($_SESSION['flash_msg']))
    <script>
        let msg = "{{$_SESSION['flash_msg']['msg']}}"
    </script>
    @php
    unset ($_SESSION['flash_msg']);
    @endphp
    @endif

    <script src="/js/app.js"></script>
    <title> My Blog</title>
</head>

<div id="toastList">

</div>

<body>
    <section id="main">
        <div class="container">
            <header class="d-flex">
                <div class="title">
                    <img src="imgs/header.jpg" alt="header" height="250">
                    <div class="txt">
                        <h1><a href="/">Welcome to my blog</a></h1>
                        <div class="btnSubmenu">menu</div>
                    </div>
                </div>
            </header>
        </div>
    </section>
    <aside id="submenu">
        <div>
            @if(isset($_SESSION['user']))
            <a href="/logout" style="text-decoration:none; color:#2E9AFE; border-bottom: 1px solid #2E9AFE;">Logout</a>
            <a href="/post" style="text-decoration:none; color:#FE9A2E; border-bottom: 1px solid #FE9A2E;">Posting</a>
            @else
            <a href="/login" style="text-decoration:none; color:#00FF00;border-bottom: 1px solid #00FF00;">Login</a>
            @endif
        </div>
    </aside>
    @yield('maincontent')
    <footer>
        <img src="imgs/bg_footer.jpg" alt="footer">
        <h3 class="tit">
            Thanks for your visiting
        </h3>
        <span class="contact">
            <p>010-9935-8379</p>
            <p>woos2911@naver.com</p> <br>
        </span>
        <span class="copyright">
            COPYRIGHT ⓒ 2019 by CHOI WOOSUK. all rights reserved.
        </span>
    </footer>
</body>

</html>