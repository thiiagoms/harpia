<?php

declare(strict_types=1);

namespace Src\Commands;

use Src\Services\ScannerService;
use Src\Tools\Printer;

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
     * Init
     *
     * @param string $url
     * @param array|null $ports - Scan ports
     * @param [type] $scannerService
     */
    public function __construct(
        private string $url,
        private ?array $ports = [],
        private ScannerService $scannerService = new ScannerService()
    ) {
    }

    /**
     * Make Scanner
     *
     * @return void
     */
    public function scanner(): void
    {
        if (strlen($this->url) <= 0) {
            Printer::error("URL can't be empty!!!");
            exit;
        }

        $this->scannerService->scan($this->url, $this->ports);
    }
}
