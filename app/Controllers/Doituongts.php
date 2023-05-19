<?php
namespace App\Controllers;

use App\Models\Doituongts_Model;


class Doituongts extends BaseController
{
    public function index()
    {   
        $doituongtsmodel = new Doituongts_Model();
        $data['page_header']= 'Danh sách tên đối tượng tuyển sinh';
        $data['perPage'] = 20;
        $data['doituongtss']= $doituongtsmodel->orderby('id', 'ASEC')->paginate($data['perPage']);
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['total'] = $doituongtsmodel->countAll();
        $data['pager'] = $doituongtsmodel->pager;

        return view('pages/doituongts', $data);
    }
    public function themDoituongts()
    {
        return view('pages/themdoituongts');
    }
}
