<?php

return [
    'prefix' => 'admin',

    'menu' => [
        'general' => [
            'name'  => trans('cockpit::default.general'),
            'items' => [

                [
                    'name'  => trans('cockpit::default.dashboard'),
                    'url'   => url('admin/dashboard'),
                ],
                
                [
                    'name'  => trans('cockpit::default.users'),
                    'url'   => url('admin/users'),
                ],

                [
                    'name'  => trans('cockpit::default.settings'),
                    'url'   => url('admin/settings'),
                ]

            ]
        ]

    ]
];