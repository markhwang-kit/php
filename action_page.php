<?php 
require 'db.php';
$keyword = $_POST["keyword"];
insert_keyword($keyword);
// echo "지금까지 입력된 검색어<br>";
$dblist = json_keyword();
$jsonlist = json_encode($dblist, JSON_UNESCAPED_UNICODE);   // json포맷으로 변경
// header("location: /slist.php");
// echo urldecode($jsonlist);
header('Content-type: application/json');  // json으로 화면에 출력
echo $jsonlist;
?>
