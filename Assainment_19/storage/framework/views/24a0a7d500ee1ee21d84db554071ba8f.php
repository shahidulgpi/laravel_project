<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shahidul Islam's Blog</title>
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <script src="<?php echo e(asset('js/axios.min.js')); ?>"></script>
</head>

<body class="box-border">

    <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="content-div">
        <?php echo $__env->yieldContent('content'); ?>
    </div>
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</body>

</html>
<?php /**PATH F:\Web Development\Project\htdocs\Module_19\Project_Coding\resources\views/app.blade.php ENDPATH**/ ?>