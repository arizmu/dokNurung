<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Hasil Penilaian</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h4><?php echo e($title->judul); ?></h4>
            <div class="row justify-content-between">
                <div class="col-4">
                    <select wire:model="paginate" class="form-control" style="width: 50pt;">
                        <option value="10" default>10</option>
                        <option value="25">25</option>
                        <option value="50">50</option>
                        <option value="100">100</option>
                    </select>
                </div>
                <div class="col-4">
                    <input type="text" class="form-control" wire:model="search">
                </div>
            </div>
        </div>
        <div class="card-body">
            <table class="table table-responsive table-hover table-bordered" style="width: 100%">
                <tr class="text-center">
                    <th>No</th>
                    <th>Nis</th>
                    <th style="width: 200pt">Nama Siswa</th>
                    <th style="width: 200pt">Sekolah</th>
                    <th>Soal Terjawab</th>
                    <th>Jumlah Soal</th>
                    <th>Score</th>
                    
                </tr>
                <?php
                    $number = 1;
                ?>
                <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <th><?php echo e($number++); ?></th>
                        <td><?php echo e($item->siswa->nis); ?></td>
                        <td><?php echo e($item->siswa->nama); ?></td>
                        <td><?php echo e($item->siswa->sekolah); ?></td>
                        <td><?php echo e($item->jumlah_soal_terjawaba); ?></td>
                        <td><?php echo e($item->jumlah_soal); ?></td>
                        <td><?php echo e($item->total_soore); ?></td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </table>
            
        </div>
        <div class="card-footer">
            <?php echo e($detail->links()); ?>

        </div>
    </div>
</div>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/hasiltest.blade.php ENDPATH**/ ?>