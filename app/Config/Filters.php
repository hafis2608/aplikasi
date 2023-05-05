<?php

namespace Config;

use CodeIgniter\Config\BaseConfig;
use CodeIgniter\Filters\CSRF;
use CodeIgniter\Filters\DebugToolbar;
use CodeIgniter\Filters\Honeypot;
use CodeIgniter\Filters\InvalidChars;
use CodeIgniter\Filters\SecureHeaders;
use \App\Filters\FilterAdmin;
use \App\Filters\FilterUser;


class Filters extends BaseConfig
{
    /**
     * Configures aliases for Filter classes to
     * make reading things nicer and simpler.
     *
     * @var array
     */
    public $aliases = [
        'csrf'          => CSRF::class,
        'toolbar'       => DebugToolbar::class,
        'honeypot'      => Honeypot::class,
        'invalidchars'  => InvalidChars::class,
        'secureheaders' => SecureHeaders::class,
        'is_Admin' => FilterAdmin::class,
        'is_User' => FilterUser::class,

    ];


    /**
     * List of filter aliases that are always .
     *
     * @var array
     */
    public $globals = [
        'before' => [
            // 'honeypot',
            'csrf',
            // 'invalidchars',
        ],
        'after' => [
            'toolbar',
        ],
    ];

    /**
     * List of filter aliases that works on a
     * particular HTTP method (GET, POST, etc.).
     *
     * Example:
     * 'post' => ['csrf', 'throttle']
     *
     * @var array
     */
    public $methods = [];

    /**
     * List of filter aliases that should run on any
     * before or after URI patterns.
     *
     * Example:
     * 'isLoggedIn' => ['before' => ['account/*', 'profiles/*']]
     *
     * @var array
     * 
     */
    public $filters = [

        // 'is_User' => [
        //     'before' => ['home', 'kelas', '/kelas'],
        //     'after' => ['member', 'member/', 'trainer', 'trainer/', 'kelas', 'kelas/', 'user', 'user/', 'payment', 'payment/']
        // ],
        // 'is_Admin' => [
        //     'before' => ['home', 'member', 'member/', 'trainer', 'trainer/', 'kelas', 'kelas/', 'user', 'user/', 'payment', 'payment/'],
        //     'after' => ['payment', 'payment/']
        // ],
    ];
}
