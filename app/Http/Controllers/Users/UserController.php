<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class UserController extends Controller
{

    public function getIndex()
    {

        $data['name']='Zahraa';
        $data['age']=25;
        $dat =[];
        $obj=new \stdClass();
        $obj ->name = 'sila';
        $obj-> age = 1;


        return view('welcome',compact('data','dat'));
    }
}
