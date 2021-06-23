<?php
namespace App\Repositories\Interfaces;

use App\Repositories\Interfaces\RepositoryInterface;

interface AppRepositoryInterface extends RepositoryInterface
{
    public function fillEdit($id);
    public function fillType();
    public function fillTypeName($id);

}