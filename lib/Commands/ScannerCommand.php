<?php

namespace Lib\Commands;

use Exception;

/**
 * Scan ports on the url
 *
 * @package Lib\Commands
 */
class ScannerCommand
{
    /** @var string host url */
    private string $url = '';

    /** @var array ports to scan */
    private array $ports = [];

    /** @var array open ports on host */
    private array $openPorts = [];

    /** @var array close ports on host */
    private array $closePorts = [];

    /**
     * Construct method
     * 
     * @param string host url
     * @param array ports to scan on host
     */
    public function __construct(string $url, array $ports)
    {
        $this->url = $url;
        $this->ports = $ports;
        $this->scanner();
    }

    /**
     * Scan host
     * 
     * @return void
     */
    public function scanner(): void
    {
        foreach ($this->ports as $port) {

            $connection = fsockopen($this->url, $port, $error, $errstr, 2);
            
            is_resource($connection)
                ? $this->openPorts[$port]  = getservbyport($port, 'tcp')
                : $this->closePorts[$port] = getservbyport($port, 'tcp');
        }

        // fclose($connection);
    }

    /** 
     * Get all open ports on host
     * 
     * @return array 
     */
    public function openPorts(): array
    {
        return $this->openPorts;
    }

    /**
     * Get all close ports on host
     * 
     * @return array
     */
    public function closePorts(): array
    {
        return $this->closePorts;
    }
}
