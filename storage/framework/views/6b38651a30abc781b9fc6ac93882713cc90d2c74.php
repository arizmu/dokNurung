<div class="form-group">
    <label for="" class="label-control"><?php echo e($title); ?></label>
    <input type="<?php echo e($type); ?>" <?php echo e($status == false ? 'wire.model=' . $name : 'name=' . $name); ?>

        class="form-control" value="<?php echo e($value); ?>">
</div>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/components/form/input.blade.php ENDPATH**/ ?>