<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BackendController extends Controller
{
    //
    public function index() {
    	return view("backend.index");
    }

    public function test() {
    	return view("backend.index");
    }
}
