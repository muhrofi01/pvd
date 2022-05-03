<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        echo view('landing_page/home/header_home');
        echo view('landing_page/home/riset1_home');
        echo view('landing_page/home/riset2_home');
        echo view('landing_page/home/riset3_home');
        echo view('landing_page/home/riset4_home');
        echo view('landing_page/home/riset5_home');
        echo view('landing_page/home/umum_home');
        echo view('landing_page/home/footer_home');
    }

    public function riset1()
    {
        echo view('landing_page/riset1/header');
        echo view('landing_page/riset1/riset1_content');
        echo view('landing_page/riset1/footer');
    }

    public function riset2()
    {
        echo view('landing_page/riset2/header');
        echo view('landing_page/riset2/riset2_content');
        echo view('landing_page/riset2/footer');
    }

    public function riset3()
    {
        echo view('landing_page/riset3/header');
        echo view('landing_page/riset3/riset3_content');
        echo view('landing_page/riset3/footer');
    }

    public function riset4()
    {
        echo view('landing_page/riset4/header');
        echo view('landing_page/riset4/riset4_content');
        echo view('landing_page/riset4/footer');
    }

    public function riset5()
    {
        echo view('landing_page/riset5/header');
        echo view('landing_page/riset5/riset5_content');
        echo view('landing_page/riset5/footer');
    }

    public function umum()
    {
        echo view('landing_page/umum/header');
        echo view('landing_page/umum/umum_content');
        echo view('landing_page/umum/footer');
    }


}
