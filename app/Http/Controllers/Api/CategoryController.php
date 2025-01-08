<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    protected $userService;
    public function __construct(CategoryRepositoryInterface $categoryRepository){
        $this->userService = $userService;
        $this->userRepository = $userRepository;
    }
}
