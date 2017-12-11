<?php

namespace App\Http\Controllers\Backend;
use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use App\Repositories\Users\UserRepositoryInterface;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function __construct(UserRepositoryInterface $user)
    {
        $this->user = $user;
    }
    public function index()
    {
        return view('login');
    }
    public function login(LoginRequest $request)
    {
        $dataRequest = $request->only(['email','password']);
        $dataFind = $this->user->findAttribute("email", $dataRequest['email']);
        if($dataFind->active==1){
            if (Auth::attempt($dataRequest)) {
                return redirect()->route('controlPanel');
            }else{
                return redirect()->back()->withInput();
            }
        }else{
            return redirect()->back()->withErrors('account inactive');
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('sign-in');
    }
}
?>