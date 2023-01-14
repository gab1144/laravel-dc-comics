@extends('layouts.main')

@section('content')
    <div class="jumbotron">
    </div>

    <main class="main-comic-detail">
        <div class="img-area-comic-detail">
            <div class="smaller container">
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
            </div>
        </div>
        <div class="smaller container">
            <div class="detail-area">
                <div class="details">

                    <h1 class="main-title-show">{{$comic->title}}</h1><div class="options-show black-text">
                        <a href="{{route('comics.edit', $comic)}}"><i class="fa-solid fa-pencil"></i></a>
                        @include('partials.form-delete',['title'=>$comic->title, 'id'=>$comic->id])
                    </div>
                    <div class="price-area">
                        <div class="price">
                            <div>
                                <span>U.S. Price:</span> {!! $comic->price !!}
                            </div>
                            <div class="is-available">
                                available
                            </div>
                        </div>
                        <div class="avaiability">
                            Check Avaiability <span>&#9660;</span>
                        </div>
                    </div>
                    <p>
                        {!! $comic->description !!}
                    </p>
                </div>
                <div class="adv">
                    <span>Advertisment</span>
                    <img src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="Adv">
                </div>
            </div>
            </div>
            <div class="button-container">
                <a class="button-back-to-home" href="{{route('comics.index')}}">Torna all'elenco dei fumetti</a>
            </div>
        </div>
    </main>
@endsection
