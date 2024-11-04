<?php

namespace App\Controller;

use App\Core\BaseController;

class MainController extends BaseController
{
    public function index()
    {
        return $this->render('index.html.php');
    }
}
