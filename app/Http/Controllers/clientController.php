<?php

namespace App\Http\Controllers;

use App\clientModel;
use Illuminate\Http\Request;

use App\Http\Requests;

class clientController extends Controller
{
    //
    public function show(){
        $data = clientModel::all();
        return view("client")->with('client',$data);
    }
    public function seemore($id){
        $data = clientModel::find($id);
        return view("clientdetail")->with('client',$data);
    }
}
