<?php

namespace App;

use App\Dialog\Interfaces\DialogInterface;
use App\Dialog\WebDialog;
use App\Dialog\WindowsDialog;

/**
 * Description of Application
 *
 * @author oleglaban
 */
class Application
{
    /**
     * @var DialogInterface
     */
    private DialogInterface $dialog;
    
    /**
     * @param string $os
     * @return void
     * @throws \Exception
     */
    public function initialize(string $os): void
    {
        if ($os === 'Windows') {
            $dialog = new WindowsDialog();
        } else if ($os === 'Web') {
            $dialog = new WebDialog();
        } else {
            throw new \Exception('Error! Unknown operating system.');
        }
        
        $dialog->render();
    }
    
    /**
     * @return void
     */
    public function main(string $os): void
    {                
        $this->initialize($os);
    }
}
