<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Potensi;
class PotensiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $potensi = Potensi::all();

        return view('potensi.index', compact('potensi'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('potensi.create');
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
            'title' => 'required', 'description' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();

        // Save potensi potensi to the potensibase
        $potensi = potensi::create($input);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';

            // Get the ID of the newly created potensi
            $potensiId = $potensi->id;

            // Rename the image file with the ID of the potensi
            $imageName = "potensi-" . $potensiId . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;

            // Update the potensi model with the new image name
            $potensi->update(['image' => $imageName]);
        }

        return redirect('admin/potensi')->with('message', 'Potensi berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\potensi  $potensi
     * @return \Illuminate\Http\Response
     */
    public function show(Potensi $potensi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\potensi  $potensi
     * @return \Illuminate\Http\Response
     */
    public function edit(Potensi $potensi)
    {
        return view('potensi.edit', compact('potensi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\potensi  $potensi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Potensi $potensi)
    {
        // $potensi = potensi::findOrFail($id);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';

            // Get the ID of the potensi from the potensibase
            $potensiId = $potensi->id;

            // Rename the image file with the ID of the potensi
            $imageName = "potensi-" . $potensiId . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $potensi->update($input);

        return redirect('admin/potensi')->with('message', 'Potensi berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $potensi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Potensi $potensi)
    {
        $imageName = $potensi->image;

        $potensi->delete();

        if ($imageName && file_exists(public_path('image/' . $imageName))) {
            unlink(public_path('image/' . $imageName));
        }

        return redirect('admin/potensi')->with('message', 'Potensi berhasil dihapus');
    }
}
