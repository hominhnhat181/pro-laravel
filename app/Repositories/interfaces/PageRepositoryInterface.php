<?php
namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Http\Request;

interface PageRepositoryInterface extends RepositoryInterface
{
    public function getObject();
    public function getGame($catId);
    public function getContact();
    public function getApp($catId);
    public function getType($catId,$id);
    public function getDetail($types_id,$id);
}