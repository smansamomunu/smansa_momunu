<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use App\Berita;

class BeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $beritas = Berita::orderBy('created_at', 'desc')->get();
        return view ('users.admin.berita.index', ['beritas'=>$beritas]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('users.admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->ajax())
           {
            $image_data = $request->image;
            $image_array_1 = explode(";", $image_data);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $image_name = time() . '.png';
            $upload_path = public_path('index/images/beritas/' . $image_name);
            file_put_contents($upload_path, $data);

            $berita = new Berita;
            $berita->title = $request->title;
            $berita->deskripsi = $request->deskripsi;
            $berita->img = $image_name;
            $berita->author_name = $request->author_name;
            $berita->author_job = $request->author_job;
            $berita->save();
            return response()->json(['path' => 'sukses']);
           }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $berita = Berita::findOrFail($id)->first();
        return view ('users.admin.berita.edit', ['berita'=>$berita]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        if($request->ajax())
           {
            $oldImage = Berita::where('id', $id)->select('img')->first();
            $image_data = $request->image;
            $image_array_1 = explode(";", $image_data);
            $image_array_2 = explode(",", $image_array_1[1]);
            $data = base64_decode($image_array_2[1]);
            $image_name = time() . '.png';
            $upload_path = public_path('index/images/beritas/' . $image_name);
            file_put_contents($upload_path, $data);
            File::delete(public_path('index/images/beritas/' . $oldImage->img));

            $berita = Berita::findOrFail($id);
            $berita->title = $request->title;
            $berita->deskripsi = $request->deskripsi;
            $berita->img = $image_name;
            $berita->author_name = $request->author_name;
            $berita->author_job = $request->author_job;
            $berita->update();
            return response()->json(['path' => 'sukses']);
           }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
