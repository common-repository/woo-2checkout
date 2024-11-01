<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitfbd493a17f366db9959bbabb6910870d
{
    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'StorePress\\TwoCheckoutPaymentGateway\\' => 37,
            'StorePress\\AdminUtils\\' => 22,
        ),
        'A' => 
        array (
            'Automattic\\Jetpack\\Autoloader\\' => 30,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'StorePress\\TwoCheckoutPaymentGateway\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'StorePress\\AdminUtils\\' => 
        array (
            0 => __DIR__ . '/..' . '/storepress/admin-utils/includes',
        ),
        'Automattic\\Jetpack\\Autoloader\\' => 
        array (
            0 => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src',
        ),
    );

    public static $classMap = array (
        'Automattic\\Jetpack\\Autoloader\\AutoloadFileWriter' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadFileWriter.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadGenerator.php',
        'Automattic\\Jetpack\\Autoloader\\AutoloadProcessor' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/AutoloadProcessor.php',
        'Automattic\\Jetpack\\Autoloader\\CustomAutoloaderPlugin' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/CustomAutoloaderPlugin.php',
        'Automattic\\Jetpack\\Autoloader\\ManifestGenerator' => __DIR__ . '/..' . '/automattic/jetpack-autoloader/src/ManifestGenerator.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'StorePress\\AdminUtils\\Common' => __DIR__ . '/..' . '/storepress/admin-utils/includes/Common.php',
        'StorePress\\AdminUtils\\Field' => __DIR__ . '/..' . '/storepress/admin-utils/includes/Field.php',
        'StorePress\\AdminUtils\\Fields' => __DIR__ . '/..' . '/storepress/admin-utils/includes/Fields.php',
        'StorePress\\AdminUtils\\Menu' => __DIR__ . '/..' . '/storepress/admin-utils/includes/Menu.php',
        'StorePress\\AdminUtils\\REST_API' => __DIR__ . '/..' . '/storepress/admin-utils/includes/REST_API.php',
        'StorePress\\AdminUtils\\Section' => __DIR__ . '/..' . '/storepress/admin-utils/includes/Section.php',
        'StorePress\\AdminUtils\\Settings' => __DIR__ . '/..' . '/storepress/admin-utils/includes/Settings.php',
        'StorePress\\AdminUtils\\Updater' => __DIR__ . '/..' . '/storepress/admin-utils/includes/Updater.php',
        'StorePress\\AdminUtils\\Upgrade_Notice' => __DIR__ . '/..' . '/storepress/admin-utils/includes/Upgrade_Notice.php',
        'StorePress\\TwoCheckoutPaymentGateway\\API' => __DIR__ . '/../..' . '/includes/API.php',
        'StorePress\\TwoCheckoutPaymentGateway\\Common' => __DIR__ . '/../..' . '/includes/Common.php',
        'StorePress\\TwoCheckoutPaymentGateway\\ConvertPlus\\ConvertPlus_Block' => __DIR__ . '/../..' . '/includes/ConvertPlus/ConvertPlus_Block.php',
        'StorePress\\TwoCheckoutPaymentGateway\\ConvertPlus\\ConvertPlus_Gateway' => __DIR__ . '/../..' . '/includes/ConvertPlus/ConvertPlus_Gateway.php',
        'StorePress\\TwoCheckoutPaymentGateway\\Extended_Plugin_Upgrade_Notice' => __DIR__ . '/../..' . '/includes/Extended_Plugin_Upgrade_Notice.php',
        'StorePress\\TwoCheckoutPaymentGateway\\Payment_Gateway' => __DIR__ . '/../..' . '/includes/Payment_Gateway.php',
        'StorePress\\TwoCheckoutPaymentGateway\\Plugin' => __DIR__ . '/../..' . '/includes/Plugin.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitfbd493a17f366db9959bbabb6910870d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitfbd493a17f366db9959bbabb6910870d::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitfbd493a17f366db9959bbabb6910870d::$classMap;

        }, null, ClassLoader::class);
    }
}
