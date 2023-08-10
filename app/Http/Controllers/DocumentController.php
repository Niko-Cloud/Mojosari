<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $documents = Document::all();

        return view('document.index', compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('document.create');
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
            'title' => 'required', 'description' => 'required', 'image' => 'required|image', 'document'=> 'required'
        ]);

        $input = $request->all();

        $document = Document::create($input);

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';

            // Get the ID of the newly created document
            $documentId = $document->id;

            // Rename the image file with the ID of the document
            $imageName = "document-" . $documentId . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;

            // Update the document model with the new image name
            $document->update(['image' => $imageName]);
        }

        if ($docs = $request->file('document')) {
            $destinationPath = 'docs/';

            // Get the ID of the newly created document
            $documentId = $document->id;

            // Rename the docs file with the ID of the document
            $docsName = "document-" . $documentId . "." . $docs->getClientOriginalExtension();
            $docs->move($destinationPath, $docsName);
            $input['document'] = $docsName;

            // Update the document model with the new docs name
            $document->update(['document' => $docsName]);
        }

        return redirect('admin/document')->with('message', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function show(document $document)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function edit(document $document)
    {
        return view('document.edit', compact('document'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Slider  $slider
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, document $document)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'image' => 'image', 'document' => 'required'
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';

            // Get the ID of the document from the database
            $documentId = $document->id;

            // Rename the image file with the ID of the document
            $imageName = "document-" . $documentId . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        if ($docs = $request->file('document')) {
            $destinationPath = 'docs/';

            // Get the ID of the document from the database
            $documentId = $document->id;

            // Rename the docs file with the ID of the document
            $docsName = "document-" . $documentId . "." . $docs->getClientOriginalExtension();
            $docs->move($destinationPath, $docsName);
            $input['document'] = $docsName;
        } else {
            unset($input['document']);
        }

        $document->update($input);

        return redirect('admin/document')->with('message', 'Data berhasil diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\document  $slider
     * @return \Illuminate\Http\Response
     */
    public function destroy(document $document)
    {
        $document->delete();

        return redirect('admin/document')->with('message', 'Data berhasil dihapus');
    }
}
