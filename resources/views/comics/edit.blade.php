@extends('layouts/layout') 

@section('content')
<main>

    <h2 class="text-center p-3" style="color: white;">Change the infos</h2>

    <div class="container d-flex justify-content-center">

        <form action=" {{ route('comics.update', $comic->id) }} " method="POST">
            @csrf 
            @method('PUT')

            <div class="input-group mb-3">
                <label for="title">Title</label>
                <input class="mx-3" type="text" id="title" name="title" value="{{$comic->title}}">
            </div>

            <div class="input-group mb-3">
                <label for="description">Description</label>
                <textarea class="mx-3" id="description" name="description"> {{$comic->description}} </textarea>
            </div>

            <div class="input-group mb-3">
                <label for="thumb">Thumbnail</label>
                <input class="mx-3" type="text" id="thumb" name="thumb" value="{{$comic->thumb}}">
            </div>

            <div class="input-group mb-3">
                <label for="price">Price</label>
                <input class="mx-3" type="text" step="0.01" id="price" name="price" value=" {{ str_replace('$', '', $comic->price) }} ">
            </div>

            <div class="input-group mb-3">
                <label for="series">Series</label>
                <input  class="mx-3" type="text" id="series" name="series" value="{{$comic->series}}">
            </div>

            <div class="input-group mb-3">
                <label for="sale_date">Sale Date</label>
                <input class="mx-3" type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>

            <div class="input-group mb-3">
                <label for="type">Type</label>
                <input class="mx-3" type="text" id="type" name="type" value="{{$comic->type}}">
            </div>

            <div class="my_button">
                <button><a href="#">CHANGE</a></button>
            </div>
        </form>

      </div>

</main>
@endsection