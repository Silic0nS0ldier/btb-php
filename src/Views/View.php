<?php declare(strict_types = 1);

namespace Jordan\FastExperiment\Views;

abstract class View
{
    protected abstract function render() : void;
    public function __toString() : string
    {
        ob_start();
        $this->render();
        return ob_get_clean();
    }
}
