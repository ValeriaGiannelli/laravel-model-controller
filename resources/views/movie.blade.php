{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')
<h1>FILMs</h1>

<div class="container my-5 d-flex flex-wrap gap-3">
    @foreach ( $movies as $movie)
        <div class="card" style="width: 18rem;">
            <img src="{{Vite::asset('../../resources/img/polli.jpg')}}" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Titolo: {{$movie->title}}</h5>
            @if($movie->title !== $movie->original_title)
                <h5 class="card-title">Titolo originale: {{$movie->original_title}}</h5>
            @endif
            <h5 class="card-title">Nazionalità: {{$movie->nationality}}</h5>
            <h5 class="card-title">Voto: {{$movie->vote}} /10</h5>
            <a href="#" class="btn btn-primary">Dettagli</a>
            </div>
        </div>
    @endforeach

</div>

@endsection


@section('titlePage')
    movie
@endsection
