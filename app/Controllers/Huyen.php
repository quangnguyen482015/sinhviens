<?php
namespace App\Controllers;

use App\Models\Huyen_Model;


class Huyen extends BaseController
{
    public function index()
    {   
        $huyenmodel = new Huyen_Model();
        $data['huyens']= $huyenmodel->orderby('id', 'ASEC')->findAll();
        $data['page_header']= 'Danh sách tên huyện';
       // print_r($data);
        return view('pages/huyen', $data);
    }
    public function themTinh()
    {
        return view('pages/themtinh');
    }
}
