<?php

namespace App\Http\Controllers;

use App\Models\Sambutan;
use Illuminate\Http\Request;

class SambutanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sambutan = Sambutan::all();

        return view('sambutan.index', compact('sambutan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sambutan.create');
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

        // Save sambutan data to the database
        $sambutan = sambutan::create($input);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';

            // Get the ID of the newly created sambutan
            $sambutanId = $sambutan->id;

            // Rename the image file with the ID of the sambutan
            $imageName = "Sambutan-" . $sambutanId . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;

            // Update the sambutan model with the new image name
            $sambutan->update(['image' => $imageName]);
        }

        return redirect('admin/sambutan')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function show(Sambutan $sambutan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function edit(Sambutan $sambutan)
    {
        return view('sambutan.edit', compact('sambutan'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sambutan  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sambutan $sambutan)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image',
        ]);

        // $sambutan = sambutan::findOrFail($id);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';

            // Get the ID of the sambutan from the database
            $sambutanId = $sambutan->id;

            // Rename the image file with the ID of the sambutan
            $imageName = "Sambutan-" . $sambutanId . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $sambutan->update($input);
        return redirect('admin/sambutan')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $sambutan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sambutan $sambutan)
    {
        $imageName = $sambutan->image;

        $sambutan->delete();

        if ($imageName && file_exists(public_path('image/' . $imageName))) {
            unlink(public_path('image/' . $imageName));
        }

        return redirect('admin/sambutan')->with('message', 'Data berhasil dihapus');
    }
}
