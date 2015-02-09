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


class SaisonAdmin extends Admin {
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('Debut', 'integer', array('label' => 'Année de début'))
            ->add('fin', 'integer', array('label' => 'Année de fin'))
            ->add('active') //if no type is specified, SonataAdminBundle tries to guess it
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('debut')
            ->add('fin')
            ->add('active')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('debut')
            ->add('fin')
            ->add('active')
        ;
    }
} 