<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function search(){
        $catGame = DB::table('categories')->where('id','=', 1)->get() ;
        $typeGame = DB::table('types')->where('id', '<', 5)->get();
        $catApp = DB::table('categories')->where('id','=', 2)->get() ;
        $typeApp = DB::table('types')->where('id', '>', 4)->get();
        return view('layouts.search', compact('catGame', 'typeGame', 'catApp','typeApp'));
    }
   
}
