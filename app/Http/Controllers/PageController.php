<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
class PageController extends Controller
{
    
    public function getIndex(){
        return view('layouts.index');
    }

    public function menu(){
        $cat = DB::table('categories')->get();
        $typ = DB::table('types')->join('categories','categories.id','=','types.categories_id')->get();
        return view('layouts.master', compact('cat','typ'));
    }

    public function getObject(){
        $cat = DB::table('categories')->get();
        $typ = DB::table('types')->join('categories','categories.id','=','types.categories_id')->get();

        $gameRing = DB::table('games')
        ->join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.name','games.image', 'games.link','games.title', 'games.types_id','games.id')
        ->limit(6)
        ->get();
       
        $bestGame = DB::table('games')
        ->join('types', 'games.types_id', '=', 'types.id')
        ->select( 'games.desc', 'games.name','games.image','games.types_id','games.id')
        ->where('games.id', 1)
        ->get();

        $gameList = DB::table('games')
        ->join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.name','games.image','games.desc','games.title', 'games.link','games.types_id', 'games.id')
        ->limit(8)
        ->get();

        $appList = DB::table('apps')
        ->join('types', 'apps.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'apps.name','apps.image','apps.link','apps.types_id','apps.id')
        ->limit(8)
        ->get();

        $gameslider = DB::table('games')
        ->join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.name','games.image','games.desc','games.title', 'games.link','games.types_id', 'games.id')
        ->limit(8)->where('games.title','!=','Multiplay')
        ->get();

        return view('layouts.index', compact('gameslider', 'gameRing', 'gameList','bestGame', 'appList','cat','typ'));
    }
    
    public function getContact(){
        $cat = DB::table('categories')->get();
        $typ = DB::table('types')->join('categories','categories.id','=','types.categories_id','cat','typ')->get();
        return view('layouts.contact',compact('cat','typ'));
    }
    
    public function getGame(){
        $cat = DB::table('categories')->get();
        $typ = DB::table('types')->join('categories','categories.id','=','types.categories_id')->get();

        $gameList = DB::table('games')
        ->join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.name','games.image', 'games.link','games.title', 'games.types_id','games.id')
        ->limit(12)
        ->get();

        $typeList = DB::table('types')->join('categories','categories.id','=','types.categories_id')->where('categories.id',1)->get();
        
        return view('layouts.game',compact('cat','typ','gameList', 'typeList'));
    }
    

    public function getApp(){
        $cat = DB::table('categories')->get();
        $typ = DB::table('types')->join('categories','categories.id','=','types.categories_id')->get();

        $appList = DB::table('apps')
        ->join('types', 'apps.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'apps.name','apps.image', 'apps.link','apps.title', 'apps.types_id','apps.id')
        ->limit(12)
        ->get();
        $typeList = DB::table('types')->join('categories','categories.id','=','types.categories_id')->where('categories.id',2)->get();
        return view('layouts.app',compact('cat','typ','appList', 'typeList'));
    }


    public function getType($id){
        $cat = DB::table('categories')->get();
        $typ = DB::table('types')->join('categories','categories.id','=','types.categories_id')->get();
        if($id < 5 ){
            $alltype = DB::table('types')->where('id', '<', 5)->get();
        }else{
            $alltype =DB::table('types')->where('id', '>', 4)->get();
        }
       
        $gameList = DB::table('games')->where('types_id', $id)->get();
        $appList = DB::table('apps')->where('types_id', $id)->get();
        $typeList = DB::table('types')->where('id', $id)->get();

        $allthing = $gameList->union($appList);
  

        return view('layouts.type', compact( 'cat','typ','allthing','alltype','typeList'));
    }



    public function getDetail($types_id,$id){
        $cat = DB::table('categories')->get();
        $typ = DB::table('types')->join('categories','categories.id','=','types.categories_id')->get();

        $gameList = DB::table('games')->where('id', $id)->get();
        $appList = DB::table('apps')->where('id', $id)->get();

        if($types_id < 5){
            $allthingD = $gameList;
        }else{
            $allthingD = $appList;
        }
        $allType = DB::table('types')->where('id', $types_id)->get();
       
        return view('layouts.obj-detail', compact('cat','typ', 'allthingD','allType'));
    }
}
     