<?php
namespace  App\Repositories\Users;
use User;

class UserRepository implements  UserRepositoryInterface
{
    public function all()
    {
       return User::all();
    }

    public function save($data)
    {

    }

    public function update($data, $id)
    {

    }

    public function find($id)
    {
        return User::find($id);
    }

    public function findAttribute($attr, $name)
    {
        return User::where($attr, $name)->first();
    }
}

?>