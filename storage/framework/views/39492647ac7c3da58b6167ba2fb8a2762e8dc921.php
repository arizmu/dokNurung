<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Artikel Data</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        

                        <a href="<?php echo e(route('artikel.create')); ?>" class="btn btn-info">Tambah Data</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-body">
            <div class="row justify-content-between mb-3">
                <div class="col-4">
                    <select wire:model="paginate" id="" class="form-control" style="width: 50pt">
                        <option value="10">10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" wire:model="search">
                </div>
            </div>
            <?php if(\Session::has('success')): ?>
                <div class="alert alert-success">
                    <ul>
                        <li>
                            <?php echo \Session::get('success'); ?>

                        </li>
                    </ul>
                </div>
            <?php endif; ?>
            <table class="table table-bordered" style="width: 100%">
                <tr>
                    <th>No.</th>
                    <th>Gambar</th>
                    <th>Title</th>
                    <th></th>
                </tr>
                <?php
                    $no = 1;
                ?>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td style="width: 3%"><?php echo e($no++); ?></td>
                        <td style="width: 20%">
                            <img src="<?php echo e($item->img); ?>" alt="" style="width: 50%">
                        </td>
                        <td><?php echo e($item->title); ?></td>
                        <td style="width: 20%">
                            <a href="<?php echo e(route('artikel.edit', $item->id)); ?>" class="btn btn-warning text-white">Edit</a>
                            <button class="btn btn-sm btn-danger" wire:click="hapus(<?php echo e($item->id); ?>)">
                                Hapus
                            </button>
                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>

        </div>
        <div class="card-footer">
            
            <?php echo e($data->links()); ?>

            
        </div>
    </div>
</div>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/artikel/data.blade.php ENDPATH**/ ?>