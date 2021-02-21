<?php

namespace App\Http\Controllers;

use App\Models\upload;
use Illuminate\Http\Request;

class uploadsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $images = upload::all();
        return view('uploads.upload',compact('images'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $resorce       = $request->file('image');
            $name   = $resorce->getClientOriginalName();
            $resorce->move(\base_path() ."/public/img", $name);
            upload::insert(['image' => $name]);
            return redirect('/upload')->with('status','Gambar Berhasil DiUpload');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function show(upload $upload)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function edit(upload $upload)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, upload $upload)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\upload  $upload
     * @return \Illuminate\Http\Response
     */
    public function destroy(upload $upload)
    {
        upload::destroy($upload -> id);
        return redirect('/upload')->with('status','Data Berhasil DiHapus');
    }
}
