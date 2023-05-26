<?php
namespace App\Controllers;

use App\Models\Tinh_Model;


class Tinh extends BaseController
{
    public function index()
    {   
        $tinhmodel = new Tinh_Model();
        $data['page_header']= 'Danh sách tên tỉnh';
        $data['perPage'] = 20;
        $data['tinhs']= $tinhmodel->orderby('id', 'ASEC')->paginate($data['perPage']);
        $data['pager'] = $tinhmodel->pager;
        $data['page'] = isset($_GET['page']) ? $_GET['page'] : 1;
        $data['total'] = $tinhmodel->countAll();    

        return view('pages/tinh', $data);
    }
    
    public function themTinh()
    {
        return view('pages/themtinh');
    }

    public function them_Tinh()
    {
        $tinhmodel = new Tinh_Model();
        $data = [
            'MaTinh' => $this->request->getVar('matinh'),
            'TenTinh'  => $this->request->getVar('tentinh'),
        ];
        $tinhmodel->insert($data);

        return $this->response->redirect(site_url('pages/tinh'));
    }
}
