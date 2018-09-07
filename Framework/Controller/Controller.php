<?php
namespace Framework\Controller;

class  Controller
{
    protected $name;

    protected function getControllerName()
    {
        return $this->name;
    }

    protected function setControllerName($name)
    {
        $this->name = $name;
    }

}
