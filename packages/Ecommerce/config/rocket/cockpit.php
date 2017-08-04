<?php

return [
    'menu' => [

        [
            'name'  => trans('cockpit::default.ecommerce'),
            'items' => [

                [
                    'name'  => trans('cockpit::default.products'),
                    'url'   => url('admin/products'),
                ]

            ]
        ]

    ]
];