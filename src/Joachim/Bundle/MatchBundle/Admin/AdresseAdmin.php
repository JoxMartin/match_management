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


class AdresseAdmin extends Admin {
    // Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('adresse_1', 'text')
            ->add('adresse_2', 'text', array('required' => false))
            ->add('adresse_3', 'text', array('required' => false))
            ->add('ville', 'sonata_type_model', array())
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('ville')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('adresse_1')
            ->add('ville')
        ;
    }
} 