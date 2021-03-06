<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit4c72919c5f41810e74968f33ea173c5e
{
    public static $files = array (
        '241d2b5b9c1e680c0770b006b0271156' => __DIR__ . '/..' . '/yahnis-elsts/plugin-update-checker/load-v4p9.php',
    );

    public static $prefixLengthsPsr4 = array (
        'H' => 
        array (
            'HaydenPierce\\ClassFinder\\UnitTest\\' => 34,
            'HaydenPierce\\ClassFinder\\' => 25,
        ),
        'F' => 
        array (
            'Foks\\' => 5,
        ),
        'C' => 
        array (
            'Cloudipsp\\' => 10,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'HaydenPierce\\ClassFinder\\UnitTest\\' => 
        array (
            0 => __DIR__ . '/..' . '/haydenpierce/class-finder/test/unit',
        ),
        'HaydenPierce\\ClassFinder\\' => 
        array (
            0 => __DIR__ . '/..' . '/haydenpierce/class-finder/src',
        ),
        'Foks\\' => 
        array (
            0 => __DIR__ . '/../..' . '/inc/classes',
        ),
        'Cloudipsp\\' => 
        array (
            0 => __DIR__ . '/..' . '/cloudipsp/php-sdk-v2/lib',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit4c72919c5f41810e74968f33ea173c5e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit4c72919c5f41810e74968f33ea173c5e::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
