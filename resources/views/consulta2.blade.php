@extends('layouts.plantilla1')

@section('content')
<br>


<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
            <b><div class="card-header">{{ __('CONSULTA DE TODOS LOS EDITORES') }}</div></b>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <table class="table col-12">
                        <thread>
                            
                                <tr>
                                    
                                    <td><b>NOMBRE</b></td>
                                    <td><b>APELLIDO</b></td>
                                    <td><b>AREA</b></td>
                                    <td><b>EDAD</b></td>
                                    <td><b>TELEFONO</b></td>
                                    <td><b>DIRECCION</b></td>
                                    <td><b>DPI</b></td>
                                    <td><b>NIT</b></td>
                                    <td><b>ACCION</b></td>
                                    
                                </tr>
                            
                    </thread>
                        <tbody>
                            @foreach($editores as $editor)
                            
                            <tr>
                                <td>{{$editor->nombre}}</td>
                                <td>{{$editor->apellido}}</td>
                                <td>{{$editor->area}}</td>
                                <td>{{$editor->edad}}</td>
                                <td>{{$editor->telefono}}</td>
                                <td>{{$editor->direccion}}</td>
                                <td>{{$editor->dpi}}</td>
                                <td>{{$editor->nit}}</td>
                                <td>
                                <a href="{{route('eliminareditor',$editor->id)}}" class="btn btn-danger">Borrar</a>
                                </td>
                                <td>
                                <a href="{{route('muestraeditor',$editor->id)}}" class="btn btn-warning">Editar</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection