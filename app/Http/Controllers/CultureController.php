<?php

namespace App\Http\Controllers;
use App\Models\Culture;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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
        $filename = $request->getSchemeAndHttpHost() . '/asset/img/' . time() . '.' .$request->img->extension();
        $request->img->move(public_path('/asset/img/'), $filename);
    }
     
      $user = Auth::id();

    $request->validate([
        'nom'=> 'required',
        'img'=> 'required',
        'description'=> 'required',
        'prix'=> 'required',
        'quantite'=> 'required',
        //'user_id'=> 'required',

    ]);
    
        $culture = Culture::create([
            'nom'=>$request->nom,
            'img'=>$filename,
            'description'=>$request->description,
            'prix'=>$request->prix,
            'quantite'=>$request->quantite, 
            'user_id'=>$user,
        ]);
      
        return redirect()->route('culture.index');
    }

    public function show(string $id)
    {
        //
        $detaille = Culture::findOrFail($id);
        return view('/cultivateur/detaille',compact('detaille'));
    }
    public function update(Request $request, string $id)
    {
        $culture=Bus::find($id);
        $culture->nom=$request->input('nom');
        $culture->image=$request->input('image');
        $culture->description=$request->input('description');
        $culture->prix=$request->input('prix');
        $culture->quantite=$request->input('quantite');

        $bus->update();
        return redirect()->route('culture.index');
        //
    }

    public function destroy(string $id)
    {
        Culture::where('id',$id)->delete();
        return redirect()->route('culture.index');
    }

    public function edit(string $id)
    {
        $culture=Culture::find($id);
        return view('/cultivateur/modify',compact('culture'));
    }

}

