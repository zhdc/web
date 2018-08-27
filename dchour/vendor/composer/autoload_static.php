<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit212ba0adb398ec054c5a7022284d3117
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
        'Y' => 
        array (
            'Yunhack\\PHPValidator\\' => 21,
        ),
        'F' => 
        array (
            'Faker\\' => 6,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'think\\composer\\' => 
        array (
            0 => __DIR__ . '/..' . '/topthink/think-installer/src',
        ),
        'app\\' => 
        array (
            0 => __DIR__ . '/../..' . '/application',
        ),
        'Yunhack\\PHPValidator\\' => 
        array (
            0 => __DIR__ . '/..' . '/yunhack/php-validator',
        ),
        'Faker\\' => 
        array (
            0 => __DIR__ . '/..' . '/fzaninotto/faker/src/Faker',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit212ba0adb398ec054c5a7022284d3117::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit212ba0adb398ec054c5a7022284d3117::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
