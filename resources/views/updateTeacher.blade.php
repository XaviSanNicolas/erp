@extends('app')
@section('content')
<form method='POST' action="{{route('updatedTeacher')}}">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-3">
            <label for="inputEmail4">Email</label>
            <input type="email" class="form-control" id="inputEmail4" value="{{$teacher->Correo_Electronico}}" name="Correo_Electronico">
        </div>
        <div class="form-group col-md-3">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" placeholder="Nombre" name="Nombre" value="{{$teacher->Nombre}}">
        </div>
        <div class="form-group col-md-3">
            <label for="surname">Apellido</label>
            <input type="apellido" class="form-control" id="surname" placeholder="Apellido" name="Apellido" value="{{$teacher->Apellido}}">
        </div>
    </div>
    <div class="form-group">
        <label for="address">Direccion</label>
        <input type="text" class="form-control" id="address" placeholder="1234 Main St" name="Direccion" value="{{$teacher->Direccion}}">
    </div>
    <div class=" form-group">
        <label for="phone">Teléfono de contacto</label>
        <input type="text" class="form-control" id="phone" placeholder="Número" name="Telefono_Contacto" value="{{$teacher->Telefono_Contacto}}">
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="gender">Genero</label>
            <input type="text" class="form-control" id="gender" value="{{$teacher->Genero}}">
        </div>
    </div>
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="rol">Rol</label>
            <input type="text" class="form-control" id="rol" value="{{$teacher->Rol}}">
        </div>
    </div>
    <div class="form-group">
        <div class="date col-md-6">
            <label class="form-label" for="birth-date"> Fecha nacimiento:
                <input class="form-input" type="date" id="birth-date" name="Fecha_Nacimiento" value="{{$teacher->Fecha_Nacimiento}}">
            </label>
        </div>
        <div class="date col-md-6">
            <label class="form-label" for="reg-date"> Fecha inicio:
                <input class="form-input" type="date" id="reg-date" name="Fecha_Inicio" value="{{$teacher->Fecha_Inicio}}">
            </label>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Update info</button>
</form>
@endsection
