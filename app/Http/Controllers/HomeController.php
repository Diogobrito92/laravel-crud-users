<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        // Garante que só usuários logados acessem
        $this->middleware('auth');
    }

    public function index()
    {
        // Redireciona para lista de usuários
        return redirect()->route('users.index');
    }
}