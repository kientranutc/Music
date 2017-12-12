<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Album\AlbumRepositoryInterface;

class AlbumController extends Controller
{
    public function __construct(AlbumRepositoryInterface $album)
    {
        $this->album = $album;
    }

    public function index()
    {
        $status = app('Illuminate\Http\Response')->status();
        $dataAlbum = $this->album->all();
        return response()->json(['message'=>'success','data'=>$dataAlbum, 'status'=>$status], 200);
    }
}
