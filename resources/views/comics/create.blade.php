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
            <input type="text" id="title" name="title">

        </div>
      </div>

      <div class="m-3">
        <label for="description">Description</label>
        <div>
            <textarea id="description" name="description"></textarea>

        </div>
      </div>

      <div class="m-3">
        <label for="series">Series</label>
        <div>

            <input type="text" id="series" name="series">
        </div>
      </div>

      <div class="m-3">
        <label for="thumb">Thumbnail</label>
        <div>
            <input type="text" id="thumb" name="thumb">

        </div>
      </div>

      <div class="m-3">
        <label for="price">Price</label>
        <div>
            <input type="text" id="price" name="price"> 

        </div>
      </div>

      <div class="m-3">
        <label for="sale_date">Sale Date</label>
        <div>

            <input type="date" id="sale_date" name="sale_date">
        </div>
      </div>

      <div class="m-3">
        <label for="type">Type</label>
        <div>
            <input type="text" id="type" name="type">

        </div>
      </div>

      <div class="d-flex justify-content-center" id="my_button">
            
          <button class="btn btn-primary rounded-0" type="submit"><a href="#">ADD COMIC!</a></button>
      </div>
    </form>
  </div>
</main>
@endsection