<?php

return [
    'ecommerce' => [
        'name'  => trans('ecommerce::default.ecommerce'),
        'items' => [

            [
                'name'  => trans('ecommerce::default.articles'),
                'url'   => url('admin/articles'),
            ],

            [
                'name'  => trans('ecommerce::default.products'),
                'url'   => url('admin/products'),
            ],

            [
                'name'  => trans('ecommerce::default.sales'),
                'url'   => url('admin/sales'),
            ]

        ]
    ]
];