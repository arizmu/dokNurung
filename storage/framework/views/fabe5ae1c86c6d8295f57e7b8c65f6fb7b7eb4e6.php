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
} elseif ($_instance->childHasBeenRendered('l664719565-0')) {
    $componentId = $_instance->getRenderedChildComponentId('l664719565-0');
    $componentTag = $_instance->getRenderedChildComponentTagName('l664719565-0');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l664719565-0');
} else {
    $response = \Livewire\Livewire::mount('profile.update-informasi');
    $html = $response->html();
    $_instance->logRenderedChild('l664719565-0', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php else: ?>
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('profile.update-password')->html();
} elseif ($_instance->childHasBeenRendered('l664719565-1')) {
    $componentId = $_instance->getRenderedChildComponentId('l664719565-1');
    $componentTag = $_instance->getRenderedChildComponentTagName('l664719565-1');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('l664719565-1');
} else {
    $response = \Livewire\Livewire::mount('profile.update-password');
    $html = $response->html();
    $_instance->logRenderedChild('l664719565-1', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        <?php endif; ?>
    </div>
</div>
<?php /**PATH /home/u669691855/domains/gigikubersihdansehat.com/public_html/laravel/resources/views/livewire/profile/profile-index.blade.php ENDPATH**/ ?>