<!DOCTYPE html>
<html lang="en">
<head>
  <title>검색 리스트 페이지</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>

</head>
<body>

<?php
include 'menu.php';
session_start();
if(!isset($_SESSION['userid'])) {
    echo "<script>location.replace('login.php');</script>";            
} else {
    $userid = $_SESSION['userid'];
} 
?>

<div class="container">
  <h3>검색 리스트 쫙~</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>번호</th>
        <th>검색어</th>
        <th>검색횟수</th>
        <th>수정</th>
        <th>삭제</th>
      </tr>
    </thead>
    <tbody>
    <?php
        require 'db.php';
        $retlist = select_keyword();
        foreach($retlist as $key => $value) {
            $sp = explode("/", $value);
            echo "<tr>";
            echo "<td>".$sp[0]."</td><td>".$sp[1]."</td><td>".$sp[2]."</td>";
            echo "<td><button type='button' class='btn btn-primary' onclick='showmodal($sp[0], \"$sp[1]\" )'>수정</button></td>";
            echo "<td><button type='button' class='btn btn-danger' onclick='del($sp[0])'>삭제</button></td>";
            echo "</tr>";
        } 
    ?>
    </tbody>
  </table>

  <!-- The Modal -->
  <div class="modal" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">수정</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
              <label for="seq">번호:</label>
              <input type="text" class="form-control" id="seq" name="seq" readonly>
              <label for="kw">키워드:</label>
              <input type="text" class="form-control" id="kw" name="kw">
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" onclick='modi()'>수정</button>
          <button type="button" class="btn btn-danger" data-dismiss="modal">취소</button>
        </div>
        
      </div>
    </div>
  </div>

</div>
<script>
$(document).ready(function(){
});


// 수정 모달창 띄우기
function showmodal(seq, keyword){
  // alert(seq + " " + keyword);
  $("#seq").val(seq);
  $("#kw").val(keyword);
  $('#myModal').modal('show');
}

// 수정 버튼
function modi(){
  var ret = confirm("수정 할래?");
  if (ret != true) {
    //alert("삭제 되었습니다");
    return;
  }
  // 모달창 텍스트 박스 값 읽기
  var seq = $("#seq").val();
  var keyword = $("#kw").val();
  // 데이터 보내기
  $.post("modikeyword.php",
  {
    seq: seq,
    keyword: keyword
  },
  function(data, tatus){
    if (data == 1) {
      alert("수정 되었습니다.");
    } else {
      alert("수정 실패!!\n관리자에게 문의");
    }
    location.reload();
    // $("div").html(data);
  });
}

function del(seq){
  var ret = confirm("삭제 할래?");
  if (ret != true) {
    //alert("삭제 되었습니다");
    return;
  }
  $.post("delkeyword.php",
  {
    seq: seq
  },
  function(data, tatus){
    if (data == 1) {
      alert("삭제 되었습니다.");
    } else {
      alert("삭제 실패!!\n관리자에게 문의");
    }
    location.reload();
    // $("div").html(data);
  });
}
</script>
</body>
</html>


