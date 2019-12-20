<?php

namespace App\Http\Middleware;

use Closure;

class PreflightResponse
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        header('Access-Control-Allow-Origin: *');

        // ALLOW OPTIONS METHOD
        $headers = [
        'Access-Control-Allow-Methods' => 'POST, GET, OPTIONS, PUT, DELETE',
        'Access-Control-Allow-Headers' => 'Content-Type, X-XSRF-TOKEN, X-Auth-Token, Origin, Authorization, locale'
        ];

        if ($request->getMethod() === 'OPTIONS') {
        // The client-side application can set only headers allowed in Access-Control-Allow-Headers

        return \Response::make('OK', 200, $headers);
        }

        $response = $next($request);

        if(method_exists($response,'header' )){
            foreach ($headers as $key => $value) {
                $response->header($key, $value);
            }
        }
        return $response;
    }
}