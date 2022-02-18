<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index()
    {
        $trains = Train::where('date', '>=', date('Y-m-d'))->get();
        return view('home', compact('trains'));
    }
}
