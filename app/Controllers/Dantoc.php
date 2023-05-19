<?php
namespace App\Controllers;

use App\Models\DanToc_Model;


class Dantoc extends BaseController
{
    public function index()
    {   
        $dantocmodel = new DanToc_Model();
        $data['dantocs']= $dantocmodel->orderby('id', 'ASEC')->findAll();
        $data['page_header']= 'Danh sách tên dân tộc';
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['perPage'] = 20;
        $data['total'] = $dantocmodel->countAll();
        $data['data'] = $dantocmodel->paginate($data['perPage']);
        $data['pager'] = $dantocmodel->pager;

        return view('pages/dantoc', $data);
    }
    public function themDantoc()
    {
        return view('pages/themdantoc');
    }
}
