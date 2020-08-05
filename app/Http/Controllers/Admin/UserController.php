<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Guru;
use App\User;

class UserController extends Controller
{
    public function guru_index()
    {
        $gurus = Guru::get();
        return view ('users.admin.guru.index', ['gurus'=>$gurus]);
    }

    public function guru_create()
    {
    	return view ('users.admin.guru.create');
    }

    public function guru_store(Request $request)
    {
    	$user = new User;
    	$user->email 	= $request->email;
    	$user->name 	= $request->nama;
    	$user->password = bcrypt('12345678');
    	$user->role 	= 'guru';
    	$user->save();

    	if ($user) {
    		$guru 			= new Guru;
    		$guru->user_id 	= $user->id;
    		$guru->nama 	= $request->nama;
    		$guru->save();

    		return redirect ('admin/guru');
    	}
    }
}
