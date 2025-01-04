<?php

namespace  App\Services;
use App\Repositories\Interfaces\UserRepositoryInterface;

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
}
