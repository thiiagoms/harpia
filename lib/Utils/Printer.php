<?php

namespace Lib\Utils;

/**
 * Package to print messages on display
 * 
 * @package Lib\Utils
 */
class Printer
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
    public function display(string $message): void
    {
        $this->newLine();
        $this->output($message);
        $this->newLine();
    }
}
