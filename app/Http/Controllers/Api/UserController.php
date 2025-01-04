<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Http\Requests\Api\UserRegister;

class UserController extends Controller
{
    //
    protected $userService;
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function Register(UserRegister $request){
       return $this->userService->register($request->all()); 
    }

    public function login(Request $request){
        $this->userService->login($request->all());
    }
}
