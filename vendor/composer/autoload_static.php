<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51ca8c48dd877eb19df2e6b8c54677fb
{
    public static $prefixLengthsPsr4 = array (
        'C' => 
        array (
            'Convenia\\AfdReader\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Convenia\\AfdReader\\' => 
        array (
            0 => __DIR__ . '/..' . '/convenia/afd-reader/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51ca8c48dd877eb19df2e6b8c54677fb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51ca8c48dd877eb19df2e6b8c54677fb::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
