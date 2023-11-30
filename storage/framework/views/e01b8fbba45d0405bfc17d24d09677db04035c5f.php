<?php if (isset($component)) { $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Guest::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Guest::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <!-- Page Header Start -->
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- About Start -->


    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    
                    <?php echo $data->content; ?>

                </div>
                <div class="col-lg-6 about-img wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row">
                        <div class="col-12 text-center">
                            <img class="img-fluid w-75 rounded-circle bg-light p-3" src="<?php echo e(asset('img/gbr9.jpg')); ?>"
                                alt="">
                        </div>
                        <div class="col-6 text-start" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="<?php echo e(asset('img/gbr11.jpg')); ?>"
                                alt="">
                        </div>
                        <div class="col-6 text-end" style="margin-top: -150px;">
                            <img class="img-fluid w-100 rounded-circle bg-light p-3" src="<?php echo e(asset('img/gbr13.jpg')); ?>"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('team.p-team')->html();
} elseif ($_instance->childHasBeenRendered('bRmtV7m')) {
    $componentId = $_instance->getRenderedChildComponentId('bRmtV7m');
    $componentTag = $_instance->getRenderedChildComponentTagName('bRmtV7m');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('bRmtV7m');
} else {
    $response = \Livewire\Livewire::mount('team.p-team');
    $html = $response->html();
    $_instance->logRenderedChild('bRmtV7m', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <hr>
    <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('testimoni.vtestimoni')->html();
} elseif ($_instance->childHasBeenRendered('20ccZb9')) {
    $componentId = $_instance->getRenderedChildComponentId('20ccZb9');
    $componentTag = $_instance->getRenderedChildComponentTagName('20ccZb9');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('20ccZb9');
} else {
    $response = \Livewire\Livewire::mount('testimoni.vtestimoni');
    $html = $response->html();
    $_instance->logRenderedChild('20ccZb9', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
    <?php echo $__env->make('layouts.main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b)): ?>
<?php $component = $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b; ?>
<?php unset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b); ?>
<?php endif; ?>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/pages/about.blade.php ENDPATH**/ ?>