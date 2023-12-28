<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Dialog;

use App\Button\Interfaces\Button;
use App\Button\WindowsButton;

/**
 * Description of WindowsDialog
 *
 * @author oleglaban
 */
class WindowsDialog extends AbstractDialog
{
    /**
     * @return Button
     */
    public function createButton(): Button
    {
        return new WindowsButton();
    }
}
