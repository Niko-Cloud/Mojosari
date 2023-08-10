<?php

namespace App\Http\Controllers;

use App\Models\Galeri;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galeri = Galeri::all();

        return view('galeri.index', compact('galeri'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('galeri.create');
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
        'image' => 'required|image',
    ]);

    $input = $request->all();

    // Save Galeri data to the database
    $galeri = Galeri::create($input);

    if ($image = $request->file('image')) {
        $destinationPath = 'image/';

        // Get the ID of the newly created Galeri
        $galeriId = $galeri->id;

        // Rename the image file with the ID of the Galeri
        $imageName = "Galeri-" . $galeriId . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imageName);
        $input['image'] = $imageName;

        // Update the Galeri model with the new image name
        $galeri->update(['image' => $imageName]);
    }

    return redirect('admin/galeri')->with('message', 'Data berhasil ditambahkan');
}

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Galeri $galeri)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Galeri $galeri)
    {
        return view('galeri.edit', compact('galeri'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Galeri $galeri)
    {
        $request->validate([
            'image' => 'image',
        ]);
    
        $input = $request->all();
    
        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
    
            // Get the ID of the Galeri model from the database
            $galeriId = $galeri->id;
    
            // Rename the image file with the ID of the Galeri model
            $imageName = "Galeri-" . $galeriId . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }
    
        $galeri->update($input);
    
        return redirect('admin/galeri')->with('message', 'Data berhasil diedit');
    }
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Galeri $galeri)
    {
        $imageName = $galeri->image;

        $galeri->delete();

        if ($imageName && file_exists(public_path('image/' . $imageName))) {
            unlink(public_path('image/' . $imageName));
        }

        return redirect('admin/galeri')->with('message', 'Data berhasil dihapus');
    }
}
