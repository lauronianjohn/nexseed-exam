<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['department_name'];

    protected $table = 'departments';
    
    public function employees()
    {
        return $this->hasMany('App\Employee');
    }
    public function storeAll(array $data) {
        return Department::create($data);
    }
    public function fetchAll() {
        return Department::get();
    }
    public function getById($id) {
        return Department::find($id)->first();
    }
    public function updateAll(array $data, $id) {
        return Department::where('id', $id)->update($data);
    }
    public function deleteId($id) {
        return Department::find($id)->delete();
    }
}
