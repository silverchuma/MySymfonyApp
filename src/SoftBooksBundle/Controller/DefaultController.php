<?php

namespace SoftBooksBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SoftBooksBundle:Default:index.html.twig');
    }
}
