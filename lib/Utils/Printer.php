<?php

namespace Lib\Utils;

use Lib\Utils\Colors;

/**
 * Package to print messages on display
 * 
 * @package Lib\Utils
 */
class Printer extends Colors
{

    /**
     * Print the message on display
     * 
     * @param string $message
     * @return void
     */
    private function output(string $message): void
    {
        echo $message;
    }

    /**
     * Add new line on display
     * 
     * @return void
     */
    private function newLine(): void
    {
        $this->output(PHP_EOL);
    }

    /**
     * Printer main package
     * 
     * @param string $message
     * @return void
     */
    private function display(string $message): void
    {
        $this->newLine();
        $this->output($message . "\e[0m");
        $this->newLine();
    }

    /**
     * @param string
     * @return void
     */
    public function success(string $message): void
    {
        $this->display(self::GREEN . $message);
    }

    /**
     * @param string
     * @return void
     */
    public function warning(string $message): void
    {
        $this->display(self::YELLOW . $message);
    }

    /**
     * @param string
     * @return void
     */
    public function error(string $message): void
    {
        $this->display(self::RED . $message);
    }
}
