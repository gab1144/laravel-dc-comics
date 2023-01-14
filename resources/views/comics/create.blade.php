
@extends('layouts.main')

@section('content')
    <div class="container">
        <h1>Inserimento nuovo Fumetto</h1>

         @if($errors->any())
         <div class="alert" role="alert">
             {{-- con $errors->all() ottengo un array con tutti gli errori --}}
             <ul>
                 @foreach ($errors->all() as $error)
                     <li>{{$error}}</li>
                 @endforeach
             </ul>
           </div>

         @endif

        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo *</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Inserire il titolo" value="{{old('title')}}" @error('title') is-invalid @enderror>
                @error('title')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
              <label for="description" class="form-label">Descrizione</label>
              <textarea class="form-control" name="description" id="description" rows="3">{{old('description')}}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb" placeholder="Inserire la URL dell'immagine" value="{{old('thumb')}}" @error('thumb') is-invalid @enderror>
                @error('thumb')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo *</label>
                <input type="number" min="0" step="any" class="form-control" name="price" id="price" placeholder="Inserire il prezzo" value="{{old('price')}}" @error('price') is-invalid @enderror>
                @error('price')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie *</label>
                <input type="text" class="form-control" name="series" id="series" placeholder="Inserire la serie" value="{{old('series')}}" @error('series') is-invalid @enderror>
                @error('series')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita *</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" placeholder="Inserire la data di uscita" value="{{old('sale_date')}}" @error('sale_date') is-invalid @enderror>
                @error('sale_date')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <div class="mb-3">
                <label for="type" class="form-label">Tipo *</label>
                <input type="text" class="form-control" name="type" id="type" placeholder="Inserire il tipo" value="{{old('type')}}" @error('type') is-invalid @enderror>
                @error('type')
                    <div  class="invalid-feedback">
                        {{$message}}
                    </div>
                @enderror
              </div>
              <button type="submit" class="btn btn-primary mb-5 submit-button">Invia</button>
        </form>

    </div>
@endsection
