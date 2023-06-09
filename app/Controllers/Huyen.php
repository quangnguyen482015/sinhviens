<?php
namespace App\Controllers;

use App\Models\Huyen_Model;


class Huyen extends BaseController
{
    public function index()
    {   
        $huyenmodel = new Huyen_Model();
        $data['page_header']= 'Danh sách tên huyện';
        $data['perPage'] = 20;
        $data['huyens']= $huyenmodel->join('tinh', 'tinh.MaTinh= huyen.MaTinh')->paginate($data['perPage']);
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['total'] = $huyenmodel->countAll();
        $data['pager'] = $huyenmodel->pager;
        //print_r($data['huyens']);
        return view('pages/huyen', $data);
    }
    public function themTinh()
    {
        return view('pages/themtinh');
    }
}
