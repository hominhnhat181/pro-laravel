<?php

namespace App\Http\Controllers;

use App\Repositories\GameRepository;
use App\Repositories\interfaces\GameRepositoryInterface as GameInterface; 
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;

class GameController extends Controller
{   

    protected $gameRepository;

    public function __construct(GameInterface $gameRepository){

        $this->gameRepository = $gameRepository;

    }


    // view list
    public function listGame(){
        $data = $this->gameRepository->sidebar();
        $game = $this->gameRepository->getAll();
        return view('admin.game.list_game', compact('data','game'));
    }


    // add
    public function addGame(){
        $data = $this->gameRepository->sidebar();
        $add = $this->gameRepository->getAll();
        $typeList = $this->gameRepository->fillType();
        return view('admin.game.add_game', compact('data','add','typeList'));
    }

    // save object
    public function saveGame(Request $request, $categori_id){
        
      // catch typeName
      $data_type = $request->app_types;

      // get type id using typeName
      $typeId =DB::table('types')->where('typeName', $data_type)->value('id');

        $attributes = array();
        $attributes['name'] = $request->game_name;
        $attributes['title'] =  $request->game_title;
        $attributes['desc'] =  $request->game_desc;
        $attributes['image'] =  $request->game_image;
        $attributes['link'] =  $request->game_link;
        $attributes['types_id'] = $typeId;
        $attributes['categories_id'] = $categori_id;
        $attributes['created_at'] = Carbon::now();
        $attributes['updated_at'] = Carbon::now();

        $this->gameRepository->store($attributes);

        $game = $this->gameRepository->getAll();


        return Redirect('list-games');
    }

// 100% overload

    // edit
    public function editGame( $object_id, $categories_id){
        $data = $this->gameRepository->sidebar();
        $super = $this->gameRepository->fillEdit($object_id);
        $typeList =$this->gameRepository->fillTypeName($object_id);
        return view('admin.game.edit_game', compact('super','data','typeList'));
    }


    public function update(Request $request, $object_id, $categories_id){

        // catch typeName
        $data_type = $request->game_types;

        // get type id using typeName
        $typeId =DB::table('types')->where('typeName', $data_type)->value('id');

        $attributes = array();
        $attributes['name'] = $request->game_name;
        $attributes['title'] =  $request->game_title;
        $attributes['desc'] =  $request->game_desc;
        $attributes['image'] =  $request->game_image;
        $attributes['link'] =  $request->game_link;

        // fill colum types_id of game
        $attributes['types_id'] = $typeId;

        $this->gameRepository->update($object_id, $attributes);
      
        return Redirect('list-games');
    }

    // delete
    public function delete($object_id){
        
        $this->gameRepository->delete($object_id);
        return Redirect('list-games');
    }

}
