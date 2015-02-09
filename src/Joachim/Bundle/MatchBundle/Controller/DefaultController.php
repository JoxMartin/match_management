<?php

namespace Joachim\Bundle\MatchBundle\Controller;

use Joachim\Bundle\MatchBundle\Form\Type\FeuilleType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        // Récupération du match
        $match = $this->getDoctrine()->getRepository('JoachimMatchBundle:Rencontre')->findOneBy(array('code' => $name));

        if (!$match) {
            throw $this->createNotFoundException('Aucun match avec le code' . $name);
        }

        // Récupération des joueurs de l'équipe recevante
        $joueursR = $this->getDoctrine()->getRepository('JoachimMatchBundle:Joueur')->findBy(
            array('clubId' => $match->getEquipeRecevante()->getClub()->getClubId())
        );

        // Récupération des joueurs de l'équipe visiteuse
        $joueursV = $this->getDoctrine()->getRepository('JoachimMatchBundle:Joueur')->findBy(
            array('clubId' => $match->getEquipeVisiteuse()->getClub()->getClubId())
        );

        $form = $this->createForm(new FeuilleType());

        $params = array(
            'form'     => $form->createView(),
            'match'    => $match,
            'joueursR' => $joueursR,
            'joueursV' => $joueursV
        );

        return $this->render('JoachimMatchBundle:Default:index.html.twig', $params);
    }
}
