<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPInterface.php to edit this template
 */

namespace App\Dialog\Interfaces;

use App\Button\Interfaces\Button;

/**
 *
 * @author oleglaban
 */
interface DialogInterface
{
    public function render(): void;
    
    public function createButton(): Button;
}
