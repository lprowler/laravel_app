<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo e(mix('css/app.css')); ?>">
    <title><?php echo $__env->yieldContent('title','weibo app'); ?> - Laravel 新手入门教程</title>
</head>
<body>
<?php echo $__env->make('layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<div class="container">
    <div class="offset-md-1 col-md-10">
        <?php echo $__env->make('shared._message', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layouts._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    </div>

</div>
<script src="<?php echo e(mix('js/app.js')); ?>"></script>
</body>
</html>
<?php /**PATH C:\phpstudy_pro\WWW\laravel.cn\resources\views/layouts/default.blade.php ENDPATH**/ ?>