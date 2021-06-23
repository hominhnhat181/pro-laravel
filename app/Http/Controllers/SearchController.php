<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\interfaces\SearchRepositoryInterface as SearchInterface; 

class SearchController extends Controller
{   

    protected $searchRepository;

    public function __construct(SearchInterface $searchRepository){

        $this->searchRepository = $searchRepository;
        $this->searchRepository->shareHeadFoot();
    }


    public function searchLogic(Request $request){
        $attributes = $request->search;
        return $this->searchRepository->searchLogic($attributes);
    }
}
