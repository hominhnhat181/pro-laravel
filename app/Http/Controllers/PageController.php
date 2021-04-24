<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex(){
        return view('layouts.index');
    }
    public function getMenu(){
        $data = DB::table('categories')->get() ;
        $data1 = DB::table('types')->get() ;
        return view('layouts.index', compact('data1'), compact('data'));
    }
}
