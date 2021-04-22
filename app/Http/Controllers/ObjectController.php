<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ObjectController extends Controller
{
    public function listObject(){
        $data = DB::table('categories')->get() ;
        $oj = DB::table('apps')->where('categories_id', 1)->get() ;
        return view('admin.object.list_object', compact('oj'), compact('data'));
    }
}
