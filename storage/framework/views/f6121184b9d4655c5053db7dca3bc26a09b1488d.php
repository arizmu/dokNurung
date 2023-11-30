<?php if (isset($component)) { $__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\App::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\App::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
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
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Form Tambah Atikel</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        

                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <form action="<?php echo e(route('artikel.store')); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <div class="card">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Artikel Title</label>
                    <input type="text" class="form-control" name="title">
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder"
                                class="btn btn-outline-primary">
                                <i class="fa fa-picture-o text-danger"></i> <span class="text-danger ml-2">Choose</span>
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control ml-2" type="text" name="images">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>

                <div class="form-group">
                    <label for="">Artikel Content</label>
                    <?php if (isset($component)) { $__componentOriginaldb00d5d4a74952847bec77ec69993e9b9be37ab7 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\Txteditor::class, ['value' => ''] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.txteditor'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form\Txteditor::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginaldb00d5d4a74952847bec77ec69993e9b9be37ab7)): ?>
<?php $component = $__componentOriginaldb00d5d4a74952847bec77ec69993e9b9be37ab7; ?>
<?php unset($__componentOriginaldb00d5d4a74952847bec77ec69993e9b9be37ab7); ?>
<?php endif; ?>
                </div>
            </div>
            <div class="card-footer">
                <button class="btn btn-warning">Batal</button>
                <Button class="btn btn-info">Simpan Artikel</Button>
            </div>
        </div>
    </form>
    <?php $__env->startPush('script'); ?>
        <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

        <script>
            $('#lfm').filemanager('image');
        </script>
    <?php $__env->stopPush(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8)): ?>
<?php $component = $__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8; ?>
<?php unset($__componentOriginal7bcb47133ab1e04b8b45962d47c0583745930df8); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\doknurung\resources\views/pages/artikel/create.blade.php ENDPATH**/ ?>