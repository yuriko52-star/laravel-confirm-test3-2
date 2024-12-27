<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Weight_logController extends Controller
{
    public function index()
    {
        return view('weight_logs');
    }
}
