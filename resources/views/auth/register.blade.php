@extends('store.template')


@section('content')

@include('store.partials.errors')


<form method="POST" action="/auth/register">
    {!! csrf_field() !!}

    <div class="container text-center">
        <div class="page-header">
            <h1 style="color: white;"><i class="fa fa-user"></i> Registrate</h1>
        </div>
            <div class="form-group">
                 <label style="color: black;font-size: 30px">Nombre</label>
                 <input class="form-control" type="text" name="nombre" value="{{ old('name') }}">
             </div>

            <div class="form-group">
                <label style="color: black;font-size: 30px">Apellido</label>
                <input class="form-control" type="text" name="apellido" value="{{ old('last_name') }}">
             </div>

             <div class="form-group">
                <label style="color: black;font-size: 30px">Correo</label>
                <input class="form-control" type="email" name="email" value="{{ old('email') }}">
             </div>

               <div class="form-group">
                <label style="color: black;font-size: 30px">Direccion</label>
                <input class="form-control" type="text" name="address" required value="{{ old('address') }}">
             </div>

              <div class="form-group">
                <label style="color: black;font-size: 30px">Usuario</label>
                <input class="form-control" type="text" name="user" required value="{{ old('user') }}">
             </div>

             <div class="form-group">
                <label style="color: black;font-size: 30px">Contraseña</label>
                <input class="form-control" type="password" name="password" value="{{ old('password') }}">
             </div>

               <div class="form-group">
                <label style="color: black;font-size: 30px">Confirmar Contraseña</label>
                <input class="form-control" required type="password" name="password_confirmation">
                </div>
                
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit">Registrarme</button>
            </div>


    </div>

</form>

@stop


































    