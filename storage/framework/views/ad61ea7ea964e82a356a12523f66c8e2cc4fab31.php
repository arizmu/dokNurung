<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Edukasi</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="<?php echo e(route('create.edukasi')); ?>" class="btn btn-primary">
                            <span class="fa fa-pencil "></span> Tambah Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="row">
        <table class="table table-bordered table-borderless">
            <tr style="height: 30pt" class="bg-info text-white">
                <th>No.</th>
                <th>Head Title</th>
                <th>Images</th>
                <th>Author</th>
                <th>#</th>
            </tr>
            <?php
                $numbering = 1;
            ?>
            <?php $__empty_1 = true; $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($numbering++); ?></td>
                    <td><?php echo e($item->title . $item->id); ?></td>
                    <td class="text-center">
                        

                        <picture <?php echo e($item->images ? '' : 'hidden'); ?>>
                            <source srcset="<?php echo e($item->images); ?>" type="image/svg+xml">
                            <img src="<?php echo e($item->images); ?>" class="img-fluid img-thumbnail" alt="<?php echo e($item->title); ?>"
                                style="width: 100p; height: 100pt;">
                        </picture>
                    </td>
                    <td></td>
                    <td>
                        <a href="<?php echo e(route('edukasi.find', $item->id)); ?>" class="btn btn-outline-primary">
                            <span class="fa fa-eye"></span>
                        </a>
                        <a href="<?php echo e(route('edit.edukasi', $item->id)); ?>" class="btn btn-warning">
                            <span class="fa fa-edit"></span>
                        </a>
                        <a href="<?php echo e(route('delete.edukasi', $item->id)); ?>" class="btn btn-danger">
                            <span class="fa fa-trash"></span>
                        </a>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td rowspan="5"></td>
                </tr>
            <?php endif; ?>
        </table>
    </div>

</div>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/edukasi/index-edukasi.blade.php ENDPATH**/ ?>