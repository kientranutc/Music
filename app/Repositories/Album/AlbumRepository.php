<?php
namespace App\Repositories\Album;

use App\Models\Album;

class AlbumRepository implements  AlbumRepositoryInterface
{
    public function all()
    {
        return Album::select('album.name_album','song.*', 'singer.name_singer')
        ->join('song','song.id_album', '=', 'album.id_album')
        ->join('singer','singer.id_singer', '=', 'album.id_singer')
        ->orderBy('album.created_at', 'DESC')
        ->get();
    }

    public function save($data)
    {

    }

    public function update($data, $id)
    {

    }

    public function find($id)
    {
        return Album::find($id);
    }

    public function findByAttribute($att, $name)
    {
        return Album::where($att, $name)->first();
    }
}

?>