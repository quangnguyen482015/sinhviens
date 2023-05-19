<?php
namespace App\Controllers;

use App\Models\TonGiao_Model;


class TonGiao extends BaseController
{
    public function index()
    {   
        $tongiao = new TonGiao_Model();
        $data['page_header']= 'Danh sách tên dân tộc';
        $data['perPage'] = 20;
        $data['tongiaos']= $tongiao->orderby('id', 'ASEC')->paginate($data['perPage']);
        $data['pager'] = $tongiao->pager;
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['total'] = $tongiao->countAll();  

        return view('pages/tongiao', $data);
    }
    public function themTongiao()
    {
        return view('pages/themtongiao');
    }
}
