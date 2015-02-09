<?php
/**
 * Created by PhpStorm.
 * User: Joachim Martin
 * Date: 05/01/15
 * Time: 18:29
 */

namespace Joachim\Bundle\MatchBundle\Entity;


use Sonata\UserBundle\Entity\BaseUser as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
\*/
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
    \*/
    protected $id;

    public function __construct()
    {
        parent::__construct();
    }
}