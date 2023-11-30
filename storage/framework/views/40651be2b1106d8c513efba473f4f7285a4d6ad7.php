<?php if (isset($component)) { $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Guest::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Guest::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="py-5" style="align-content: center">
        <div class="container">
            <h2>Games List - </h2>
            <div class="row">
                <div class="col-md-4 mt-2">
                    <a class="card" href="<?php echo e(route('mandalas')); ?>">
                        <div class="card-header">
                            <img src="https://www.htmlgames.com/uploaded/game/thumb/coloring-mandalas-300.webp"
                                alt="" width="100%">
                        </div>
                        <div class="card-body">
                            <h4>Coloring Mandalas</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-2">
                    <a class="card" href="<?php echo e(route('fighter')); ?>">
                        <div class="card-header">
                            <img src="https://www.htmlgames.com/uploaded/game/thumb/oneline300200.webp" alt=""
                                width="100%">
                        </div>
                        <div class="card-body">
                            <h4>One Line</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-2">
                    <a class="card" href="<?php echo e(route('reach')); ?>">
                        <div class="card-header">
                            <img src="https://www.htmlgames.com/uploaded/game/thumb/reach2048-300200.webp"
                                alt="" width="100%">
                        </div>
                        <div class="card-body">
                            <h4>Reach</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-2">
                    <a class="card" href="<?php echo e(route('co')); ?>">
                        <div class="card-header">
                            <img src="<?php echo e(asset('games.png')); ?>" alt="" width="100%">
                        </div>
                        <div class="card-body">
                            <h4>Classroom Object</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-2">
                    <a class="card" href="<?php echo e(route('tebak-kata')); ?>">
                        <div class="card-header">
                            <img src="<?php echo e(asset('games.png')); ?>" alt="" width="100%">
                        </div>
                        <div class="card-body">
                            <h4>Tebak Kata</h4>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 mt-2">
                    <a class="card" href="<?php echo e(route('spt')); ?>">
                        <div class="card-header">
                            <img src="<?php echo e(asset('games.png')); ?>" alt="" width="100%">
                        </div>
                        <div class="card-body">
                            <h4>Simple Past Tense</h4>
                        </div>
                    </a>
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
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/games.blade.php ENDPATH**/ ?>