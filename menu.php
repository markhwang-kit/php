<?php
session_start();
?>
<nav class="navbar navbar-expand-sm bg-light">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="/controller.php?mode=main">메인</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/controller.php?mode=hello">헬로월드</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/controller.php?mode=search">검색</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="/controller.php?mode=slist">검색리스트</a>
    </li>
    <li class="nav-item">
      <?php 
        if(!isset($_SESSION['userid'])) {
          echo '<a class="nav-link" href="/controller.php?mode=login">로그인</a>';            
        } else {
          echo '<a class="nav-link" href="/controller.php?mode=logout">로그아웃</a>';            
        } 
      
      ?>
    </li>
  </ul>
</nav>