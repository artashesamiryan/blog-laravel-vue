<?php
namespace App\Repositories\PostsReposytory;

use Illuminate\Http\Request;

use App\Models\Post;

interface PostsInterface
{

    /**
     * 
     *
     * @return Post
     */


 public function index(); 


 public function create(Request $request);  



}




?>