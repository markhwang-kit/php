<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">메인</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/hello.php">헬로월드</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">머하지?</a>
    </li>
  </ul>
</nav>
<br>

<div class="container-fluid">
  <h3>내 php 사이트</h3>
  <?php
    //echo "Hello World";
    for($i=1; $i<=10; $i=$i+1)
	{
		echo $i."Hello World <br>";
	}
  ?>
  <!-- Hello World<br>
  Hello World<br>
  Hello World<br>
  Hello World<br>
  Hello World -->
</div>

</body>
</html>


