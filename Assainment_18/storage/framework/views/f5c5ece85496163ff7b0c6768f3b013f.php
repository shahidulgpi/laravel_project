<!DOCTYPE html>
<html lang="en" data-bs-theme="light">
<head>
    <title>Md. Shahidul Islam || Assignment-18  </title>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

    <link rel="icon" type="image/x-icon" href="<?php echo e(asset('/favicon.ico')); ?>" />
    <link href="<?php echo e(asset('https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/bootstrap.css')); ?>" rel="stylesheet" />
    <link href="<?php echo e(asset('assets/css/style.css')); ?>" rel="stylesheet" />
    <script src="<?php echo e(asset('assets/js/axios.min.js')); ?>"></script>
</head>

<body class="d-flex flex-column h-100">
    <main class="flex-shrink-0">
        <?php echo $__env->make('components.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <div class="" id="content-div">
            <?php echo $__env->yieldContent('content'); ?>
        </div>
    </main>
    <?php echo $__env->make('components.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>




    <script src="<?php echo e(asset('assets/js/bootstrap.bundle.min.js')); ?>"></script>
    </body>
    </html>
<?php /**PATH F:\Web Development\Project\htdocs\Assainment-18-main\resources\views/app.blade.php ENDPATH**/ ?>