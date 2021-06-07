<?php

namespace App\Http\Controllers;

use App\Repositories\GameRepository;
use App\Repositories\interfaces\GameRepositoryInterface as GameInterface; 
use Illuminate\Http\Request;
use Carbon\Carbon;
use DB;
use App\Http\Requests\GameRequest;


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
    public function saveGame(GameRequest $request, $object_id){
        $attributes = $request->all();
        $attributes['image'] = $request->image->getClientOriginalName();
        $this->gameRepository->store($attributes);
        return Redirect('list-games')->with('create', 'Create Game Success');
    }


    // edit
    public function editGame( $object_id, $categories_id){
        $data = $this->gameRepository->sidebar();
        $super = $this->gameRepository->fillEdit($object_id);
        $typeList =$this->gameRepository->fillTypeName($object_id);
        return view('admin.game.edit_game', compact('super','data','typeList'));
    }


    // update
    public function update(GameRequest $request, $object_id){
        $attributes = $request->except('_token');
        $this->gameRepository->update($object_id, $attributes);
        return Redirect('list-games')->with('update', 'Update Game Success');
      
    }


    // delete
    public function delete($object_id){
        $this->gameRepository->delete($object_id);
        return Redirect('list-games')->with('delete', 'Delete Game Success');
    }

}
