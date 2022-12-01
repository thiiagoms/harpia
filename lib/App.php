<?php

namespace Lib;

use Lib\Commands\ScannerCommand;
use Lib\Utils\Printer;

/**
 * Main package about scanner
 * 
 * @package Lib
 */
class App
{
    /** @var Printer $printer package */
    private Printer $printer;

    /** @var ScannerCommand $scanner package */
    private ScannerCommand $scanner;

    public function __construct()
    {
        $this->printer = new Printer();
    }

    /**
     * Get access to Printer class methods
     *
     * @return Printer
     */
    public function printer(): Printer
    {
        return $this->printer;
    }

    /**
     * Scan ports on host and check if is open or closed
     * 
     * @param string $url   - host url
     * @param array  $ports - ports to scan
     * @return void
     */
    public function scanner(string $url, array $ports): void
    {
        $this->scanner = new ScannerCommand($url, $ports);
    }

    /**
     * Get access to scanner command
     * 
     * @return ScannerCommand
     */
    public function getScanner(): ScannerCommand
    {
        return $this->scanner;
    }
}
