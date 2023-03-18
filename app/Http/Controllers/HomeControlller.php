<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControlller extends Controller
{
    //
    public function index() {
        return redirect('https://www.educastudio.com/');
    }
    
    
    // public function index() {
    //     echo ('Home</br>');
    //     echo ('<a href="https://www.educastudio.com/">educastudio home</a>');
    // }
}
