<?php if (isset($component)) { $__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\App::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\App::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Update Data</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        

                        <button class="btn btn-info">Tambah Data</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form method="post" action="<?php echo e(route('siswa.update', $siswa->id)); ?>">
                <?php echo csrf_field(); ?>
                <div class="form-group row">
                    <label for="" class="col-md-3">
                        Nomor Induk
                    </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="nis" value="<?php echo e($siswa->nis); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-md-3">
                        Nama Siswa
                    </label>
                    <div class="col-md-7">
                        <input type="text" class="form-control" name="nama" value="<?php echo e($siswa->nama); ?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-md-3">
                        Jenis Kelamin
                    </label>
                    <div class="col-md-6">
                        <select id="" class="form-control" name="jk">
                            <option value="">Pilih</option>
                            <option value="Laki-Laki"<?php echo e($siswa->jenis_kalamin == 'Laki-Laki' ? 'selected' : ''); ?>>
                                Laki-Laki</option>
                            <option value="Perempunan" <?php echo e($siswa->jenis_kalamin == 'Perempunan' ? 'selected' : ''); ?>>
                                Perempunan</option>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="" class="col-md-3">
                        Kelas
                    </label>
                    <div class="col-md-5">
                        <input type="text" class="form-control" name="kelas" value="<?php echo e($siswa->kelas); ?>">
                    </div>
                </div>

                <a href="<?php echo e(route('siswa')); ?>" class="btn btn-info">List Siswa</a>

                <button class="btn btn-primary">Simpan Baru</button>
            </form>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8)): ?>
<?php $component = $__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8; ?>
<?php unset($__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/siswa/Esiswa.blade.php ENDPATH**/ ?>