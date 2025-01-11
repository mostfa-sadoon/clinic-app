<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Interfaces\CategoryRepositoryInterface;
use Illuminate\Http\Request;
use App\Traits\response;

class CategoryController extends Controller
{
    use response;
    protected $categoryService; 
    protected $categoryRepository;
    public function __construct(CategoryRepositoryInterface $categoryRepository){        
        $this->categoryRepository = $categoryRepository;
    }

    public function index(){
        $categories =  $this->categoryRepository->getAll()->paginate(20);
        return $this->response(200,'تم تسجيل الدخول بنجاح',['categories'=>$categories]);
    }

    
}
