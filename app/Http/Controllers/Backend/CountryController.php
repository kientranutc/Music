<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Country\CountryRepositoryInterface;

class CountryController extends Controller
{
    public  function __construct(CountryRepositoryInterface $country)
    {
        $this->country = $country;
    }
    public function index()
    {
        $status = app('Illuminate\Http\Response')->status();
        $dataCountry = $this->country->all();
        return response()->json(['message'=>'success','data'=>$dataCountry, 'status'=>$status], 200);
    }
}
