<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <div class="row">
                    <div class="col-md-6">
                        <h2>Detail Soal</h2>
                    </div>
                    <div class="col-md-6 text-right">

                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card mb-2">
        <div class="card-body">
            <h3><?php echo e($data->judul); ?></h3>
            <p>
                <?php echo e($data->deskripsi); ?>

            </p>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h5>List Soal</h5>
        </div>
        <div class="card-body">
            <?php $__currentLoopData = $data->soal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <table class="table table-bordered">
                    <tr>
                        <th class="">
                            <div class="row">
                                <div class="col-md-10">
                                    <?php echo e($item->soal_teks); ?>

                                </div>
                                <div class="col-md-2 text-right">
                                    
                                </div>
                            </div>
                        </th>
                    </tr>
                    <tr>
                        <td>
                            <?php $__currentLoopData = $item->jawaban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $val): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="row">
                                    <div class="col-md-2">
                                        <i class="fa fa-check mr-3"></i>
                                        [<?php echo e($val->score); ?>]
                                    </div>
                                    <div class="col-md-6">
                                        <?php echo e($val->jawaban); ?> HTML also supports description lists.
                                        HTML also supports description lists.
                                        A description list is a list of terms, with a description of each term.
                                        A description list is a list of terms, with a description of each term.<br>
                                    </div>
                                    <div class="col-md-4"></div>
                                </div>
                                <hr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </td>
                    </tr>
                </table>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/penilaian/lihat.blade.php ENDPATH**/ ?>