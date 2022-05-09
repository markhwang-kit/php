<!DOCTYPE html>
<html lang="en">
<head>
  <title>검색 리스트 페이지</title>
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

<div class="container">
  <h3>검색 리스트 쫙~</h3>
  <table class="table table-hover">
    <thead>
      <tr>
        <th>검색어</th>
        <th>검색횟수</th>
      </tr>
    </thead>
    <tbody>
    <?php
        require 'db.php';
        $retlist = select_keyword();
        foreach($retlist as $key => $value) {
            $sp = explode("/", $value);
            echo "<tr><td>".$sp[0]."</td><td>".$sp[1]."</td></tr>";
        } 
    ?>
    </tbody>
  </table>
</div>

</body>
</html>


