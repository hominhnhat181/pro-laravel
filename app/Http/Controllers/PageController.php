<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use App\Repositories\PageRepository;
use App\Repositories\interfaces\PageRepositoryInterface as PageInterface; 

class PageController extends Controller
{
    protected $pageRepository;

    public function __construct(PageInterface $pageRepository){

        $this->pageRepository = $pageRepository;

    }

    
    public function getIndex(){
        return view('layouts.index');
    }


    public function getObject(){
        return $this->pageRepository->getObject();
    }
    

    public function getContact(){
        return $this->pageRepository->getContact();
    }
    

    public function getGame(){
       return $this->pageRepository->getGame();
    }
    

    public function getApp(){
        return $this->pageRepository->getApp();
    }


    public function getType($id){
        return $this->pageRepository->getType($id);
    }


    public function getDetail($types_id,$id){
        return $this->pageRepository->getDetail($types_id,$id);
    }
}
     