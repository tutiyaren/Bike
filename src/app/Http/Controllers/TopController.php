<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index()
    {
        return view('top');
    }

    public function knowApp()
    {
        return view('know_app');
    }
}
