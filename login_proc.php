
<?php 
require 'db.php';
session_start();
$id = "admin";
$pw = "1234";
// 이름
// 전화번호
// 주소
// ...

$userid = $_POST["userid"];
$userpw = $_POST["userpw"];
echo $userid."<br>";
echo $userpw."<br>";
if ($id == $userid && $pw == $userpw) {
    echo "로그인 성공";
    $_SESSION['userid'] = $id;
    $_SESSION['username'] = "관리자";
    header("location: /");
} else {
    echo "로그인 실패";
    header("location: /login.php");
}
// $ret = delete_keyword($seq);
// echo $ret;

?>