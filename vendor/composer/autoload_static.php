<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit530ceae31db00cb9e3badf934fd2e0ff
{
    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'Hamiddj\\ContactUs\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Hamiddj\\ContactUs\\' => 
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
            $loader->prefixLengthsPsr4 = ComposerStaticInit530ceae31db00cb9e3badf934fd2e0ff::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit530ceae31db00cb9e3badf934fd2e0ff::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit530ceae31db00cb9e3badf934fd2e0ff::$classMap;

        }, null, ClassLoader::class);
    }
}
