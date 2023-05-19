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
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['perPage'] = 20;
        $data['total'] = $tinhmodel->countAll();
        $data['data'] = $tinhmodel->paginate($data['perPage']);
        $data['pager'] = $tinhmodel->pager;
        
        return view('pages/tinh', $data);
    }
    public function themTinh()
    {
        return view('pages/themtinh');
    }
}
