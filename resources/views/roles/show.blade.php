@extends('principal')
@section('content')
<div class="container">

    <div class="card">
            <div class="card-header">
                <h2>Rol {{$role->nombre}}</h2>
            </div>
            <div class="card-body">
                {{ csrf_field() }}
                <div class="row">
                    <div class="form-group col-6 offset-3">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">
                                Proveedores
                                <label class="switch ">
                                    <input disabled id="proveedores" type="checkbox" name="permisos[proveedores]" value="1" class="success">
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                Pacientes
                                <label class="switch ">
                                    <input disabled id="pacientes" type="checkbox" name="permisos[pacientes]" value="1" class="success">
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                Doctores
                                <label class="switch ">
                                    <input disabled id="doctores" type="checkbox" name="permisos[doctores]" value="1" class="success">
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                Recursos Humanos
                                <label class="switch ">
                                    <input disabled id="recursos_humanos" type="checkbox" name="permisos[recursos_humanos]" value="1" class="success">
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                Precargas
                                <label class="switch ">
                                    <input disabled id="precargas" type="checkbox" name="permisos[precargas]" value="1" class="success">
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                Punto de venta
                                <label class="switch ">
                                    <input disabled id="punto_de_venta" type="checkbox" name="permisos[punto_de_venta]" value="1" class="success">
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                Productos
                                <label class="switch ">
                                    <input disabled id="productos" type="checkbox" name="permisos[productos]" value="1" class="success">
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                C.R.M.
                                <label class="switch ">
                                    <input disabled id="crm" type="checkbox" name="permisos[crm]" value="1" class="success">
                                    <span class="slider"></span>
                                </label>
                            </li>
                            <li class="list-group-item">
                                Oficinas
                                <label class="switch ">
                                    <input disabled id="oficinas" type="checkbox" name="permisos[oficinas]" value="1" class="success">
                                    <span class="slider"></span>
                                </label>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
    </div>
</div>
<script>
$(document).ready(function(){
    let proveedores = $('#proveedores');
    let pacientes = $('#pacientes');
    let doctores = $('#doctores');
    let recursos_humanos = $('#recursos_humanos');
    let precargas = $('#precargas');
    let punto_de_venta = $('#punto_de_venta');
    let productos = $('#productos');
    let crm = $('#crm');
    let oficinas = $('#oficinas');
    
    proveedores_v = {{$role->proveedores}};
    pacientes_v = {{$role->pacientes}};
    doctores_v = {{$role->doctores}};
    recursos_humanos_v = {{$role->recursos_humanos}};
    precargas_v = {{$role->precargas}};
    punto_de_venta_v = {{$role->punto_de_venta}};
    productos_v = {{$role->productos}};
    crm_v = {{$role->crm}};
    oficinas_v = {{$role->oficinas}};

    if(proveedores_v == 1)
        proveedores.prop('checked', true);
    if(pacientes_v == 1)
        pacientes.prop('checked', true);
    if(doctores_v == 1)
        doctores.prop('checked', true);
    if(recursos_humanos_v == 1)
        recursos_humanos.prop('checked', true);
    if(precargas_v == 1)
        precargas.prop('checked', true);
    if(punto_de_venta_v_v == 1)
        punto_de_venta_v.prop('checked', true);
    if(productos_v == 1)
        productos.prop('checked', true);
    if(crm_v == 1)
        crm.prop('checked', true);
    if(oficinas_v == 1)
        oficinas.prop('checked', true);


});
</script>
@endsection