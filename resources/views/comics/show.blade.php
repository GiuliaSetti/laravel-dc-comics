@extends('layouts/layout')

@section('content')
<div id="jumbotron">


</div>


<main>

    <div class="container">
        <div class="single_comic">
            <div class="py-2">
                <img class="img-fluid" src="{{$comic->thumb}}" alt="comic_cover">
            </div>
            <div class="description_container">
                <div class="left">
                    <h1>{{$comic->title}}</h1>
                    <div class="description">

                        <div class="left">
                            US Price: {{$comic->price}}</US>
                        </div>
                        <div>Available</div>
                        <p>{{$comic->description}}</p>         
                        
                    </div>
                
                </div>
            </div>
        </div>
    </div>
</main>
@endsection