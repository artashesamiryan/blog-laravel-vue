<?php
namespace App\Repositories\UserRepository;
use App\Repositories\AbstractReposytory;
use App\Repositories\UserRepository\UserInterface;
use App\User as Model;
use Auth;
 
class UserRepository extends AbstractReposytory implements UserInterface{

 public function __construct(Model $model)
     {
        parent::__construct($model);    
     }

 public function GetUsers(){

    $users = $this->GetModel()->get();

 }

 public function GetUsersStetus(){
 
   //  $role = Auth::user();

      //   dd($role);
      //   return response()->json($role);


 }

} 


 

 

?>