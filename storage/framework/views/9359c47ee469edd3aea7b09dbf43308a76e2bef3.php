<?php $__env->startPush('css'); ?>
    <style>
        .img {
            max-width: auto !important;
            width: auto !important; // assume this is the default size
        }

        .title-edukasi {
            font-family: "Fira Sans", sans-serif !important;
        }

        .title-post {
            font: caption;
            font-size: 9pt;
        }

        .content-edukasi {
            margin-top: 3pt;
        }

        .edu-text img {
            display: block;
            /* margin-left: auto; */
            margin-right: auto;
            width: 65%;
            height: auto;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
    </style>
<?php $__env->stopPush(); ?>


<?php if (isset($component)) { $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Guest::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Guest::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container-xxl py-5">
        <hr style="margin-top: -23pt">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <h2 class="title-edukasi">
                        <?php echo e($data->title); ?>

                    </h2>
                    <span class="title-post">
                        By : Admin || Post : <i><?php echo e($data->updated_at); ?></i>
                    </span>
                    <div class="content-edukasi">
                        <img src="<?php echo e($data->images); ?>" alt="" class="img-fluid shadow rounded mt-2"
                            width="100%">
                        <hr class="shadow">
                        <div class="edu-text mt-4">
                            <?php echo $data->content; ?>

                        </div>
                    </div>
                    <hr>
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
<?php /**PATH C:\laragon\www\pro-naira\resources\views/pages/edukasi/detail.blade.php ENDPATH**/ ?>