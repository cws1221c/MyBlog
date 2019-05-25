<?php


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>게시판</title>
    <link rel="stylesheet" href="/css/style.css">
    
</head>

<body>
    <header class="wrapper">
        <h1>자유게시판</h1>
    </header>
    <div class="wrapper" style="width: 500px; margin: 0 auto; margin-top: 100px;">
        <div class="content">
            <h2>로그인</h2>
            <form action="login_ok.php" method="post">
                <div>
                    <label for="id">아이디</label>
                    <input type="text" name="id" placeholder="아이디를 입력하세요" style="width: 300px;">
                </div>
                <div>
                    <label for="pwd">비밀번호</label>
                    <input type="password" name="pwd" placeholder="비밀번호" style="width: 300px;">
                </div>
                <button type="submit" style="margin-left: 232px;">로그인</button>
                <button type="button" onclick="location.href='register.php'" >회원가입</button>
            </form>
        </div>
    </div>
</body>

</html>