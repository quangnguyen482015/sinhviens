<?php
namespace App\Controllers;

use App\Models\DanToc_Model;


class Dantoc extends BaseController
{
    public function index()
    {   
        $dantocmodel = new DanToc_Model();
        $data['page_header']= 'Danh sách tên dân tộc';
        $data['perPage'] = 20;
        $data['dantocs']= $dantocmodel->orderby('id', 'ASEC')->paginate($data['perPage']);
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['total'] = $dantocmodel->countAll();
        $data['pager'] = $dantocmodel->pager;

        return view('pages/dantoc', $data);
    }
    public function themDantoc()
    {
        return view('pages/themdantoc');
    }
}
