<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit51062c489ab8ee10072a8740db653b8b
{
    public static $prefixLengthsPsr4 = array (
        'c' => 
        array (
            'coviu\\Api\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'coviu\\Api\\' => 
        array (
            0 => __DIR__ . '/..' . '/coviu/coviu-sdk/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'R' => 
        array (
            'Requests' => 
            array (
                0 => __DIR__ . '/..' . '/rmccue/requests/library',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit51062c489ab8ee10072a8740db653b8b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit51062c489ab8ee10072a8740db653b8b::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit51062c489ab8ee10072a8740db653b8b::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
