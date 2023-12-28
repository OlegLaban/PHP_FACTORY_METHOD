<?php

/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Scripting/PHPClass.php to edit this template
 */

namespace App\Dialog;

use App\Button\Interfaces\Button;
use App\Dialog\Interfaces\DialogInterface;

/**
 * Description of newPHPClass
 *
 * @author oleglaban
 */
abstract class AbstractDialog implements DialogInterface
{
    /**
     * @return void
     */
    public function render(): void
    {
        $okButton = $this->createButton();
        
        $okButton->onClick(function() {
           echo 'close dialog callback'; 
        });
        
        echo "\n";
        
        $okButton->render();
        
        echo "\n";
    }
    
    abstract function createButton(): Button;
}
