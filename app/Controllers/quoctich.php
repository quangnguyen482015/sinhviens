<?php
namespace App\Controllers;

use App\Models\Quoctich_Model;


class Quoctich extends BaseController
{
    public function index()
    {   
        $quoctichmodel = new Quoctich_Model();
        $data['quoctichs']= $quoctichmodel->orderby('id', 'ASEC')->findAll();
        $data['page_header']= 'Danh sách tên dân tộc';
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['perPage'] = 20;
        $data['total'] = $quoctichmodel->countAll();
        $data['data'] = $quoctichmodel->paginate($data['perPage']);
        $data['pager'] = $quoctichmodel->pager;

        return view('pages/quoctich', $data);
    }
    public function themDantoc()
    {
        return view('pages/themdantoc');
    }
}
