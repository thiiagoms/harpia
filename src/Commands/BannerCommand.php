<?php

declare(strict_types=1);

namespace Src\Commands;

use Src\Tools\Printer;

/**
 * Banner Command
 *
 * @package Src\Commands
 * @author  Thiago Silva <thiagom.devsec@gmail.com>
 * @version 1.0
 */
class BannerCommand
{
    /**
     * Initial banner
     *
     * @return void
     */
    public static function init(): void
    {
        Printer::error(
            '
            ██░ ██  ▄▄▄       ██▀███   ██▓███   ██▓ ▄▄▄      
            ▓██░██▒▒████▄    ▓██ ▒ ██▒▓██░  ██▒ ▓██▒████▄    
            ██▀▀██░▒██  ▀█▄  ▓██ ░▄█ ▒▓██░ ██▓▒▒██▒▒██  ▀█▄  
            ▓█ ░██ ░██▄▄▄▄██ ▒██▀▀█▄  ▒██▄█▓▒ ▒░██░░██▄▄▄▄██ 
            ▓█▒░██▓ ▓█   ▓██▒░██▓ ▒██▒▒██▒ ░  ░░██░ ▓█   ▓██▒
            ▒ ░░▒░▒ ▒▒   ▓▒█░░ ▒▓ ░▒▓░▒▓▒░ ░  ░░▓   ▒▒   ▓▒█░
            ▒ ░▒░ ░  ▒   ▒▒ ░  ░▒ ░ ▒░░▒ ░      ▒ ░  ▒   ▒▒ ░
            ░  ░░ ░  ░   ▒     ░░   ░ ░░        ▒ ░  ░   ▒   
            ░  ░  ░      ░  ░   ░               ░        ░  ░

            [*] Harpia - Port Scan made with Love and Elephants
            [*] Author: Thiago Silva AKA thiiagoms
            [*] Version: 1.0
        '
        );
    }

    /**
     * Helper command
     *
     * @return void
     */
    public static function help(): void
    {
        Printer::warning(
            '
            How to use ?!

            $ ./harpia

            or 

            $ ./harpia <address>
            $ ./harpia google.com

            or 

            $ ./harpia -p <path-to-ports.txt>
            $ ./harpia -p ports_example.txt
        '
        );
    }
}
