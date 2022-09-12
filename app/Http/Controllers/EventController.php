<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        $nome = "Thassius";
        $idade = 26;
    
        $arr = [11,22,33,44,55];
    
        return view('welcome', 
                [
                    'nome' => $nome, 
                    'idade' => $idade,
                    'arr' => $arr
                ]);
    }

    public function create() {
        return view('events.create');
    }
}
