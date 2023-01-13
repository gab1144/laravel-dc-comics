@extends('layouts.main')

@section('content')
    <div class="jumbotron">
    </div>

    <main>
        <div class="container">
            <span class="tag">Current series</span>

            @if (session('deleted'))
                <div>
                    <div class="alert" role="alert">
                        {{session('deleted')}}
                    </div>
                </div>
            @endif

            <div class="card-area">
            @forelse ($comics as $comic)
                <div class="card">
                    <div class="img-area">
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    </div>
                    <span>{{$comic->title}}</span>
                    <div class="options">
                        <a href="{{route('comics.show', $comic)}}"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{route('comics.edit', $comic)}}"><i class="fa-solid fa-pencil"></i></a>
                        @include('partials.form-delete',['title'=>$comic->title, 'id'=>$comic->id])
                    </div>
                </div>
            @empty
                <h1>Nessun prodotto trovato</h1>
            @endforelse
        </div>
    </main>
@endsection
