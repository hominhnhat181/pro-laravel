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
    

    public function getGame($catId){
       return $this->pageRepository->getGame($catId);
    }
    

    public function getApp($catId){
        return $this->pageRepository->getApp($catId);
    }


    public function getType($catId,$id){
        return $this->pageRepository->getType($catId,$id);
    }


    public function getDetail($types_id,$id){
        return $this->pageRepository->getDetail($types_id,$id);
    }
}
     