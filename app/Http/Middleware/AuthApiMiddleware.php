<?php

namespace App\Http\Middleware;

use App\Repositories\GenerateKey\GenerateKeyRepositoryInterface;
use Closure;
class AuthApiMiddleware
{
    public function __construct(GenerateKeyRepositoryInterface $keyApi)
    {
        $this->keyApi = $keyApi;
    }

    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       $token = $request->get('api-token');
       $check = $this->keyApi->findByAttrbute('api_token', $token);
       if ($check) {
           return $next($request);
       }
       return response()->json(
           ['error' => 'Unauthorized'], 401);
    }
}
