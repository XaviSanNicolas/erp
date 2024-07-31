@extends('app')
@section('content')
<section class="teachers__container">
    @foreach ($docente as $docen)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"> {{$docen->Nombre}} {{$docen->Apellido}} </h5>
            <p class="card-text">{{$docen->Apellido}} example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
</section>
@endsection
