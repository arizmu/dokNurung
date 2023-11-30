<?php if (isset($component)) { $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Guest::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Guest::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container-xxl bg-white p-0">
        <!-- Carousel Start -->
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('index.carousel')->html();
} elseif ($_instance->childHasBeenRendered('cgkZe6Q')) {
    $componentId = $_instance->getRenderedChildComponentId('cgkZe6Q');
    $componentTag = $_instance->getRenderedChildComponentTagName('cgkZe6Q');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('cgkZe6Q');
} else {
    $response = \Livewire\Livewire::mount('index.carousel');
    $html = $response->html();
    $_instance->logRenderedChild('cgkZe6Q', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <!-- Carousel End -->

        <div class="container-sm">
            <div class="text-center">
                
                <h1>
                    - - - - - - -
                </h1>
            </div>
            <div class="row justify-content-center">

                <div class="col-md-3 p-2">
                    <a href="<?php echo e(route('public.index.edukasi')); ?>" class="card bg-info shadow">
                        <div class="card-body text-center">
                            <img src="<?php echo e(asset('img/education_school_blocks_building_study_learn_numbers_icon_133453.png')); ?>"
                                alt="" width="150px" class="mb-2">
                            <h4 class="p-2" style="font-family: arial">
                                BELAJAR
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="<?php echo e(route('penilaian.views')); ?>" class="card bg-warning shadow">
                        <div class="card-body text-center ">
                            <img src="<?php echo e(asset('img/icon2.png')); ?>" alt="" width="150px" class="mb-2">
                            <h4 class="p-2" style="font-family: arial">
                                MULAI KUIS
                            </h4>
                        </div>
                    </a>
                </div>
                <div class="col-md-3 p-2">
                    <a href="<?php echo e(route('siswa.register')); ?>" class="card bg-primary shadow">
                        <div class="card-body text-center ">
                            <img src="<?php echo e(asset('img/iconfinder-3-avatar-2754579_120516.png')); ?>" alt=""
                                width="150px" class="mb-2">
                            <h4 class="p-2" style="font-family: arial">
                                DAFTAR
                            </h4>
                        </div>
                    </a>
                </div>
            </div>
            
        </div>


        
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('testimoni.vtestimoni')->html();
} elseif ($_instance->childHasBeenRendered('M9gKm9h')) {
    $componentId = $_instance->getRenderedChildComponentId('M9gKm9h');
    $componentTag = $_instance->getRenderedChildComponentTagName('M9gKm9h');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('M9gKm9h');
} else {
    $response = \Livewire\Livewire::mount('testimoni.vtestimoni');
    $html = $response->html();
    $_instance->logRenderedChild('M9gKm9h', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php echo $__env->make('layouts.main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b)): ?>
<?php $component = $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b; ?>
<?php unset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\doknurung\resources\views/index.blade.php ENDPATH**/ ?>