<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class BeritaController extends Controller
{
    public function index(){
    	$beritas=Berita::get();
    	return view('index.berita.index', ['beritas'=>$beritas]);
    }

    public function show(Request $request, $id){
    	$berita=Berita::where('id', $id)->first();
    	$beritaterbaru=Berita::orderBy('created_at', 'desc')->get();
    	return view('index.berita.show', ['berita'=>$berita, 'beritaterbaru'=>$beritaterbaru]);
    }
}
