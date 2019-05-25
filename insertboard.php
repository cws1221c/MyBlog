<!-- 게시물 작성 -->
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>글작성</title>
  <link rel="stylesheet" href="/css/style.css">
  <style>
        form {
            position: relative;
        }
        button {
            position: absolute;
            bottom:150px;
        }
    </style>
</head>

<body>
<header class="wrapper">
        <h1>자유게시판</h1>
  </header>
  <div class="wrapper" style="width: 500px; margin: 0 auto; margin-top: 100px;">
    <div class="content">
      <h2>글쓰기</h2>
      <form action="insertboard_ok.php" method="POST">
        <div>
          <label>제목</label>
          <input type="text" name="title" placeholder="제목을 입력하세요"  style="width: 300px;">
        </div>
        <div >
          <label>내용</label>
          <textarea name="content" rows="3" placeholder="내용을 입력하세요"  style="width: 300px;"></textarea>
        </div>
        <button type="submit" class="btn btn-primary" style="margin-left: 60px;">글쓰기</button>
        <a href="getboardlist.php"><button type="button" >뒤로가기</button></a>
      </form>
    </div>
  </div>

</body>

</html>