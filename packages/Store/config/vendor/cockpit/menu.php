<?php

return [
    'ecommerce' => [
        'name'  => trans('store::default.store'),
        'items' => [

            [
                'name'  => trans('store::default.articles'),
                'url'   => url('admin/store/articles'),
            ],

            [
                'name'  => trans('store::default.products'),
                'url'   => url('admin/store/products'),
            ]

        ]
    ]
];