<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StrukturController extends Controller
{
    public function struktur(){
        return view('fitur.user.profil.struktur', 
        ['title'=> 'Struktur Kepngerusuan Panti Asuhan Putri Aisyiyah']);
    }
}
