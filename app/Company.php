<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = ['company_name'];

    protected $table = 'companies';

    public function departments()
    {
        return $this->hasMany('App\Department');
    }
    public function storeAll(array $data) {
        return Company::create($data);
    }
    public function fetchAll() {
        return Company::get();
    }
    public function getById($id) {
        return Company::find($id)->first();
    }
    public function updateAll(array $data, $id) {
        return Company::where('id', $id)->update($data);
    }
    public function deleteId($id) {
        return Company::find($id)->delete();
    }
}
