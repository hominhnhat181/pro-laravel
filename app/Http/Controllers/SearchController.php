<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\interfaces\SearchRepositoryInterface as SearchInterface; 

class SearchController extends Controller
{   

    protected $searchRepository;

    public function __construct(SearchInterface $searchRepository){

        $this->searchRepository = $searchRepository;
        $this->searchRepository->shareHeadFoot();
        $this->searchRepository->sidebar();
    }


    public function pageSearch(Request $request){
        $attributes = $request->search;
        return $this->searchRepository->pageSearch($attributes);
    }


    public function adminSearch(Request $request){
        $attributes = $request->search;
        return $this->searchRepository->adminSearch($attributes);
    }
    
}
