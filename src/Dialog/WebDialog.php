<?php

namespace App\Dialog;

use App\Button\Interfaces\Button;
use App\Button\WebButton;

class WebDialog extends AbstractDialog
{
    public function createButton(): Button
    {
        return new WebButton();
    }
}