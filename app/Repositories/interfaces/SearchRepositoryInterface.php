<?php
namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\RepositoryInterface;

interface SearchRepositoryInterface extends RepositoryInterface
{
    public function searchLogic($attributes);
}