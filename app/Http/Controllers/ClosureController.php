<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClosureController extends Controller
{
    public function home() {
        return view('welcome');
    }

    public function user(Request $request) {
        return $request->user();
    }
}
