<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RentRequestController extends Controller
{
    public function index()
    {
        return view('property.request.index');
    }
}
