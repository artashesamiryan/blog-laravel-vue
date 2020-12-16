<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository\UserRepository;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserRepository $user)
    {
        $this->userRepository =  $user;
        
    }

    public function getStatus(){

    $status =  $this->userRepository->GetUsersStetus();
    return $status;

    }



    
}
