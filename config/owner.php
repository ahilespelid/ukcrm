<?php

use Illuminate\Routing\Route;

return [
    'name' => 'Личный кабинет ООО УК «Новоантропшино»',
    'description' => '',
    'keywords' => '',

    'menu' => [
        0 => [
            'name' => 'Личный кабинет',
            'link' => 'lk',
        ],
        1 => [
            'name' => 'Начисления',
            'link' => 'charges',
        ],
        2 => [
            'name' => 'Показания счетчиков',
            'link' => 'indication',
        ],
    ]
];
