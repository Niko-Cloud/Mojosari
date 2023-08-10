<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Asset;

class AssetController extends Controller
{
        /**
         * Display a listing of the resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function index()
        {
            $asset = Asset::all();
    
            return view('asset.index', compact('asset'));
        }
    
        /**
         * Show the form for creating a new resource.
         *
         * @return \Illuminate\Http\Response
         */
        public function create()
        {
            return view('asset.create');
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
    
            // Save asset asset to the assetbase
            $asset = Asset::create($input);
    
            if ($image = $request->file('image')) {
                $destinationPath = 'image/';
    
                // Get the ID of the newly created asset
                $assetId = $asset->id;
    
                // Rename the image file with the ID of the asset
                $imageName = "asset-" . $assetId . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $imageName);
                $input['image'] = $imageName;
    
                // Update the asset model with the new image name
                $asset->update(['image' => $imageName]);
            }
    
            return redirect('admin/asset')->with('message', 'Asset berhasil ditambahkan');
        }
    
        /**
         * Display the specified resource.
         *
         * @param  \App\Models\asset  $asset
         * @return \Illuminate\Http\Response
         */
        public function show(Asset $asset)
        {
            //
        }
    
        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\Models\asset  $asset
         * @return \Illuminate\Http\Response
         */
        public function edit(Asset $asset)
        {
            return view('asset.edit', compact('asset'));
        }
    
        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request  $request
         * @param  \App\Models\asset  $asset
         * @return \Illuminate\Http\Response
         */
        public function update(Request $request, Asset $asset)
        {
            // $asset = asset::findOrFail($id);
            $input = $request->all();
    
            if ($image = $request->file('image')) {
                $destinationPath = 'image/';
    
                // Get the ID of the asset from the assetbase
                $assetId = $asset->id;
    
                // Rename the image file with the ID of the asset
                $imageName = "asset-" . $assetId . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $imageName);
                $input['image'] = $imageName;
            } else {
                unset($input['image']);
            }
    
            $asset->update($input);
    
            return redirect('admin/asset')->with('message', 'Asset berhasil diedit');
        }
    
        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\Models\service  $asset
         * @return \Illuminate\Http\Response
         */
        public function destroy(Asset $asset)
        {
            $imageName = $asset->image;
    
            $asset->delete();
    
            if ($imageName && file_exists(public_path('image/' . $imageName))) {
                unlink(public_path('image/' . $imageName));
            }
    
            return redirect('admin/asset')->with('message', 'Asset berhasil dihapus');
        }
}
