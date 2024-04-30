<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsuarioController extends Controller
{
    public function login(Request $request) {
        $validado = $request->validate([
            'usuario' => 'required|max:50',
            'contrasena' => 'required|max:50',
        ]);
        if ($validado) {
            return "OK";
        }
    }
}
