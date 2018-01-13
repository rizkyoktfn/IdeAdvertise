<?php

namespace App\Http\Controllers;

use App\bookedModel;
use App\clientModel;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Expr\Array_;

class bookedController extends Controller
{


    public function pageBooked($id_talent){
        $exist = bookedModel::where('id_talent','=', $id_talent)->where('id_user','=', Auth::user()->id)->first();
        if(!$exist)
        {
            $book = new bookedModel();
            $book->id_talent = $id_talent;
            $book->id_user = Auth::user()->id;
            $book->save();

            return redirect('/');
        }
        else
        {
            return redirect('/');
        }


    }


    public function show()
    {
        $data = DB::table('bookedtabs')
            ->join('clienttable','bookedtabs.id_talent','=','clienttable.id')
            ->select('clienttable.*')
            ->where('bookedtabs.id_user','=',Auth::User()->id)->get();

        return view("booked")->with(['book'=>$data]);
    }
}
