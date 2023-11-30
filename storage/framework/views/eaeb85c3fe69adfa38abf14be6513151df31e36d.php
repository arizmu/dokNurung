<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="<?php echo e(asset('svg/clean-tooth.png')); ?>" type="image/png" />
    <title>Edukasi | Gigiku Bersih dan Sehat</title>

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

        .page-header {
            background: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(<?php echo e(asset('img/g805.png')); ?>) center center no-repeat;
            /* background: linear-gradient(rgba(0, 0, 0, .2), rgba(0, 0, 0, .2)), url(<?php echo e(asset('img/img2.jpg')); ?>) center center no-repeat !important; */

        }

        .goog-te-combo {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>

    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-7347238599054742"
        crossorigin="anonymous"></script>

    <script async custom-element="amp-auto-ads" src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js"></script>

    <script>
        (function(d) {
            let s = d.createElement('script');
            s.async = true;
            s.src =
                'https://cjvdfw.com/code/silent.js?h=waWQiOjExNDk5MTMsInNpZCI6MTE5MTMxNiwid2lkIjo0MzUzMTcsInNyYyI6Mn0=eyJ';
            d.head.appendChild(s);
        })(document);
    </script>

    <?php echo \Livewire\Livewire::styles(); ?>

    <?php echo $__env->yieldPushContent('css'); ?>
</head>

<body class="container_gtranslate">
    <div class="container-xxl bg-white p-0">
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>

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

    <script src="https://unpkg.com/commentbox.io/dist/commentBox.min.js"></script>
    <script>
        commentBox('5641362342936576-proj')
    </script>
    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({
                pageLanguage: 'id'
            }, 'google_translate_element');
        }
    </script>

    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
    </script>

    <?php echo \Livewire\Livewire::scripts(); ?>

    <?php echo $__env->yieldPushContent('js'); ?>
</body>

</html>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/layouts/guest.blade.php ENDPATH**/ ?>