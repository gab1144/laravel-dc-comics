@extends('layouts.main')

@section('content')
    <div class="jumbotron">
    </div>

    <main>
        <div class="container">
            <span class="tag">Current series</span>
            <div class="card-area">
            @forelse ($comics as $comic)
                <div class="card">
                    <div class="img-area">
                        <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                    </div>
                    <span>{{$comic->title}}</span>
                    <div>
                        <a href="{{route('comics.show', $comic)}}"><i class="fa-solid fa-eye"></i></a>
                        <a href="{{route('comics.edit', $comic)}}"><i class="fa-solid fa-pencil"></i></a>
                        {{-- pre il DELETE occorre un form  --}}
                            {{-- <form
                                onsubmit="return confirm('Confermi l\'eliminazione di: {{$pasta->title}}')"
                                class="d-inline" action="{{route('pastas.destroy', $pasta)}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <button type="submit" class="btn btn-danger " title="delete"><i class="fa-solid fa-trash"></i></button>
                            </form> --}}

                            {{-- il form lo includo dai partial passando il parametro che mi serve --}}
                        @include('partials.form-delete',['title'=>$comic->title, 'id'=>$comic->id])
                    </div>
                </div>
            @empty
                <h1>Nessun prodotto trovato</h1>
            @endforelse
        </div>
    </main>
@endsection
