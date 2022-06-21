<?php

namespace App\Controllers;

use App\Models\ProvinsiModel;

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

    public function openListProvinsi($name){
        $provinsiModel = model(ProvinsiModel::class);
        
        $data = [
            'provinsis' => $provinsiModel->getProvinsiByName($name),
        ];

        return view('dashboard/list_provinsi', $data);
    }
}