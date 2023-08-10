<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transparansi;

class TransparansiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transparansi = Transparansi::all();

        return view('transparansi.index', compact('transparansi'));
     
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('transparansi.create');
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
        'document' => 'required'
    ]);

    $input = $request->all();

    // Save Transparansi data to the database
    $transparansi = Transparansi::create($input);

    if ($doc = $request->file('document')) {
        $destinationPath = 'docs/';

        // Get the ID of the newly created Transparansi
        $transparansiId = $transparansi->id;

        // Rename the doc file with the ID of the Transparansi
        $docName = "Transparansi." . $doc->getClientOriginalExtension();
        $doc->move($destinationPath, $docName);
        $input['document'] = $docName;

        // Update the Transparansi model with the new doc name
        $transparansi->update(['document' => $docName]);
    }

    return redirect('admin/transparansi')->with('message', 'Data berhasil ditambahkan');
}


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transparansi  $transparansi
     * @return \Illuminate\Http\Response
     */
    public function show(Transparansi $transparansi)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transparansi  $transparansi
     * @return \Illuminate\Http\Response
     */
    public function edit(Transparansi $transparansi)
    {
        return view('transparansi.edit', compact('transparansi'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transparansi  $transparansi
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transparansi $transparansi)
{
    $request->validate([
        'document' => 'required',
    ]);

    // $transparansi = Transparansi::findOrFail($id);
    $input = $request->all();

    if ($doc = $request->file('document')) {
        $destinationPath = 'docs/';

        // Get the ID of the Transparansi from the database
        $transparansiId = $transparansi->id;

        // Rename the doc file with the ID of the Transparansi
        $docName = "Transparansi." . $doc->getClientOriginalExtension();
        $doc->move($destinationPath, $docName);
        $input['document'] = $docName;
    } else {
        unset($input['document']);
    }

    $transparansi->update($input);

    return redirect('admin/transparansi')->with('message', 'Data berhasil diedit');
}

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transparansi  $transparansi
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transparansi $transparansi)
    {
        $docName = $transparansi->document;

        $transparansi->delete();

        if ($docName && file_exists(public_path('docs/' . $docName))) {
            unlink(public_path('docs/' . $docName));
        }

        return redirect('admin/transparansi')->with('message', 'Data berhasil dihapus');
    }
}
