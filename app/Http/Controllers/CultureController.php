<?php

namespace App\Http\Controllers;
use App\Models\Culture;
use Illuminate\Http\Request;

class CultureController extends Controller
{
    public function index()
    {
        $cultures = Culture::all();
        return view('/cultivateur/culture',compact('cultures'));
    }

    public function affiche()
    {
        $charo = Culture::all();
        return view('/cultivateur/ajout',compact('charo'));
    }

    public function store(Request $request)
    {

    $filename = '';

    if ($request->hasFile('img')) {
        $filename = $request->getSchemeAndHttpHost() . '/assets/image/' . time() . '.' .$request->img->extension();
        $request->img->move(public_path('/assets/image/'), $filename);
    }

    $request->validate([
        'nom'=> 'required',
        'image'=> 'required',
        'description'=> 'required',
        'prix'=> 'required',
        'quantite'=> 'required',
        'user_id'=> 'required',

    ]);
    
        Culture::create([
            'nom'=>$request->nom,
            'image'=>$filename->image,
            'description'=>$request->description,
            'prix'=>$request->prix,
            'quantite'=>$request->quantite,
            'user_id'=>$request->user_id,
        ]);
        return redirect()->back();
    }
}
