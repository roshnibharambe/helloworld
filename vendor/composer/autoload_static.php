<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit978f59b2b47b0de73bfc52963e584980
{
    public static $prefixesPsr0 = array (
        'H' => 
        array (
            'HelloWorld' => 
            array (
                0 => __DIR__ . '/../..' . '/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInit978f59b2b47b0de73bfc52963e584980::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}
