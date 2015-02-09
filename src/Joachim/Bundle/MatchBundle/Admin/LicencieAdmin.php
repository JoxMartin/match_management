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

class LicencieAdmin extends Admin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('numero_licence', 'integer')
            ->add('nom')
            ->add('prenom')
            ->add('date_naissance', 'sonata_type_date_picker', array('label' => 'Date de naissance'))
            ->add(
                'genre',
                'choice',
                array(
                    'choices' => array(
                        'F' => 'Femme',
                        'H' => 'Homme'
                    )
                )
            );
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('nom')
            ->add('prenom')
            ->add('genre');
    }

    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('numero_licence', 'integer')
            ->add('nom')
            ->add('prenom')
            ->add('date_naissance', 'date')
            ->add('genre');
    }
}