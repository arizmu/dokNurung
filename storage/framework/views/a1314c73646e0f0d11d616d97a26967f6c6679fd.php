<div>
    <div class="column_title">
        <div class="page_title d-flex justify-content-between">
            <h2 class="card-title">Users Data</h2>
            <div>
                <a class="btn btn-primary" href="<?php echo e(route('users.index')); ?>">
                    <span class="fa fa-table ml-2"></span>
                    Users List
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5 class="card-title text-gray">Form Input</h5>
        </div>
        <form wire:submit.prevent="save">
            <div class="card-body">
                <?php if(session()->has('message')): ?>
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <div class="d-flex justify-content-between">
                            <strong><?php echo e(session('message')); ?>!</strong>
                        </div>
                    </div>
                <?php endif; ?>
                <?php if (isset($component)) { $__componentOriginal37cfeae6f5c5e6d0b9a19ae6428fa05a82a43083 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Form\InputRow::class, ['type' => 'text','isLivewire' => true,'name' => 'name','title' => 'Nama Lengkap'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Form\InputRow::class, ['type' => 'text','isLivewire' => true,'name' => 'username','title' => 'Username'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Form\InputRow::class, ['type' => 'email','isLivewire' => true,'name' => 'email','title' => 'E Mail'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Form\InputRow::class, ['type' => 'password','isLivewire' => true,'name' => 'password','title' => 'Password'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Form\TextareaRow::class, ['type' => 'text','isLivewire' => true,'name' => 'alamat','title' => 'Alamat'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
<?php $component = $__env->getContainer()->make(App\View\Components\Form\InputRow::class, ['type' => 'text','isLivewire' => true,'name' => 'telpon','title' => 'No. Telpon'] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
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
            </div>
            <div class="card-footer">
                <button class="btn btn-primary" type="submit">
                    <span class="fa fa-save"></span>
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</div>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/users/users-input.blade.php ENDPATH**/ ?>