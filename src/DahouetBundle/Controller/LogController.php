<?php

namespace DahouetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DahouetBundle\Entity\Proprietaire;
use Symfony\Component\Form\FormBuilder;
use DahouetBundle\Entity\Challenge;
use DahouetBundle\Entity\Regate;
use DahouetBundle\Entity\Voilier;
use DahouetBundle\Entity\Licencie;
use DahouetBundle\Entity\Participe;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class LogController extends Controller {
    
    
    public function logoutAction(){
        $session= $this->getRequest()->getSession();
        $session->clear();
        $url = $this->generateUrl('dahouet_homepage');
    return $this->redirect($url);
    }
    
}
