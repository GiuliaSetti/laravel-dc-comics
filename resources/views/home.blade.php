@extends('layouts.layout')


@section('content')


    <main>

        <!-- comics -->
        
        <div id="comics_content" class="container">
            <div id="label" class="text-uppercase">
                <h5>Current Series</h5>
            </div>
            <div class="my_button">
                <button id="button" class="btn btn-primary rounded-0">
                    <a href="{{route('comics.index')}}">LOAD COMICS</a>
                </button>
                <button class="mx-2" ><a href="{{route('comics.create')}}">ADD A COMIC</a></button>
            </div>
        </div>
            
            

        
        <div id="buy_container" class="mt-5">
    
            <div class="container">
    
                <ul class="d-flex py-5 justify-content-between align-center">
                    @foreach($buy as $singleBuy)
                        <li>
                            <img src=" {{ Vite::asset($singleBuy['icon']) }} " alt="buy_icons">
                            <a href="#" class="text-uppercase">{{ $singleBuy['name'] }}</a> 
                        </li>
                    @endforeach
                </ul>
    
            </div>
    
        </div>
    </main>
    
    @endsection
  