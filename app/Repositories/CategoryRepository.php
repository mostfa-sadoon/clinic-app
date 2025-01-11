<?php

namespace  App\Repositories;
use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface{

    public function getAll(){
       return $query = Category::query();
    }

    public function findById($id){

    }

    public function create($data){
        return  Category::create($data);
    }

    public function update($id,$data){
        return  Category::where('id',$id)->update($data);
    }

    public function delete($id){

    }

    public function search($search){
        $query = Category::query();
        if (count($search)) {
            foreach($search as $key => $value) {
                if (!in_array($key, $this->unSearchable)) {
                    $query->where($key, $value);
                }
            }
        }
        return $query;
    }

}