<?php

declare(strict_types=1);

namespace Src\Commands;

/**
 * Scanner Command
 * 
 * @package Src\Commands
 * @author  Thiago Silva <thiagon.devsec@gmail.com>
 * @version 1.0
 */
class ScannerCommand
{
    
    /**
     * Init command
     *
     * @param string     $url   - url to scan
     * @param array|null $ports - url ports
     */
    public function __construct(private string $url, private ?array $ports = [])
    {
    }
}
