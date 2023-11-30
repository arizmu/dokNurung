<?php if (isset($component)) { $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Guest::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Guest::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container-xxl py-5 page-header position-relative mb-5">
        <div class="container py-5">
            <h1 class="display-2 text-white animated slideInDown mb-4">Hubungi Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">About Us</li>
                </ol>
            </nav>
        </div>
    </div>


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="mb-3">Get In Touch</h1>
                <p>
                    info lebih lanjut dapat menghubungi kami, melalui informasi berikut -
                </p>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                        style="width: 75px; height: 75px;">
                        <i class="fa fa-map-marker-alt fa-2x text-primary"></i>
                    </div>
                    <h6><?php echo e($website['alamat']); ?></h6>
                </div>
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                        style="width: 75px; height: 75px;">
                        <i class="fa fa-envelope-open fa-2x text-primary"></i>
                    </div>
                    <h6><?php echo e($website['email']); ?></h6>
                </div>
                <div class="col-md-6 col-lg-4 text-center wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light rounded-circle d-inline-flex align-items-center justify-content-center mb-4"
                        style="width: 75px; height: 75px;">
                        <i class="fa fa-phone-alt fa-2x text-primary"></i>
                    </div>
                    <h6><?php echo e($website['telpon']); ?></h6>
                </div>
            </div>
            <div class="row g-5">
                
                <div class="col-lg-12 wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100">
                        
                        </iframe>
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d248.348788497116!2d119.41329156788782!3d-5.1709553288307735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1667928221509!5m2!1sid!2sid"
                            width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <?php echo $__env->make('layouts.main.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b)): ?>
<?php $component = $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b; ?>
<?php unset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b); ?>
<?php endif; ?>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/pages/contact.blade.php ENDPATH**/ ?>