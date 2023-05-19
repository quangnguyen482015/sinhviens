<?php

namespace App\Controllers;

class Dashboard extends BaseController
{
    public function index()
    {   
        
        return view('dashboard/index');
    }

    public function index2()
    {
        return view('dashboard/index2');
    }
}
