<?php

namespace App\Controllers;

class Auth extends BaseController
{
    public function login_khusus(){
        return view('dashboard/login');
    }

    public function login_umum(){
        return view('dashboard/login_manual');
    }

    public function regist(){
        return view('dashboard/register');
    }
}