@extends('layouts.app')
@section('title', __('Dashboard'))
@section('content')
<div class="container-fluid">
<div class="row justify-content-center">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header"><h5><span class="text-center fa fa-home"></span> @yield('title')</h5></div>
			<div class="card-body">
				<h5>Hola <strong>{{ Auth::user()->name }},</strong> {{ __('Te has logueado en el sistema ') }}{{ config('app.name', 'Laravel') }}</h5>
				</br> 
				
				<a href="http://127.0.0.1:8000/" class="btn btn-info">Comencemos</a>
				
				<hr>
								
							
			</div>
		</div>
	</div>
</div>
</div>
@endsection