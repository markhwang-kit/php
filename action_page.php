당신이 입력한 검색어: 
<?php echo $keyword. "<br>"; ?>
<?php 
require 'db.php';
$keyword = $_POST["keyword"];
insert_keyword($keyword);
echo "지금까지 입력된 검색어<br>";
select_keyword();
?>
