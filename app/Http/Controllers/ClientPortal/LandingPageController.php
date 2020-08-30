<?php

namespace App\Http\Controllers\ClientPortal;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingPageController extends Controller
{
    public function __constructor(){

    }

    public function index(){
        return view('client-portal.home');
    }
}
