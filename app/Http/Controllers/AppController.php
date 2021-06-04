<?php

namespace App\Http\Controllers;

use App\Repositories\AppRepository;
use App\Repositories\interfaces\AppRepositoryInterface as AppInterface; 
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Http\Requests\AppRequest;

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
    public function saveApp(AppRequest $request, $object_id){
        $attributes = $request->all();
        $attributes['image'] = $request->image->getClientOriginalName();
        $this->appRepository->store($attributes);
        $this->appRepository->getAll();
        return Redirect('list-apps')->with('create', 'Create App Success');
    }


    // fill edit
    public function editApp( $object_id, $categories_id){
        $data = $this->appRepository->sidebar();
        $super = $this->appRepository->fillEdit($object_id);
        $typeList =$this->appRepository->fillTypeName($object_id);
        return view('admin.app.edit_app', compact('super','data','typeList'));
    }



    // update
    public function update(AppRequest $request, $object_id){
        $attributes = $request->except('_token');
        $this->appRepository->update($object_id, $attributes);
        return Redirect('list-apps')->with('update', 'Update App Success');
    }



    // delete
    public function delete($object_id){
        $this->appRepository->delete($object_id);
        return Redirect('list-apps')->with('delete', 'Delete App Success');
    }
}
