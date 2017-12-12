<?php
namespace  App\Repositories\Country;

interface  CountryRepositoryInterface
{
    public function all();

    public function save($data);

    public function update($data, $id);

    public function find($id);

    public function findByAttribute($att, $name);
}

?>