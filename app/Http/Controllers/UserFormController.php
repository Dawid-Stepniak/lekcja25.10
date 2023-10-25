<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserFormController extends Controller
{
    public function showUser(Request $req){
        //return $req->input();
        //return $req->path(); //userformcontroller
        //return $req->url(); //http://127.0.0.1:8000/UserFormController
        //return $req->method(); //GET
        //return $req->input('firstName');//Dawid
        //return $req->all();//{"firstName":"Dawid","lastName":"Siemano"}
        $dataUser = [
            'firstName' => $req->input('firstName'),
            'lastName' => $req->input('lastName')
        ];
        return view('user',['user' => $dataUser]);

    }
}
