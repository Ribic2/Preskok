<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit1c656804d6b474184946d5303aeb1592
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Http\\Message\\' => 17,
            'Preskok\\' => 8,
        ),
        'A' => 
        array (
            'Aura\\Router\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Preskok\\' => 
        array (
            0 => __DIR__ . '/../..' . '/model',
        ),
        'Aura\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/aura/router/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'A' => 
        array (
            'Aura\\Composer\\' => 
            array (
                0 => __DIR__ . '/..' . '/aura/installer-system/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit1c656804d6b474184946d5303aeb1592::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit1c656804d6b474184946d5303aeb1592::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit1c656804d6b474184946d5303aeb1592::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
