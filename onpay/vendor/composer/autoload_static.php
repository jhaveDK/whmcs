<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit144f27559386abd5a1dfcb294a098e1d
{
    public static $prefixLengthsPsr4 = array (
        'f' => 
        array (
            'fkooman\\OAuth\\Client\\' => 21,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'ParagonIE\\ConstantTime\\' => 23,
        ),
        'O' => 
        array (
            'OnPay\\' => 6,
        ),
        'L' => 
        array (
            'League\\ISO3166\\' => 15,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'fkooman\\OAuth\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/onpayio/oauth2-client/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'ParagonIE\\ConstantTime\\' => 
        array (
            0 => __DIR__ . '/..' . '/paragonie/constant_time_encoding/src',
        ),
        'OnPay\\' => 
        array (
            0 => __DIR__ . '/..' . '/onpayio/php-sdk/src',
        ),
        'League\\ISO3166\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/iso3166/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit144f27559386abd5a1dfcb294a098e1d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit144f27559386abd5a1dfcb294a098e1d::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
