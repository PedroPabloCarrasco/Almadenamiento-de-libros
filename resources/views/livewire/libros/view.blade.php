@section('title', __('Libros'))
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
						@if (session()->has('message'))
						<div wire:poll.4s class="btn btn-sm btn-success" style="margin-top:0px; margin-bottom:0px;"> {{ session('message') }} </div>
						@endif
						<div>
							<input wire:model='keyWord' type="text" class="form-control" name="search" id="search" placeholder="Buscar Libros">
						</div>
						<div class="btn btn-sm btn-info" data-toggle="modal" data-target="#createDataModal">
						<i class="fa fa-plus"></i>  Agregar Libros
						</div>
					</div>
				</div>
				
				<div class="card-body">
						@include('livewire.libros.create')
						@include('livewire.libros.update')
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
							@foreach($libros as $row)
							<tr>
								<td>{{ $loop->iteration }}</td> 
								<td>{{ $row->isbn }}</td>
								<td>{{ $row->titulo }}</td>
								<td>{{ $row->numero_paginas }}</td>
								<td>{{ $row->descripcion }}</td>
								<td>{{ $row->portada }}</td>
								<td width="90">
								<div class="btn-group">
									<button type="button" class="btn btn-info btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Actions
									</button>
									<div class="dropdown-menu dropdown-menu-right">
									<a data-toggle="modal" data-target="#updateModal" class="dropdown-item" wire:click="edit({{$row->id}})"><i class="fa fa-edit"></i> Editar </a>							 
									<a class="dropdown-item" onclick="confirm('Confirmar que el libro {{$row->id}} \nse eliminará.')||event.stopImmediatePropagation()" wire:click="destroy({{$row->id}})"><i class="fa fa-trash"></i> Borrar </a>   
									</div>
								</div>
								</td>
							@endforeach
						</tbody>
					</table>						
					{{ $libros->links() }}
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
