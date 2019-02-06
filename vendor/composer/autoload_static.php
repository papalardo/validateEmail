<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3196219356b590e514bbd3f8ea2610a4
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'SMTPValidateEmail\\' => 18,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'SMTPValidateEmail\\' => 
        array (
            0 => __DIR__ . '/..' . '/zytzagoo/smtp-validate-email/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3196219356b590e514bbd3f8ea2610a4::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3196219356b590e514bbd3f8ea2610a4::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
