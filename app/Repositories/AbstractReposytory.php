<?php
namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;

abstract class AbstractReposytory{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }


    public function GetModel(){
        return $this->model;
    }


 }


?>


