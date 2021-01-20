<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function Hellomorning($ID){
        return'<h1>morning '.$ID.'</h1>';

    }
}
