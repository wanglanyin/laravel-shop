<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token(), false); ?>">
    <title><?php echo $__env->yieldContent('title', 'Laravel Shop'); ?> - Lany</title>
    <!-- 样式 -->
    <link href="<?php echo e(mix('css/app.css'), false); ?>" rel="stylesheet">
</head>
<body>
<div id="app" class="<?php echo e(route_class(), false); ?>-page">
    <?php echo $__env->make('layouts._header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->make('layouts._footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<!-- JS 脚本 -->
<script src="<?php echo e(mix('js/app.js'), false); ?>"></script>
<?php echo $__env->yieldContent('scriptsAfterJs'); ?>
</body>
</html>
<?php /**PATH /www/wwwroot/laravel.shop/resources/views/layouts/app.blade.php ENDPATH**/ ?>