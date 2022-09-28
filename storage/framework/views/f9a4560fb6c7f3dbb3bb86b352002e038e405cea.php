<?php $__env->startSection('title', __('Dashboard')); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header"><h5><span class="text-center fa fa-home"></span> <?php echo $__env->yieldContent('title'); ?></h5></div>
			<div class="card-body">
				<h5>Hola <strong><?php echo e(Auth::user()->name); ?>,</strong> <?php echo e(__('Te has logueado en el sistema ')); ?><?php echo e(config('app.name', 'Laravel')); ?></h5>
				</br> 
				
				<a href="http://127.0.0.1:8000/" class="btn btn-info">Comencemos</a>
				
				<hr>
								
							
			</div>
		</div>
	</div>
</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\crud-laravel-libros\resources\views/home.blade.php ENDPATH**/ ?>