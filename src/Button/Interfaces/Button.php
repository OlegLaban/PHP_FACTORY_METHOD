<?php

namespace App\Button\Interfaces;

/**
 *
 * @author oleglaban
 */
interface Button
{
    public function render(): void;
    
    public function onClick(callable $callback): void;  
}
