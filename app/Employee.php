<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['Employees_name', 'Employees_address', 'Employees_Email_address', 'Employees_contact_no'];

    protected $table = 'employees';

    public function departments()
    {
        return $this->hasMany('App\Department');
    }
    public function storeAll(array $data) {
        return Employee::create($data);
    }
    public function fetchAll() {
        return Employee::get();
    }
    public function getById($id) {
        return Employee::find($id)->first();
    }
    public function updateAll(array $data, $id) {
        return Employee::where('id', $id)->update($data);
    }
    public function deleteId($id) {
        return Employee::find($id)->delete();
    }
}
