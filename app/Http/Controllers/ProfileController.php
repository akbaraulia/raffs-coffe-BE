<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Profile;
use Illuminate\Support\Facades\file;



class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $profile = profile::latest()->simplePaginate(5); //latest terbaru

        return view('pages.admin.profile.index', compact('profile')) //compact = membungkus
            ->with('i', (request()->input('page', 1) - 1) * 5);;

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.profile.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $profile = new profile; 
        if($request->hasfile('gambar'))
        {
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension(); 
            $filename = time().'.'.$extention;
            $file->move('uploads/produks/', $filename);
            $profile->gambar = $filename;
        }
        $profile->title = $request->input('title');
        $profile->deskripsi = $request->input('deskripsi');
        $profile->save();

        return redirect()->route('profile.index')->with('success', 'Berhasil Menyimpan!');

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
        $profile = profile::find($id);
        return view('pages.admin.profile.edit', compact('profile'));
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
        $profile = Profile::find($id);
        $profile->name_web = $request->input('name_web');
        if($request->hasfile('gambar'))
        {
            $destination = 'uploads/produks/'.$profile->gambar;
            if(file::exists($destination))
            {
                file::delete($destination);
            }
            $file = $request->file('gambar');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/produks/', $filename);
            $profile->gambar = $filename;
        }
        $profile->title = $request->input('title');
        $profile->deskripsi = $request->input('deskripsi');
        $profile->update();

        return redirect()->route('profile.index')->with('success', 'Berhasil Update!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $profile = profile::findOrFail($id);
        if($profile) {
            $profile->delete();
            return redirect()->route('profile.index')->with('success', 'Berhasil Hapus!');
        }
        return redirect()->route('profile.index');
    }
}
