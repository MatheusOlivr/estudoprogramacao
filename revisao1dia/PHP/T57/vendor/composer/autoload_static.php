<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitc6d086dbaff6737918fba8787df3bc97
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Matheus\\T57\\' => 12,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Matheus\\T57\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'S' => 
        array (
            'Slim' => 
            array (
                0 => __DIR__ . '/..' . '/slim/slim',
            ),
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitc6d086dbaff6737918fba8787df3bc97::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitc6d086dbaff6737918fba8787df3bc97::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitc6d086dbaff6737918fba8787df3bc97::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitc6d086dbaff6737918fba8787df3bc97::$classMap;

        }, null, ClassLoader::class);
    }
}
