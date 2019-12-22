<?php

namespace Controller;

use Framework\Controller\AbstractController;



namespace Controller;

use Framework\Controller\AbstractController;

class Text extends AbstractController
{
    public function index()
    {
        return $this->view->generate('framework/text.phtml', ['content' => __METHOD__]);
    }
}