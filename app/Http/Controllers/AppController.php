<?php

namespace App\Http\Controllers;

use App\Repositories\interfaces\AppRepositoryInterface as AppInterface; 
use App\Http\Requests\AppRequest;

class AppController extends Controller
{
    protected $appRepository;

    public function __construct(AppInterface $appRepository){

        $this->appRepository = $appRepository;
        $this->appRepository->sidebar();
    }


    // view list
    public function listApp()
    {
        $app = $this->appRepository->getAll();
        return view('admin.app.list_app', compact('data','app'));
    }


    // add
    public function addApp()
    {
        $add = $this->appRepository->getAll();
        $typeList = $this->appRepository->fillType();
        return view('admin.app.add_app', compact('data','add','typeList'));
    }


    // save object
    public function saveApp(AppRequest $request, $object_id)
    {
        $attributes = $request->all();
        $attributes['image'] = $request->image->getClientOriginalName();
        $this->appRepository->store($attributes);
        return Redirect('list-apps')->with('create', 'Create App Success');
    }


    // fill edit
    public function editApp( $object_id, $categories_id)
    {
        $super = $this->appRepository->fillEdit($object_id);
        $typeList =$this->appRepository->fillTypeName($object_id);
        return view('admin.app.edit_app', compact('super','data','typeList'));
    }



    // update
    public function update(AppRequest $request, $object_id)
    {
        $attributes = $request->except('_token','_method');
        $this->appRepository->update($object_id, $attributes);
        return Redirect('list-apps')->with('update', 'Update App Success');
    }



    // delete
    public function delete($object_id)
    {
        $this->appRepository->delete($object_id);
        return Redirect('list-apps')->with('delete', 'Delete App Success');
    }
}
