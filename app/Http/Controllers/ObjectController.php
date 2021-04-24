<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class ObjectController extends Controller
{


    // view list
    public function listObject($categori_name, $categori_id){
        $data = DB::table('categories')->get();
        $oj = DB::table($categori_name)->where('categories_id', $categori_id)->get();
        return view('admin.object.list_object', compact('oj'), compact('data'));
    }


    // add
    public function addObject($categori_name, $categori_id){
        $data = DB::table('categories')->where('id', $categori_id)->get() ;
        $add = DB::table($categori_name)->where('categories_id', $categori_id)->get();
        return view('admin.object.add_object', compact('data'), compact('add'));
    }

    // save object
    public function saveObject(Request $request, $categori_name, $categori_id){
        $data = array();
        $data['name'] = $request->object_name;
        $data['categories_id'] = $categori_id;
        $typeId = rand(1,5);
        $data['types_id'] = $typeId;
        DB::table($categori_name)->where('categories_id', $categori_id)->insert($data);
        $data = DB::table('categories')->get();
        $oj = DB::table($categori_name)->where('categories_id', $categori_id)->get();
        return view('admin.object.list_object', compact('oj'), compact('data'));
    }


    public function editObject($object_id, $categories_id){
        $data = DB::table('categories')->get();
        $catname = DB::table('categories')->where('id', $categories_id)->value('catName');
        $s=DB::table($catname)->where('id', $object_id)->get();
        return view('admin.object.edit_object', compact('s'), compact('data'));
    }


    public function updateObject(Request $request, $object_id, $categories_id){
        $data = array();
        $data['name'] = $request->object_name;
        $catname = DB::table('categories')->where('id', $categories_id)->value('catName');
        DB::table( $catname)->where('id', $object_id)->update($data);
        return Redirect('list-object/'.$catname.'/'.$categories_id);
    }


    public function deleteObject($object_id, $categories_id){
        $catname = DB::table('categories')->where('id', $categories_id)->value('catName');
        
        DB::table($catname)->where('id', $object_id)->delete();
        return Redirect('list-object/'.$catname.'/'.$categories_id);
    }
}
