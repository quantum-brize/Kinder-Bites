<?php

namespace App\Controllers\Admin;
use App\Controllers\Main_Controller;
use App\Models\UsersModel;
class Admin_Controller extends Main_Controller
{
    public function index(): void
    {
        $data = PAGE_DATA_ADMIN;
        $data = [
            'data_page' => [],
            'data_header' => [
                'header_link' => [],
                'header_asset_link' => [
                    'assets_admin/libs/jsvectormap/css/jsvectormap.min.css',
                    'assets_admin/libs/swiper/swiper-bundle.min.css'
                ],
                'title' => 'Dashboard',
                'header' => [],
                'sidebar' => ['dashboard'=>true],
                'site' => 'admin'
            ],
            'data_footer' => [
                'footer_link' => ['dashboard_js.php'],
                'footer_asset_link' => [
                    'assets_admin/libs/apexcharts/apexcharts.min.js',
                    'assets_admin/libs/jsvectormap/js/jsvectormap.min.js',
                    'assets_admin/libs/jsvectormap/maps/world-merc.js',
                    'assets_admin/libs/swiper/swiper-bundle.min.js',
                    'assets_admin/js/pages/dashboard-ecommerce.init.js'
                ],
                'footer' => [],
                'site' => 'admin'
            ]
        ];

        $this->isAuth('/admin/dashboard',$data);
    }
    
    public function isAuth($page,$data){
        $session = \Config\Services::session();
        if(empty($session->get(SES_ADMIN_USER_ID))){
            return $this->load_login();
        }else{
            $this->load_page($page,$data);
        }
    }
    public function logout()
    {
        $session = \Config\Services::session();

        $session->remove(SES_ADMIN_USER_ID);
        $session->remove(SES_ADMIN_TYPE);
        return redirect()->to('admin/login');
    }
    public function load_login(): void
    {
        echo view('admin/login');
    }

    public function handle_login(){
        $response =[
            "status" => false,
            "message" => "user not found"
        ];

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');
        $UsersModel = new UsersModel();
        $UsersData = $UsersModel
            ->where('password', md5($password))
            ->where('email', $email)
            ->where('type', 'admin')
            ->where('status', 'active')
            ->get()
            ->getResultArray();
        $UsersData = !empty($UsersData[0]) ? $UsersData[0] : null;
        if (!empty($UsersData)) {
            $session = \Config\Services::session();
            $session->set(SES_ADMIN_USER_ID, $UsersData['uid']);
            $session->set(SES_ADMIN_TYPE, $UsersData['type']);
            $response = [
                "status" => true,
                "message" => "User Found",
            ];
        }
        echo json_encode($response);

    }

}
