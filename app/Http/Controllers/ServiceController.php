<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){
        $pageTitle = 'Layanan';
        return view('services', compact('pageTitle'));
    }
}
