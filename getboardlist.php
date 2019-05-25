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
  <link rel="stylesheet" href="/css/style.css">
<style>
    table {
      width:500px;
      height:300px;
    }
   
    table > thead > tr{
      width:100%;
      height:30px;
    }th {
      border-bottom : 1px solid #000;
    }
    table > tbody{
      height:250px;
    }
    td {
      padding-left : 40px;
    }
</style>
</head>

<body>
  <header class="wrapper">
        <h1>자유게시판</h1>
  </header>
  <div class="wrapper" style="width: 500px; margin: 0 auto; margin-top: 100px;">
  <table>
    <thead>
      <tr>
        <th scope="col">번호</th>
        <th scope="col">제목</th>
        <th scope="col">글쓴이</th>
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
        echo "<td>$board->writer</td>";
        echo "</tr>";
      }
      ?>
    </tbody>
  </table>
  <a href="insertboard.php"><button type="button">글작성</button></a>
  <a href="logout.php"><button type="button">로그아웃</button></a>
  </div>
</body>

</html>