<div class="form-group row">
    <label for="" class="col-md-3"><?php echo e($title); ?></label>
    <div class="col-md-9">
        <textarea type="<?php echo e($type); ?>" class="form-control <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>is-invalid
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>"
            <?php echo e($isLivewire ? 'wire:model' : 'name'); ?>="<?php echo e($name); ?>">
        </textarea>
        <?php $__errorArgs = [$name];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <span class="error text-danger"> <?php echo e($message); ?></span>
        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/components/form/textarea-row.blade.php ENDPATH**/ ?>