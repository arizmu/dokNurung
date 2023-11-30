<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>Admini - Naira Dental Care</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- site icon -->
    <link rel="icon" href="<?php echo e(asset('blacklogo.png')); ?>" type="image/png" />
    <!-- bootstrap css -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/bootstrap.min.css')); ?>" />
    <!-- site css -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/style.css')); ?>" />
    <!-- responsive css -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/responsive.css')); ?>" />
    <!-- select bootstrap -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/bootstrap-select.css')); ?>" />
    <!-- scrollbar css -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/perfect-scrollbar.css')); ?>" />
    <!-- custom css -->
    <link rel="stylesheet" href="<?php echo e(asset('admin/css/custom.css')); ?>" />
    
    <script src="<?php echo e(asset('js/app.js')); ?>"></script>
    



    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldPushContent('styles'); ?>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/app.js']); ?>
</head>

<body>
    <div class="full_container">
        <div class="inner_container">
            <!-- Sidebar  -->
            <?php echo $__env->make('layouts.app.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- end sidebar -->

            <!-- right content -->
            <div id="content">
                <!-- topbar -->

                <?php echo $__env->make('layouts.app.topbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            </div>
            <!-- end topbar -->
            <!-- dashboard inner -->
            <div class="midde_cont">
                <div class="container-fluid">
                    <?php echo e($slot); ?>

                </div>
            </div>
        </div>
    </div>
    </div>

    <?php echo \Livewire\Livewire::scripts(); ?>

    <!-- jQuery -->
    <script src="<?php echo e(asset('admin/js/jquery.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/popper.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/bootstrap.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/bootstrap-select.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/js/perfect-scrollbar.min.js')); ?>"></script>
    <script>
        var ps = new PerfectScrollbar('#sidebar');
    </script>
    <!-- custom js -->
    <script src="<?php echo e(asset('admin/js/custom.js')); ?>"></script>

    <?php echo $__env->yieldPushContent('script'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/layouts/app.blade.php ENDPATH**/ ?>