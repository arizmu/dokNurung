<?php $__env->startPush('css'); ?>
    <style>
        img .card-image-top {
            padding: 10px;
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
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Kuis</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Kuis</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s"
                        style="max-width: 600px; margin-top: -30pt">
                        
                        <p></p>
                    </div>
                    <div class="row">
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="col-md-4 py-2">
                                <div class="card">
                                    <div class="card-body">
                                        <img class="card-img-top"
                                            src="<?php echo e($item->img ? $item->img : 'https://cdn-icons-png.flaticon.com/512/1205/1205526.png'); ?>"
                                            alt="Card image cap">
                                        
                                        <h5 class="card-title"><?php echo e($item->judul); ?></h5>
                                        <p class="card-text">
                                            Jumlah Soal - <?php echo e($item->soal->count()); ?>

                                        </p>
                                    </div>
                                    <div class="card-footer">
                                        <a href="<?php echo e(route('penilaian.start', ['id' => $item->id])); ?>"
                                            class="btn btn-primary">Mulai
                                            Kuis</a>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
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
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/pages/penilaian/index.blade.php ENDPATH**/ ?>