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
                        <h3 class="text-white">MULAI QUIZ</h3>
                    </div>
                    <hr>

                    <form action="<?php echo e(route('penilaian.siswa')); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <div class="row justify-content-center mt-4">
                            <div class="col-12">
                                <input type="hidden" name="key" value="<?php echo e($key); ?>" readonly>
                                <input type="text" name="nis" class="form-control form-control-lg"
                                    placeholder="Masukan Nomor Induk">

                                <div class="mt-2">
                                    <?php if(\Session::has('msg')): ?>
                                        <div class="alert alert-danger" role="alert">
                                            <?php echo \Session::get('msg'); ?>

                                        </div>
                                        
                                    <?php endif; ?>
                                    <?php $__errorArgs = ['nis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <div class="alert alert-danger">
                                            <?php echo e($message); ?>

                                        </div>
                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>
                        </div>

                        <div class="text-center mt-4">
                            <button class="btn btn-lg btn-primary">Mulai Test</button>
                        </div>
                    </form>
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
<?php /**PATH C:\laragon\www\pro-naira\resources\views/pages/penilaian/start.blade.php ENDPATH**/ ?>