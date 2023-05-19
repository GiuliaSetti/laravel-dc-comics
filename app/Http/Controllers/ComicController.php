<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use PhpParser\Node\Expr\AssignOp\Div;

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

        $this->validation($request);


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

        $comic->delete();

        return redirect()->route('comics.index');
    }

    private function validation($request){

        $formData = $request->all();

        $validator = Validator::make($formData, [

            'title' => 'required|max:255|min:5',
            'description' => 'required|max:255',
            'thumb' => 'required',
            'price' => 'required|numeric|min:3',
            'series' => 'required|max:50|min:5',
            'sale_date' => 'required|before_or_equal:today',
            'type' => 'required|max:50|min:5',

        ],  [
            
            'title.required' => "Inserisci un titolo",
            'title.max' => "Il titolo non deve essere superiore a 255 caratteri",
            'title.min' => "Il titolo deve essere di almeno 5 caratteri",
            'description.required' => "E' necessario inserire la descrizione",
            'description.max' => "La descrizione non deve superare i 255 caratteri",
            'thumb.required' => "E' necessario inserire un'immagine di copertina",
            'price.required' => "E' necessario inserire il prezzo",
            'price.min' => "Il prezzo dev'essere composto di almeno 3 cifre, prova a metterci i decimali",
            'series.required' => "Devi inserire una serie",
            'series.max' => "La serie non dev'essere superiore a 50 caratteri",
            'series.min' => "La serie dev'essere di almeno 5 caratteri",
            'sale_date.required' => "Devi inserire una data di vendita",
            'sale_date.before_or_equal' => "La data di vendita deve essere antecedente o coincidente con la data odierna",
            'type.required' => "Inserisci la tipologia di fumetto",
            'type.max' => "Non deve essere superiore a 50 caratteri",
            'type.min' => "Deve essere di almeno 5 caratteri"
        ])->validate();

        return $validator;
    }
}
