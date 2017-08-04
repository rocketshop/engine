<?php

return [
    'stories' => [
        'name'  => trans('stories::default.stories'),
        'items' => [

            [
                'name'  => trans('stories::default.stories'),
                'url'   => url('admin/stories'),
            ],

            [
                'name'  => trans('stories::default.categories'),
                'url'   => url('admin/stories/categories'),
            ]

        ]
    ]
];