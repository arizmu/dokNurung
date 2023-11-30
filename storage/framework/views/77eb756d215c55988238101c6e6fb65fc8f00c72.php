<?php if (isset($component)) { $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Guest::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Guest::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

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

    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Edukasi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Edukasi</li>
                </ol>
            </nav>
        </div>
    </div>


    <div class="container-xxl py-5">
        <div class="container">

            <div class="row">
                <div class="col-md-9">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                        <h1 class="mb-3">More Edukasi</h1>
                        <p>

                        </p>
                    </div>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="card mb-3 card-shadow">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class=""
                                            src="<?php echo e($item->images ? $item->images : 'https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-01.jpg'); ?>"
                                            alt="" width="100%" height="100%">
                                    </div>

                                    <div class="col-md-8">
                                        <div class="item-content">
                                            <div style="font-size: 9pt">
                                                <span><?php echo e(Carbon\Carbon::parse($item->created_at)->format('d-m-Y') . '- Post By : admin'); ?></span>
                                            </div>
                                            <a class="d-block item-title mb-2"
                                                href="<?php echo e(route('public.detail.edukasi', $item->title)); ?>">
                                                <?php echo e($item->title); ?>

                                            </a>
                                            <a class="bg-primary text-white rounded-pill py-2 px-3 item-bottom"
                                                href="<?php echo e(route('public.detail.edukasi', $item->title)); ?>">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div class="col-md-3">

                </div>
            </div>
        </div>
    </div>

    <?php echo $__env->make('layouts.main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b)): ?>
<?php $component = $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b; ?>
<?php unset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/pages/edukasi/data.blade.php ENDPATH**/ ?>