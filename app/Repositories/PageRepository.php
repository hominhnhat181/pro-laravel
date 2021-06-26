<?php

namespace App\Repositories;

use App\App;
use App\Game;
use App\Type;
use App\Repositories\EloquentRepository;
use App\Repositories\Interfaces\PageRepositoryInterface;

use Illuminate\Database\Query\Builder;


class PageRepository extends EloquentRepository implements PageRepositoryInterface
{
    public function getModel()
    {
        return \App\User::class;
    }


    public function getObject(){

        $gameRing = Game::join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.name','games.image', 'games.link','games.title', 'games.types_id','games.id')
        ->limit(6)
        ->get();

        $bestGame = Game::join('types', 'games.types_id', '=', 'types.id')
        ->select( 'games.desc', 'games.name','games.image','games.types_id','games.id')
        ->orderByRaw('games.created_at Desc')->limit(1)->get();

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
        $gameList = Game::join('types', 'games.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'games.*')
        ->limit(12)
        ->paginate(6);
        $typeList = Type::where('categories_id',$catId)->get();
        return view('layouts.game',compact('cat','typ','gameList', 'typeList'));
    }


    public function getApp($catId){
        $appList = App::join('types', 'apps.types_id', '=', 'types.id')
        ->select( 'types.typeName', 'apps.*')
        ->limit(12)
        ->paginate(6);
        $typeList = Type::where('categories_id',$catId)->get();
        return view('layouts.app',compact('cat','typ','appList', 'typeList'));
    }


    public function getType($catId,$id){
        $alltype = Type::where('categories_id',$catId)->get();
        $gameList = Game::where('types_id', $id);
        $allthing = App::where('types_id', $id)->union($gameList)->paginate(6);
        $typeList = Type::where('id', $id)->get();
        return view('layouts.type', compact('query', 'cat','typ','allthing','alltype','typeList'));
    }



    public function getDetail($types_id,$id){
        $gameList = Game::where('id', $id)->where('types_id',$types_id);
        $allthingD = App::where('id', $id)->where('types_id',$types_id)->union($gameList)->get();
        $allType = Type::where('id', $types_id)->get();
        return view('layouts.obj-detail', compact('cat','typ', 'allthingD','allType'));
    }



    public function getContact(){
        return view('layouts.contact',compact('cat','typ'));
    }

}