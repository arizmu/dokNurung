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
            <a href="<?php echo e(route('penilaian.views')); ?>" class="nav-item nav-link">
                Kuis</a>
            <a href="<?php echo e(route('about')); ?>"
                class="nav-item nav-link <?php echo e(request()->routeIs('about') ? 'active' : ''); ?>">Tentang</a>
            <a href="<?php echo e(route('games')); ?>"
                class="nav-item nav-link <?php echo e(request()->routeIs('games') ? 'active' : ''); ?>">Games</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Bahasa</a>
                <div class="dropdown-menu rounded-0 rounded-bottom border-0 shadow-sm m-0">
                    <div class="dropdown-item">
                        <div id="google_translate_element" class="mt-2"></div>
                    </div>
                </div>
            </div>
            <a href="<?php echo e(route('siswa.register')); ?>"
                class="nav-item nav-link <?php echo e(request()->routeIs('siswa.register') ? 'active' : ''); ?>">Register Siswa</a>
        </div>
        <?php if(auth()->guard()->check()): ?>
            <a href="<?php echo e(route('dashboard')); ?>" class="btn btn-primary rounded-pill px-3 d-lg-block">Home</a>
        <?php else: ?>
            
            
            </a>
        <?php endif; ?>

    </div>

</nav>
<?php /**PATH C:\laragon\www\doknurung\resources\views/layouts/main/header.blade.php ENDPATH**/ ?>