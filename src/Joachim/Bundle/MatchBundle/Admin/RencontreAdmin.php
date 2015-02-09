<?php
/**
 * Created by PhpStorm.
 * User: Joachim Martin
 * Date: 13/12/14
 * Time: 11:26
 */

namespace Joachim\Bundle\MatchBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;


class RencontreAdmin extends Admin {
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('date_match', 'sonata_type_datetime_picker', array('label' => 'Date du match'))
            ->add('code')
            ->add('gymnase', 'sonata_type_model', array())
            ->add('equipe_recevante', 'sonata_type_model', array('class' => 'Joachim\Bundle\MatchBundle\Entity\Equipe'))
            ->add('equipe_visiteuse', 'sonata_type_model', array('class' => 'Joachim\Bundle\MatchBundle\Entity\Equipe'))
            ->add('arbitre', 'sonata_type_model', array())
            ->add('second', 'sonata_type_model', array())
            ->add('marqueur', 'sonata_type_model', array())
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('gymnase')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('code')
            ->add('date')
            ->add('gymnase')
        ;
    }
} 