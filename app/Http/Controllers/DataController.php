<?php

namespace App\Http\Controllers;

use App\Models\Data;
use Illuminate\Http\Request;

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Data::all();

        return view('data.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('data.create');
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

        // Save data data to the database
        $data = data::create($input);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';

            // Get the ID of the newly created data
            $dataId = $data->id;

            // Rename the image file with the ID of the data
            $imageName = "data-" . $dataId . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;

            // Update the data model with the new image name
            $data->update(['image' => $imageName]);
        }

        return redirect('admin/data')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function show(Data $data)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function edit(Data $data)
    {
        return view('data.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\data  $data
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Data $data)
    {
        // $data = data::findOrFail($id);
        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';

            // Get the ID of the data from the database
            $dataId = $data->id;

            // Rename the image file with the ID of the data
            $imageName = "data-" . $dataId . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        $data->update($input);

        return redirect('admin/data')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\service  $data
     * @return \Illuminate\Http\Response
     */
    public function destroy(Data $data)
    {
        $imageName = $data->image;

        $data->delete();

        if ($imageName && file_exists(public_path('image/' . $imageName))) {
            unlink(public_path('image/' . $imageName));
        }

        return redirect('admin/data')->with('message', 'Data berhasil dihapus');
    }
}
