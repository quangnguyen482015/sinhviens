<?php
namespace App\Controllers;

use App\Models\Khuvuc_Model;


class Khuvuc extends BaseController
{
    public function index()
    {   
        $khuvucmodel = new Khuvuc_Model();
        $data['page_header']= 'Danh sách tên khu vực';
        $data['perPage'] = 20;
        $data['khuvucs']= $khuvucmodel->orderby('id', 'ASEC')->paginate($data['perPage']);
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['total'] = $khuvucmodel->countAll();
        $data['pager'] = $khuvucmodel->pager;

        return view('pages/khuvuc', $data);
    }
    public function themKhuvuc()
    {
        return view('pages/themkhuvuc');
    }
}
