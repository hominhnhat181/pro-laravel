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
    public function getMenu(){
        $catGame = DB::table('categories')->where('id','=', 1)->get();
        $typeGame = DB::table('types')->where('id', '<', 5)->get();
        $catApp = DB::table('categories')->where('id','=', 2)->get();
        $typeApp = DB::table('types')->where('id', '>', 4)->get();

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

        return view('layouts.index', compact('gameslider','typeGame','typeApp', 'catGame','catApp', 'gameRing', 'gameList','bestGame', 'appList'));
    }
    
    public function getContact(){
        $catGame = DB::table('categories')->where('id','=', 1)->get() ;
        $typeGame = DB::table('types')->where('id', '<', 5)->get();
        $catApp = DB::table('categories')->where('id','=', 2)->get() ;
        $typeApp = DB::table('types')->where('id', '>', 4)->get();
        return view('layouts.contact',compact('typeGame','typeApp', 'catGame','catApp'));
    }
    
    public function getGame(){
        $catGame = DB::table('categories')->where('id','=', 1)->get() ;
        $typeGame = DB::table('types')->where('id', '<', 5)->get();
        $catApp = DB::table('categories')->where('id','=', 2)->get() ;
        $typeApp = DB::table('types')->where('id', '>', 4)->get();

        $gameList = DB::table('games')
        ->join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.name','games.image', 'games.link','games.title', 'games.types_id','games.id')
        ->limit(12)
        ->get();

        

        $typeList = DB::table('types')->where('id', '<', 5)->get();
        
        return view('layouts.game',compact('typeGame','typeApp', 'catGame','catApp','gameList', 'typeList'));
    }
    

    public function getApp(){
        $catGame = DB::table('categories')->where('id','=', 1)->get() ;
        $typeGame = DB::table('types')->where('id', '<', 5)->get();
        $catApp = DB::table('categories')->where('id','=', 2)->get() ;
        $typeApp = DB::table('types')->where('id', '>', 4)->get();
        $appList = DB::table('apps')
        ->join('types', 'apps.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'apps.name','apps.image', 'apps.link','apps.title', 'apps.types_id','apps.id')
        ->limit(12)
        ->get();
        $typeList = DB::table('types')->where('id', '>', 4)->get();
        return view('layouts.app',compact('typeGame','typeApp', 'catGame','catApp','appList', 'typeList'));
    }


    public function getType($id){
        $catGame = DB::table('categories')->where('id','=', 1)->get() ;
        $typeGame = DB::table('types')->where('id', '<', 5)->get();
        $catApp = DB::table('categories')->where('id','=', 2)->get() ;
        $typeApp = DB::table('types')->where('id', '>', 4)->get();

        if($id < 5 ){
            $alltype = DB::table('types')->where('id', '<', 5)->get();
        }else{
            $alltype =DB::table('types')->where('id', '>', 4)->get();
        }
       
        $gameList = DB::table('games')->where('types_id', $id)->get();
        $appList = DB::table('apps')->where('types_id', $id)->get();
        $typeList = DB::table('types')->where('id', $id)->get();

        $allthing = $gameList->union($appList);
       

        return view('layouts.type', compact('typeGame','typeApp', 'catGame','catApp','allthing','alltype','typeList'));
    }



    public function getDetail($types_id,$id){
        $catGame = DB::table('categories')->where('id','=', 1)->get() ;
        $typeGame = DB::table('types')->where('id', '<', 5)->get();
        $catApp = DB::table('categories')->where('id','=', 2)->get() ;
        $typeApp = DB::table('types')->where('id', '>', 4)->get();

        $gameList = DB::table('games')->where('id', $id)->get();
        $appList = DB::table('apps')->where('id', $id)->get();

        if($types_id < 5){
            $allthingD = $gameList;
        }else{
            $allthingD = $appList;
        }
        $allType = DB::table('types')->where('id', $types_id)->get();
       
        return view('layouts.obj-detail', compact('typeGame','typeApp', 'catGame','catApp','allthingD','allType'));
    }
}
     