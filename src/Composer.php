<?php

namespace Krzysztofzylka\Composer;

class Composer
{

    /**
     * Require package
     * @param string $packageName
     * @return false|string
     */
    public static function requirePackage(string $packageName)
    {
        $command = 'composer require ' . $packageName;

        ob_start();

        echo shell_exec($command);

        return ob_get_clean();
    }

}