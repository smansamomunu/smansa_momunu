<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mapel;

class MapelController extends Controller
{
    public function index ()
    {
    	$mapels = Mapel::get();
    	return view ('users.admin.mapel.index', ['mapels'=>$mapels]);
    }
}
