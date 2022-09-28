<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('libros')->html();
} elseif ($_instance->childHasBeenRendered('VdfGpOH')) {
    $componentId = $_instance->getRenderedChildComponentId('VdfGpOH');
    $componentTag = $_instance->getRenderedChildComponentTagName('VdfGpOH');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('VdfGpOH');
} else {
    $response = \Livewire\Livewire::mount('libros');
    $html = $response->html();
    $_instance->logRenderedChild('VdfGpOH', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
        </div>     
    </div>   
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud-laravel-libros\resources\views/livewire/libros/index.blade.php ENDPATH**/ ?>