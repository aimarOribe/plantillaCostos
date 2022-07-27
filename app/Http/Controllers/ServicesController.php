<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function familia(){

        $tests = Test::paginate();

        return view('services.family', compact('tests'));
    }

    public function flujodecaja(){
        return view('services.cashflow');
    }

    public function listas(){
        return view('services.lists');
    }
}
