<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit131d56561a4fce94a1c759fd30bdfae0
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'Matheus\\T54\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'Matheus\\T54\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit131d56561a4fce94a1c759fd30bdfae0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit131d56561a4fce94a1c759fd30bdfae0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit131d56561a4fce94a1c759fd30bdfae0::$classMap;

        }, null, ClassLoader::class);
    }
}
