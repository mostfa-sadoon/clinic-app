<?php

namespace  App\Services;
use App\Interfaces\UserRepositoryInterface;
use Illuminate\Support\Facades\Date;
use Illuminate\Support\Carbon;

class UserService{
    protected $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function register($data)
    {
        return $this->userRepository->create($data);
    }

    public function createOtp($data){
       date_default_timezone_set('Africa/Cairo');
       $user= $this->userRepository->search($data)->first();
       $this->userRepository->update($user->id,['otp'=> random_int(100000, 999999) , 'otp_time'=>date::now()]);
    }
    
    public function checkOtp($data){
        date_default_timezone_set('Africa/Cairo');
         
        $user= $this->userRepository->search($data)->first();    
        if($user == null || $data['otp']!=$user->otp)
        return false;
        // this to check if otp is expired or not
        if(now()->diffInMinutes($user->otp_time) < -2)
        return false;

        return $user;

    }

}
