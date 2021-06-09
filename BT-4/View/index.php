<?php
include_once "../Data/blog.php";
include_once "../Code/getData.php";
include_once "../Code/timeago.php"
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="../Css/style.css"/>
</head>
<body>
<h1 style="text-align: center">LATEST FROM BLOG</h1>
<section class="portfolio">
    <ul class="galerry clearfix">
        <?php for ($i=0; $i<count($blogs); $i++):?>
        <li>
            <img src="../Data/image/image<?php echo $i+1?>.jpg" alt="Ảnh bị lỗi" width="250" height="250">
            <p style="font-size: x-large"><b><?php echo $blogs[$i]['name']?></b></p>
            <p>Người viết: <?php echo $blogs[$i]['author'] ?></p>
            <p><?php $time = $blogs[$i]['creat_time'];
                                $time_ago = strtotime($time);
                                echo time_stamp($time_ago)?></p>
            <p><?php echo $blogs[$i]['content']?></p>
        </li>
        <?php endfor; ?>
    </ul>
</section>
</body>
</html>