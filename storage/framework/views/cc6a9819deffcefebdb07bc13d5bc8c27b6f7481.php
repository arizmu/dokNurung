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
        <form class="row">
            <div class="col-md-3"></div>
            <fieldset class="col-md-6" style="padding: 25pt">
                <div class="card bg-dark">
                    <div class="card-body">
                        <div style="padding: 15pt">
                            <h2 class="text-center auth text-white">REGISTER AKUN BARU</h2>
                            <hr>
                            <div class="form-group mb-4">
                                <label class="mb-1">Nama Lengkap</label>
                                <input class="form-control" type="text" name="name" placeholder="Nama Lengkap" />
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-1">Nomor Induk</label>
                                <input class="form-control" type="text" name="nomor_induk"
                                    placeholder="Nomor Induk" />
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-1">Username</label>
                                <input class="form-control" type="text" name="username" placeholder="Username" />
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-1">Email Address</label>
                                <input class="form-control" type="email" name="email" placeholder="E-mail" />
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-1">Password</label>
                                <input class="form-control" type="password" name="password" placeholder="Password" />
                            </div>
                            <div class="form-group mb-4">
                                <button class="btn btn-primary" style="width: 100%">
                                    Sign Up
                                </button>

                                <div class="text-center mt-3">
                                    <a href="<?php echo e(route('login')); ?>" class="mt-2">
                                        Sudah punya akun !
                                        <span class="fa fa-arrow-right"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
            </fieldset>
            <div class="col-md-3"></div>
        </form>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b)): ?>
<?php $component = $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b; ?>
<?php unset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/pages/auth/register.blade.php ENDPATH**/ ?>