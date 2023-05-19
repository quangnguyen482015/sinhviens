<?php
namespace App\Controllers;

use App\Models\Doituongts_Model;


class Doituongts extends BaseController
{
    public function index()
    {   
        $doituongtsmodel = new Doituongts_Model();
        $data['doituongtss']= $doituongtsmodel->orderby('id', 'ASEC')->findAll();
        $data['page_header']= 'Danh sách tên đối tượng tuyển sinh';
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['perPage'] = 20;
        $data['total'] = $doituongtsmodel->countAll();
        $data['data'] = $doituongtsmodel->paginate($data['perPage']);
        $data['pager'] = $doituongtsmodel->pager;

        return view('pages/doituongts', $data);
    }
    public function themDoituongts()
    {
        return view('pages/themdoituongts');
    }
}
