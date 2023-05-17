<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Comic;

class PageController extends Controller
{
    //

   
        
    public function index() {

        //links navbar
        $links = config('links');

        //link buy
        $buy = config('buy');

        //links footer
        $footerLinks = config('footer');

        //icone social media
        $icons = config('icons');


        return view('home', compact('links', 'buy', 'footerLinks', 'icons'));
    }

}
