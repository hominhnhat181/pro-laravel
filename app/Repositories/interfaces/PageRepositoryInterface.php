<?php
namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Http\Request;

interface PageRepositoryInterface extends RepositoryInterface
{
    public function menu();
    public function getObject();
    public function getGame();
    public function getContact();
    public function getApp();
    public function getType($id);
    public function getDetail($types_id,$id);
}