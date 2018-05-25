<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf18e220aba0ae7130d8fb8565de5c632
{
    public static $prefixLengthsPsr4 = array (
        't' => 
        array (
            'think\\composer\\' => 15,
        ),
        'a' => 
        array (
            'app\\' => 4,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf18e220aba0ae7130d8fb8565de5c632::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf18e220aba0ae7130d8fb8565de5c632::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
