<?php
namespace App\Controllers;

use App\Models\Tinh_Model;


class Tinh extends BaseController
{
    public function index()
    {   
        $tinhmodel = new Tinh_Model();
        $data['tinhs']= $tinhmodel->orderby('id', 'ASEC')->findAll();
        $data['page_header']= 'Danh sách tên tỉnh';
       // print_r($data);
        return view('pages/tinh', $data);
    }
    public function themTinh()
    {
        return view('pages/themtinh');
    }
}
