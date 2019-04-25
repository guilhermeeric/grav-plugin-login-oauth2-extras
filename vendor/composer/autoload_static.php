<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit2bc173dc5f62569a5dcf95d262de45bd
{
    public static $prefixLengthsPsr4 = array (
        'W' => 
        array (
            'Wohali\\OAuth2\\Client\\' => 21,
        ),
        'M' => 
        array (
            'Mrjoops\\OAuth2\\Client\\' => 22,
        ),
        'G' => 
        array (
            'Grav\\Plugin\\Login\\OAuth2\\' => 25,
        ),
        'A' => 
        array (
            'AdamPaterson\\OAuth2\\Client\\' => 27,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Wohali\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/wohali/oauth2-discord-new/src',
        ),
        'Mrjoops\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/mrjoops/oauth2-jira/src',
        ),
        'Grav\\Plugin\\Login\\OAuth2\\' => 
        array (
            0 => __DIR__ . '/../..' . '/classes',
        ),
        'AdamPaterson\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/adam-paterson/oauth2-slack/src',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit2bc173dc5f62569a5dcf95d262de45bd::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit2bc173dc5f62569a5dcf95d262de45bd::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}