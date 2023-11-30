<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2>Pengaturan System</h2>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <button class="btn <?php echo e($bs_info ? 'btn-info' : 'btn-outline-info'); ?>" wire:click="bs_info_act">
                <i class="fa fa-info-circle mr-2 text-warning"></i>
                Informasi
            </button>

            
        </div>
        <?php if($bs_info): ?>
            <form wire:submit.prevent="info_act_store">
                <?php echo csrf_field(); ?>
                <div class="card-body row">
                    <div class="col-md-8">
                        <?php if (isset($component)) { $__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\InputRow::class, ['type' => 'text','title' => 'Nama Perusahaan','isLivewire' => true,'name' => 'name'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form\InputRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083)): ?>
<?php $component = $__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083; ?>
<?php unset($__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal2d1f0cd20a335677d3d0664a2ec50f0c0d925d47 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\TextareaRow::class, ['type' => 'text','title' => 'Alamat','isLivewire' => true,'name' => 'alamat'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.textarea-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form\TextareaRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d1f0cd20a335677d3d0664a2ec50f0c0d925d47)): ?>
<?php $component = $__componentOriginal2d1f0cd20a335677d3d0664a2ec50f0c0d925d47; ?>
<?php unset($__componentOriginal2d1f0cd20a335677d3d0664a2ec50f0c0d925d47); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\InputRow::class, ['type' => 'text','title' => 'Email','isLivewire' => true,'name' => 'email'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form\InputRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083)): ?>
<?php $component = $__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083; ?>
<?php unset($__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\InputRow::class, ['type' => 'text','title' => 'Telpon','isLivewire' => true,'name' => 'telpon'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form\InputRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083)): ?>
<?php $component = $__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083; ?>
<?php unset($__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginal2d1f0cd20a335677d3d0664a2ec50f0c0d925d47 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\TextareaRow::class, ['type' => 'text','title' => 'Deskrpisi','isLivewire' => true,'name' => 'deskripsi'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.textarea-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Form\TextareaRow::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2d1f0cd20a335677d3d0664a2ec50f0c0d925d47)): ?>
<?php $component = $__componentOriginal2d1f0cd20a335677d3d0664a2ec50f0c0d925d47; ?>
<?php unset($__componentOriginal2d1f0cd20a335677d3d0664a2ec50f0c0d925d47); ?>
<?php endif; ?>
                    </div>
                    <div class="col-md-4">

                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-save mr-2"></i>
                        Update Information
                    </button>
                </div>
            </form>
        <?php else: ?>
            <form method="" action="" enctype="multipart/form-data">
                <div class="card-body row">
                    <div class="col-md-6">

                        

                        <div class="input-group">
                            <span class="input-group-btn">
                                <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                    <i class="fa fa-picture-o"></i> Choose
                                </a>
                            </span>
                            <input id="thumbnail" class="form-control" type="text" name="filepath">
                        </div>
                        <img id="holder" style="margin-top:15px;max-height:100px;">

                    </div>
                </div>
                <div class="card-footer">
                    <button class="btn btn-primary" type="submit">
                        <i class="fa fa-save mr-2"></i>
                        Updated Gambar
                    </button>
                </div>
            </form>
        <?php endif; ?>
    </div>
</div>

<?php $__env->startPush('script'); ?>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>
    <script>
        $('#lfm').filemanager('image');
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/pengaturan/pengaturan-index.blade.php ENDPATH**/ ?>