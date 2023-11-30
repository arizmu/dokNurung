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
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form.input-row','data' => ['type' => 'text','title' => 'Nama Perusahaan','isLivewire' => true,'name' => 'name']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','title' => 'Nama Perusahaan','isLivewire' => true,'name' => 'name']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form.textarea-row','data' => ['type' => 'text','title' => 'Alamat','isLivewire' => true,'name' => 'alamat']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.textarea-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','title' => 'Alamat','isLivewire' => true,'name' => 'alamat']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form.input-row','data' => ['type' => 'text','title' => 'Email','isLivewire' => true,'name' => 'email']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','title' => 'Email','isLivewire' => true,'name' => 'email']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form.input-row','data' => ['type' => 'text','title' => 'Telpon','isLivewire' => true,'name' => 'telpon']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.input-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','title' => 'Telpon','isLivewire' => true,'name' => 'telpon']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
                        <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.form.textarea-row','data' => ['type' => 'text','title' => 'Deskrpisi','isLivewire' => true,'name' => 'deskripsi']] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('form.textarea-row'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['type' => 'text','title' => 'Deskrpisi','isLivewire' => true,'name' => 'deskripsi']); ?>
                         <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
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
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/pengaturan/pengaturan-index.blade.php ENDPATH**/ ?>