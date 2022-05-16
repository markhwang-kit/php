<?php
    require 'dbconfig.php';

    // dbconfig.php 파일 내용
    // function dbconn() {
    //     $host = "localhost";
    //     $user = "";
    //     $pw = "";
    //     $dbName = "";
    //     return new mysqli($host, $user, $pw, $dbName);
    // }

    // $keyword = $_GET["keyword"];   // 테스트
    
    function insert_keyword($keyword) {
        
        $conn = dbconn();  // db 연결
        /* DB 연결 확인 */
        // if($conn){ echo "연결성공"."<br>"; }
        // else{ die( '연결실패: ' . mysqli_error($conn) ); }
        
        /* INSERT 예제 */
        $sql = "INSERT INTO `keyword` (`keyword`) VALUES ('$keyword')
        ON DUPLICATE KEY UPDATE cnt = cnt + 1";
        $result = mysqli_query($conn, $sql);
        
        // if($result) { echo "insert success!"; }
        // else { echo "failure"; }

        mysqli_close($conn);
    }

    function select_keyword() {
        $retlist = array();  // 디비에 리스트를 전달
        $conn = dbconn();  // db 연결
        /* DB 연결 확인 */
        // if($conn){ echo "Connection established"."<br>"; }
        // else{ die( 'Could not connect: ' . mysqli_error($conn) ); }
        
        /* SELECT 예제 */
        $sql = "SELECT * FROM keyword";
        $result = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($result);
        while($row = mysqli_fetch_array($result)){
            array_push($retlist, $row['keyword']."/".$row['cnt']);
            // echo $row['keyword']."<br>";
        }
        
        mysqli_close($conn);
        return $retlist;
    }

    function json_keyword() {
        $retlist = array();  // 디비에 리스트를 전달
        $conn = dbconn();  // db 연결
        /* DB 연결 확인 */
        // if($conn){ echo "Connection established"."<br>"; }
        // else{ die( 'Could not connect: ' . mysqli_error($conn) ); }
        
        /* SELECT 예제 */
        $sql = "SELECT * FROM keyword";
        $result = mysqli_query($conn, $sql);
        // $row = mysqli_fetch_array($result);
        while($row = mysqli_fetch_array($result)){
            // array("keyword" => $row['keyword'], "cnt" => $row['cnt']);
            array_push($retlist, array("keyword" => $row['keyword'], "cnt" => $row['cnt']));
            // {"keyword" : "까마귀", "cnt": 2}
            // echo $row['keyword']."<br>";
        }
        
        mysqli_close($conn);
        return $retlist;
    }

    // insert_keyword($keyword);
?>