<div>
    <div class="column_title">
        <div class="page_title d-flex justify-content-between">
            <h2 class="card-title">Input Testimoni</h2>
            <div>

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
            <form action="<?php echo e(route('testimoni.store')); ?>" method="POST" enctype="multipart/form-data">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="">Testimoni Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo e($name); ?>">
                </div>
                <div class="form-group">
                    <label for="">Testimoni Deskripsi</label>
                    <textarea class="form-control" name="testimoni"><?php echo e($testimoni); ?></textarea>
                </div>
                <div class="form-group">
                    <label for="">Gambar</label>
                    <div class="input-group">
                        <span class="input-group-btn">
                            <a id="lfm" data-input="thumbnail" data-preview="holder"
                                class="btn btn-outline-primary">
                                <i class="fa fa-picture-o text-danger"></i> <span class="text-danger ml-2">Choose</span>
                            </a>
                        </span>
                        <input id="thumbnail" class="form-control ml-2" type="text" name="img"
                            value="<?php echo e($img); ?>">
                    </div>
                    <img id="holder" style="margin-top:15px;max-height:100px;">
                </div>

                <a href="<?php echo e(route('testimoni.index')); ?>" type="reset" class="btn btn-warning">batal</a>
                <button class="btn btn-primary" type="submit">Simpan</button>
            </form>
        </div>
    </div>
</div>

<?php $__env->startPush('script'); ?>
    <script src="/vendor/laravel-filemanager/js/stand-alone-button.js"></script>

    <script>
        $('#lfm').filemanager('image');
    </script>
<?php $__env->stopPush(); ?>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/testimoni/etestimoni.blade.php ENDPATH**/ ?>