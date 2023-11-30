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
            .card-style {
                margin: auto;
                width: 50%;
                /* border: 3px solid green; */
                padding: 15px;
                padding-top: 30px;
                padding-bottom: 30px;
            }

            @media only screen and (max-width: 768px) {
                .card-style {
                    width: 100%;
                    padding: 0px;
                }
            }
        </style>
    <?php $__env->stopPush(); ?>

    <div class="container">
        <div class="card bg-dark card-style text-white">
            <div class="card-body">
                <div class="py-10">
                    <div class="text-center ">
                        <h3 class="text-white">NILAI QUIZ</h3>
                    </div>
                    <hr>
                    <div class="text-center">
                        <div>
                            <label for="">Siswa</label>
                            <h5 style="color: gray">
                                <?php echo e($data->siswa->nis . '/' . $data->siswa->nama); ?>

                            </h5>
                        </div>
                        <div class="mt-2">
                            <label for="">Nilai Score</label>
                            <h4 style="color: gray">
                                <?php echo e($data->total_soore); ?>

                            </h4>
                        </div>
                        <div class="mt-4">

                            <?php if($data->total_soore > 85): ?>
                                <img src="<?php echo e(asset('icon/star.png')); ?>" alt="" width="40%" class="mb-2">
                                <h1 style="color:white">
                                    SELAMAT
                                </h1>
                            <?php elseif($data->total_soore > 65): ?>
                                <img src="<?php echo e(asset('icon/smile.png')); ?>" alt="" width="40%" class="mb-2">
                                <h1 style="color:white">
                                    SELAMAT
                                </h1>
                            <?php else: ?>
                                <img src="<?php echo e(asset('icon/sad.png')); ?>" alt="" width="40%" class="mb-2">
                                <h1 style="color:white">
                                    SEMANGAT
                                </h1>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b)): ?>
<?php $component = $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b; ?>
<?php unset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/pages/penilaian/hasil.blade.php ENDPATH**/ ?>