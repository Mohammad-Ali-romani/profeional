<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function __construct()
    {
//        $this->middleware = [
//            'auth'
//        ];
//        $this->middleware('auth')->except('index');
    }

    public function index()
    {

        User::all();
        return 'win';
    }
    public function index2()
    {
//        $data = [];
//        $data['name'] = 'mohammad ali';
//        $data['email'] = 'moahmmad@gmail.com';
//        return view('home',$data);
//        $data = new \stdClass();
//        $data->name = 'mohammad';
//        $data->email = 'mohammad@gmail.com';
//        return view('home',compact('data'));
        return view('home')->with('data',['name'=>'mohammad','email'=>'mohmamad@gmail.com']);
    }
}
