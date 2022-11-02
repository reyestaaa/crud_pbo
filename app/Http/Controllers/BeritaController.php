<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BeritaController extends Controller
{
    public function index()
    {

        $berita = DB::table('berita')->get();

        return view('berita.index',['berita'=>$berita]);
        
    }
}
