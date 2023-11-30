<div>
    <div class="row column_title">
        <div class="col-md-12">
            <div class="page_title">
                <h2>Profile</h2>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <button wire:click="informasi" class="btn <?php echo e($status ? 'btn-danger' : 'btn-info'); ?>">Data & Image</button>
            <button wire:click="password" class="btn <?php echo e(!$status ? 'btn-danger' : 'btn-info'); ?>">Password</button>
        </div>

        <?php if($status): ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-informasi')->html();
} elseif ($_instance->childHasBeenRendered('l3174131460-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l3174131460-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3174131460-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3174131460-0');
} else {
    $response = \Livewire\Livewire::mount('profile.update-informasi');
    $html = $response->html();
    $_instance->logRenderedChild('l3174131460-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php else: ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-password')->html();
} elseif ($_instance->childHasBeenRendered('l3174131460-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l3174131460-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l3174131460-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l3174131460-1');
} else {
    $response = \Livewire\Livewire::mount('profile.update-password');
    $html = $response->html();
    $_instance->logRenderedChild('l3174131460-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH C:\laragon\www\pro-naira\resources\views/livewire/profile/profile-index.blade.php ENDPATH**/ ?>