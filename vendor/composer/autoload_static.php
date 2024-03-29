<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit07eedeaf36519eeda27e9c293cf86174
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'TYPO3\\FluidSchemaGenerator\\' => 27,
            'TYPO3Fluid\\Fluid\\' => 17,
        ),
        'H' => 
        array (
            'HTL3R\\Megahamster\\' => 18,
        ),
        'D' => 
        array (
            'Doctrine\\DBAL\\' => 14,
            'Doctrine\\Common\\Cache\\' => 22,
            'Doctrine\\Common\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'TYPO3\\FluidSchemaGenerator\\' => 
        array (
            0 => __DIR__ . '/..' . '/typo3/fluid-schema-generator/src',
        ),
        'TYPO3Fluid\\Fluid\\' => 
        array (
            0 => __DIR__ . '/..' . '/typo3fluid/fluid/src',
        ),
        'HTL3R\\Megahamster\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
        'Doctrine\\DBAL\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/dbal/lib/Doctrine/DBAL',
        ),
        'Doctrine\\Common\\Cache\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/cache/lib/Doctrine/Common/Cache',
        ),
        'Doctrine\\Common\\' => 
        array (
            0 => __DIR__ . '/..' . '/doctrine/event-manager/lib/Doctrine/Common',
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit07eedeaf36519eeda27e9c293cf86174::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit07eedeaf36519eeda27e9c293cf86174::$prefixDirsPsr4;

        }, null, ClassLoader::class);
    }
}
