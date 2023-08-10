<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\HtSupporttp\Facades\DB;

// use App\Models\Sliders;
use App\Models\Perangkat;
use App\Models\Slider;
use App\Models\Data;
use App\Models\Galeri;
use App\Models\Sambutan;
use App\Models\Service;
use App\Models\Document;
use App\Models\Asset;
use App\Models\Potensi;
use App\Models\transparansi;

class HomeController extends Controller
{
    public function index(){
        $sliders = Slider::all();
        $perangkat = Perangkat::all();
        $data = Data::all();
        $galeri = Galeri::all();
        $sambutan = Sambutan::all();
        $service = Service::all();
        $document = Document::all();
        $asset = Asset::all();
        $potensi = Potensi::all();
        $transparansi = Transparansi::all();
        
        $perangkatChunks = $perangkat->chunk(4);
        return view('home.index', compact(
            'sliders',
            'perangkat',
            'data',
            'galeri',
            'sambutan',
            'service',
            'perangkatChunks',
            'document',
            'asset',
            'potensi',
            'transparansi'
        ));
            
    }
   
    public function galeri(){
        $galeri = Galeri::all();
        return view('galeri.galeri',compact(
            'galeri',
        ));
    }
    public function data(){
        $data = Data::all();
        return view('home.data',compact(
            'data',
        ));
    }
    public function perangkat(){
        $perangkat = Perangkat::all();
        return view('profil.sotk',compact(
            'perangkat',
        ));
    }

    public function document(){
        $perangkat = Perangkat::all();
        return view('profil.document',compact(
            'document',
        ));
    }

    public function asset(){
        $asset = Asset::all();
        return view('profil.asset',compact(
            'asset',
        ));
    }

    public function potensi(){
        $potensi = Potensi::all();
        return view('profil.potensi',compact(
            'potensi',
        ));
    }
    public function transparansi(){
        $transparansi = Transparansi::all();
        return view('profil.transparansi',compact(
            'transpransi',
        ));
    }

}
