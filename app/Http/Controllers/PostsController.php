<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

use App\Repositories\PostsReposytory\PostsRepository;

class PostsController extends Controller
{
   protected $postsreposy;

   public function __construct(PostsRepository $postsreposy)
   {
       $this->postsreposy = $postsreposy;
   }

    public function index(){
            
        $allPosts = $this->postsreposy->index();

        return response()->json($allPosts);
    }
}
