<?php
namespace Application\Model;

use Framework\Model\Model;

class User extends Model
{

    public function getUserName()
    {
        return parent::getModelName();
    }

    public function setUserName($name)
    {
        parent::setModelName($name);
    }
}
