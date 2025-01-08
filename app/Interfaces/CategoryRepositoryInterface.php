<?php
use App\Models\Category;

interface CategoryRepositoryInterface {
    public function getAll();
    public function findById($id);
    public function create(array $data);
    public function update($id, array $data);
    public function delete($id);
    public function search($search);
}