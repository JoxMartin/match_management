<?php
/**
 * Created by PhpStorm.
 * User: Joachim Martin
 * Date: 17/12/14
 * Time: 07:34
 */

namespace Joachim\Bundle\MatchBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class LicenceAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('licencie', 'sonata_type_model_autocomplete', array('property' => 'nom'))
            ->add('club', 'entity', array('class' => 'Joachim\Bundle\MatchBundle\Entity\Club'))
            ->add('saison', 'entity', array('class' => 'Joachim\Bundle\MatchBundle\Entity\Saison'))
            ->add(
                'type',
                'choice',
                array(
                    'choices' => array(
                        'arbitre' => 'Arbitre',
                        'joueur' => 'Joueur',
                        'marqueur' => 'Marqueur'
                    )
                )
            );
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('licencie')
            ->add('club')
            ->add('saison')
            ->add('type');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('licence_id')
            ->add('licencie')
            ->add('club')
            ->add('saison')
            ->add('type');
    }
}