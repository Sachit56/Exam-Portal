<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0677ad35bfefd29e16103a6a788f9c3d
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

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0677ad35bfefd29e16103a6a788f9c3d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0677ad35bfefd29e16103a6a788f9c3d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0677ad35bfefd29e16103a6a788f9c3d::$classMap;

        }, null, ClassLoader::class);
    }
}
