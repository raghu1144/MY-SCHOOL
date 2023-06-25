<?php

namespace App\Http\Controllers\Frontend\Staffs;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaffsController extends Controller
{
    public function index()
    {
        return view('frontend.staffs');
    }
}
