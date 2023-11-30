<div>
    <div class="column_title">
        <div class="page_title d-flex justify-content-between">
            <h2 class="card-title">Teams</h2>
            <div>
                <a class="btn btn-primary" href="<?php echo e(route('team.create')); ?>">
                    <span class="fa fa-edit ml-2"></span>
                    Tambah Baru
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <?php if(session()->has('message')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="d-flex justify-content-between">
                        <strong><?php echo e(session('message')); ?>!</strong>
                    </div>
                </div>
            <?php endif; ?>
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Jabatan</th>
                        <th>Photo</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $number = 1;
                    ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($number++); ?></td>
                            <td><?php echo e($item->name); ?></td>
                            <td><?php echo e($item->jabatan->kategori ?? ''); ?></td>
                            <td style="width: 25%">
                                <img src="<?php echo e('storage/' . $item->img); ?>" alt="" style="width: 100%">
                            </td>
                            <td style="width: 15%">
                                
                                <a class="btn btn-warning btn-sm text-white" href="<?php echo e(route('team.edit', $item->id)); ?>">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <button class="btn btn-danger btn-sm" wire:click="delete(<?php echo e($item->id); ?>)">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/team/i-team.blade.php ENDPATH**/ ?>