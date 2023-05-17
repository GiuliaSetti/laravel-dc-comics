<div id="footer_up">

    <div id="footer_content" class="container">

        <div id="footer_links">

            @foreach ($footerLinks as $link)

                    <ul>

                        <h4> {{ $link['name'] }} </h4>

                        @foreach ($link['links'] as $mainLink)
                            <li>
                                <a href="#">{{ $mainLink }}</a>
                            </li>
                        @endforeach
                    </ul>

            @endforeach

           

        </div>


        <div id="footer_logo">
            <img src=" {{ Vite::asset('resources/img/dc-logo-bg.png') }} " alt="">
        </div>

    </div>

    <div id="copyrights" class="container">
        <div>

            All Site TM and &#169; 2020 DC Entertainment, unless otherwise 
            <a href="#">
                noted here
            </a>
            . All rights reserved.

        </div>
        <div>
                    
            <a href="#">Cookies Settings.</a>
                    
        </div>
    </div>

</div>

<div id="footer_down">
    <div class="container d-flex justify-content-between py-2">
        <div>
            <button>SIGN UP NOW!</button>
        </div>
        <div id="icons">
            <ul class="d-flex gap-4 align-content-center">

                <h4 class="px-2">FOLLOW US</h4>
                @foreach ($icons as $icon)
                <li>
                    <a href="#">
                        <img src="{{Vite::asset($icon)}}" alt="social_icon">
                    </a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>