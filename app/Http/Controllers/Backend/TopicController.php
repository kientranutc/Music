<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Topic\TopicRepositoryInterface;

class TopicController extends Controller
{
    public function __construct(TopicRepositoryInterface $topic)
    {
        $this->topic = $topic;
    }

    public function index()
    {
        $status = app('Illuminate\Http\Response')->status();
        $dataTopic = $this->topic->all();
        return response()->json(['message'=>'success','data'=>$dataTopic, 'status'=>$status], 200);
    }
}
