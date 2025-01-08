<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Traits\response;
use App\Services\UserService;
use App\Interfaces\UserRepositoryInterface;
use Hash;

class AuthController extends Controller
{
    //
    use response;
    protected $userService;
    public function __construct(UserService $userService,UserRepositoryInterface $userRepository){
        $this->userService = $userService;
        $this->userRepository = $userRepository;
    }

    public function login(Request $request)
    {
        $credentials = request(['phone', 'password']);

        if (! $token = auth()->guard('api')->attempt($credentials)) {
            return $this->response(401,'Unauthorized');
        }
        $data['token']=$token;
        $data['user'] = Auth::guard('api')->user();
        return $this->response(200,'تم تسجيل الدخول بنجاح',$data);
    }

    public function logout()
    {
        auth()->logout();
        return $this->response(200,'تم تسجيل الخروج بنجاح');
    }

    public function sendOtp(Request $request){
        $this->userService->createOtp($request->all());
        return $this->response(200,'تم   ارسال الكود الى الهاتف');
    }
    
    public function forgotPassword(Request $request){
       $user=  $this->userService->checkOtp($request->all());

       if($user==false)
       return $this->response(403,'expired otp');
        
       $this->userRepository->update($user->id,['password'=>Hash::make($request->password)]);
       return $this->response(200,'تم تعديل كلمه المرور بنجاح');
    }
 
}
