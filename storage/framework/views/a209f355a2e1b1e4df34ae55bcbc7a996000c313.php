<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $__env->yieldContent('title'); ?></title>
        <link rel="stylesheet" type="text/css" href="<?php echo e(URL::to('css/style.css')); ?>">
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    </head>
    <body>
        
        <div class="container">
            <?php echo $__env->yieldContent('content'); ?>
        </div>

    <script type="text/javascript" src="<?php echo e(URL::to('js/jquery-3.0.0.min.js')); ?>"></script>
    <script type="text/javascript" src="<?php echo e(URL::to('js/script.js')); ?>"></script>
    <?php echo $__env->yieldPushContent('scripts'); ?>
    </body>
</html>
