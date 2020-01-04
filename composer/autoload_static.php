<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInite193f79a1e57f164dfd50f3ecb6077fd
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
            $loader->prefixLengthsPsr4 = ComposerStaticInite193f79a1e57f164dfd50f3ecb6077fd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInite193f79a1e57f164dfd50f3ecb6077fd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
