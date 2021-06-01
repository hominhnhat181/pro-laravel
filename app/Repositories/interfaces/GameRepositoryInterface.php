<?php
namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Http\Request;

interface GameRepositoryInterface extends RepositoryInterface
{
    public function fillEdit($id);
    public function fillTypeName($id);

}