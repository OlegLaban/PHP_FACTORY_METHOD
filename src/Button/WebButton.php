<?php

namespace App\Button;

use App\Button\Interfaces\Button;

/**
 * Description of WebButton
 *
 * @author oleglaban
 */
class WebButton implements Button
{
    public function render(): void
    {
        echo 'render Web button';
    }

    public function onClick(callable $callback): void
    {
        call_user_func($callback);

        echo 'click on Web button';
    }
}
