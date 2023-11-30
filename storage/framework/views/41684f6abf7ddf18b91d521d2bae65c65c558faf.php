<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="<?php echo e(asset('svg/clean-tooth.png')); ?>" type="image/png" />
    <title>Gigiku Sehat</title>

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@600&family=Lobster+Two:wght@700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">


    <!-- Libraries Stylesheet -->
    <link href="<?php echo e(asset('kider/lib/animate/animate.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('kider/lib/owlcarousel/assets/owl.carousel.min.css')); ?>" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo e(asset('kider/css/bootstrap.min.css')); ?>" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo e(asset('kider/css/style.css')); ?>" rel="stylesheet">

    <style>
        .auth {
            font-family: "Fira Sans", sans-serif !important;
        }
    </style>
    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldPushContent('css'); ?>

</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <!-- Navbar Start -->
        <?php echo $__env->make('layouts.main.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- Navbar End -->

        <?php echo e($slot); ?>



        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo e(asset('kider/lib/wow/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('kider/lib/easing/easing.min.js')); ?>"></script>
    <script src="<?php echo e(asset('kider/lib/waypoints/waypoints.min.js')); ?>"></script>
    <script src="<?php echo e(asset('kider/lib/owlcarousel/owl.carousel.min.js')); ?>"></script>

    <!-- Template Javascript -->
    <script src="<?php echo e(asset('kider/js/main.js')); ?>"></script>
    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/layouts/guest.blade.php ENDPATH**/ ?>