<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(string $name): View
    {
        return view('home', [
            'name' => $name
        ]);
    }
}
