<?php

declare(strict_types=1);

namespace Src\Helpers;

use Src\Tools\Printer;

/**
 * Port Reader
 *
 * @package Src\Helpers
 * @author  Thiago Silva <thiagom.devsec@gmail.com>
 * @version 1.0
 */
class PortReader
{
    /**
     * Read Port file
     *
     * @param string $path - File Path
     * @return array
     */
    public static function reader(?string $path): array
    {
        if (is_null($path) || ! file_exists($path)) {
            Printer::error(
                '> ERROR: File not exists or is null, try again later'
            );
            exit;
        }

        $ports = static function () use ($path): array {

            $file = fopen($path, 'r');

            $reader = fread($file, filesize($path));

            fclose($file);

            return explode(PHP_EOL, $reader);
        };

        return $ports();
    }
}
