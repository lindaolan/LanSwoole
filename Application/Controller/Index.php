<?php
namespace Application\Controller;

use Application\Model\User;
use Framework\Controller\Controller;

class Index extends Controller
{
    public function testControllerName()
    {
        $this->setControllerName("Durant");
        $data = $this->getControllerName();
        return $data;
    }

    public function testModelName()
    {
        $user = new User();
        $user->setUserName("World");
        $data = $user->getUserName();
        return $data;
    }

}
