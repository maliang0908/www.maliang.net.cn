<?php
return [
    [
        'icon'=>'glyphicon-home',
        'name'=>'Home',
        'toUrl'=>'',
    ],
    [
        'icon'=>'glyphicon-th-list',
        'name'=>'Leisure',
        'toUrl'=>'',
        'level_menu'=>[
            [
                'icon'=>'glyphicon-music',
                'name'=>'Music',
                'toUrl'=>'music/index',
            ],
            [
                'icon'=>'glyphicon-facetime-video',
                'name'=>'Video',
                'toUrl'=>'video/index',
            ],
            [
                'icon'=>'glyphicon-picture',
                'name'=>'Picture',
                'toUrl'=>'',
            ]
        ]
    ],
    [
        'icon'=>'glyphicon-th',
        'name'=>'More',
        'toUrl'=>'',
        'more'=>true,
    ]
];