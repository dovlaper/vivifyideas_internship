<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function foo(){
        return '<p>Zdravo Djuro</p>';
    }
}