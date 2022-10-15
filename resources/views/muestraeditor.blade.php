@extends('layouts.plantilla2')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('EDITAR EDITOR') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Ingrese La Nueva Informacion') }}
                    {{ session('status') }}

                    <form action="{{route('editareditor', $editor->id)}}" method="POST">
                        @csrf
                       
                        <label>
                            Nombre: <br>
                            <input name="nombre" type="text" value="{{$editor->nombre}}">
                        </label>
                        <label>
                            Apellido: <br>
                            <input name="apellido" type="text" value="{{$editor->apellido}}">
                        </label>
                        <label>
                            Area: <br>
                            <input name="area" type="text" value="{{$editor->area}}">
                        </label>
                        <label>
                            Edad: <br>
                            <input name="edad" type="text" value="{{$editor->edad}}">
                        </label>
                        <label>
                            Telefono: <br>
                            <input name="telefono" type="text" value="{{$editor->telefono}}">
                        </label>
                        <label>
                            Direccion: <br>
                            <input name="direccion" type="text" value="{{$editor->direccion}}">
                        </label>
                        <label>
                            DPI: <br>
                            <input name="dpi" type="text" value="{{$editor->dpi}}">
                        </label>
                        <label>
                            NIT: <br>
                            <input name="nit" type="text" value="{{$editor->nit}}">
                        </label>
                        <br>
                        <button type="submit"class="btn btn-danger">Guardar Cambios</button>
                        <a href="{{route('cancelaaccion')}}" class="btn btn-warning">Cancelar</a>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection