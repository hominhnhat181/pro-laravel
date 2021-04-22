<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoryController extends Controller
{
    public function listCategory(){
        $data = DB::table('categories')->get() ;
        return view('admin.category.list_category', compact('data'));
    }


    public function addCategory(){
        $data = DB::table('categories')->get() ;
        return view('admin.category.add_category', compact('data'));
    }


    public function saveCategory(Request $request){
        $data = array();
        $data['catName'] = $request->category_name;
        DB::table('categories')->insert($data);
        return redirect('list-category');
    }


    public function editCategory($category_id){
        
        $data=DB::table("categories")->where('id', $category_id)->get();
        return view('admin.category.edit_category', compact('data'));
    }


    public function updateCategory(Request $request, $category_id){
        $data = array();
        $data['catName'] = $request->category_name;
        DB::table('categories')->where('id', $category_id)->update($data);
        return Redirect('list-category');
    }


    public function deleteCategory($category_id){
        DB::table('categories')->where('id', $category_id)->delete();
        return Redirect('list-category');
    }
}
