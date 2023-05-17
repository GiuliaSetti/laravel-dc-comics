<header>


    <div id="header_top">

        <div class="container text-uppercase">
            <a href="#">dc power&#8480; visa &#174;</a>
            <a href="#">additional dc sites &#129171;</a>
        </div>

    </div>

    <div id="header_bottom" >

        <div id="header_bottom_content" class="container">

            <div id="header_left">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc_logo">
            </div>
        
            <div id="header_center">
        
                <ul>
        
                    @foreach ($links as $link)
                    <li class="text-uppercase">
                        <a href="#">{{ $link }}</a>    
                    </li>        
                    @endforeach
            
                </ul>
        
            </div>
        
            <div id="header_right">
        
                <input type="text" placeholder="Search &#x1F50D;">
        
                
            </div>
        </div>



    </div>

    <div id="jumbotron">


    </div>
</header>