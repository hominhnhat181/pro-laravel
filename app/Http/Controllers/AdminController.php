<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function getIndexAdmin(){
        return view('admin.layouts.indexAdmin');
    }
    public function categoryColum(){
        $data = DB::table('categories')->get() ;
        return view('admin.layouts.indexAdmin', compact('data'));
    }
}
