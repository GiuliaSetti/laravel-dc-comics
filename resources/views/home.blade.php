@extends('layouts.layout')


@section('content')

<!-- jumbotron -->
    <div id="jumbotron">


    </div>
<!-- /jumbotron -->

    <main>

        <!-- comics -->
        <div id="comics_content" class="container">
            <div id="label" class="text-uppercase">
                <h5>current series</h5>
            </div>

            <div class="row px-3">

                @foreach($data['comics'] as $comic)
                    <div class="col-2">
                        <div class="current_series py-2">
                            <img class="img-fluid" src=" {{ $comic['thumb'] }} " alt="comic_cover">
                            <div class="comic_title text-uppercase py-2">
                                {{ $comic['series'] }} 
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <div id="my_button">
                <button>LOAD MORE</button>
            </div>

        </div>
        <!-- /comics -->

        
        <div id="buy_container" class="mt-5">
    
            <div class="container">
    
                <ul class="d-flex py-5 justify-content-between align-center">
                    @foreach($data['buy'] as $singleBuy)
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
  