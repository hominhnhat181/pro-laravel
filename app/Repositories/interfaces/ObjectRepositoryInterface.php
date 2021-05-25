<?php
namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Http\Request;

interface ObjectRepositoryInterface extends RepositoryInterface
{
    public function listObject($categori_name, $categori_id);
}