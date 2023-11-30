<?php $__env->startPush('css'); ?>
    <style>
        .img {
            width: 100%;
            height: 470pt;
        }

        .gokil {
            margin-top: 180pt;
            /* background-color: darkblue; */
        }

        .ok {
            color: orange;
            text-shadow: 5px 5px 10px black;
            font-size: 42pt !important;
        }

        .text-carousel {
            text-shadow: 7px 7px 20px black;
        }
    </style>
<?php $__env->stopPush(); ?>
<div>
    <div class="container-fluid p-0 mb-5">
        <div class="owl-carousel header-carousel position-relative">
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid img" src="<?php echo e(asset('svg/2.png')); ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .2);">
                    <div class="container gokil">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown ok">
                                    Selamat Datang diwebsite Gigiku Sehat !!
                                </h1>
                                <p class="fs-4 fw-medium text-primary mb-4 pb-2 ml-2 text-carousel">
                                    dfddfdf
                                </p>
                                <a href="/edukasi/list"
                                    class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">
                                    Ayoo Belajar !
                                </a>
                                <a href="/penilaian/views"
                                    class="btn btn-success rounded-pill py-sm-3 px-sm-5 animated slideInRight">
                                    Buka Test Online
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="owl-carousel-item position-relative">
                <img class="img-fluid img" src="<?php echo e(asset('svg/6.webp')); ?>" alt="">
                <div class="position-absolute top-0 start-0 w-100 h-100 d-flex align-items-center"
                    style="background: rgba(0, 0, 0, .2);">
                    <div class="container">
                        <div class="row justify-content-start">
                            <div class="col-10 col-lg-8">
                                <h1 class="display-2 text-white animated slideInDown ok">
                                    Selamat Datang diwebsite Gigiku Sehat !!
                                </h1>
                                <p class="fs-4 fw-medium text-primary mb-4 pb-2 ml-2 text-carousel">
                                    
                                </p>
                                <a href="/edukasi/list"
                                    class="btn btn-primary rounded-pill py-sm-3 px-sm-5 me-3 animated slideInLeft">
                                    Ayoo Belajar !
                                </a>
                                <a href="/penilaian/views"
                                    class="btn btn-success rounded-pill py-sm-3 px-sm-5 animated slideInRight">
                                    Buka Test Online
                                </a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/index/carousel.blade.php ENDPATH**/ ?>