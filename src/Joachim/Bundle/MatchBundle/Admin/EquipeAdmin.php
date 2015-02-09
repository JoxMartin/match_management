<?php
/**
 * Created by PhpStorm.
 * User: Joachim Martin
 * Date: 31/12/14
 * Time: 17:35
 */

namespace Joachim\Bundle\MatchBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class EquipeAdmin extends Admin {
// Fields to be shown on create/edit forms
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add(
                'genre',
                'choice',
                array(
                    'choices' => array(
                        'F' => 'Femme',
                        'H' => 'Homme',
                        'M' => 'Mixte'
                    )
                )
            )
            ->add('club', 'sonata_type_model', array())
            ->add('niveau', 'sonata_type_model', array())
        ;
    }

    // Fields to be shown on filter forms
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('genre')
            ->add('club')
            ->add('niveau')
        ;
    }

    // Fields to be shown on lists
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('equipe_id')
            ->add('genre')
            ->add('club')
            ->add('niveau')
        ;
    }
}