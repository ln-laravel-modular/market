<?php

return [
    'name' => 'Market',
    'slug' => "market",
    'title' => "Market",
    'prefix' => 'market',
    'web' => [
        'component' => '',
        'navbar' => [],
    ],
    'admin' => [
        'prefix' => 'admin',
        'navbar' => [],
        'sidebar' => [
            ["path" => "/market", "title" => "应用管理", "icon" => "fab fa-microsoft", "slug" => "",  "children" => [
                ["path" => "/modules", "title" => "应用市场"],
                ["path" => "/installed", "title" => "安装管理"],
            ]],
        ],
    ],
];