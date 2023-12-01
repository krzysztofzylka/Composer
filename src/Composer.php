<?php

namespace Krzysztofzylka\Composer;

class Composer
{

    /**
     * Require package
     * @param string $packageName
     * @param string|null $cdPath
     * @return false|string
     */
    public static function requirePackage(string $packageName, ?string $cdPath = null)
    {
        $command = '';

        if (!is_null($cdPath)) {
            $command .= 'cd ' . $cdPath . '; ';
        }

        $command .= 'composer require ' . $packageName;

        ob_start();

        echo shell_exec($command);

        return ob_get_clean();
    }

}