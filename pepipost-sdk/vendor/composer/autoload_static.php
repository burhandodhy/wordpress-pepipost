<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit8744e94a2514b98e33fd0bc44bca24d9
{
    public static $prefixLengthsPsr4 = array (
        'U' => 
        array (
            'Unirest\\' => 8,
        ),
        'P' => 
        array (
            'PepipostAPIV10Lib\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Unirest\\' => 
        array (
            0 => __DIR__ . '/..' . '/itabrezshaikh/unirest-php/src/Unirest',
        ),
        'PepipostAPIV10Lib\\' => 
        array (
            0 => __DIR__ . '/..' . '/pepipost/pepipost-sdk-php/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit8744e94a2514b98e33fd0bc44bca24d9::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit8744e94a2514b98e33fd0bc44bca24d9::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
