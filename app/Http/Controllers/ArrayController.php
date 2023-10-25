<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArrayController extends Controller
{
    public function ShowArray(){

        $user = [
            'firstName' => 'Janusz',
            'lastName' => 'Nowak',
            'city' => 'Poznan',
            'hobby' => ['zuzel', 'pilka', 'auta']
        ];
        return view('user.show_user', ['user'=>$user]);
    }
}

