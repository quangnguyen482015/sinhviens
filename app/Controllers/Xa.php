<?php
namespace App\Controllers;

use App\Models\Xa_Model;


class Xa extends BaseController
{
    public function index()
    {   
        $xamodel = new Xa_Model();
        $data['xas']= $xamodel->orderby('id', 'ASEC')->findAll();
        $data['page_header']= 'Danh sách tên xã';
       // print_r($data);
        return view('pages/xa', $data);
    }
    public function themTinh()
    {
        return view('pages/themtinh');
    }
}
