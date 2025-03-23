<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $pageTitle = 'Kontak';
        return view('contact', compact('pageTitle'));
    }
}
