<?php

namespace  App\Repositories;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface{

   public $unSearchable=['password'];

    public function getUsers(){

    }

    public function findId($id){

    }

    public function create($data){
        return  User::create($data);
    }

    public function update($id,$data){
        return  User::where('id',$id)->update($data);
    }

    public function delete($id){

    }

    public function search($search){
        $query = User::query();
        if (count($search)) {
            foreach($search as $key => $value) {
                if (!in_array($key, $this->unSearchable)) {
                    $query->where($key, $value);
                }
            }
        }
        return $query;
    }

    public function IsPhoneUnique(){

    }

}
