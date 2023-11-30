<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Data Soal</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card mb-2">
        
        <form method="post" action="<?php echo e(route('soal.store', $penilaian_id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Soal Deskripsi</label>
                    <textarea class="form-control <?php $__errorArgs = ['soal_teks'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        is-invalid
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
                        name="soal_teks"></textarea>
                </div>
                <div class="input-group">
                    <span class="input-group-btn text-white">
                        <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                            <i class="fa fa-picture-o"></i> Choose
                        </a>
                    </span>
                    <input id="thumbnail" class="form-control ml-2" type="text" name="soal_img">
                </div>
                <img id="holder" style="margin-top:15px;max-height:100px;">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title mt-1">Jawaban</h4>
                    </div>
                    <div class="card-body">

                        <div class="form-group row">
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Jawaban 1"
                                    name="input[1][jawaban]">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Score" name="input[1][score]">
                            </div>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-btn text-white">
                                        <a id="lfm1" data-input="thumbnail1" data-preview="holder"
                                            class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail1" class="form-control ml-2" type="text"
                                        name="input[1][gambar]">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Jawaban 2"
                                    name="input[2][jawaban]">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Score" name="input[2][score]">
                            </div>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-btn text-white">
                                        <a id="lfm2" data-input="thumbnail2" data-preview="holder"
                                            class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail2" class="form-control ml-2" type="text"
                                        name="input[2][gambar]">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Jawaban 2"
                                    name="input[3][jawaban]">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Score" name="input[3][score]">
                            </div>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-btn text-white">
                                        <a id="lfm3" data-input="thumbnail3" data-preview="holder"
                                            class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail3" class="form-control ml-2" type="text"
                                        name="input[3][gambar]">
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-5">
                                <input type="text" class="form-control" placeholder="Jawaban 2"
                                    name="input[4][jawaban]">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control" placeholder="Score"
                                    name="input[4][score]">
                            </div>
                            <div class="col-md-5">
                                <div class="input-group">
                                    <span class="input-group-btn text-white">
                                        <a id="lfm4" data-input="thumbnail4" data-preview="holder"
                                            class="btn btn-primary">
                                            <i class="fa fa-picture-o"></i> Choose
                                        </a>
                                    </span>
                                    <input id="thumbnail4" class="form-control ml-2" type="text"
                                        name="input[4][gambar]">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if($errors->any()): ?>
                    <div class="alert alert-danger mt-2">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
            </div>

            <div class="card-footer">

                <a class="btn btn-success" href="<?php echo e(route('penilaian.index')); ?>">Finish</a>
                <button type="reset" class="btn btn-warning text-white">Reset</button>
                <button type="submit" class="btn btn-primary">Tambah Soal</button>
            </div>
        </form>
    </div>
    <div class="card">
        <div class="card-header">
            <h4 class="mt-2">List Soal</h4>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <?php
                    $number = 1;
                ?>
                <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <tr>
                        <td rowspan="2" style="width: 30pt" class="text-center"><?php echo e($number++); ?></td>
                        <td colspan="4">
                            <?php echo e($item->soal_teks); ?>

                            <br>
                            <img src="<?php echo e(asset($item->img)); ?>" alt="" width="25%" class="shadow">
                        </td>
                        <td rowspan="2">
                            <button class="btn btn-danger" wire:click="hapus(<?php echo e($item->id); ?>)">Hapus</button>
                        </td>
                    </tr>
                    <tr>

                        <?php $__currentLoopData = $item->jawaban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <td style="width: 20%"><?php echo e($val->jawaban); ?></td>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                    <tr>
                        <td colspan="6" class="text-center">
                            list empty
                        </td>
                    </tr>
                <?php endif; ?>
            </table>
        </div>
    </div>
</div>

<?php $__env->startPush('script'); ?>
    <?php if (isset($component)) { $__componentOriginal8d59145c86a2cc8c686bcdf40cda977b7b4d9437 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Head\InputImage::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('head.input-image'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Head\InputImage::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?> <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8d59145c86a2cc8c686bcdf40cda977b7b4d9437)): ?>
<?php $component = $__componentOriginal8d59145c86a2cc8c686bcdf40cda977b7b4d9437; ?>
<?php unset($__componentOriginal8d59145c86a2cc8c686bcdf40cda977b7b4d9437); ?>
<?php endif; ?>
    <script>
        $('#lfm1').filemanager('image');
        $('#lfm2').filemanager('image');
        $('#lfm3').filemanager('image');
        $('#lfm4').filemanager('image');
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/penilaian/soal-create.blade.php ENDPATH**/ ?>