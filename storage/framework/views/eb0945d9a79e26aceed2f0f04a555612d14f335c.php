<!-- Footer Start -->
<div class="container-fluid bg-dark text-white-50 footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Gigiku Sehat</h3>
                <img src="<?php echo e(asset('svg/clean-tooth.png')); ?>" alt="" width="150pt">
            </div>
            <div class="col-lg-3 col-md-6">
                <h3 class="text-white mb-4">Quick Links</h3>

                <a class="btn btn-link text-white-50" href="/">Home</a>
                <a class="btn btn-link text-white-50" href="/artikel">Artikel</a>
                <a class="btn btn-link text-white-50" href="/edukasi/list">Edukasi</a>
                <a class="btn btn-link text-white-50" href="/penilaian/views">Kuis</a>
                <a class="btn btn-link text-white-50" href="/about">Tentang</a>
                <a class="btn btn-link text-white-50" href="/auth/login">Login</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h3 class="text-white mb-4">Get In Touch</h3>
                <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>
                    <?php echo e($website['alamat']); ?>

                </p>
                <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>
                    <?php echo e($website['telpon']); ?>

                </p>
                <p class="mb-2"><i class="fa fa-envelope me-3"></i>
                    <?php echo e($website['email']); ?>

                </p>

            </div>
            <div class="col-lg-2 col-md-6">

                <h3 class="text-white mb-4">Whatsapp</h3>
                
                <a href="https://api.whatsapp.com/send?phone=089515193911">
                    <img src="https://www.svgrepo.com/show/177139/whatsapp-social-media.svg" alt=""
                        width="100pt">

                </a>
                
                
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a class="border-bottom" href="#">Gigiku Sehat</a>, All Right Reserved.
                </div>

            </div>
        </div>
    </div>
</div>
<!-- Footer End -->
<?php /**PATH C:\laragon\www\doknurung\resources\views/layouts/main/footer.blade.php ENDPATH**/ ?>