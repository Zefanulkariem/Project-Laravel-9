<?php

namespace App\Http\Controllers;
use App\Models\Merek;
use Illuminate\Http\Request;

class MerekController extends Controller
{
    public function nampil(){
        $merk = Merek::all();
        return view('mereks/index', compact('merk'));
    }

    public function show($id){
        $merk = Merek::findOrFail($id);
        return view('mereks/show', compact('merk'));
    }
}
