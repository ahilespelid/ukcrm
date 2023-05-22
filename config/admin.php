<?php

use Illuminate\Support\Facades\Facade;
use Illuminate\Support\ServiceProvider;

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application. This value is used when the
    | framework needs to place the application's name in a notification or
    | any other location as required by the application or its packages.
    |
    */

    'name' => 'ООО УК «Новоантропшино»',

    /*
    |--------------------------------------------------------------------------
    | Application Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your application is currently
    | running in. This may determine how you prefer to configure various
    | services the application utilizes. Set this in your ".env" file.
    |
    */

    'env' => env('APP_ENV', 'production'),

    /*
    |--------------------------------------------------------------------------
    | Application Debug Mode
    |--------------------------------------------------------------------------
    |
    | When your application is in debug mode, detailed error messages with
    | stack traces will be shown on every error that occurs within your
    | application. If disabled, a simple generic error page is shown.
    |
    */

    'debug' => (bool) env('APP_DEBUG', false),

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | This URL is used by the console to properly generate URLs when using
    | the Artisan command line tool. You should set this to the root of
    | your application so that it is used when running Artisan tasks.
    |
    */

    'url' => env('APP_URL', 'http://localhost'),

    'asset_url' => env('ASSET_URL'),

    /*
    |--------------------------------------------------------------------------
    | Application Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your application, which
    | will be used by the PHP date and date-time functions. We have gone
    | ahead and set this to a sensible default for you out of the box.
    |
    */

    'timezone' => 'UTC',

    /*
    |--------------------------------------------------------------------------
    | Application Locale Configuration
    |--------------------------------------------------------------------------
    |
    | The application locale determines the default locale that will be used
    | by the translation service provider. You are free to set this value
    | to any of the locales which will be supported by the application.
    |
    */

    'locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Application Fallback Locale
    |--------------------------------------------------------------------------
    |
    | The fallback locale determines the locale to use when the current one
    | is not available. You may change the value to correspond to any of
    | the language folders that are provided through your application.
    |
    */

    'fallback_locale' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Faker Locale
    |--------------------------------------------------------------------------
    |
    | This locale will be used by the Faker PHP library when generating fake
    | data for your database seeds. For example, this will be used to get
    | localized telephone numbers, street address information and more.
    |
    */

    'faker_locale' => 'en_US',

    /*
    |--------------------------------------------------------------------------
    | Encryption Key
    |--------------------------------------------------------------------------
    |
    | This key is used by the Illuminate encrypter service and should be set
    | to a random, 32 character string, otherwise these encrypted strings
    | will not be safe. Please do this before deploying an application!
    |
    */

    'key' => env('APP_KEY'),

    'cipher' => 'AES-256-CBC',

    /*
    |--------------------------------------------------------------------------
    | Maintenance Mode Driver
    |--------------------------------------------------------------------------
    |
    | These configuration options determine the driver used to determine and
    | manage Laravel's "maintenance mode" status. The "cache" driver will
    | allow maintenance mode to be controlled across multiple machines.
    |
    | Supported drivers: "file", "cache"
    |
    */

    'maintenance' => [
        'driver' => 'file',
        // 'store'  => 'redis',
    ],

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application. Feel free to add your own services to
    | this array to grant expanded functionality to your applications.
    |
    */

    'providers' => ServiceProvider::defaultProviders()->merge([
        /*
         * Package Service Providers...
         */

        /*
         * Application Service Providers...
         */
        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        // App\Providers\BroadcastServiceProvider::class,
        App\Providers\EventServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\RolesServiceProvider::class,
        App\Providers\PermissionServiceProvider::class,
    ])->toArray(),

    /*
    |--------------------------------------------------------------------------
    | Class Aliases
    |--------------------------------------------------------------------------
    |
    | This array of class aliases will be registered when this application
    | is started. However, feel free to register as many as you wish as
    | the aliases are "lazy" loaded so they don't hinder performance.
    |
    */

    'aliases' => Facade::defaultAliases()->merge([
        // 'Example' => App\Facades\Example::class,
    ])->toArray(),

    'description' => '',
    'keywords' => '',
    'canonical' => '',

	//
	'loader' => false,
    //
    'current_mode' => 'light', //or dark

    'menu' => [
        0 => [
            'name' => 'Главная',
            'link' => 'admin',
            'type' => 'item',
            'parent' => false,
            'icon' => 'gen001',
        ],
        1 => [
            'name' => 'Управление',
            'type' => 'text',
        ],
        2 => [
            'name' => 'Пользователи',
            'link' => 'users',
            'type' => 'dropdown',
            'parent' => true,
            'icon' => 'com014',
            'dropdown' => [
                0 => [
                    'name' => 'Список',
                    'link' => 'admin/users',
                    'type' => 'item',
                    'parent' => false,
                    'icon' => 'bullet',
                ],
                1 => [
                    'name' => 'Роли и права',
                    'link' => 'admin/users/roles',
                    'type' => 'item',
                    'parent' => false,
                    'icon' => 'bullet',
                ],
            ],
        ],
        3 => [
            'name' => 'Объекты',
            'link' => 'objects',
            'type' => 'dropdown',
            'parent' => true,
            'icon' => 'map008',
            'dropdown' => [
                0 => [
                    'name' => 'Группы',
                    'link' => 'admin/objects',
                    'type' => 'item',
                    'parent' => false,
                    'icon' => 'bullet',
                ],
                /*
                1 => [
                    'name' => 'Статистика',
                    'link' => 'admin',
                    'type' => 'item',
                    'parent' => false,
                    'icon' => 'bullet',
                ],
                */
            ],
        ],
        4 => [
            'name' => 'Реклама',
            'link' => 'reklama',
            'type' => 'dropdown',
            'parent' => true,
            'icon' => 'gen008',
            'dropdown' => [
                0 => [
                    'name' => 'Настройки',
                    'link' => 'admin/reklama',
                    'type' => 'item',
                    'parent' => false,
                    'icon' => 'bullet',
                ],
                /*
                1 => [
                    'name' => 'Статистика',
                    'link' => 'reklama',
                    'type' => 'item',
                    'parent' => false,
                    'icon' => 'bullet',
                ],
                */
            ],
        ],
        5 => [
            'name' => 'Начисления',
            'link' => 'admin/accruals',
            'type' => 'item',
            'parent' => false,
            'icon' => 'fin007',
            'dropdown' => '',
        ],
        6 => [
            'name' => 'Платежи',
            'link' => 'admin/payments',
            'type' => 'item',
            'parent' => false,
            'icon' => 'fin002',
            'dropdown' => '',
        ],
        7 => [
            'name' => 'Импорт / экспорт',
            'link' => 'admin',
            'type' => 'dropdown',
            'parent' => true,
            'icon' => 'fil011',
            'dropdown' => [
                0 => [
                    'name' => 'Импорт',
                    'link' => 'admin/file-manager/import',
                    'type' => 'item',
                    'parent' => false,
                    'icon' => 'bullet',
                ],
                1 => [
                    'name' => 'Экспорт',
                    'link' => 'admin/file-manager/export',
                    'type' => 'item',
                    'parent' => false,
                    'icon' => 'bullet',
                ],
                /*
                2 => [
                    'name' => 'Настройки',
                    'link' => 'admin/file-manager/setting',
                    'type' => 'item',
                    'parent' => false,
                    'icon' => 'bullet',
                ],
                */
            ],
        ],
        /*
        8 => [
            'name' => 'Обращения',
            'link' => 'admin',
            'type' => 'item',
            'parent' => false,
            'icon' => 'com011',
            'dropdown' => '',
        ],
        */
        9 => [
            'name' => 'separator',
            'link' => 'separator',
            'type' => 'separator',
        ],
        10 => [
            'name' => 'Настройки',
            'type' => 'text',
        ],
        11 => [
            'name' => 'Компания',
            'link' => 'admin/company',
            'type' => 'item',
            'parent' => false,
            'icon' => 'ecm010',
            'dropdown' => '',
        ],
        /*
        12 => [
            'name' => 'Общие',
            'link' => 'admin/settings',
            'type' => 'item',
            'parent' => false,
            'icon' => 'cod001',
            'dropdown' => '',
        ],
        */
    ],

    'mobile_menu' => [
        'is_active' => true,
        'logo' => [
            'link' => 'assets/media/uk/logo-uk.gif',
            'alt' => 'Img:logo',
            'text' => 'УК',
        ],
    ],

    'navbar_menu' => [
        'is_active' => false,
        'items' => [
            0 => [
                'name' => '',
                'link' => '',
            ],
        ],
        'user' => [
            'btn_img' => 'assets/media/icons/duotune/communication/com006.svg',
        ],
    ],

    'footer_menu' => [
        'is_active' => false,
        'items' => [
            0 => [
                'name' => '',
                'link' => '',
            ],
        ],
    ],

    'rename' => [
        'date' => 'Дата',
        'dates' => 'Период',
        'lc' => 'Лицевой счет',
        'user' => 'Пользователь',
        'users' => 'Пользователи',
        'accrual' => 'Начислено',
        'to-pay' => 'К оплате',
    ],
];
