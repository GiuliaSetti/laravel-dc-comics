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
    
    
            return view('comics.index', compact('links', 'comics', 'buy', 'footerLinks', 'icons'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
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
 
         return view('comics.create', compact('links', 'comics', 'buy', 'footerLinks', 'icons'));
        
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
        $formData = $request->all();

        $newComic = new Comic();

        $newComic->fill($formData);
        $newComic->save();

        return redirect()->route('comics.show', $newComic->id);
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


        return view('comics.show', compact('links', 'buy', 'comic' ,'footerLinks', 'icons'));
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
        $links = config('links');
        $footerLinks = config('footer');
        $icons = config('icons');

        return view('comics/edit', compact('comic', 'links', 'footerLinks', 'icons'));
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
        $formData = $request->all();

        $comic->update($formData);

        $comic->save();

        return redirect()->route('comics.show', $comic->id);
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
