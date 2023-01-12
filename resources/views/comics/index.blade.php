@extends('layouts.main')

@section('content')
    <div class="jumbotron">
    </div>

    <main>
        <div class="container">
            <span class="tag">Current series</span>
            <div class="card-area">
            @forelse ($comics as $comic)
                <a href="{{route('comics.show', $comic)}}" class="card">
                    <div class="img-area">
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    </div>
                    <span>{{$comic->title}}</span>
                </a>
            @empty
                <h1>Nessun prodotto trovato</h1>
            @endforelse
        </div>
    </main>
@endsection
