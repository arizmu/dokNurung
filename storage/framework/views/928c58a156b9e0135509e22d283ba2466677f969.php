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
        <form class="row" action="<?php echo e(route('register.store')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="col-md-3"></div>
            <fieldset class="col-md-6" style="padding: 25pt">
                <div class="card bg-dark">
                    <div class="card-body">
                        <div style="padding: 15pt">
                            <h2 class="text-center auth text-white">REGISTER SISWA</h2>
                            <hr>

                            <?php if(\Session::has('success')): ?>
                                <div class="alert alert-warning" role="alert">
                                    <?php echo \Session::get('success'); ?>

                                </div>
                                
                            <?php endif; ?>

                            <?php if($errors->any()): ?>
                                <div class="alert alert-danger">
                                    <ul>
                                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li><?php echo e($error); ?></li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ul>
                                </div>
                            <?php endif; ?>

                            <div class="form-group mb-4">
                                <label class="mb-1">Nomor Induk</label>
                                <input class="form-control" type="text" name="nis" placeholder="Nomor Induk" />
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-1">Nama Lengkap</label>
                                <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" />
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-1">Jenis Kelamin</label>
                                <select name="jenis_kelamin" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="form-group mb-4">
                                <label class="mb-1">Kelas</label>
                                <input class="form-control" type="text" name="kelas" placeholder="kelas" />
                            </div>
                            <div class="form-group mb-4">
                                <button class="btn btn-primary" style="width: 100%">
                                    Proses Registrasi
                                </button>
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
<?php /**PATH C:\laragon\www\pro-naira\resources\views/pages/register.blade.php ENDPATH**/ ?>