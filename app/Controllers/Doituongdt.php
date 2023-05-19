<?php
namespace App\Controllers;

use App\Models\Doituongdt_Model;


class Doituongdt extends BaseController
{
    public function index()
    {   
        $doituongdtmodel = new Doituongdt_Model();
        $data['doituongdts']= $doituongdtmodel->orderby('id', 'ASEC')->findAll();
        $data['page_header']= 'Danh sách tên đối tượng đào tạo';
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['perPage'] = 20;
        $data['total'] = $doituongdtmodel->countAll();
        $data['data'] = $doituongdtmodel->paginate($data['perPage']);
        $data['pager'] = $doituongdtmodel->pager;

        return view('pages/doituongdt', $data);
    }
    public function themDoituongDT()
    {
        return view('pages/themdoituongdt');
    }
}
