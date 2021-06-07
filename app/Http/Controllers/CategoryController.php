<?php

namespace App\Http\Controllers;

use App\Repositories\CategoryRepository;
use App\Repositories\interfaces\CategoryRepositoryInterface as CategoryInterface;
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Http\Requests\CategoryRequest;

class CategoryController extends Controller
{
    protected $categoryRepository;

    public function __construct(CategoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }


    public function listCategory()
    {
        $data = $this->categoryRepository->sidebar();
        $data_ad = $this->categoryRepository->getAll();
        return view('admin.category.list_category', compact('data', 'data_ad'));
    }


    public function addCategory()
    {
        $data = $this->categoryRepository->sidebar();
        $data_ad = $this->categoryRepository->getAll();
        return view('admin.category.add_category', compact('data', 'data_ad'));
    }



    public function store(CategoryRequest $request)
    {
        $attributes = $request->all();
        $this->categoryRepository->store($attributes);
        return redirect('list-category')->with('create', 'Create Category Success');
    }


    public function get($id)
    {
        $data = $this->categoryRepository->sidebar();
        $data_ed = $this->categoryRepository->find($id);
        return view('admin.category.edit_category', compact('data', 'data_ed'));
    }


    public function update($category_id, CategoryRequest $request)
    {
        $attributes = $request->except('_token');
        $this->categoryRepository->update($category_id, $attributes);
        return redirect('list-category')->with('update', 'Update Category Success');
    }

    
    public function delete($category_id)
    {
        $this->categoryRepository->delete($category_id);
        return redirect('list-category')->with('delete', 'Delete Category success');
    }
}