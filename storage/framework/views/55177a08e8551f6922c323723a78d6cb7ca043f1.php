<div>
    <form wire:submit.prevent="update_password">
        <div class="card-body">

            <?php if(session()->has('message')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="d-flex justify-content-between">
                        <strong><?php echo e(session('message')); ?>!</strong>
                    </div>
                </div>
            <?php endif; ?>

            <?php if(session()->has('error')): ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <div class="d-flex justify-content-between">
                        <strong><?php echo e(session('error')); ?>!</strong>
                    </div>
                </div>
            <?php endif; ?>

            <div class="form-group row">
                <label for="" class="col-sm-3">
                    Password Lama
                </label>
                <div class="col-md-5">
                    <input type="text" class="form-control" wire:model="old_password">
                    <?php $__errorArgs = ['old_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="error text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-3">
                    Password Baru
                </label>
                <div class="col-md-5">
                    <input type="text" class="form-control" wire:model="new_password">
                    <?php $__errorArgs = ['new_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="error text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="form-group row">
                <label for="" class="col-sm-3">
                    Ulang Password Baru
                </label>
                <div class="col-md-5">
                    <input type="text" class="form-control" wire:model="cnf_password">
                    <?php $__errorArgs = ['cnf_password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <span class="error text-danger"><?php echo e($message); ?></span>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button class="btn btn-primary" type="submit">Simpan Perubahan</button>
        </div>
    </form>
</div>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/profile/update-password.blade.php ENDPATH**/ ?>