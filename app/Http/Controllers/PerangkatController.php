<?php

namespace App\Http\Controllers;

use App\Models\Perangkat;
use Illuminate\Http\Request;

class PerangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkat = Perangkat::all();

        return view('perangkat.index', compact('perangkat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perangkat.create');
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

        // Save perangkat data to the database
        $perangkat = perangkat::create($input);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';

            // Get the ID of the newly created perangkat
            $perangkatId = $perangkat->id;

            // Rename the image file with the ID of the perangkat
            $imageName = "perangkat-" . $perangkatId . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;

            // Update the perangkat model with the new image name
            $perangkat->update(['image' => $imageName]);
        }
        return redirect('admin/perangkat')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function show(Perangkat $perangkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function edit(Perangkat $perangkat)
    {
        return view('perangkat.edit', compact('perangkat'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perangkat $perangkat)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image',
        ]);

        // $perangkat = perangkat::findOrFail($id);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';

            // Get the ID of the perangkat from the database
            $perangkatId = $perangkat->id;

            // Rename the image file with the ID of the perangkat
            $imageName = "perangkat-" . $perangkatId . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $perangkat->update($input);
        return redirect('admin/perangkat')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perangkat $perangkat)
    {
        $imageName = $perangkat->image;

        $perangkat->delete();

        if ($imageName && file_exists(public_path('image/' . $imageName))) {
            unlink(public_path('image/' . $imageName));
        }
        
        return redirect('admin/perangkat')->with('message', 'Data berhasil dihapus');
    }
}
