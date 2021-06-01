<?php

namespace App\Http\Controllers;

use App\Repositories\AppRepository;
use App\Repositories\interfaces\AppRepositoryInterface as AppInterface; 
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
class AppController extends Controller
{
    protected $appRepository;

    public function __construct(AppInterface $appRepository){

        $this->appRepository = $appRepository;

    }


    // view list
    public function listApp(){
        $data = $this->appRepository->sidebar();
        $app = $this->appRepository->getAll();
        return view('admin.app.list_app', compact('data','app'));
    }


    // add
    public function addApp(){
        $data = $this->appRepository->sidebar();
        $add = $this->appRepository->getAll();
        $typeList = $this->appRepository->fillType();
        return view('admin.app.add_app', compact('data','add','typeList'));
    }

    // save object
    public function saveApp(Request $request, $categori_id){
         // catch typeName
         $data_type = $request->app_types;

         // get type id using typeName
         $typeId =DB::table('types')->where('typeName', $data_type)->value('id');
        
        $attributes = array();
        $attributes['name'] = $request->app_name;
        $attributes['title'] =  $request->app_title;
        $attributes['desc'] =  $request->app_desc;
        $attributes['image'] =  $request->app_image;
        $attributes['link'] =  $request->app_link;
        $attributes['types_id'] = $typeId;
        $attributes['categories_id'] = $categori_id;
        $attributes['created_at'] = Carbon::now();
        $attributes['updated_at'] = Carbon::now();

        $this->appRepository->store($attributes);

        $this->appRepository->getAll();

        return Redirect('list-apps');
    }

// 100% overload

    // edit
    public function editApp( $object_id, $categories_id){
        $data = $this->appRepository->sidebar();
        $super = $this->appRepository->fillEdit($object_id);
        $typeList =$this->appRepository->fillTypeName($object_id);
        return view('admin.app.edit_app', compact('super','data','typeList'));
    }


    public function update(Request $request, $object_id, $categories_id){

        // catch typeName
        $data_type = $request->app_types;

        // get type id using typeName
        $typeId =DB::table('types')->where('typeName', $data_type)->value('id');

        $attributes = array();
        $attributes['name'] = $request->app_name;
        $attributes['title'] =  $request->app_title;
        $attributes['desc'] =  $request->app_desc;
        $attributes['image'] =  $request->app_image;
        $attributes['link'] =  $request->app_link;

        // fill colum types_id of game
        $attributes['types_id'] = $typeId;

        $this->appRepository->update($object_id, $attributes);
      
        return Redirect('list-apps');
    }

    // delete
    public function delete($object_id){
        
        $this->appRepository->delete($object_id);
        return Redirect('list-apps');
    }
}
