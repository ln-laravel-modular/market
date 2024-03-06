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
            ["path" => "/market", "title" => "应用市场", "icon" => "fab fa-microsoft", "slug" => "",  "children" => []],
        ],
    ],
];