<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit990a50b0f934c682021c3e5fb30c10c3
{
    public static $fallbackDirsPsr4 = array (
        0 => __DIR__ . '/../..' . '/src',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->fallbackDirsPsr4 = ComposerStaticInit990a50b0f934c682021c3e5fb30c10c3::$fallbackDirsPsr4;

        }, null, ClassLoader::class);
    }
}