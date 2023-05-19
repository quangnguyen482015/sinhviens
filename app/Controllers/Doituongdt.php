<?php
namespace App\Controllers;

use App\Models\Doituongdt_Model;


class Doituongdt extends BaseController
{
    public function index()
    {   
        $doituongdtmodel = new Doituongdt_Model();
        $data['page_header']= 'Danh sách tên đối tượng đào tạo';
        $data['perPage'] = 20;
        $data['doituongdts']= $doituongdtmodel->orderby('id', 'ASEC')->paginate($data['perPage']);
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['total'] = $doituongdtmodel->countAll();
        $data['pager'] = $doituongdtmodel->pager;

        return view('pages/doituongdt', $data);
    }
    public function themDoituongDT()
    {
        return view('pages/themdoituongdt');
    }
}
