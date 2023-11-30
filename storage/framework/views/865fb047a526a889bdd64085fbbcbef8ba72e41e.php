<div>
    <div class="column_title">
        <div class="page_title d-flex justify-content-between">
            <h2 class="card-title">Users Data</h2>
            <div>
                <a class="btn btn-primary" href="<?php echo e(route('users.create')); ?>">
                    <span class="fa fa-edit ml-2"></span>
                    Tambah Baru
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="d-flex justify-content-between mb-3">
                <div class="">
                    
                </div>
                <div class="">
                    <div style="width: 150pt" class="">
                        <input type="text" class="form-control">
                    </div>
                </div>
            </div>

            <?php if(session()->has('message')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="d-flex justify-content-between">
                        <strong><?php echo e(session('message')); ?>!</strong>
                    </div>
                </div>
            <?php endif; ?>

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Email</th>
                        <th scope="col">Status</th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $numbering = 1;
                    ?>
                    <?php $__currentLoopData = $datas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <th scope="row"><?php echo e($numbering++); ?></th>
                            <td><?php echo e($item->name); ?></td>
                            <td><?php echo e($item->username); ?></td>
                            <td><?php echo e($item->email); ?></td>
                            <td>
                                <div class="badge badge-info">
                                    <span>
                                        Active
                                    </span>
                                </div>
                            </td>
                            <td>
                                
                                <a href="<?php echo e(route('users.update', $item->id)); ?>" class="btn btn-outline-warning">
                                    <span class="fa fa-edit"></span>
                                </a>
                                <button class="btn btn-outline-danger" wire:click="hapus(<?php echo e($item->id); ?>)">
                                    <span class="fa fa-trash"></span>
                                </button>
                            </td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
            <?php echo e($datas->links()); ?>

            
        </div>
    </div>
</div>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/users/users-index.blade.php ENDPATH**/ ?>