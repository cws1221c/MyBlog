<!-- 게시물 보기 -->
<?php
require("db.php");
$id = $_GET['id'];
$sql = "SELECT * FROM board_php WHERE no = ?";
$q = $con->prepare($sql);
$q->execute([$id]);

$board = $q->fetch(PDO::FETCH_OBJ);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $board->title ?></title>
    <link rel="stylesheet" href="/css/style.css">
    <style>
        form {
            position: relative;
        }
        button {
            position: absolute;
            bottom:120px;
        }
    </style>
</head>

<body>
<header class="wrapper">
        <h1>자유게시판</h1>
  </header>
    <div class="wrapper" style="width: 500px; margin: 0 auto; margin-top: 100px;">
        <div class="content">
            <form action="updateboard_ok.php" method="POST">
                <input name="no" type="text" value=<?php echo $board->no ?> readonly style="width: 300px;">
                <br>
                <input name="writer" type="text" value=<?php echo $board->writer ?> readonly style="width: 300px;">
                <br>
                <div>
                    <label>title</label>
                    <input type="text" name="title" value=<?php echo $board->title ?> style="width: 300px;"> 
                </div>
                <div>
                    <label>Content</label>
                    <textarea  name="content" rows="3" style="width: 300px;"><?php echo $board->content ?></textarea >
                </div>
                <a href="getboardlist.php"><button type="button" >뒤로가기</button></a>
                <button type="submit"  style="margin-left: 70px;">수정하기</button>
                <button type="button"  onclick="location.href='deleteboard_ok.php?no=<?php echo $board->no ?>'" style="margin-left: 140px;">삭제하기</button>
            </form>
        </div>
    </div>
</body>
</html>