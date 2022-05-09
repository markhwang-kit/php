<!DOCTYPE html>
<html lang="en">
<head>
  <title>검색 페이지</title>
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

<div class="container-fluid">
  <h3>검색하기</h3>
  <form class="form-inline" action="/action_page.php" method="post">
    <label for="keyword">검색어:</label>
    <input type="text" class="form-control" id="keyword" placeholder="검색어를 입력" name="keyword">
    <button type="submit" id="submit" class="btn btn-primary">검색</button>
  </form>
</div>

</body>
<script>	 
	$(document).ready(function(){  
		$("#submit").click(function(){ 
				if($("#keyword").val().length == 0) { 
          alert("검색어를 입력하세요."); 
          $("#keyword").focus(); 
          return false; 
        } 
			});		 
	}); 
	</script> 
</html>
