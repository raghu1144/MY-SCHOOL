<?php

namespace App\Http\Controllers\Frontend\Aboutus;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutusController extends Controller
{
    public function index(){
        return view('frontend.aboutus');
    }
}
