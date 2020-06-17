<?php include('../database/dischi.php');
// var_dump($dischi);
?>
<?php var_dump($dischi['poster']); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php foreach ($dischi as $disco) { ?>
        <div class="cd">
                    <img src="<?php echo $dischi['poster']; ?>" alt="">
                    <h3><?php  ?></h3>
                    <span class="author"><?php  ?></span>
                    <span class="year"><?php  ?></span>
                    <span class="genre"><?php  ?></span>
        </div>
    <?php } ?>
    </body>
</html>
