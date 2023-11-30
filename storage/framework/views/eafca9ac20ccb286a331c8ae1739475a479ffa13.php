<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Penilaian</h2>
                    </div>
                    <div class="col-md-6 text-right">
                        <a href="<?php echo e(route('penilaian.create')); ?>" class="btn btn-primary">
                            <span class="fa fa-pencil "></span> Tambah Baru
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            
        </div>
        <div class="card-body">
            <div class="row mx-auto">
                <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-md-4">
                        <div class="card mt-3">
                            <img class="card-img-top"
                                src="<?php echo e($item->img ? $item->img : 'https://cdn-icons-png.flaticon.com/512/1088/1088537.png'); ?>"
                                alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo e($item->judul); ?></h5>
                                Status :
                                <?php if($item->status == '1'): ?>
                                    <small class="badge badge-success">Publish</small>
                                <?php else: ?>
                                    <small class="badge badge-warning text-white">Draft</small>
                                <?php endif; ?>
                                <p class="card-text font-weight-normal">
                                    Jumlah Soal : <?php echo e($item->soal->count()); ?>

                                    
                                </p>
                            </div>
                            <div class="card-footer">
                                <a href="<?php echo e(route('create.soal', $item->id)); ?>"
                                    class="btn btn-sm btn-warning text-white">Edit</a>
                                <button class="btn btn-sm btn-danger"
                                    wire:click="hapus(<?php echo e($item->id); ?>)">Hapus</button>
                                <a href="<?php echo e(route('penilaian.lihat', $item->id)); ?>"
                                    class="btn btn-sm btn-info">Lihat</a>

                                <?php if($item->status == '1'): ?>
                                    <button class="btn btn-default" wire:click="nonaktif(<?php echo e($item->id); ?>)">
                                        Nonaktif
                                    </button>
                                <?php else: ?>
                                    <button class="btn btn-success btn-sm"
                                        wire:click="aktif(<?php echo e($item->id); ?>)">Aktif</button>
                                <?php endif; ?>

                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>
    </div>
</div>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/penilaian/penilaian-index.blade.php ENDPATH**/ ?>