<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Simple Image Gallery</title>
<style type="text/css">
    .img-box{
        display: inline-block;
        text-align: center;
        margin: 0 15px;
    }
</style>
</head>
<body>
    <?php
    // Array containing sample image file names
    $a = array("1.pdf", "hopdong_1101994529.pdf");
    
    // Loop through array to create image gallery
    foreach($a as $a){
        echo '<div class="img-box">';
            echo '<p><a href="test3.php?file=' . urlencode($a) . '">'.$a.'  </a></p>';
        echo '</div>';
    }
    ?>

</body>
</html>