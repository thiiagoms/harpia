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
    private function getPrinter(): Printer
    {
        return $this->printer;
    }

    /**
     * Scan ports on host and check if is open or closed
     * 
     * @param string host url
     * @param arraym ports to scan
     */
    public function scanner(string $url, array $ports)
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

    /**
     * Print messages of success or error in display
     * with custom colors
     *
     * @param string $color
     * @param string $message
     * @return void
     */
    public function message(string $color, string $message): void
    {
        $this->getPrinter()->display($color . $message);
    }
}
