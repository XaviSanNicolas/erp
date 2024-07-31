@extends('app')
@section('content')
<form method='POST' action="{{route('insertTeacher')}}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" placeholder="Email" name="Correo_Electronico">
        </div>
        <div class="form-group col-md-3">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Nombre" name="">
        </div>
        <div class="form-group col-md-3">
            <label for="surname">Apellido</label>
            <input type="apellido" class="form-control" id="surname" placeholder="Apellido" name="Apellido">
        </div>
    </div>
    <div class="form-group">
        <label for="address">Direccion</label>
        <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="Direccion">
    </div>
    <div class="form-group">
        <label for="phone">Teléfono de contacto</label>
        <input type="text" class="form-control" id="phone" placeholder="Número">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="gender">Genero</label>
            <input type="text" class="form-control" id="gender">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-2">
            <label class="form-label" for="rol"> Rol</label>
            <input class="form-control" type="text" id="rol" name="Rol">
        </div>
    </div>
    <div class="form-group">
        <div class="date col-md-6">
            <label class="form-label" for="birth-date"> Fecha nacimiento:
                <input class="form-input" type="date" id="birth-date" name="Fecha_Nacimiento">
            </label>
        </div>
        <div class="date col-md-6">
            <label class="form-label" for="ini-date"> Fecha de inicio:
                <input class="form-input" type="date" id="ini-date" name="Fecha_Inicio">
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Sign in</button>
</form>
@endsection
