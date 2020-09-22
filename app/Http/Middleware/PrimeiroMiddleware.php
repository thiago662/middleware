<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;

class PrimeiroMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        Log::debug('Passou pelo PrimeiroMiddleware ANTES');
        $response = $next($request);
        Log::debug('Passou pelo PrimeiroMiddleware DEPOIS');
        //return response("teste");
        //return response("Parando");
        //eturn $response->setContent("Alterei a resposta");
        return response("Alterei a resposta",201);
    }
}
