<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
// clients
{   public function login(){
        return view ('pages.login');
    }
    
    public function register(){
        return view ('pages.register');
    }
    public function resetPassword(){
        return view ('pages.resetPassword');
    }
    public function bizInfo(){
        return view ('pages.bizInfo');
    }
    public function feedback(){
        return view ('pages.feedback');
    }
    public function home(){
        return view ('pages.home');
    }
    public function pricing(){
        return view ('pages.pricing');
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
    public function profile(){
        return view ('pages.profile');
    } 
    
    
    // admin
    public function home_ad(){
        return view ('pages.admin.home_ad');
    }
    public function clients(){
        return view ('pages.admin.clients');
        
    }
    public function admin(){
        return view ('pages.admin.admin');
    }
    public function experts(){
        return view ('pages.admin.experts');
    }
    public function manage_rates(){
        return view ('pages.admin.manage_rates');
    }
    public function subscribers(){
        return view ('pages.admin.subscribers');
    }
    public function newSub(){
        return view ('pages.admin.newSub');
    }
    public function pending_requests(){
        return view ('pages.admin.pending_requests');
    }
    public function active_requests(){
        return view ('pages.admin.active_requests');
    }
    public function completed_requests(){
        return view ('pages.admin.completed_requests');
    }
    public function new_event(){
        return view ('pages.admin.new_event');
    }
    
    // expert
    public function home_ex(){
        return view ('pages.expert.home_ex');
    }
    public function reply_request(){
        return view ('pages.expert.reply_request');
    }
    public function viewRequest(){
        return view ('pages.expert.viewRequest');
    }
    public function view(){
        return view ('pages.expert.view');
    }
    public function myProfile(){
        return view ('pages.expert.myProfile');
    }
}





