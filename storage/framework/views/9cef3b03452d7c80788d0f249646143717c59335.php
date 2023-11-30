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
        
        <div class="card-body">
            <?php if(!$status): ?>
                <table class="table table-bordered">
                    <tr>
                        <th>No.</th>
                        <th>Penilaian</th>
                        <th>Jumlah Soal</th>
                        <th>Jumlah Peserta Test</th>
                        <th>#</th>
                    </tr>
                    <?php
                        $number = 1;
                    ?>
                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($number++); ?></td>
                            <td><?php echo e($item->judul); ?></td>
                            <td><?php echo e($item->soal->count()); ?></td>
                            <td><?php echo e($item->tests->count()); ?></td>
                            <th>
                                <?php if($item->tests->count() > 0): ?>
                                    
                                    <a href="<?php echo e(route('hasil.test', $item->id)); ?>" class="btn btn-info">
                                        Detail
                                    </a>
                                <?php endif; ?>
                            </th>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            <?php endif; ?>

            <?php if($status): ?>
                <a href="<?php echo e(route('hasil')); ?>" class="btn btn-danger mb-2">Kembali</a>

                <div class="mb-2">
                    <h4><?php echo e($first->penilaian->judul); ?></h4>
                </div>
                <table class="table table-bordered">
                    <tr>
                        <th>Nama Siswa</th>
                        <th>Nis</th>
                        <th>Soal Terjawab</th>
                        <th>Jumlah Soal</th>
                        <th>Score</th>
                        
                    </tr>
                    <?php $__currentLoopData = $detail; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($item->nama); ?></td>
                            <td><?php echo e($item->nis); ?></td>
                            <td><?php echo e($item->jumlah_soal_terjawaba); ?></td>
                            <td><?php echo e($item->jumlah_soal); ?></td>
                            <td><?php echo e($item->total_soore); ?></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </table>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/penilaian/hasil.blade.php ENDPATH**/ ?>