당신이 입력한 검색어: 
<?php 
require 'db.php';
$keyword = $_POST["keyword"];
insert_keyword($keyword);
echo $keyword; 
?>
