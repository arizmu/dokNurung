<?php if (isset($component)) { $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Guest::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Guest::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4">Artikel</h1>
            
        </div>
    </div>
    <div class="container">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/2 lg:w-1/3 px-5">
                <div class="max-w-[370px] mx-auto mb-10 row">

                    <div class="rounded overflow-hidden mb-8 col-md-5">
                        <img src="https://cdn.tailgrids.com/1.0/assets/images/blogs/blog-01/image-01.jpg" alt="image"
                            class="w-full" />
                    </div>

                    <div class="col-md-7 mt-2">
                        <span
                            class="bg-primary  rounded  inline-block text-center py-1 px-4 text-xs leading-loose font-semibold  text-white  mb-5">
                            Dec 22, 2023
                        </span>
                        <h3>
                            <a href="javascript:void(0)"
                                class=" font-semibold text-xl sm:text-2xl lg:text-xl xl:text-2xl mb-4 inline-block text-dark hover:text-primary">
                                Meet AutoManage, the best AI management tools
                            </a>
                        </h3>
                        <p class="text-base text-body-color">
                            Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
    </div>


 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b)): ?>
<?php $component = $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b; ?>
<?php unset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/pages/artikel/artikel.blade.php ENDPATH**/ ?>