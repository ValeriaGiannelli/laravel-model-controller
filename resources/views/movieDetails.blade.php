{{-- questa view estende il file main.blade.php che è dentro la cartella view/layouts --}}
@extends('layouts.main')


@section('content')


<div class="container my-5">

    <div class="card" style="width: 18rem;">
        <img src="{{Vite::asset('../../resources/img/polli.jpg')}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">Titolo: {{$movie->title}}</h5>
            @if($movie->title !== $movie->original_title)
                <h5 class="card-title">Titolo originale: {{$movie->original_title}}</h5>
            @endif
            <h5 class="card-title">Nazionalità: {{$movie->nationality}}</h5>
            <h5 class="card-title">Voto: {{$movie->vote}} /10</h5>
            <h5>Anno: {{ $movie->date->format('d-m-Y')}}</h5>
        </div>
    </div>

</div>

@endsection


@section('titlePage')
    dettaglio libro
@endsection
