<?php $__env->startSection('title', __('Libros')); ?>
<div class="container-fluid">
	<div class="row justify-content-center">
		<div class="col-md-12">
			<div class="card">
				<div class="card-header">
					<div style="display: flex; justify-content: space-between; align-items: center;">
						<div class="float-left">
							<h4><i class="fab fa-laravel text-info"></i>
							Almacenamiento de libros </h4>
						</div>
						<div wire:poll.60s>
							<h5>Tchile</h5>
						</div>
						<?php if(session()->has('message')): ?>
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> <?php echo e(session('message')); ?> </div>
						<?php endif; ?>
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Libros">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Agregar Libros
						</div>
					</div>
				</div>
				
				<div class="card-body">
						<?php echo $__env->make('livewire.libros.create', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
						<?php echo $__env->make('livewire.libros.update', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
				<div class="table-responsive">
					<table class="table table-bordered table-sm">
						<thead class="thead">
							<tr> 
								<td>#</td> 
								<th>Isbn</th>
								<th>Titulo</th>
								<th>Numero Paginas</th>
								<th>Descripción</th>
								<th>Portada</th>
								<td>Acciones</td>
							</tr>
						</thead>
						<tbody>
							<?php $__currentLoopData = $libros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<tr>
								<td><?php echo e($loop->iteration); ?></td> 
								<td><?php echo e($row->isbn); ?></td>
								<td><?php echo e($row->titulo); ?></td>
								<td><?php echo e($row->numero_paginas); ?></td>
								<td><?php echo e($row->descripcion); ?></td>
								<td><?php echo e($row->portada); ?></td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit(<?php echo e($row->id); ?>)"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirmar que el libro <?php echo e($row->id); ?> \nse eliminará.')||event.stopImmediatePropagation()" wire:click="destroy(<?php echo e($row->id); ?>)"><i class="fa fa-trash"></i> Borrar </a>   
									</div>
								</div>
								</td>
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</tbody>
					</table>						
					<?php echo e($libros->links()); ?>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<footer>
	<div class="card text-center">
		<div class="card-header">
		  
		</div>
		<div class="card-body">
		  <h5 class="card-title">Desarrollo web Tchile</h5>
		  <p class="card-text">Desarrollado por: Pedro Pablo Carrasco.</p>
		  
		</div>
	  </div>
</footer>
<?php /**PATH C:\xampp\htdocs\crud-laravel-libros\resources\views/livewire/libros/view.blade.php ENDPATH**/ ?>