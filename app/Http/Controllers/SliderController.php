<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sliders = Slider::all();

        return view('slider.index', compact('sliders'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('slider.create');
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
        'title' => 'required',
        'description' => 'required',
        'image' => 'required|image',
    ]);

    $input = $request->all();

    // Save Slider data to the database
    $slider = Slider::create($input);

    if ($image = $request->file('image')) {
        $destinationPath = 'image/';

        // Get the ID of the newly created Slider
        $sliderId = $slider->id;

        // Rename the image file with the ID of the Slider
        $imageName = "Slider-" . $sliderId . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imageName);
        $input['image'] = $imageName;

        // Update the Slider model with the new image name
        $slider->update(['image' => $imageName]);
    }

    return redirect('admin/sliders')->with('message', 'Data berhasil ditambahkan');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(Slider $slider)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(Slider $slider)
    {
        return view('slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Slider $slider)
{
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'image' => 'image',
    ]);

    // $slider = Slider::findOrFail($id);
    $input = $request->all();

    if ($image = $request->file('image')) {
        $destinationPath = 'image/';

        // Get the ID of the Slider from the database
        $sliderId = $slider->id;

        // Rename the image file with the ID of the Slider
        $imageName = "Slider-" . $sliderId . "." . $image->getClientOriginalExtension();
        $image->move($destinationPath, $imageName);
        $input['image'] = $imageName;
    } else {
        unset($input['image']);
    }

    $slider->update($input);

    return redirect('admin/sliders')->with('message', 'Data berhasil diedit');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(Slider $slider)
    {
        $imageName = $slider->image;

        $slider->delete();

        if ($imageName && file_exists(public_path('image/' . $imageName))) {
            unlink(public_path('image/' . $imageName));
        }

        return redirect('admin/sliders')->with('message', 'Data berhasil dihapus');
    }
}
