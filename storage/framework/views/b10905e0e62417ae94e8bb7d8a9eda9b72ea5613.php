<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5 py-lg-0">

    <!-- logo Start -->
    <a href="/" class="navbar-brand">

        <h1 class="m-0 text-primary">
            <img src="<?php echo e(asset('svg/tooth-fairy.png')); ?>" alt="gigiku sehat" width="70pt">
            Gigiku sehat
        </h1>
    </a>

    <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!-- logo End -->

    <!-- Navbar Start -->
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav mx-auto">
            <a href="<?php echo e(route('home')); ?>"
                class="nav-item nav-link <?php echo e(request()->routeIs('home') ? 'active' : ''); ?>">Home</a>
            <a href="<?php echo e(route('artikel')); ?>"
                class="nav-item nav-link <?php echo e(request()->routeIs('artikel') ? 'active' : ''); ?>">Artikel</a>
            <a href="<?php echo e(route('public.index.edukasi')); ?>"
                class="nav-item nav-link <?php echo e(request()->routeIs('public.index.edukasi') ? 'active' : ''); ?>">Edukasi</a>
            <a href="<?php echo e(route('penilaian.views')); ?>" class="nav-item nav-link">Penilaian</a>
            <a href="<?php echo e(route('about')); ?>"
                class="nav-item nav-link <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">Tentang</a>
            <a href="<?php echo e(route('contact')); ?>"
                class="nav-item nav-link <?php echo e(request()->routeIs('contact') ? 'active' : ''); ?>">Kontak</a>
        </div>
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary rounded-pill px-3 d-lg-block">Home</a>
        <?php else: ?>
            <a href="<?php echo e(route('login')); ?>" class="btn btn-primary rounded-pill px-3 d-lg-block">Log In
                <i class="fa fa-arrow-right ms-3"></i>
            </a>
        <?php endif; ?>

    </div>

</nav>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/layouts/main/header.blade.php ENDPATH**/ ?>