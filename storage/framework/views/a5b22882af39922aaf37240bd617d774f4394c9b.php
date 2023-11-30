<?php if (isset($component)) { $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\Guest::class, [] + (isset($attributes) ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('guest'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $constructor = (new ReflectionClass(App\View\Components\Guest::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="">Nama Lengkap</label>
                            <h5>
                                <?php echo e($siswa->nama); ?>

                            </h5>
                        </div>
                        <div class="mb-3">
                            <label for="">Nis</label>
                            <h5>
                                <?php echo e($siswa->nis); ?>

                            </h5>
                        </div>
                        <div class="mb-3">
                            <label for="">Jenis Kelamin</label>
                            <h5>
                                <?php echo e($siswa->jenis_kalamin); ?>

                            </h5>
                        </div>
                        <div class="mb-3">
                            <label for="">Kelas</label>
                            <h5>
                                <?php echo e($siswa->kelas); ?>

                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="col-md-8">
                <div class="card">
                    <form action="<?php echo e(route('penilaian.selesai')); ?>" method="POST">
                        <?php echo csrf_field(); ?>
                        <input name="siswa" type="hidden" value="<?php echo e($siswa->id); ?>" readonly>
                        <input name="test" type="hidden" value="<?php echo e($test->id); ?>" readonly>
                        <input name="jml_soal" type="hidden" value="<?php echo e($test->jumlah_soal); ?>">
                        <div class="card-header">
                            <h5>
                                <?php echo e($test->judul); ?>

                            </h5>
                            <p>
                                <?php if($test->img): ?>
                                    <img src="<?php echo e(asset('storage/' . $test->img)); ?>" alt="">
                                <?php endif; ?>
                                <?php echo $test->deskripsi; ?>

                            </p>
                            <p>
                                <label for="">Jumlah Soal - <?php echo e($test->jumlah_soal); ?></label>
                            </p>
                        </div>
                        <div class="card-body">
                            <?php
                                $number = 1;
                            ?>
                            <?php $__currentLoopData = $test->soal; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $soal): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <table class="table table-bordered">
                                    <tr>
                                        <th rowspan="5" style="width: 30pt; text-align: center"><?php echo e($number++); ?>

                                        </th>
                                        <?php if($soal->img): ?>
                                            <img src="<?php echo e(asset('storage/' . $soal->img)); ?>" alt=""
                                                width="300pt">
                                            <br>
                                        <?php endif; ?>
                                        <th colspan="2"><?php echo $soal->soal_teks; ?></th>
                                    </tr>
                                    <?php $__currentLoopData = $soal->jawaban; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                            <td style="width: 50pt; text-align: center">
                                                <input type="radio" name="jawaban[<?php echo e($soal->id); ?>]"
                                                    value="<?php echo e($soal->id . '-' . $soal->soal_teks . '-' . $item->id . '-' . $item->jawaban . '-', $item->score); ?>">
                                            </td>
                                            <td>
                                                <?php if($item->img): ?>
                                                    <img src="<?php echo e(asset('storage/' . $item->img)); ?>" alt=""
                                                        width="300pt">
                                                    <br>
                                                <?php endif; ?>
                                                <?php echo $item->jawaban; ?>

                                            </td>
                                        </tr>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </table>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </div>
                        <div class="card-footer text-center">

                            <?php if(\Session::has('msg')): ?>
                                <div class="alert alert-warning mt-3">
                                    <span>
                                        jawaban dicek kembali sebelum menyelesaikan.
                                    </span>
                                </div>
                            <?php endif; ?>

                            
                            <button class="btn btn-lg btn-danger" type="submit">
                                SIMPAN JAWABAN
                            </button>
                            

                            
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b)): ?>
<?php $component = $__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b; ?>
<?php unset($__componentOriginalf38cba0adb17dec84da34b93cc9732766bf43f3b); ?>
<?php endif; ?>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/pages/penilaian/test.blade.php ENDPATH**/ ?>