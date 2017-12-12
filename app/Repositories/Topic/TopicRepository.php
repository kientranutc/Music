<?php
namespace App\Repositories\Topic;
use App\Models\Topic;

class TopicRepository implements TopicRepositoryInterface
{
    public function all()
    {
        return Topic::all();
    }

    public function save($data)
    {

    }

    public function update($data, $id)
    {

    }

    public function find($id)
    {
        return Topic::find($id);
    }

    public function findByAttribute($att, $name)
    {
        return Topic::where($att, $name)->first();
    }
}

?>