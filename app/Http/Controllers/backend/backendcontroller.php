<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class backendcontroller extends Controller
{
    public function usercv(){

        return view('backend.dashboard');
    }
}
