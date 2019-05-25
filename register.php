<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="/css/style.css">
  <title>회원가입</title>
</head>

<body>
<header class="wrapper">
        <h1>자유게시판</h1>
    </header>
  <div class="wrapper" style="width: 500px; margin: 0 auto; margin-top: 100px;">
    <div class="content">
      <h2>회원가입</h2>
      <form action="register_ok.php" method="post">

        <div class="form-group">
          <label for="id">아이디</label>
          <input type="text" class="form-control" name="id" placeholder="아이디를 입력하세요" style="width: 300px;">
        </div>

        <div class="form-group">
          <label for="name">이름</label>
          <input type="text" class="form-control" name="name" placeholder="이름" style="width: 300px;">
        </div>

        <div class="form-group">
          <label for="pwd">비밀번호</label>
          <input type="password" class="form-control" name="pwd" placeholder="비밀번호" style="width: 300px;">
        </div>

        <button type="submit" class="btn btn-primary" style="margin-left: 215px;">회원가입</button>
        <button type="button" class="btn btn-danger" onclick="location.href='index.php'" >뒤로가기</button>
      </form>
    </div>
  </div>
</body>

</html>