<?php

namespace App\Controllers\Frontend;

use App\Controllers\Main_Controller;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\OtpModel;

class Product_Controller extends Main_Controller
{
    public function product_list(): void
    {
        $data = PAGE_DATA_FRONTEND;
            $data = [
                'data_page' => [],
                'data_header' => [
                    'header_link' => [],
                    'title' => 'Product List',
                    'header' => [],
                    'sidebar' => [],
                    'site' => 'frontend'
                ],
                'data_footer' => [
                    'footer_link' => [],
                    'footer' => [],
                    'site' => 'frontend'
                ]
            ];
        $this->load_page('/frontend/product_list',  $data);
    }

    public function product_details(): void
    {
        $data = PAGE_DATA_FRONTEND;
            $data = [
                'data_page' => [],
                'data_header' => [
                    'header_link' => [],
                    'title' => 'Product Details',
                    'header' => [],
                    'sidebar' => [],
                    'site' => 'frontend'
                ],
                'data_footer' => [
                    'footer_link' => [],
                    'footer' => [],
                    'site' => 'frontend'
                ]
            ];
        $this->load_page('/frontend/product_details',  $data);
    }

    public function cart(): void
    {
        $data = PAGE_DATA_FRONTEND;
            $data = [
                'data_page' => [],
                'data_header' => [
                    'header_link' => [],
                    'title' => 'Cart',
                    'header' => [],
                    'sidebar' => [],
                    'site' => 'frontend'
                ],
                'data_footer' => [
                    'footer_link' => [],
                    'footer' => [],
                    'site' => 'frontend'
                ]
            ];
        $this->load_page('/frontend/cart',  $data);
    }

    public function wishlist(): void
    {
        $data = PAGE_DATA_FRONTEND;
            $data = [
                'data_page' => [],
                'data_header' => [
                    'header_link' => [],
                    'title' => 'Wishlist',
                    'header' => [],
                    'sidebar' => [],
                    'site' => 'frontend'
                ],
                'data_footer' => [
                    'footer_link' => [],
                    'footer' => [],
                    'site' => 'frontend'
                ]
            ];
        $this->load_page('/frontend/wishlist',  $data);
    }


}
