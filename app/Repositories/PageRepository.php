<?php

namespace App\Repositories;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\PageRepositoryInterface;
use Illuminate\Http\Request;
use App\Game;
use App\Category;
use App\Type;
use App\App;
use DB;



class PageRepository extends EloquentRepository implements PageRepositoryInterface
{
    public function getModel()
    {
        return \App\Game::class;
    }


    public function getObject(){
        $cat = Category::get();
        $typ = Type::get();

        $gameRing = Game::join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.name','games.image', 'games.link','games.title', 'games.types_id','games.id')
        ->limit(6)
        ->get();
       
        $bestGame = Game::join('types', 'games.types_id', '=', 'types.id')
        ->select( 'games.desc', 'games.name','games.image','games.types_id','games.id')
        ->where('games.id', 1)
        ->get();

        $gameList = Game::join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.*')
        ->limit(8)
        ->get();

        $appList = App::join('types', 'apps.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'apps.*')
        ->limit(8)
        ->get();

        $gameslider = Game::join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.*')
        ->limit(8)->where('games.title','!=','Multiplay')
        ->get();
        return view('layouts.index', compact('gameslider', 'gameRing', 'gameList','bestGame', 'appList','cat','typ'));
    }



    public function getGame($catId){
       $cat = Category::get();
        $typ = Type::get();
        $gameList = Game::join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.*')
        ->limit(12)
        ->get();
        $typeList = Type::where('categories_id',$catId)->get();
        return view('layouts.game',compact('cat','typ','gameList', 'typeList'));
    }


    public function getApp($catId){
        $cat = Category::get();
        $typ = Type::get();
        $appList = App::join('types', 'apps.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'apps.*')
        ->limit(12)
        ->get();
        $typeList = Type::where('categories_id',$catId)->get();
        return view('layouts.app',compact('cat','typ','appList', 'typeList'));
    }


    public function getType($catId,$id){
        $cat = Category::get();
        $typ = Type::get();
        $alltype = Type::where('categories_id',$catId)->get();

        $gameList = Game::where('types_id', $id)->get();
        $appList = App::where('types_id', $id)->get();
        $typeList = Type::where('id', $id)->get();
        $allthing = $gameList->union($appList);
        return view('layouts.type', compact( 'cat','typ','allthing','alltype','typeList'));
    }



    public function getDetail($types_id,$id){
        $cat = Category::get();
        $typ = Type::get();
        $gameList = Game::where('id', $id)->get();
        $appList = App::where('id', $id)->get();
        if($types_id < 5){
            $allthingD = $gameList;
        }else{
            $allthingD = $appList;
        }
        $allType = Type::where('id', $types_id)->get();
        return view('layouts.obj-detail', compact('cat','typ', 'allthingD','allType'));
    }



    public function getContact(){
        $cat = Category::get();
        $typ = Type::get();
        return view('layouts.contact',compact('cat','typ'));
    }

}