<?php
namespace App\Repositories\Song;
use App\Models\Song;

class  SongRepository implements  SongRepositoryInterface
{
    public function all()
    {
        return Song::select('song.*','album.name_album', 'singer.name_singer', 'topic.title', 'country.name_country')
        ->join('album', 'album.id_album', '=', 'song.id_album')
        ->join('singer', 'singer.id_singer', '=', 'song.id_singer')
        ->join('topic', 'topic.id_topic', '=', 'song.id_topic')
        ->join('country', 'country.id_country', '=', 'song.id_country')
        ->orderBy('song.created_at', 'DESC')
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
        return Song::find($id);
    }

    public function findByAttribute($att, $name)
    {
        return Song::where($att, $name)->first();
    }
}

?>