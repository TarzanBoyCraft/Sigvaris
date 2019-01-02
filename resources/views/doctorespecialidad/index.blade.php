@extends('principal')
@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
        <h5>Mostrar Doctor</h5>
        </div>
    </div>
    <div class="card-body">
            <div class="row">
                <div class="col-3 form-group">
                    <label class="control-label">✱Nombre:</label>
                    <input value="{{$doctor->nombre}}" readonly type="text" name="nombre" class="form-control" required="">
                </div>
                <div class="col-3 form-group">
                    <label class="control-label">Apellido Paterno:</label>
                    <input value="{{$doctor->apellidopaterno}}" readonly type="text" name="apellidopaterno" class="form-control" required="">
                </div>
                <div class="col-3 form-group">
                    <label class="control-label">Apellido Materno:</label>
                    <input value="{{$doctor->apellidomaterno}}" readonly type="text" name="apellidomaterno" class="form-control">
                </div>
                <div class="col-3 form-group">
                    <label class="control-label">Celular:</label>
                    <input value="{{$doctor->celular}}" readonly type="number" name="celular" class="form-control" required="">
                </div>
            </div>
            <div class="row">
                <div class="col-3 form-group">
                    <label class="control-label">Correo:</label>
                    <input value="{{$doctor->mail}}" readonly type="mail" name="mail" class="form-control">
                </div>
                <div class="col-3 form-group">
                    <label class="control-label">Fecha nacimiento:</label>
                    <input value="{{$doctor->nacimiento}}" readonly type="date" name="nacimiento" class="form-control" required="">
                </div>
            </div>
            <div class="row">
                <ul class="nav nav-pills nav-justified">
                    <li role="presentation" class="nav-item"><a href="{{ route('doctores.consultorios.index', ['doctor' => $doctor]) }}"  class="nav-link">Consultorios:</a></li>
                    <li role="presentation" class="nav-item"><a href="{{ route('doctores.especialidades.index', ['doctor' => $doctor]) }}" class="nav-link active">Especialidades:</a></li>
                    <li role="presentation" class="nav-item"><a href="{{ route('doctores.premios.index', ['doctor' => $doctor]) }}" class="nav-link">Premios:</a></li>
                </ul>
            </div>
            <div class="row my-5">
                <div class="col-4 px-5"><h4>Especialidades</h4></div>
                <div class="col-4 px-5">
                    <a class="btn btn-success" href="{{ route('doctores.especialidades.create', ['doctor'=>$doctor]) }}">Crear nuevo</a>
                </div>   
            </div>
            <div class="row">
                <table class="table table-striped table-bordered table-hover" style="color:rgb(51,51,51); border-collapse: collapse; margin-bottom: 0px;">
                    <thead>
                        <tr class="info">
                            <th>Nombre</th>
                            <th>Cédula</th>
                            <th>Borrar</th>
                        </tr>
                    </thead>
                    @foreach ($doctor->especialidades as $especialidad)
                        <tr>
                            <td>{{$especialidad->nombre}}</td>
                            <td>{{$especialidad->cedula}}</td>
                            <td><button type="button" class="btn btn-danger">Borrar</button></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>

</div>

@endsection