<?php

namespace App\Repositories\Interfaces;  

use App\Models\User;

interface UserRepositoryInterface {
    public function getAllUsers();
    public function findUserById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function search($search);
    public function IsPhoneUnique();

}
