<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Contigo\Gam\DeveloperBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Contigo\Gam\Constant;

class LocateGeneratorController extends Controller
{
    public function indexAction()
    {
        return $this->render('ContigoGamDeveloperBundle:LocateGenerator:index.html.twig');       
    }    
}
