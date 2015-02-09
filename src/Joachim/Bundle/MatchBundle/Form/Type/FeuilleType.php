<?php
/**
 * Created by PhpStorm.
 * User: Joachim Martin
 * Date: 12/01/15
 * Time: 19:47
 */

namespace Joachim\Bundle\MatchBundle\Form\Type;


use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class FeuilleType extends AbstractType {

    public function buildForm(FormBuilderInterface $builder, array $options) {
        $builder
            ->add('match_id')
            ->add('composition')
            ->add('set_1')
            ->add('set_2')
            ->add('set_3')
            ->add('set_4')
            ->add('set_5');
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        return 'feuille';
    }

}