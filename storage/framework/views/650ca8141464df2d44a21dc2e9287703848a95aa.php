<div>
    <div class="column_title">
        <div class="page_title d-flex justify-content-between">
            <h2 class="card-title">Users Data</h2>
            <div>
                <a class="btn btn-primary" href="<?php echo e(route('testimoni.create')); ?>">
                    <span class="fa fa-edit ml-2"></span>
                    Tambah Baru
                </a>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between mb-3">
                <div class="col-4">
                    <select wire:model="page" id="" class="form-control" style="width: 50pt">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" wire:model="search" placeholder="search by name">
                </div>
            </div>
            <?php echo e($data); ?>

            <table class="table table-bordered">
                <tr>
                    <th>Nama</th>
                    <th>Testimoni</th>
                    <th>Photo</th>
                    <th></th>
                </tr>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->name); ?></td>
                        <td><?php echo e($item->testimoni); ?></td>
                        <td style="width: 30%">
                            <img src="<?php echo e($item->img ? $item->img : asset('svg/img.png')); ?>" alt=""
                                width="20%" height="auto">
                        </td>
                        <td>
                            <a href="<?php echo e(route('testimoni.edit', $item->id)); ?>" class="btn btn-sm btn-warning">Edit</a>
                            <button class="btn btn-sm btn-danger" wire:click="hapus(<?php echo e($item->id); ?>)"
                                onclick="return confirm('Hapus testimoni <?php echo e($item->name); ?> ?')">Hapus</button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>

            <?php echo e($data->links()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/testimoni/itestimoni.blade.php ENDPATH**/ ?>