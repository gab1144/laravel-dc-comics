@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Inserimento nuova pasta</h1>

        <form action="{{route('comics.update', $comic)}}" method="POST">
            @csrf
            @method('PUT');
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Inserire il titolo" value="{{$comic->title}}">
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Descrizione</label>
              <textarea class="form-control" name="description" id="description" rows="3">{{$comic->description}}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserire la URL dell'immagine" value="{{$comic->thumb}}">
              </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" min="0" step="any" class="form-control" name="price" id="price" placeholder="Inserire il prezzo" value="{{$comic->price}}">
              </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Inserire la serie" value="{{$comic->series}}">
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Inserire la data di uscita" value="{{$comic->sale_date}}">
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Inserire il tipo" value="{{$comic->type}}">
              </div>
              <button type="submit" class="btn btn-primary mb-5 submit-button">Invia</button>
        </form>

    </div>
@endsection
