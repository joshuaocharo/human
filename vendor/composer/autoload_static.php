<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2081ab2274f25dc97fcbfa35868d3e60
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2081ab2274f25dc97fcbfa35868d3e60::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2081ab2274f25dc97fcbfa35868d3e60::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
