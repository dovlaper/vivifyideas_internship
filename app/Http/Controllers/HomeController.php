<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('home');
    }

    /**
     * Bindes name 'Djuro' to 'name' in home view
     *
     * @return mixed don't know what to write here...
     */
    public function foo()
    {
        $name = 'Djuro';

        return view('home', ['name' => $name]);
    }
}