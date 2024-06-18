<?php

namespace App\Http\Controllers;

use App\Models\Paper;
use Illuminate\Http\Request;

class papersController extends Controller
{
    public function index(){
        $papers = Paper::get();
        return view('pages.index', compact('papers'));
    }
}
