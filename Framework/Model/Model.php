<?php
namespace Framework\Model;


class  Model
{
    protected $name;

    protected function getModelName()
    {
        return $this->name;
    }

    protected function setModelName($name)
    {
        $this->name = $name;
    }
}
