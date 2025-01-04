<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Services\UserService;

class UserController extends Controller
{
    //
    protected $userService;
    public function __construct(UserService $userService){
        $this->userService = $userService;
    }

    public function Register(Request $request){

        $this->userService->regiser($request->all());
    }

    public function login(Request $request){
        $this->userService->login($request->all());
    }
}
