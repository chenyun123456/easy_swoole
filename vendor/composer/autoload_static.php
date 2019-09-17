<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb7b1c47ce42ee7dec67df83976144859
{
    public static $files = array (
        '253c157292f75eb38082b5acb06f3f01' => __DIR__ . '/..' . '/nikic/fast-route/src/functions.php',
        'bd9634f2d41831496de0d3dfe4c94881' => __DIR__ . '/..' . '/symfony/polyfill-php56/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Util\\' => 22,
            'Symfony\\Polyfill\\Php56\\' => 23,
            'SuperClosure\\' => 13,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'PhpParser\\' => 10,
        ),
        'F' => 
        array (
            'FastRoute\\' => 10,
        ),
        'E' => 
        array (
            'EasySwoole\\Validate\\' => 20,
            'EasySwoole\\Utility\\' => 19,
            'EasySwoole\\Trace\\' => 17,
            'EasySwoole\\Spl\\Test\\' => 20,
            'EasySwoole\\Spl\\' => 15,
            'EasySwoole\\Socket\\' => 18,
            'EasySwoole\\Mysqli\\' => 18,
            'EasySwoole\\Http\\' => 16,
            'EasySwoole\\FastCache\\Tests\\' => 27,
            'EasySwoole\\FastCache\\' => 21,
            'EasySwoole\\EasySwoole\\' => 22,
            'EasySwoole\\Component\\Tests\\' => 27,
            'EasySwoole\\Component\\' => 21,
            'EasySwoole\\Actor\\Test\\' => 22,
            'EasySwoole\\Actor\\' => 17,
        ),
        'C' => 
        array (
            'Cron\\' => 5,
        ),
        'A' => 
        array (
            'App\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Util\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-util',
        ),
        'Symfony\\Polyfill\\Php56\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php56',
        ),
        'SuperClosure\\' => 
        array (
            0 => __DIR__ . '/..' . '/jeremeamia/superclosure/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'PhpParser\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/php-parser/lib/PhpParser',
        ),
        'FastRoute\\' => 
        array (
            0 => __DIR__ . '/..' . '/nikic/fast-route/src',
        ),
        'EasySwoole\\Validate\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/validate/src',
        ),
        'EasySwoole\\Utility\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/utility/src',
        ),
        'EasySwoole\\Trace\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/trace/src',
        ),
        'EasySwoole\\Spl\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/spl/test',
        ),
        'EasySwoole\\Spl\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/spl/src',
        ),
        'EasySwoole\\Socket\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/socket/src',
        ),
        'EasySwoole\\Mysqli\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/mysqli/src',
        ),
        'EasySwoole\\Http\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/http/src',
        ),
        'EasySwoole\\FastCache\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/fast-cache/tests',
        ),
        'EasySwoole\\FastCache\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/fast-cache/src',
        ),
        'EasySwoole\\EasySwoole\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/easyswoole/src',
        ),
        'EasySwoole\\Component\\Tests\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/component/Tests',
        ),
        'EasySwoole\\Component\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/component/src',
        ),
        'EasySwoole\\Actor\\Test\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/actor/test',
        ),
        'EasySwoole\\Actor\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyswoole/actor/src',
        ),
        'Cron\\' => 
        array (
            0 => __DIR__ . '/..' . '/dragonmantank/cron-expression/src/Cron',
        ),
        'App\\' => 
        array (
            0 => __DIR__ . '/../..' . '/App',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb7b1c47ce42ee7dec67df83976144859::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb7b1c47ce42ee7dec67df83976144859::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}