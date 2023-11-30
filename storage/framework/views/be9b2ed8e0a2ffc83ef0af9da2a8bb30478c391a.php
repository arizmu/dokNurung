
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
} elseif ($_instance->childHasBeenRendered('QCpWpRJ')) {
    $componentId = $_instance->getRenderedChildComponentId('QCpWpRJ');
    $componentTag = $_instance->getRenderedChildComponentTagName('QCpWpRJ');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('QCpWpRJ');
} else {
    $response = \Livewire\Livewire::mount('index.carousel');
    $html = $response->html();
    $_instance->logRenderedChild('QCpWpRJ', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <!-- Carousel End -->
        <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('testimoni.vtestimoni')->html();
} elseif ($_instance->childHasBeenRendered('YmGtCXA')) {
    $componentId = $_instance->getRenderedChildComponentId('YmGtCXA');
    $componentTag = $_instance->getRenderedChildComponentTagName('YmGtCXA');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('YmGtCXA');
} else {
    $response = \Livewire\Livewire::mount('testimoni.vtestimoni');
    $html = $response->html();
    $_instance->logRenderedChild('YmGtCXA', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
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
<?php /**PATH C:\laragon\www\pro-naira\resources\views/index.blade.php ENDPATH**/ ?>