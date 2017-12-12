<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Song\SongRepositoryInterface;
class SongController extends Controller
{
    public function __construct(SongRepositoryInterface $song)
    {
         $this->song = $song;
    }

    public function index()
    {
        $status = app('Illuminate\Http\Response')->status();
        $dataSong = $this->song->all();
        return response()->json(['message'=>'success','data'=>$dataSong, 'status'=>$status], 200);
    }
}
