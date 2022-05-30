<?php
session_start();
?>
<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/">메인</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/hello.php">헬로월드</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/search.php">검색</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/slist.php">검색리스트</a>
    </li>
    <li class="nav-item">
      <?php 
        if(!isset($_SESSION['userid'])) {
          echo '<a class="nav-link" href="/login.php">로그인</a>';            
        } else {
          echo '<a class="nav-link" href="/logout.php">로그아웃</a>';            
        } 
      
      ?>
    </li>
  </ul>
</nav>