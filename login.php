<!DOCTYPE html>
<html lang="en">
<head>
  <title>메인 페이지</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php
include 'menu.php';
?>

<div class="container">
<h2>로그인</h2>
  <form action="/login_proc.php" method='post'>
    <div class="form-group">
      <label for="userid">아이디:</label>
      <input type="text" class="form-control" id="userid" placeholder="아이디입력" name="userid">
    </div>
    <div class="form-group">
      <label for="userpw">비밀번호:</label>
      <input type="password" class="form-control" id="userpw" placeholder="패스워드 입력" name="userpw">
    </div>
    
    <button type="submit" class="btn btn-primary">로그인</button>
  </form>

</div>

</body>
</html>
