<?php $__env->startPush('css'); ?>
    <style>
        .item-title {
            font-size: 15pt;
            font-weight: bold;
            color: black;
        }



        .card-shadow {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }

        @media only screen and (min-width: 540px) {
            .item-bottom {
                position: absolute;
                bottom: 10pt;
            }
        }

        @media only screen and (max-width: 540px) {
            .item-content {
                margin-top: 10pt;
            }

            .item-bottom {
                padding-top: 40pt;
            }
        }
    </style>
<?php $__env->stopPush(); ?>
<div>
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Artikel</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Artikel</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-9">
                    
                    <h1 style="margin-bottom: 20pt; margin-top: -25pt">Artikel</h1>
                    

                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card mb-3 card-shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class=""
                                            src="<?php echo e($item->img ? $item->img : 'https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-01.jpg'); ?>"
                                            alt="" width="100%" height="100%">
                                    </div>

                                    <div class="col-md-8">
                                        <div class="item-content">
                                            <div style="font-size: 9pt">
                                                <span><?php echo e(Carbon\Carbon::parse($item->created_at)->format('d-m-Y') . '- Post By : admin'); ?></span>
                                            </div>
                                            <a class="d-block item-title mb-2"
                                                href="<?php echo e(route('artikel.detail', $item->title)); ?>">
                                                <?php echo e($item->title); ?>

                                            </a>

                                            
                                            <a class="bg-primary text-white rounded-pill py-2 px-3 item-bottom"
                                                href="<?php echo e(route('artikel.detail', $item->slug)); ?>">
                                                Selengkapnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-md-3">
                    <amp-auto-ads type="adsense" data-ad-client="ca-pub-7347238599054742">
                    </amp-auto-ads>
                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('layouts.main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/artikel/public-data.blade.php ENDPATH**/ ?>