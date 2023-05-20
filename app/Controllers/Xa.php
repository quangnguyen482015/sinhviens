<?php
namespace App\Controllers;

use App\Models\Xa_Model;


class Xa extends BaseController
{
    public function index()
    {   
        $xamodel = new Xa_Model();        
        $data['page_header']= 'Danh sách tên xã';
        $data['perPage'] = 20;
        $data['xas']= $xamodel->join('huyen', 'huyen.MaHuyen = xa.MaHuyen')->join('tinh', 'tinh.MaTinh = huyen.MaTinh')->paginate($data['perPage']);
        $data['pager'] = $xamodel->pager;
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['total'] = $xamodel->countAll();     

        return view('pages/xa', $data);
    }
    public function themTinh()
    {
        return view('pages/themtinh');
    }
}
