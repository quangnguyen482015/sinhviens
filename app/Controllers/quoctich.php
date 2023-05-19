<?php
namespace App\Controllers;

use App\Models\Quoctich_Model;


class Quoctich extends BaseController
{
    public function index()
    {   
        $quoctichmodel = new Quoctich_Model();
        $data['page_header']= 'Danh sách tên dân tộc';
        $data['perPage'] = 20;
        $data['quoctichs']= $quoctichmodel->orderby('id', 'ASEC')->paginate($data['perPage']);
        $data['pager'] = $quoctichmodel->pager;
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['total'] = $quoctichmodel->countAll();  

        return view('pages/quoctich', $data);
    }
    public function themDantoc()
    {
        return view('pages/themdantoc');
    }
}
