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
            ["path" => "/market", "title" => "应用市场", "icon" => "fab fa-microsoft", "slug" => "", "order" => PHP_INT_MAX - 3,  "children" => []],
        ],
    ],
    'branches' => [
        // 'empty' => [],
        'api-jsdelivr' => [
            "name" => "jsDelivr API",
            "slug" => "api-jsdelivr",
            "ico" => "https://www.jsdelivr.com/assets/319b54d90dd0a622bf60177e0f2c521b3998a6c5/img/icons/jsdelivr_icon.svg",
            "type" => "package",
            "tags" => ["search", "paginator"],
            "form" => [
                ["name" => "search", "type" => "input"]
            ],
            "request_project_list" => [
                "url" => "http://api.jsdelivr.com/v1/jsdelivr/libraries?name=*{{\$search}}*",
                "response_type" => "array",
                "response_keys" => [
                    "name" => "name",
                    "description" => "description",
                    "lastversion" => "lastversion",
                ],
            ],
            "request_version_list" => [
                "url" => "http://api.jsdelivr.com/v1/jsdelivr/libraries?name={{\$name}}",
                "response_key" => "0",
                "response_type" => "object",
                "response_keys" => [
                    "name" => "name",
                    "description" => "description",
                    "versions" => "versions",
                ],
            ]
        ],
        'data-jsdelivr' => [
            "name" => "jsDelivr Data",
            "slug" => "data-jsdelivr",
            "ico" => "https://www.jsdelivr.com/assets/319b54d90dd0a622bf60177e0f2c521b3998a6c5/img/icons/jsdelivr_icon.svg",
            "tags" => ["paginator"],
            "request_version_list" => [
                "url" => "http://data.jsdelivr.com/v1/packages/npm/{{\$name}}",
                "response_keys" => [
                    "name" => "",
                    "description" => "",
                    "version" => "",
                ],
            ],
        ],
        'google' => [
            "name" => "Google",
            "slug" => "google",
            "ico" => "",
            "hidden" => true,
        ],
        'cdnjs' => [
            "name" => "CDNjs",
            "slug" => "cdnjs",
            "ico" => "https://cdnjs.com/favicon.png",
            "hidden" => true,
        ],
        'bootstrap' => [
            "name" => "Google",
            "slug" => "bootstrap",
            "ico" => "",
            "hidden" => true,
        ],
        'jquery' => [
            "name" => "jQuery",
            "slug" => "jquery",
            "ico" => "https://jquery.com/wp-content/themes/jquery.com/i/favicon.ico",
            "hidden" => true,
        ],
        'bootcdn' => [
            "name" => "BootCDN",
            "slug" => "bootcdn",
            "ico" => "https://api.bootcdn.cn/assets/ico/favicon.ico",
            "request_project_list" => [
                "url" => "http://api.jsdelivr.com/v1/jsdelivr/libraries?name=*{{\$search}}*",
                "response_keys" => [
                    "name" => "",
                    "description" => "",
                ],
            ],
            "request_version_list" => [
                "url" => "https://api.bootcdn.cn/libraries/{{\$name}}",
            ],
        ],
    ],
];
