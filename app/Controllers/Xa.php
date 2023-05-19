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
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['perPage'] = 20;
        $data['total'] = $xamodel->countAll();
        $data['data'] = $xamodel->paginate($data['perPage']);
        $data['pager'] = $xamodel->pager;

        return view('pages/xa', $data);
    }
    public function themTinh()
    {
        return view('pages/themtinh');
    }
}
