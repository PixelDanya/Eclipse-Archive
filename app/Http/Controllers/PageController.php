<?php

namespace App\Http\Controllers;

use App\Models\Facts;
use Illuminate\Http\Request;

class PageController extends Controller
{
     public function home()
    {
        $cards = Facts::all();

        return view('static.mainpage', compact('cards'));
    }

    public function search()
    {
        return view('static.search');
    }

    public function feedback()
    {
        return view('static.feedback');
    }

    public function about()
    {
        return view('static.about');
    }
}
