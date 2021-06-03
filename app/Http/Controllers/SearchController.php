<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class SearchController extends Controller
{
    public function search(){
      
        return view('layouts.search');
    }
    public function searchLogic(Request $request){
        $cat = DB::table('categories')->get();
        $typ = DB::table('types')->join('categories','categories.id','=','types.categories_id')->get();

        $attributes = $request->search;

        $resultGame = DB::table('games')
        ->join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.name','games.image','games.desc','games.title', 'games.link','games.types_id', 'games.id')
        ->where('name','LIKE','%'.$attributes.'%')
        ->orWhere('types.typeName','LIKE','%'.$attributes.'%')
        ->paginate(5);


        $resultApp = DB::table('apps')
        ->join('types', 'apps.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'apps.name','apps.image','apps.desc','apps.title', 'apps.link','apps.types_id', 'apps.id')
        ->where('name','LIKE','%'.$attributes.'%')
        ->orWhere('types.typeName','LIKE','%'.$attributes.'%')
        ->paginate(5);
        
        return view('layouts.search', compact('resultGame','resultApp','cat','typ'));
    }
}
