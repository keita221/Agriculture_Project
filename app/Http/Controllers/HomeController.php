<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $user = User::all();
        return view('home',compact('user'));
    }


    public function show(string $id)
    {
        //
        $detaille = User::findOrFail($id);
        return view('detaille-user',compact('detaille'));
    }

    public function destroy(string $id)
    {
        //
        User::where('id',$id)->delete();
        return redirect()->route('home');
    }
}
