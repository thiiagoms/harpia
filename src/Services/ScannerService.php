<?php

declare(strict_types=1);

namespace Src\Services;

use Src\Tools\Printer;

/**
 * Scanner Service
 *
 * @package Src\Service
 * @author  Thiago Silva <thiagom.devsec@gmail.com>
 * @version 1.0
 */
class ScannerService
{
    /**
     * Default ports to scan
     *
     * @var array Default ports
     */
    private array $ports = [21, 25, 80, 81, 110, 143, 443, 587, 2525, 3306];

    /**
     * Open Ports
     *
     * @var array - Ports open
     */
    private array $openPorts = [];

    /**
     * Close Ports
     *
     * @var array - Ports closed
     */
    private array $closePorts = [];

    /**
     * Return service name by port
     *
     * @param int $port - Get port service
     * @return string
     */
    private function portService(int $port): string
    {
        $service = getservbyport($port, 'tcp');

        return is_string($service) ? $service : 'service unknow';
    }

    /**
     * Make scan and return port port status
     *
     * @param string $url
     * @param array  $ports - Ports to be scan
     */
    private function scanner(string $url, array $ports): void
    {
        foreach ($ports as $port) {

            $port = (int) $port;
            
            $portService = $this->portService($port);

            try {
                $conn = fsockopen($url, $port, $error, $message, 2);

                is_resource($conn)
                    ? $this->openPorts[$port] = "{$port} is open with service {$portService}"
                    : $this->closePorts[$port] = "{$port} is closed with service {$portService}";
            } catch (\Exception $e) {
                Printer::error($e->getMessage());
            }
        }
    }

    /**
     * Report results from scan
     *
     * @param string $url - URL to scan
     * @param array  $ports - Ports by default or by the user
     */
    public function scan(string $url, ?array $ports = []): void
    {
        $ports = is_null($ports) ? $this->ports : $ports;

        $this->scanner($url, $ports);

        array_map(fn ($port) => Printer::success($port), $this->openPorts);
        array_map(fn ($port) => Printer::error($port), $this->closePorts);
    }
}
