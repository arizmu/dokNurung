<div class="container-xxl py-5">
    <div class="container">

        <div class="py-2" style="max-width: 500px; margin-left:-3pt">
            <h1 class="display-6 mb-3">Team Members</h1>
        </div>
        <div class="row g-4">
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="card shadow">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-thumbnail shadow" src="<?php echo e('storage/' . $item->img); ?>" alt=""
                                    style="width: 200px;">
                            </div>
                            <div class="col-md-9
                                        p-3">
                                <button href="#" class="btn btn-primary">
                                    <?php echo e($item->jabatan->kategori); ?>

                                </button>
                                <h5 class="card-title mt-3">
                                    <?php echo e($item->name); ?>

                                </h5>
                                <p class="card-text">
                                    <?php echo e($item->teks); ?>

                                </p>
                                <hr>
                                <p class="card-text">
                                    <span style="font-weight: bold">PENDIDIKAN</span> : <?php echo e($item->pendidikan); ?>

                                    
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
</div>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/team/p-team.blade.php ENDPATH**/ ?>