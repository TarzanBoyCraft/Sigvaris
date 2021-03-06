@extends('principal')
@section('content')
<div class="container">

	<div class="card">
		<form role="form" method="POST" action="{{ route('oficinas.update', ['oficina'=>$oficina]) }}">
        <input type="hidden" name="_method" value="PUT">
			<div class="card-header">
				<h1>Nueva Oficina </h1>
			</div>
			<div class="card-body">
				{{ csrf_field() }}
				<div class="row">
					<div class="form-group col-4">
						<label class="control-label" for="nombre"><i class="fa fa-asterisk" aria-hidden="true"></i> Nombre:</label>
						<input type="text" class="form-control" id="nombre" name="nombre" required autofocus value="{{$oficina->nombre}}">
					</div>
					<div class="form-group col-4">
						<label class="control-label" for="direccion"> <i class="fa fa-asterisk" aria-hidden="true"></i> Dirección:</label>
						<textarea class="form-control" name="direccion" required="" id="direccion" rows="3">{{$oficina->direccion}}</textarea>
					</div>
                    <div class="form-group col-4">
						<label class="control-label" for="responsable"><i class="fa fa-asterisk" aria-hidden="true"></i> Responsable:</label>
						<input type="text" class="form-control" id="responsable" name="responsable" required autofocus value="{{$oficina->responsable}}">
					</div>
				</div>
			</div>
			<div class="card-footer text-muted">
				<button type="submit" class="btn btn-success btn-lg btn-block">
					<strong>Guardar</strong>
				</button>
			</div>
	</div>

	</form>
</div>

@endsection