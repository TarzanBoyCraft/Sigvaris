@extends('layouts.infoempleado')
@section('infoempleado')
	{{-- expr --}}
	<div>
		<ul class="nav nav-pills nav-justified">
			<li role="presentation" class="nav-item"><a href="{{ route('empleados.show',['empleado'=>$empleado]) }}"  class="nav-link">Generales:</a></li>

			<li role="presentation" class="nav-item"><a href="{{ route('empleados.datoslaborales.index',['empleado'=>$empleado]) }}" class="nav-link">Laborales:</a></li>

			<li role="presentation" class="nav-item"><a href="{{ route('empleados.estudios.index',['empleado'=>$empleado]) }}" class="nav-link active">Estudios:</a></li>

			<li role="presentation" class="nav-item"><a href="{{ route('empleados.emergencias.index',['empleado'=>$empleado]) }}" class="nav-link">Emergencias:</a></li>

			<li role="presentation" class="nav-item"><a href="{{ route('empleados.vacaciones.index',['empleado'=>$empleado]) }}" class="nav-link">Vacaciones:</a></li>

			<li role="presentation" class="nav-item"><a href="{{ route('empleados.faltas.index',['empleado'=>$empleado]) }}" class="nav-link">Administrativo:</a></li>
		</ul>
	</div>
	<div class="panel-default">
		<div class="panel-heading"><h5>Estudios:</h5></div>
		<div class="panel-body">
			<div class="row">
				<div class="form-group col-3">
					<label class="control-label" for="escolaridad1" id="lbl_escolaridad1">Escolaridad 1:</label>
					<dd>{{$estudios->escolaridad1}}</dd>
				</div>
				<div class="form-group col-3">
					<label class="control-label" for="institucion1" id="lbl_inst1">Institución:</label>
					<dd>{{ $estudios->institucion1 }}</dd>
				</div>
				<div class="form-group col-3">
					<label class="control-label" for="cedula1" id="lbl_cedula">Número de Cédula:</label>
					<dd>"{{ $estudios->cedula1 }}</dd>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-3">
					<label class="control-label" for="escolaridad2" id="lbl_escolaridad2">Escolaridad 2:</label>
					<dd>{{$estudios->escolaridad2}}</dd>
				</div>
				<div class="form-group col-3">
					<label class="control-label" for="institucion2" id="lbl_inst2">Institución:</label>
					<dd>{{ $estudios->institucion2 }}</dd>
				</div>
				<div class="form-group col-3">
					<label class="control-label" for="cedula2" id="lbl_cedula2">Número de Cédula:</label>
					<dd>{{ $estudios->cedula2 }}</dd>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-3">
					<label class="control-label" for="idioma1" id="lbl_idioma">Idioma:</label>
					<dd>{{$estudios->idioma1}}</dd>
				</div>
				<div class="form-group col-3">
					<label class="control-label" for="nivel1" id="lbl_nivel">Nivel:</label>
					<dd>{{$estudios->nivel1}}</dd>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-3">
					<label class="control-label" for="idioma2" id="lbl_idioma">Idioma:</label>
					<dd>{{$estudios->idioma2}}</dd>
				</div>
				<div class="form-group col-3">
					<label class="control-label" for="nivel2" id="lbl_nivel">Nivel:</label>
					<dd>{{$estudios->nivel2}}</dd>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-3">
					<label class="control-label" for="idioma3" id="lbl_idioma">Idioma:</label>
					<dd>{{$estudios->idioma3}}</dd>
				</div>
				<div class="form-group col-3">
					<label class="control-label" for="nivel3" id="lbl_nivel">Nivel:</label>
					<dd>{{$estudios->nivel3}}</dd>
				</div>
			</div>
			<div class="row">
				<div class="form-group col-4">
					<label class="control-label" for="curso1" id="lbl_curso">Curso:</label>
					<dd>{{ $estudios->curso1 }}</dd>
					<div class="boton checkbox-disabled">
					<label>¿Certificación?</label>
					@if ($estudios->certificado1 == 1)
						{{-- expr --}}
						<dd>Si</dd>
					@else
						<dd>No</dd>
					@endif
				</div>
			</div>
			<div class="form-group col-4">
					<label class="control-label" for="curso2" id="lbl_curso">Curso 2:</label>
					<dd>{{ $estudios->curso2 }}</dd>
					<div class="boton checkbox-disabled">
					<label>¿Certificación?</label>
					@if ($estudios->certificado2 == 1)
						{{-- expr --}}
						<dd>Si</dd>
					@else
						<dd>No</dd>
					@endif
				</div>
			</div>
			<div class="form-group col-4">
					<label class="control-label" for="curso3" id="lbl_curso">Curso 3:</label>
					<dd>{{ $estudios->curso3 }}</dd>
					<div class="boton checkbox-disabled">
					<label>¿Certificación?</label>
					@if ($estudios->certificado2 == 1)
						{{-- expr --}}
						<dd>Si</dd>
					@else
						<dd>No</dd>
					@endif
				</div>
			</div>
			<a class="btn btn-info btn-md" href="{{ route('empleados.estudios.edit',['empleado'=>$empleado,'estudio'=>$estudios]) }}">Editar</a>
		</div>
	</div>
@endsection