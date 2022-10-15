@extends('layouts.plantilla1')

@section('content')
<br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('REGISTRO DE EDITOR') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('REGISTRO DE NUEVO EDITOR') }}
                    {{ session('status') }}

                    <form action="{{route('guardareditor')}}" method="POST">
                        @csrf
                        <br>
                        <label>
                            Nombre: <br>
                            <input name="nombre" type="text">
                        </label>
                        <label>
                            Apellido: <br>
                            <input name="apellido" type="text">
                        </label>
                        <label>
                            Area: <br>
                            <input name="area" type="text">
                        </label>
                        <label>
                            Edad: <br>
                            <input name="edad" type="text">
                        </label>
                        <label>
                            Telefono: <br>
                            <input name="telefono" type="text">
                        </label>
                        <label>
                            Direccion: <br>
                            <input name="direccion" type="text">
                        </label>
                        <label>
                            DPI: <br>
                            <input name="dpi" type="text">
                        </label>
                        <label>
                            NIT: <br>
                            <input name="nit" type="text">
                        </label>
                        <br>
                        <button type="submit"class="btn btn-danger">Guardar</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection