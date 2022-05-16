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
  <div class="form-inline">
    <label for="keyword">검색어:</label>
    <input type="text" class="form-control" id="keyword" placeholder="검색어를 입력" name="keyword">
    <button type="submit" id="submit" class="btn btn-primary">검색</button>
</div>
<br><br>
<table class="table table-hover">
  <thead>
        <tr>
          <th>검색어</th>
          <th>검색횟수</th>
        </tr>
  </thead>
  <tbody>

  </tbody>
</table>

</div>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>	 
	$(document).ready(function(){  
		$("#submit").click(function(){ 
				if($("#keyword").val().length == 0) { 
          alert("검색어를 입력하세요."); 
          $("#keyword").focus(); 
          return false; 
        } 
        $.post("action_page.php",
        {
          keyword: $("#keyword").val()
        },
        function(data,status){
          //alert("Data: " + data + "\nStatus: " + status);
          // console.log(data[0]["keyword"]);
          var html = "";
          $.each(data, function(i, field){
            // console.log(field["keyword"]);
            html += "<tr><td>" + field["keyword"] + "</td><td>" + field["cnt"] + "</td></tr>";
            // $("div").append(field + " ");
          });
          $("tbody").html(html);
        });
			});		 
	}); 
	</script> 
</html>
