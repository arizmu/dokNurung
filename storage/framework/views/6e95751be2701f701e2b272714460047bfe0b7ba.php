<?php $__env->startPush('styles'); ?>
    
<?php $__env->stopPush(); ?>

<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Form Input Penilaian</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <?php if($errors->any()): ?>
                <div class="alert alert-danger">
                    <ul>
                        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li><?php echo e($error); ?></li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </div>
            <?php endif; ?>
            <form method="post" action="<?php echo e(route('penilaian.store')); ?>" enctype="multipart/form-data">
                
                <?php echo csrf_field(); ?>
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Judul</label>
                        <input type="text" class="form-control" name="judul">
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan</label>
                        <textarea class="form-control" rows="3" name="keterangan"></textarea>
                    </div>

                    <?php echo e($images); ?>

                    <div class="input-group">
                        <span class="input-group-btn text-white">
                            <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                <i class="fa fa-picture-o"></i> Choose
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control ml-2" type="text" name="images">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">


                    
                </div>
                <div class="card-footer">
                    <button type="reset" class="btn btn-warning text-white">Batalkan</button>
                    <button type="submit" class="btn btn-primary">Selanjutnya</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php $__env->startPush('script'); ?>
    <?php if (isset($component)) { $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4 = $component; } ?>
<?php $component = $__env->getContainer()->make(Illuminate\View\AnonymousComponent::class, ['view' => 'components.head.input-image','data' => []] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('head.input-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4)): ?>
<?php $component = $__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4; ?>
<?php unset($__componentOriginalc254754b9d5db91d5165876f9d051922ca0066f4); ?>
<?php endif; ?>
<?php $__env->stopPush(); ?>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/penilaian/penilaian-create.blade.php ENDPATH**/ ?>