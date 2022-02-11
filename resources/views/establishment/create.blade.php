@extends('layouts.app')

@section('content')
	<div class="container">
		<h1 class="text-center mt-4">Registrar Establecimiento</h1>
        <div class="mt-5 row justify-content-center">
        	<form class="col-md-9 col-xs-12 card card-body">
        		<fieldset class="border p-4">

        			<legend class="text-primary">Nombre, Categoria e Imagen Principal</legend>
        			<div class="form-group">
        				<label for="name">Nombre Establecimiento</label>
        				<input type="text" name="name" class="form-control @error('nombre') is-invalid @enderror" placeholder="Nombre Establecimiento" value="{{ old('name') }}" id="name">
        				@error('name')
                            <div class="invalid-feedback">
                           	   {{$message}} 
                            </div>
        				@enderror
        			</div>

        			<div class="form-group">
        				<label for="categorie">Categoria</label>
        				<select class="form-control @error('categorie_id') is-invalid @enderror" name="categorie_id" id="categorie">
        					<option value="" selected disabled>Seleccione</option>
        					@foreach($categorie as $item)
                              
                              	<option value="{{$item->id}}" {{old('categorie_id') == $item->id ? 'selected' : ''}}>{{$item->name}}</option>
        					@endforeach
        				</select>
        			</div>
        			
        			<div class="form-group">
        				<label for="image_primary">Imagen Principal</label>
        				<input type="file" name="image" class="form-control @error('image_primary') is-invalid @enderror" value="{{ old('image_primary') }}" id="image_primary">
        				@error('image_primary')
                            <div class="invalid-feedback">
                           	   {{$message}} 
                            </div>
        				@enderror
        			</div>

        		</fieldset>

        		<fieldset class="border p-4 mt-1">

        			<legend class="text-primary">Ubcacion</legend>

        			<div class="form-group">
        				<label for="formbuscador">Coloca la direeccion del Establecimiento</label>
        				<input type="text" class="form-control" placeholder="direccion del establecimiento o negocio" id="formbuscador">
        				<p class="text-secondary mt-5 mb-3 text-center">El asistente colocara una direccion estimada, mueve el pin hacia el lugar correcto</p>
        			</div>
        		</fieldset>	
        	</form>
        </div>
	</div>
@endsection