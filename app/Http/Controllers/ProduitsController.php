<?php

namespace App\Http\Controllers;
use App\Models\Culture;
use Illuminate\Http\Request;

class ProduitsController extends Controller
{
    public function index()
    {
        $cultures = Culture::all();
        return view('/culture',compact('cultures'));
    }
}
