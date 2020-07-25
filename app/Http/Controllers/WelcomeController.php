<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Berita;

class WelcomeController extends Controller
{
    public function index(){
    	$beritas = Berita::get();
    	return view ('index.welcome', ['beritas'=>$beritas]);
    }
}
