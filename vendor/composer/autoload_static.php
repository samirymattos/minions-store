<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitdc7dd7531cfb18b2231b963e8716d155
{
    public static $files = array (
        '31a7cf013d73a96bec3a5977a94ebccd' => __DIR__ . '/..' . '/shark/simple_html_dom/simple_html_dom.php',
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
        'simple_html_dom' => __DIR__ . '/..' . '/shark/simple_html_dom/simple_html_dom.php',
        'simple_html_dom_node' => __DIR__ . '/..' . '/shark/simple_html_dom/simple_html_dom.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixesPsr0 = ComposerStaticInitdc7dd7531cfb18b2231b963e8716d155::$prefixesPsr0;
            $loader->classMap = ComposerStaticInitdc7dd7531cfb18b2231b963e8716d155::$classMap;

        }, null, ClassLoader::class);
    }
}
