<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit74fcacc7646231aa4124b81e59e86fd4
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit74fcacc7646231aa4124b81e59e86fd4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit74fcacc7646231aa4124b81e59e86fd4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}