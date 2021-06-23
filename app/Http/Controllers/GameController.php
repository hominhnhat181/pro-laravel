<?php

namespace App\Http\Controllers;

use App\Repositories\interfaces\GameRepositoryInterface as GameInterface; 
use App\Game;
use App\Http\Requests\GameRequest;


class GameController extends Controller
{   

    protected $gameRepository;

    public function __construct(GameInterface $gameRepository){

        $this->gameRepository = $gameRepository;
        $this->gameRepository->sidebar();
    }


    // view list
    public function listGame(){
        $game = $this->gameRepository->getAll();
        return view('admin.game.list_game', compact('data','game'));
    }


    // add
    public function addGame(){
        $add = $this->gameRepository->getAll();
        $typeList = $this->gameRepository->fillType();
        return view('admin.game.add_game', compact('data','add','typeList'));
    }

    
    // save object
    public function saveGame(GameRequest $request, $object_id){
        $attributes = $request->all();
        $attributes['image'] = $request->image->getClientOriginalName();
        $this->gameRepository->store($attributes);
        return Redirect('list-games')->with('create', 'Create Game Success');
    }


    // edit
    public function editGame( $object_id, $categories_id){
        $super = $this->gameRepository->fillEdit($object_id);
        $typeList =$this->gameRepository->fillTypeName($object_id);
        return view('admin.game.edit_game', compact('super','data','typeList'));
    }


    // update
    public function update(GameRequest $request, $object_id){
        $attributes = $request->except('_token','_method');
        if($request->image == null){
            $attributes['image'] = Game::where('id',$object_id)->value('image');
        }
        $this->gameRepository->update($object_id, $attributes);
        return Redirect('list-games')->with('update', 'Update Game Success');
      
    }


    // delete
    public function delete($object_id){
        $this->gameRepository->delete($object_id);
        return Redirect('list-games')->with('delete', 'Delete Game Success');
    }

}
