<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class EnvironmentCheckMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $requiredVariables = [
            'CNPJ_REMETENTE',
            'TOKEN_AUTENTICACAO',
            'CODIGO_PLATAFORMA',
            'CEP',
        ];

        foreach ($requiredVariables as $variable) {
            if (empty(env($variable))) {
                return response()->json(['error' => 'Esta faltando a variável de ambiente '.$variable.' no arquivo .env'], 500);
            }
        }

        return $next($request);
    }
}
