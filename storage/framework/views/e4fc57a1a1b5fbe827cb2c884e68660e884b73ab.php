<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Data Siswa</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        

                        <a href="<?php echo e(route('siswa.create')); ?>" class="btn btn-info">Tambah Data</a>
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
            <table class="table" style="width: 100%">
                <tr>
                    <th>Nis</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Kelas</th>
                    <th></th>
                </tr>
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($item->nis); ?></td>
                        <td><?php echo e($item->nama); ?></td>
                        <td><?php echo e($item->jenis_kalamin); ?></td>
                        <td><?php echo e($item->kelas); ?></td>
                        <td>
                            <a href="<?php echo e(route('siswa.edit', $item->id)); ?>" class="btn btn-sm btn-warning text-white">
                                Edit
                            </a>
                            <a href="<?php echo e(route('siswa.hapus', $item->id)); ?>"
                                onclick="return confirm('Hapus data - <?php echo e($item->nama); ?>')"
                                class="btn btn-sm btn-danger">Hapus</a>

                            <?php if($item->status == 1): ?>
                                <button wire:click="nonaktif(<?php echo e($item->id); ?>)"
                                    class="btn btn-sm btn-default">Nonaktifkan</button>
                            <?php else: ?>
                                <button wire:click="aktif(<?php echo e($item->id); ?>)"
                                    class="btn btn-sm btn-success">Aktifkan</button>
                            <?php endif; ?>
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
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/siswa/index.blade.php ENDPATH**/ ?>