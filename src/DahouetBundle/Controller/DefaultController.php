<?php

namespace DahouetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use DahouetBundle\Entity\Proprietaire;
use Symfony\Component\Form\FormBuilder;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Session\Session;

class DefaultController extends Controller {

    public function indexAction(Request $request) {
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('DahouetBundle:Challenge');
        $results = $repository->findByCurrentDate();
        $challenge = $results[0];
        $libel = $challenge->getChallenge();
        $prop = new Proprietaire();
        $form = $this->createFormBuilder($prop)
                ->add('mail', 'text', array('label' => 'Adresse Mail'))
                ->add('password', 'password', array('label' => 'Mot de passe'))
                ->add('Se connecter', 'submit')
                ->getForm();
        $form->handleRequest($request);
        $repository = $this
                ->getDoctrine()
                ->getManager()
                ->getRepository('DahouetBundle:Proprietaire');
        $prop2 = new Proprietaire();
        $prop2 = $repository->findOneBy(array('mail' => $prop->getMail()));

        if ($form->isSubmitted()) {
            if ($prop2 == NULL) {
                return $this->render('DahouetBundle::message.html.twig', array('form' => $form->createView()));
            } elseif ($prop->getPassword() != $prop2->getPassword()) {
                return $this->render('DahouetBundle::message.html.twig', array('form' => $form->createView()));
            } else {

                $session = new Session();
                $session->set('user', $prop2->getNommbr());
                $session->set('id', $prop2->getIdmbr());
                $session->set('club', $prop2->getIdclub());
                $id = $session->get('user');
                return $this->render('DahouetBundle::aside2.html.twig');
            }
        }
//        récupération de la date du jour
        $date = date("d-m-Y");
       
        return $this->render('DahouetBundle::aside.html.twig', array('form' => $form->createView()));
    }
    
    public function retourAction() {
        $session=$this->getRequest()->getSession();
        $id=$session->get('user');
        if ($id == null){
            $url = $this->generateUrl('dahouet_homepage');
             return $this->redirect($url);
        }
        else {
            return $this->render('DahouetBundle::aside2.html.twig');
        }
    }

    public function noinscriptionAction() {
        return $this->render('DahouetBundle::noInscription.html.twig');
    }

}
