<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    public function sorteo(Request $request){
        $usuario = User::where([
            ['cedula', $request->cedula]
        ])->first();

        if ($usuario){
            $usuario->estado = 0;
            $usuario->save();

            return view('welcome', ['numero' => $usuario->id]);
        }else {
            return view('welcome', ['numero' => $this->random_int(96, 408)]);
        }
    }

    public function random_int($min, $max){
        return random_int($min, $max);
    }
}
