<?php
include_once "../Data/blog.php";
include_once "../Function/timeago.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../Css/style.css"/>
</head>
<body>
<h1 style="text-align: center">BLOG ĐƯỢC ĐĂNG BỞI ADMIN TỪ ĐẦU THÁNG 6 ĐẾN 09-06-2021</h1>
<section class="portfolio">
    <ul class="galerry clearfix">
        <?php for ($i=0; $i<count($blogs); $i++):?>
            <?php if(strtotime($blogs[$i]['creat_time']) >= strtotime('2021-06-01') && strtotime($blogs[$i]['creat_time']) <= strtotime('2021-06-09') && $blogs[$i]['author'] === 'admin'): ?>
            <li>
                <img src="../Data/image/image<?php echo $i+1?>.jpg" alt="Ảnh bị lỗi" width="250" height="250">
                <p style="font-size: x-large"><b><?php echo $blogs[$i]['name']?></b></p>
                <p>Người viết: <?php echo $blogs[$i]['author'] ?></p>
                <p><?php $time = $blogs[$i]['creat_time'];
                    $time_ago = strtotime($time);
                    echo time_stamp($time_ago)?></p>
                <p><?php echo $blogs[$i]['content']?></p>
            </li>
            <?php endif ?>
        <?php endfor; ?>
    </ul>
</section>
</body>
</html>