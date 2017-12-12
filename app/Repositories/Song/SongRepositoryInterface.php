<?php
namespace App\Repositories\Song;

interface SongRepositoryInterface
{
    public function all();

    public function save($data);

    public function update($data, $id);

    public function find($id);

    public function findByAttribute($att, $name);
}


?>