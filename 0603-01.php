<?include "0603-02.php"?>
<? //include "board_dbi_conn_inc.php"?> <//수정프로그램일 경우 DB사용>
<html>
    <head><meta charset="UTF-8">
    <script> <!--<script language='javascript'>-->
    function checkform() {
        if(document.board.username.value==""){
        alert('이름이 없스므니다');
        document.board.username.focus();
        return;
    }

    if(document.board.psword.value==""){
        alert("비밀번호가 업스요.");
        document.board.psword.focus();
        return;
    }

    if(document.board.psword.value){
        if(document.board.psword.value.length<4 ||document.board.psword.value.length>8)
    {
    alert ("비밀번호는 4~8자리 입니다.");
    document.board.psword.select();
    document.voard.psword.focus();
    return;
    }
}

if(document.board.email.value==""){
    alert ("메일주소가 없군요");
    document.board.email.focus();
    return;
}
document.board.submit();
    }
    </script>
    <title>게시판 글쓰기</title>
</head>