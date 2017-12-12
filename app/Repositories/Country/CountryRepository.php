<?php
namespace App\Repositories\Country;
use App\Models\Country;
class CountryRepository implements CountryRepositoryInterface
{
    public function all()
    {
        return Country::all();
    }

    public function save($data)
    {

    }

    public function update($data, $id)
    {

    }

    public function find($id)
    {
        return Country::find($id);
    }

    public function findByAttribute($att, $name)
    {
        return Country::where($att, $name)->first();
    }
}

?>