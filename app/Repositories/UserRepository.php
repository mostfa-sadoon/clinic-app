<?php

namespace  App\Repositories;
use App\Repositories\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface{

    public function getAllUsers(){

    }

    public function findUserById($id){

    }

    public function create($data){
        return  User::create($data);
    }

    public function update($id,$data){

    }

    public function delete($id){

    }

    public function search($data){

    }

    public function IsPhoneUnique(){

    }

}
