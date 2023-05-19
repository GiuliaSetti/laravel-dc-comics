@extends('layouts/layout')

@section('content')

<main class="create py-3">
  <div class="container">

    <h1 style="color: white;">ADD A COMIC</h1>
    <form action="{{route('comics.store')}}" method="POST">
      @csrf

      <div class="m-3">
        <label for="title">Title</label>
        <div>
            <!-- input con error -->
            <input class="form-control @error('title') is-invalid @enderror" type="text" id="title" name="title" value="{{old('title')}}">

            <!-- messaggio di errore -->
            @error('title')
            <div class="invalid-feedback">
            {{$message}}
            </div>
            @enderror

        </div>
      </div>

      <div class="m-3">
        <label for="description">Description</label>
        <div>
          <!-- input con error -->
          <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{old('description')}}</textarea>

          <!-- messaggio di errore -->
          @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
          @enderror

        </div>
      </div>

      <div class="m-3">
        <label for="series">Series</label>
        <div>
            <!-- input con errore -->
            <input class="form-control @error('series') is-invalid @enderror" type="text" id="series" name="series" value="{{old('series')}}">

            <!-- messaggio di errore -->
            @error('description')
            <div class="invalid-feedback">
              {{$message}}
            </div>
            @enderror

        </div>
      </div>

      <div class="m-3">
        <label for="thumb">Thumbnail</label>
        <div>
            <!-- input con errore -->
            <input class="form-control @error('thumb') is-invalid @enderror" type="text" id="thumb" name="thumb" value="{{old('thumb')}}">

            <!-- messaggio di errore -->
            @error('thumb')
            <div class="invalid-feedback">
                {{$message}}
            </div>
            @enderror

        </div>
      </div>

      <div class="m-3">
        <label for="price">Price</label>
        <div>
            <!-- input con errore -->
            <input class="form-control @error('price') is-invalid @enderror" type="text" id="price" name="price" value="{{old('price')}}">

            <!-- messaggio di errore -->
            @error('price')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror

        </div>
      </div>

      <div class="m-3">
        <label for="sale_date">Sale Date</label>
        <div>
            <!-- input con errore -->
            <input class="@error('sale_date') is-invalid @enderror" type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}">

            <!-- messaggio di errore -->
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror

        </div>
      </div>

      <div class="m-3">
        <label for="type">Type</label>
        <div>
            <!-- input con errore -->
            <input class="form-control @error('type') is-invalid @enderror" type="text" id="type" name="type" value="{{old('type')}}">

            <!-- messaggio di errore -->
            @error('type')
              <div class="invalid-feedback">
                {{$message}}
              </div>
            @enderror

        </div>
      </div>

      <div class="d-flex justify-content-center my_button">
            
          <button class="btn btn-primary rounded-0" type="submit"><a href="#">ADD COMIC!</a></button>
      </div>
    </form>
  </div>
</main>
@endsection