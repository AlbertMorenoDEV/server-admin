<?php
include "../vendor/autoload.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Server Admin</title>

        <link href="bower/gentelella/build/css/custom.min.css" rel="stylesheet">
    </head>
    <body>
        <?php $disk = new \ServerInfo\Disk(); ?>
        <h1><?=$disk->freeSpace();?> of <?=$disk->totalSpace();?></h1>

        <script src="bower/gentelella/build/js/custom.min.js"></script>
    </body>
</html>