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

        //comics
        $comics = config('comics');

        //link buy
        $buy = config('buy');

        //links footer
        $footerLinks = config('footer');

        //icone social media
        $icons = config('icons');

        $data = [
            'links' => $links,
            'comics' => $comics,
            'buy' => $buy,
            'footerLinks' => $footerLinks,
            'icons' => $icons
        ];

        return view('home', compact('data'));
    }

}
