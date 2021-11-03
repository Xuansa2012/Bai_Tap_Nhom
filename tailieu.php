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
    $images = array("kites.jpg", "balloons.jpg");
    
    // Loop through array to create image gallery
    foreach($images as $image){
        echo '<div class="img-box">';
            echo '<div ><img src="/examples/images/' . $image . '" width="200" alt="' .  pathinfo($image, PATHINFO_FILENAME) .'"></div>';
            echo '<p><a href="/examples/php/download.php?file=' . urlencode($image) . '">Download</a></p>';
        echo '</div>';
    }
    ?>
</body>
</html>