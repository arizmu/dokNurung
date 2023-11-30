<?php $__env->startPush('styles'); ?>
    <?php if (isset($component)) { $__componentOriginala41b4183d82cfdff88d65e7ee6cae852312656e4 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Head\Tinymce::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('head.tinymce'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Head\Tinymce::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginala41b4183d82cfdff88d65e7ee6cae852312656e4)): ?>
<?php $component = $__componentOriginala41b4183d82cfdff88d65e7ee6cae852312656e4; ?>
<?php unset($__componentOriginala41b4183d82cfdff88d65e7ee6cae852312656e4); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>

<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Tentang</h2>
                    </div>
                    <div class="col-md-6 text-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="<?php echo e(route('tentang.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <input type="file" class="form-control" name="file">
                </div>
                <div class="form-group">
                    <label for="">Deskripsi Tentang</label>
                    <textarea id="myeditorinstance" name="content">
                        <?php echo e($content); ?>

                    </textarea>
                </div>
                <button type="submit" class="btn btn-primary">Simpan Baru</button>
            </form>
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/pengaturan/pengaturan-tentang.blade.php ENDPATH**/ ?>