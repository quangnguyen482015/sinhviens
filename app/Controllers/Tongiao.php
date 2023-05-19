<?php
namespace App\Controllers;

use App\Models\TonGiao_Model;


class TonGiao extends BaseController
{
    public function index()
    {   
        $tongiao = new TonGiao_Model();
        $data['tongiaos']= $tongiao->orderby('id', 'ASEC')->findAll();
        $data['page_header']= 'Danh sách tên dân tộc';
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['perPage'] = 20;
        $data['total'] = $tongiao->countAll();
        $data['data'] = $tongiao->paginate($data['perPage']);
        $data['pager'] = $tongiao->pager;

        return view('pages/tongiao', $data);
    }
    public function themTongiao()
    {
        return view('pages/themtongiao');
    }
}
