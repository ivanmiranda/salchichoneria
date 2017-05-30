<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0b6d6c42096b10971ef96e12ace5fe0a
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Sincco\\Tools\\' => 13,
            'Sincco\\Sfphp\\' => 13,
        ),
        'F' => 
        array (
            'Fbourigault\\ComposerMkdir\\' => 26,
        ),
        'D' => 
        array (
            'Desarrolla2\\Test\\Cache\\' => 23,
            'Desarrolla2\\Cache\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Sincco\\Tools\\' => 
        array (
            0 => __DIR__ . '/..' . '/sincco/debug/src',
            1 => __DIR__ . '/..' . '/sincco/singleton/src',
            2 => __DIR__ . '/..' . '/sincco/tokenizer/src',
            3 => __DIR__ . '/..' . '/sincco/login/src',
            4 => __DIR__ . '/..' . '/sincco/elastic-email/src',
        ),
        'Sincco\\Sfphp\\' => 
        array (
            0 => __DIR__ . '/..' . '/sincco/sfphp/src',
        ),
        'Fbourigault\\ComposerMkdir\\' => 
        array (
            0 => __DIR__ . '/..' . '/fbourigault/composer-mkdir',
        ),
        'Desarrolla2\\Test\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/desarrolla2/cache/test',
        ),
        'Desarrolla2\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/desarrolla2/cache/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0b6d6c42096b10971ef96e12ace5fe0a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0b6d6c42096b10971ef96e12ace5fe0a::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit0b6d6c42096b10971ef96e12ace5fe0a::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
