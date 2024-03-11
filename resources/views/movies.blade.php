@extends('layouts.main')

@section('main-content')

<h1>Lista film</h1>

<section id=movies>
    <div class="row row-cols-4">
        @forelse($movies as $movie)
        <div class="col">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">{{$movie->title}}</h5>
                    <h6 class="card-subtitle mb-2 text-body-secondary">Titolo originale: {{$movie->original_title}}</h6>
                    <p class="card-text">Nazionalità: {{$movie->nationality}}</p>
                    <span>Voto: {{$movie->vote}}</span>
                    <a href="#" class="card-link">Card link</a>                
                </div>
            </div>
        </div>
    </div>

    @empty
        <div class="col-12">
        <h3>Al momento non ci sono film disponibili</h3>
        </div>
    @endforelse
</section>

@endsection