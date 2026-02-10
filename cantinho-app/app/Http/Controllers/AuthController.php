<?php

namespace App\Http\Controllers;

use App\Models\funcionarioModel;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validade([
            'nomeUsuario' => 'required|string',
            'email' => 'required|string',
            'senha' => 'required|string',
        ]);

        $funcionario = funcionarioModel::create([
            'nomeUsuario' => $request->nomeUsuario,
            'email' => $request->email,
            'senha' => Hash::make($request->senha),
        ]);

        return response([], 201);
    }//Fim da Register

    public function forgotPassword(Request $request): JsonResponse
    {
        $request->validate([
            'email' => 'required|email',
        ]);

        Password::sendResetLink($request->only('email'));

        return response()->json(status: Response::HTTP_OK);
    }//Fim da Function

    public function resetPassword(Request $request): JsonResponse
    {
        $request->validate([
            'token' => 'required|string',
            'email' => 'required|email',
            'senha' => 'required|min:6|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'senha', 'senhaConfirmada', 'token'),
            function(funcionarioModel $funcionario, string $senha){
                $funcionario->forceFill([
                    'senha' => Hash::make($senha)
                ])->setRemeberToken(Str::random(60));
                $funcionario->save();
            }//Fim da Function
        );

        if ($status == Password::PASSWORD_RESET) {
            return response()->json(status: Response::HTTP_OK);
        }//Fim do if

        return response()->json(['message' => 'Erro ao redefinir a senha'], status: Response::HTTP_BAD_REQUEST);
    }//Fim da Function
}//Fim da classe
