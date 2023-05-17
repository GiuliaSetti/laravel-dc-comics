@extends('layouts/layout')

@section('content')

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

          <div class="my_button">

            <button class="btn btn-primary rounded-0">
                <a  href="{{route('comics.edit', $comic->id)}}">EDIT</a>
            </button>

            <button type="button" class="bg-danger mx-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                <a  href="{{route('comics.edit', $comic->id)}}">DELETE</a>
            </button>

            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">ARE YOU SURE?</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    If you delete this comic you can get it back, unless you add it again.
                </div>
                <div class="modal-footer">
                    
                        <div class="my_button">
                                <button type="button" class="btn btn-primary rounded-0" data-bs-dismiss="modal"><a href="#">CLOSE</a></button>
                
                                <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button class="bg-danger mx-2" type="submit">
                                        <a href="#">DELETE</a>
                                    </button>

                                </form>
                        </div>

                    </div>
                </div>
            </div>
            </div>

          </div>



          
          

    </div>
</main>
@endsection

