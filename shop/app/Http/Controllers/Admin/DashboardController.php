<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Gate;
use App\User;
use App\Role;
use App\Items;
use App\role_user;
use Auth;
class DashboardController extends Controller
{

    public function dashboard(){
        return view('admin.dashboard',[
            'categories'=>User::limit(5)->get(),
            'articles'=>Items::limit(5)->get(), 
            'count_categories'=>User::count(),
            'count_articles'=>Items::count()
        ]);
    }

  
   
}
