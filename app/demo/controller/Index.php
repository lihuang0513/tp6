<?php
namespace app\demo\controller;

use app\BaseController;
use app\model\Users;

class Index extends BaseController
{
    public function index()
    {
        return 'demo index';
    }

    public function getUsers()
    {
        echo $a;
    }
}
