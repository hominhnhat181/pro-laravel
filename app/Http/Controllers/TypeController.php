<?php

namespace App\Http\Controllers;

use App\Repositories\interfaces\TypeRepositoryInterface as TypeInterface;; 
use App\Http\Requests\TypeRequest;


class TypeController extends Controller
{

    protected $categoryRepository;

    public function __construct(TypeInterface $typeRepository){

        $this->typeRepository = $typeRepository;
        $this->typeRepository->sidebar();

    }


    // list 
    public function listType(){
        $data_ad = $this->typeRepository->getAll();
        return view('admin.type.list_type', compact('data','data_ad'));
    }


    // fill add view
    public function addType(){
        $data_ad = $this->typeRepository->getAll();
        $listCat = $this->typeRepository->fillCategory();
        return view('admin.type.add_type', compact('data','data_ad','listCat'));
    }


    // add
    public function store(TypeRequest $request){
        $attributes = $request->all();
        $this->typeRepository->store($attributes);
        return redirect('list-type')->with('create', 'Create Type Success');
    }


    // fill edit view
    public function get($id){
        $data_ed = $this->typeRepository->find($id);
        $listCat = $this->typeRepository->fillCategory();
        return view('admin.type.edit_type', compact('data','data_ed','listCat'));
    }


    // update
    public function update($type_id,TypeRequest $request){
        $attributes = $request->except('_token','_method');
        $this->typeRepository->update($type_id, $attributes);
        return redirect('list-type')->with('update', 'Update Type Success');
    }


    // detete
    public function delete($id) {
        $this->typeRepository->delete($id);
        return redirect('list-type')->with('delete', 'Delete Type Success');
    }
}
