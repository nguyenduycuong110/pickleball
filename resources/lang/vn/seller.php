<?php   
return [
    'module' => [
        [
            'title' => 'Dashboard',
            'icon' => 'fa fa-database',
            'name' => ['dashboard'],
            'route' => 'seller',
            'class' => 'special'
        ],
        [
            'title' => 'QL Sản Phẩm',
            'icon' => 'fa fa-cube',
            'name' => ['product'],
            'route' => 'seller/product/index'
        ],
        [
            'title' => 'QL đơn hàng',
            'icon' => 'fa fa-shopping-bag',
            'name' => ['order'],
            'subModule' => [
                [
                    'title' => 'QL Đơn Hàng',
                    'route' => 'seller/order/index '
                ],
            ]
        ],
    ],
];
