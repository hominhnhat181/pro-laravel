<?php

namespace App\Http\Controllers;

use App\Repositories\ObjectRepository;
use App\Repositories\interfaces\ObjectRepositoryInterface as ObjectInterface;; 
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class ObjectController extends Controller
{   

    // protected $objectRepository;

    // public function __construct(ObjectInterface $objectRepository){

    //     $this->objectRepository = $objectRepository;

    // }


    // view list
    public function listObject($categori_name, $categori_id){
        $data = DB::table('categories')->get();

        $test1 = DB::table($categori_name)
        ->join('types', $categori_name.'.types_id', '=', 'types.id')
        ->select( 'types.typeName', $categori_name.'.name',$categori_name.'.image', $categori_name.'.link', $categori_name.'.title',  $categori_name.'.types_id', $categori_name.'.id', $categori_name.'.categories_id')
        ->limit(12)
        ->get();
        return view('admin.object.list_object', compact('data','test1'));
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
        $data['title'] = 'joker';
        $data['desc'] = 'joker';
        $data['image'] = 'joker';
        $data['link'] = 'joker';
        $typeId = rand(1,5);
        $data['types_id'] = $typeId;

        DB::table($categori_name)->where('categories_id', $categori_id)->insert($data);
        $data = DB::table('categories')->get();
        $test1 = DB::table($categori_name)
        ->join('types', $categori_name.'.types_id', '=', 'types.id')
        ->select( 'types.typeName', $categori_name.'.name',$categori_name.'.image', $categori_name.'.link', $categori_name.'.title',  $categori_name.'.types_id', $categori_name.'.id', $categori_name.'.categories_id')
        ->limit(12)
        ->get();
        return view('admin.object.list_object', compact('oj','data','test1'));
    }

// 100% overload

    // edit
    public function editObject( $object_id, $categories_id){
        $data = DB::table('categories')->get();
        $categori_name = DB::table('categories')->where('id', $categories_id)->value('catName');

        // call object
        // can call cate and type
        $super = DB::table($categori_name)
        ->join('types', $categori_name.'.types_id', '=', 'types.id')
        ->join('categories', $categori_name.'.categories_id', '=','categories.id')
        ->select( $categori_name.'.desc',$categori_name.'.image',$categori_name.'.link','types.typeName','types.id', $categori_name.'.name',$categori_name.'.image', $categori_name.'.link', $categori_name.'.title',  $categori_name.'.types_id', $categori_name.'.id', $categori_name.'.categories_id','categories.catName')->where($categori_name.'.id', $object_id) ->limit(12)->get();


        // catch types oj id
        $typeId = DB::table($categori_name)->where($categori_name.'.id','=',$object_id)->value('types_id');
    
        // fill type name not have which 
        $typeList = DB::table($categori_name)
        ->join('types', $categori_name.'.types_id', '=', 'types.id')
        ->select('types.typeName')->DISTINCT()
        ->where('types.id','!=', $typeId)
        ->where($categori_name.'.id','!=', $super.'.types_id')->get();
       
        
        return view('admin.object.edit_object', compact('super','data','categori_name','typeList'));
    }

    public function updateObject(Request $request, $object_id, $categories_id){
        $data = array();
        $data['name'] = $request->object_name;
        $data['title'] = $request->object_status;
        $data['desc'] = $request->object_desc;
        $data['image'] = $request->object_image;
        $data['link'] = $request->object_link;
        $data_type = $request->object_type;

        // get type id
        $typeId =DB::table('types')->where('typeName', $data_type)->value('id');
        
        $data['types_id'] = $typeId;
        $catname = DB::table('categories')->where('id', $categories_id)->value('catName');
        // update
        DB::table($catname)
        ->join('types', $catname.'.types_id','=','types.id')
        ->where($catname.'.id', $object_id)
        ->update($data);
        return Redirect('list-object/'.$catname.'/'.$categories_id);
    }

    // delete
    public function deleteObject($object_id, $categories_id){
        $catname = DB::table('categories')->where('id', $categories_id)->value('catName');
        
        DB::table($catname)->where('id', $object_id)->delete();
        return Redirect('list-object/'.$catname.'/'.$categories_id);
    }

}
