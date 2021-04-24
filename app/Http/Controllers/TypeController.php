<?php

namespace App\Http\Controllers;
use DB;

use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function listType(){
        $data = DB::table('categories')->get();
        $data1 = DB::table('types')->get() ;
        return view('admin.type.list_type', compact('data1'), compact('data'));
    }


    public function addType(){
        $data = DB::table('categories')->get();
        $data1 = DB::table('types')->get() ;
        return view('admin.type.add_type', compact('data'), compact('data1'));
    }


    public function saveType(Request $request){
        $data = array();
        $data['typeName'] = $request->type_name;
        DB::table('types')->insert($data);
        return redirect('list-type');
    }


    public function editType($type_id){
        $data = DB::table('categories')->get();
        $data1=DB::table("types")->where('id', $type_id)->get();
        return view('admin.type.edit_type', compact('data'), compact('data1'));
    }


    public function updateType(Request $request, $type_id){
        $data = array();
        $data['typeName'] = $request->type_name;
        DB::table('types')->where('id', $type_id)->update($data);
        return Redirect('list-type');
    }


    public function deleteType($type_id){
        DB::table('types')->where('id', $type_id)->delete();
        return Redirect('list-type');
    }
}
