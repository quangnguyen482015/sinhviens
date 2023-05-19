<?php
namespace App\Controllers;

use App\Models\Khuvuc_Model;


class Khuvuc extends BaseController
{
    public function index()
    {   
        $khuvucmodel = new Khuvuc_Model();
        $data['khuvucs']= $khuvucmodel->orderby('id', 'ASEC')->findAll();
        $data['page_header']= 'Danh sách tên dân tộc';
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['perPage'] = 20;
        $data['total'] = $khuvucmodel->countAll();
        $data['data'] = $khuvucmodel->paginate($data['perPage']);
        $data['pager'] = $khuvucmodel->pager;

        return view('pages/khuvuc', $data);
    }
    public function themKhuvuc()
    {
        return view('pages/themkhuvuc');
    }
}
