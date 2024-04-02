<?php

namespace App\Controllers\Frontend;

use App\Controllers\Main_Controller;
use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UsersModel;
use App\Models\OtpModel;

class Order_Controller extends Main_Controller
{
    public function checkout(): void
    {
        $data = PAGE_DATA_FRONTEND;
            $data = [
                'data_page' => [],
                'data_header' => [
                    'header_link' => [],
                    'title' => 'Checkout',
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
        $this->load_page('/frontend/checkout',  $data);
    }

    public function billing_info(): void
    {
        $data = PAGE_DATA_FRONTEND;
            $data = [
                'data_page' => [],
                'data_header' => [
                    'header_link' => [],
                    'title' => 'Billing Info',
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
        $this->load_page('/frontend/billing_info',  $data);
    }

    public function cancellation(): void
    {
        $data = PAGE_DATA_FRONTEND;
            $data = [
                'data_page' => [],
                'data_header' => [
                    'header_link' => [],
                    'title' => 'Cancellation',
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
        $this->load_page('/frontend/cancellation',  $data);
    }

    public function order_complete(): void
    {
        $data = PAGE_DATA_FRONTEND;
            $data = [
                'data_page' => [],
                'data_header' => [
                    'header_link' => [],
                    'title' => 'Order Complete',
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
        $this->load_page('/frontend/order_complete',  $data);
    }

    public function order_history(): void
    {
        $data = PAGE_DATA_FRONTEND;
            $data = [
                'data_page' => [],
                'data_header' => [
                    'header_link' => [],
                    'title' => 'Order History',
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
        $this->load_page('/frontend/order_history',  $data);
    }

    public function payment_policy(): void
    {
        $data = PAGE_DATA_FRONTEND;
            $data = [
                'data_page' => [],
                'data_header' => [
                    'header_link' => [],
                    'title' => 'Order History',
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
        $this->load_page('/frontend/payment_policy',  $data);
    }

    public function order_tracking(): void
    {
        $data = PAGE_DATA_FRONTEND;
            $data = [
                'data_page' => [],
                'data_header' => [
                    'header_link' => [],
                    'title' => 'Order Tracking',
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
        $this->load_page('/frontend/order_tracking',  $data);
    }
}
