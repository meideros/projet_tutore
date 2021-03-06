<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function LogIn(){
        return view("Admin.log_in");
    }

    public function Dashboard(){
        $year = \date("Y");
        return view("Admin.dashboard", compact('year'));
    }

    public function PasswordForgotten(){
        return view("Admin.password_forgotten");
    }

    public function ResetPassword(){
        return view("Admin.reset_password");
    }

    public function ListAdmin(){
        $year = \date("Y");
        return view("Admin.list_admin", compact("year"));
    }

    public function OldProject(){
        $year = \date("Y");
        return view("Admin.old_project", compact("year"));
    }
}
