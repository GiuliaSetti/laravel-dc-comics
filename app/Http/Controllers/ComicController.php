<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
            //links navbar
            $links = config('links');

            //comics
            $comics = Comic::all();
    
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
    
            return view('comics/index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        //
        //links navbar
        $links = config('links');

        //link buy
        $buy = config('buy');

        //icone social media
        $icons = config('icons');

        //links footer
        $footerLinks = config('footer');

        $data = [
            'links' => $links,
            'buy' => $buy,
            'icons' => $icons,
            'footerLinks' => $footerLinks,
        ];

        return view('comics/show', compact('comic','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
