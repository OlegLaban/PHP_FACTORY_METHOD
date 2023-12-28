<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Button;

use App\Button\Interfaces\Button;
/**
 * Description of WindowsButton
 *
 * @author oleglaban
 */
class WindowsButton implements Button
{
    /**
     * @param callable $callback
     * @return void
     */
    public function onClick(callable $callback): void
    {
        call_user_func($callback);
        echo 'click by windows button';
    }
    
    /**
     * @return void
     */
    public function render(): void
    {
        echo 'render Windows button';
    }
}
