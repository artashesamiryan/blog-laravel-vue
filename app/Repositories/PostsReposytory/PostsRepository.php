<?php
namespace App\Repositories\PostsReposytory;
use  App\Repositories\AbstractReposytory;
use  App\Repositories\PostsReposytory\PostsInterface;
use App\Models\Post as Model;
use Illuminate\Http\Request;

 class PostsRepository extends AbstractReposytory implements PostsInterface
 {
     public function __construct(Model $model)
     {
        parent::__construct($model);    
     }

     public function index(){

        $posts =  $this->GetModel()->get();
         
        return response()->json($posts);
     }
      
    public function create(Request $request){

    }

 }

?>