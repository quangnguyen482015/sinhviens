<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function profile()
    {
        return view('pages/profile');
    }
}
