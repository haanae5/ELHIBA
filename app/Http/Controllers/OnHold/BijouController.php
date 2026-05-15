<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bijou;

class BijouController extends Controller
{
    public function index(){
        
        $bijoux = Bijou::Paginate(24);
        return view('shop', compact('bijoux'));
    }

    public function show($slug){

        $bijou = Bijou::where('slug', $slug)->first();

        if (!$bijou) { abort(404); }

        $bijouxSimilaires = Bijou::where('collection' , $bijou->collection )
        ->where( 'id' , '!=', $bijou->id)
        ->limit(8)
        ->get();
        return view('produit', compact('bijou','bijouxSimilaires'));
    }


}

