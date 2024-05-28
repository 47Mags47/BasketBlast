<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class papersController extends Controller
{
    public function index(){
        return view('pages.index');
    }
}
