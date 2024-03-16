@extends('app')
@section('content')
<section class="students__container">
    @foreach ($estudiante as $estud)
    <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="..." alt="Card image cap">
        <div class="card-body">
            <h5 class="card-title"> {{$estud->Nombre}} {{$estud->Apellido}} </h5>
            <p class="card-text">{{$estud->Apellido}} example text to build on the card title and make up the bulk of the card's content.</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
    </div>
    @endforeach
</section>
@endsection
