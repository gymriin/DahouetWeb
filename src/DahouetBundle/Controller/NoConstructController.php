<?php

namespace DahouetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class NoConstructController extends Controller {
    
    public function enConstructionAction() {
        
        return $this->render('DahouetBundle::enConst.html.twig');
    }
}
