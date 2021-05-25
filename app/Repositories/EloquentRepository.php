<?php
namespace App\Repositories;

use App\Repositories\Interfaces\RepositoryInterface;
use DB;
abstract class EloquentRepository implements RepositoryInterface
{
    /**
    * @var \Illuminate\Database\Eloquent\Model
    */
    protected $_model;
    /**
    * EloquentRepository constructor.
    */
    public function __construct()
    {
        $this->setModel();
    }
    /**
    * get model
    * @return string
    */
    abstract public function getModel();
    /**
    * Set model
    */
    public function setModel()
    {
        $this->_model = app()->make(
        $this->getModel()
        );
    }
    /**
    * Get All
    * @return \Illuminate\Database\Eloquent\Collection|static[]
    */
    public function getAll()
    {
        return $this->_model->all();
    }
    /**
    * Get one
    * @param $id
    * @return mixed
    */
    public function find($id)
    {
        $result = $this->_model->where('id', $id)->get();
        return $result;
    }
    /**
    * Create
    * @param array $attributes
    * @return mixed
    */ 

    
    public function store(array $attributes)
    {
        return $this->_model->create($attributes);
    }
    /**
    * Update
    * @param $id
    * @param array $attributes
    * @return bool|mixed
    */


    public function update($id, array $attributes)
    {
        $result = $this->find($id);
        if ($result) {
            $this->_model->where('id', $id)->update($attributes);
            return $result;
        }
        return false;
    }
    /**
    * Delete
    *
    * @param $id
    * @return bool
    */


    public function delete($id)
    {
        $result = $this->_model->where('id', $id)->get();
        if ($result) {
            $this->_model->where('id', $id)->delete();
            return true;
        }
        return false;
    }
    // HAND MAKE
    public function sidebar()
    {
       return db::table('categories')->get();
    }

}