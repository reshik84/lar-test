<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\MyFormRequest;
use App\Opers;

class IndexController extends Controller
{
    public function index(){
        return view('form');
    }
    
    public function form(MyFormRequest $request){
        $r = $request->all();
        $oper = new Opers();
        $oper->fill($r);
        $checkapi = $oper->checkApi($request);
//        print_r($checkapi); die();
        $oper->save();
        if($checkapi->errors){
            return back()->withErrors($checkapi->messages)->withInput();
        } else {
            return back();
        }
    }
    
}