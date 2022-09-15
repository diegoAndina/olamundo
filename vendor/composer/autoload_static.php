<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit98d516bdc468d34bbe59e47c6e71c9d0
{
    public static $prefixLengthsPsr4 = array (
        'D' => 
        array (
            'Diego\\ProjetoOlamundo\\' => 22,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Diego\\ProjetoOlamundo\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit98d516bdc468d34bbe59e47c6e71c9d0::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit98d516bdc468d34bbe59e47c6e71c9d0::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit98d516bdc468d34bbe59e47c6e71c9d0::$classMap;

        }, null, ClassLoader::class);
    }
}
