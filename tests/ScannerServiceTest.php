<?php

use PHPUnit\Framework\TestCase;
use Src\Services\ScannerService;

/**
 * Scanner service test POC
 * 
 * @package Tests
 * @author  Thiago Silva <thiagom.devsec@gmail.com>
 * @version 1.0
 */
class ScannerServiceTest extends TestCase
{
    /**
     * Scanner Service Test
     *
     * @var ScannerService
     */
    private ScannerService $scannerServiceTest;

    /**
     * Init test case
     *
     * @return void
     */
    public function setUp(): void
    {
        $this->scannerServiceTest = new ScannerService();
    }

    /**
     * Test scan method
     *
     * @return void
     */
    public function test_scan_must_receive_parameters(): void
    {
        $url = 'google.com';

        $this->assertIsString($url, "URL is valid");

        $ports = [80, 81];

        $this->assertIsArray($ports, "Ports are valid");
    
        $result = $this->scannerServiceTest->scan($url, $ports);
    }
}