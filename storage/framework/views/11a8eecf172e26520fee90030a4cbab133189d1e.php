<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title row">
                <div class="col-6">
                    <h2>
                        Edukasi Detail
                    </h2>
                </div>
                <div class="col-6"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title mt-2"> <?php echo e($data->title); ?></h3>
                    <a class="text-primary" href="<?php echo e(route('edukasi')); ?>">List</a>&nbsp;||&nbsp;<a class="text-primary"
                        href="<?php echo e(route('edit.edukasi', $data->id)); ?>">Edit</a>&nbsp;||&nbsp;<a class="text-primary"
                        href="<?php echo e(route('delete.edukasi', $data->id)); ?>" onclick="confirm('Press a button!')">Hapus</a>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php echo $data->content; ?>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4">
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/edukasi/show.blade.php ENDPATH**/ ?>