<!DOCTYPE html>
<html lang="ko">

<?php require("head.php"); ?>

<body>
    <h1 style="text-align: center; margin-top: 100px;">회원가입</h1>

    <form action="register_ok.php" method="post" style="width: 500px; margin: 0 auto; margin-top: 200px;">
        <div class="form-group">
            <label for="exampleInputEmail1">아이디</label>
            <input type="text" class="form-control" name="id" placeholder="아이디를 입력하세요.">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">이름</label>
            <input type="text" class="form-control" name="name" placeholder="이름을 입력하세요.">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">비밀번호</label>
            <input type="password" class="form-control" name="password" placeholder="비밀번호를 입력하세요.">
        </div>
        <button type="submit" class="btn btn-primary" style="float: right;">회원가입</button>
    </form>
</body>

</html>