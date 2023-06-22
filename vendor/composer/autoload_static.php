<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb155efe116b0645e1ddde6c183118bbb
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        '6e3fae29631ef280660b3cdad06f25a8' => __DIR__ . '/..' . '/symfony/deprecation-contracts/function.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
        '5615da22037a0798f486f5688f33cc23' => __DIR__ . '/..' . '/codephix/plates/src/Template/match.php',
        'd30df192c36d94a9a87664226ef6819e' => __DIR__ . '/..' . '/codephix/plates/src/Extension/Data/data.php',
        'f8cce34de4de9ef4acc17d1401b44722' => __DIR__ . '/..' . '/codephix/plates/src/Extension/Path/path.php',
        '351c1fcce2c3c2a40164c85a8557345e' => __DIR__ . '/..' . '/codephix/plates/src/Extension/RenderContext/func.php',
        '5e54b499504ac9197c2db1ac39db1a36' => __DIR__ . '/..' . '/codephix/plates/src/Extension/RenderContext/render-context.php',
        '8820aeeedd1a43d7aaf34fb0f7889b79' => __DIR__ . '/..' . '/codephix/plates/src/Extension/LayoutSections/layout-sections.php',
        '58f3332935180b4c0fbdbd08a09ef95d' => __DIR__ . '/..' . '/codephix/plates/src/Extension/Folders/folders.php',
        '7533ea047b8fd481a3bacd7fa26eadfb' => __DIR__ . '/..' . '/codephix/plates/src/Util/util.php',
        'd45c08f83f013a03b38a03f1615da8fd' => __DIR__ . '/../..' . '/source/Config.php',
        '897cdedcf9747bdf828c6c91b03006e4' => __DIR__ . '/../..' . '/source/Helpers.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Source\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
            'PHPMailer\\PHPMailer\\' => 20,
        ),
        'M' => 
        array (
            'MatthiasMullie\\PathConverter\\' => 29,
            'MatthiasMullie\\Minify\\' => 22,
        ),
        'L' => 
        array (
            'League\\Plates\\' => 14,
            'League\\OAuth2\\Client\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
        'C' => 
        array (
            'CoffeeCode\\Router\\' => 18,
            'CoffeeCode\\Optimizer\\' => 21,
            'CoffeeCode\\DataLayer\\' => 21,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Source\\' => 
        array (
            0 => __DIR__ . '/../..' . '/source',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-factory/src',
            1 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
        'MatthiasMullie\\PathConverter\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/path-converter/src',
        ),
        'MatthiasMullie\\Minify\\' => 
        array (
            0 => __DIR__ . '/..' . '/matthiasmullie/minify/src',
        ),
        'League\\Plates\\' => 
        array (
            0 => __DIR__ . '/..' . '/codephix/plates/src',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
            1 => __DIR__ . '/..' . '/league/oauth2-facebook/src',
            2 => __DIR__ . '/..' . '/league/oauth2-google/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
        'CoffeeCode\\Router\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/router/src',
        ),
        'CoffeeCode\\Optimizer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/optimizer/src',
        ),
        'CoffeeCode\\DataLayer\\' => 
        array (
            0 => __DIR__ . '/..' . '/coffeecode/datalayer/src',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb155efe116b0645e1ddde6c183118bbb::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb155efe116b0645e1ddde6c183118bbb::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb155efe116b0645e1ddde6c183118bbb::$classMap;

        }, null, ClassLoader::class);
    }
}
