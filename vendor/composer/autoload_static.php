<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit821305cb25ad70463fbae12a7ec8de17
{
    public static $prefixLengthsPsr4 = array (
        'v' => 
        array (
            'vitalis\\HelloWorld\\' => 19,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'vitalis\\HelloWorld\\' => 
        array (
            0 => __DIR__ . '/..' . '/vitalis/hello-composer/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit821305cb25ad70463fbae12a7ec8de17::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit821305cb25ad70463fbae12a7ec8de17::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
