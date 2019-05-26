<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>게시판</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <header style="width:600px; height:100px; margin: 0 auto;">
    
    <div class="form-group" style="float: right; padding-top:50px;">
      <button type="button" class="btn btn-info" style="height:40px;"><p><?= $_SESSION['user']->name ?> 님</p></button>
      <button type="button" class="btn btn-danger" onclick="location.href='index.php'">로그아웃</button>
    </div>

  </header>
  <h1 style="text-align: center; margin:60px 300px 0 0; font-weight:bold">자유게시판</h1>
  <div class="wrapper" style="width: 600px; margin: 0 auto; margin-top: 30px;">
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">번호</th>
          <th scope="col">제목</th>
          <th scope="col" style="text-align:center">글쓴이</th>
        </tr>
      </thead>
      <tbody>

        <?php
        require("db.php");
        $sql = "SELECT * FROM board_php";
        $q = $con->prepare($sql);
        $q->execute();

        $list = $q->fetchAll(PDO::FETCH_OBJ);

        foreach ($list as $board) {
          echo "<tr>";
          echo "<td>$board->no </td>";
          echo "<td><a href='getboard.php?id=$board->no' style='text-decoration:none; color: #000;'> $board->title </a></td>";
          echo "<td style='text-align:center'>$board->writer</td>";
          echo "</tr>";
        }
        ?>
      </tbody>
    </table>
    <div class="form-group" style="float: right;">
      <button type="button" class="btn btn-primary" onclick="location.href='insertboard.php'">글작성</button>
    </div>
  </div>
</body>

</html>