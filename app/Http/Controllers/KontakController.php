<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    public function index()
    {

        $kontak = DB::table('kontak')->get();

        return view('kontak.index',['kontak'=>$kontak]);
        
    }
}
