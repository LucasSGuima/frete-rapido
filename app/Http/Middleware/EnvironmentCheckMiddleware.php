<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
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

        if (env('VALIDACAO_CEP')) {
            $cep = env('CEP');
            $response = Http::get('https://viacep.com.br/ws/' . $cep . '/json/');
            if (!$response->ok() || isset($response->json()['erro'])) {
                return response()->json(['error' => 'A variável de ambiente CEP é inválida'], 500);
            }
        }

        return $next($request);
    }
}
