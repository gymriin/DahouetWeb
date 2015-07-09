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

class InscriptionController extends Controller {

    public function regateAction(Request $request) {

        $session = $this->getRequest()->getSession();
        $id = $session->get('user');


        if ($id == null) {
            $url = $this->generateUrl('dahouet_noinscription');
            return $this->redirect($url);
        } else {
            $session->remove('regate');
            $challenge = new Challenge();
            $regate = new Regate();



            $repository = $this
                    ->getDoctrine()
                    ->getManager()
                    ->getRepository('DahouetBundle:Challenge');
            $curchal = $repository->findByCurrentDate();
            $challenge = $curchal[0];
            $session->set('challenge', $challenge);
            $libel = $challenge->getChallenge();

            $form = $this->createFormBuilder()
                    ->add('regate', 'entity', array('label' => 'Régate',
                        'class' => 'DahouetBundle:Regate',
                        'choice_label' => 'libreg',
                        'query_builder' => function (\DahouetBundle\Entity\RegateRepository $regateRepository) {
                            return $regateRepository->getRegate();
                        }
                    ))
                    ->add('Valider', 'submit')
                    ->getForm();
            $form->handleRequest($request);
            $chooseReg = $form->getData();
            $regate = $chooseReg['regate'];
            if ($form->isSubmitted()) {
                $session->set('regate', $regate);
                $url = $this->generateUrl('dahouet_voilier');
                return $this->redirect($url);
            }
            return $this->render('DahouetBundle::inscription.html.twig', array('form' => $form->createView(), "libel" => $libel));
        }
    }
    public function voilierAction(Request $request) {
        
    }

}
