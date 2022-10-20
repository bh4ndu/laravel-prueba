<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HenriController extends Controller
{
    function listar() {
        return view("Henri");
    }
}
