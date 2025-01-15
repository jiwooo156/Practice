<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/status.css">
    <title>Status</title>
</head>
<body>
    <!-- 상태바 전체 영역 -->
    <div class="status_container">
        <!-- 상태바 헤더 로고 -->
        <b class="status_header">Status</b>
        <br>
        <br>
        <!-- 상태바 in-progress 버튼 -->
        <p class="status_inprogress"></p><a class="status_btn status_btn_chk" href="todolist/src/in-progress.php">in-progress</a>
        <br>
        <!-- 상태바 complete 버튼 -->
        <p class="status_complete"></p><a class="status_btn" href="todolist/src/complete.php">complete</a>
    </div>
</body>
</html>