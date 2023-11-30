<?php $__env->startPush('css'); ?>
    
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
    <div class="login_form">
        <form method="post" action="<?php echo e(route('login.proses')); ?>">
            <?php echo csrf_field(); ?>
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>


            <fieldset class="row" style="padding: 25pt">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="card bg-dark">
                        <div class="card-body">
                            <div style="padding: 15pt">
                                <h2 class="auth text-white text-center">LOGIN PENGGUNA</h2>
                                <hr class="mb-2">
                                <div class="form-group mb-4">
                                    <label class="mb-2">Username</label>
                                    <input type="text" class="form-control" name="username" placeholder="username" />
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2">Password</label>
                                    <input type="password" name="password" class="form-control"
                                        placeholder="Password" />
                                </div>
                                <div class="form-group mb-4">
                                    <label class="mb-2" hidden>hidden label</label>
                                    <label class="">
                                        <input type="checkbox" class="form-check-input">
                                        Remember Me
                                    </label>
                                    
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary mb-2" style="width: 100%">
                                        Sign In
                                    </button>
                                    <a href="<?php echo e(route('register')); ?>" class="" style="">
                                        belum punya akun !
                                        <span class="fa fa-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>

            </fieldset>
        </form>
    </div>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b)): ?>
<?php $component = $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b; ?>
<?php unset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\doknurung\resources\views/pages/auth/login.blade.php ENDPATH**/ ?>