<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{   public function login(){
        return view ('pages.login');
    }
    
    public function register(){
        return view ('pages.register');
    }
    

    public function home(){
        return view ('pages.home');
    }
    
    public function new_request(){
        return view ('pages.new_request');
    }
    public function myRequests(){
        return view ('pages.myRequests');
    }
    public function expertProfile(){
        return view ('pages.expertProfile');
    }
    
    public function news(){
        return view ('pages.news');
    } 

   
}




