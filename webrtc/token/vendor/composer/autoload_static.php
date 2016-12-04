<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef649fbe972e0a913d5e833f21b4622d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Component\\EventDispatcher\\' => 34,
        ),
        'O' => 
        array (
            'OpenTok\\' => 8,
        ),
        'I' => 
        array (
            'ICanBoogie\\Storage\\' => 19,
        ),
        'F' => 
        array (
            'Firebase\\JWT\\' => 13,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'OpenTok\\' => 
        array (
            0 => __DIR__ . '/..' . '/opentok/opentok/src/OpenTok',
        ),
        'ICanBoogie\\Storage\\' => 
        array (
            0 => __DIR__ . '/..' . '/icanboogie/storage/lib',
        ),
        'Firebase\\JWT\\' => 
        array (
            0 => __DIR__ . '/..' . '/firebase/php-jwt/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
        'J' => 
        array (
            'JohnStevenson\\JsonWorks' => 
            array (
                0 => __DIR__ . '/..' . '/aoberoi/json-works/src',
            ),
        ),
        'G' => 
        array (
            'Guzzle\\Tests' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/tests',
            ),
            'Guzzle' => 
            array (
                0 => __DIR__ . '/..' . '/guzzle/guzzle/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitef649fbe972e0a913d5e833f21b4622d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitef649fbe972e0a913d5e833f21b4622d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitef649fbe972e0a913d5e833f21b4622d::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
