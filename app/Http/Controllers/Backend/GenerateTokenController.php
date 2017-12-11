<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\GenerateKey\GenerateKeyRepositoryInterface;

class GenerateTokenController extends Controller
{
    public function __construct(GenerateKeyRepositoryInterface $key)
    {
        $this->key =$key;
    }
    public function index(Request $request)
    {
      return view('backend.api_token.index');
    }
    public  function apiToken()
    {
        $this->key->generateApiToken();
    }

}
