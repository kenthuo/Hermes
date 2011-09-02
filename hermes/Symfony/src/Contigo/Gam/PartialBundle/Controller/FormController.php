<?php

/*
 * This file is part of the Symfony framework.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Contigo\Gam\PartialBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FormController extends Controller
{
    public function indexAction()
    {
        return $this->render('ContigoGamPartialBundle:Form:index.html.twig');
    }
    
    public function requiredNoteAction()
    {
        return $this->render('ContigoGamPartialBundle:Form:required-note.html.twig');
    }    
}
