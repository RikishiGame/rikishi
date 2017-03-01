<?php
/**
 * Created by PhpStorm.
 * User: Phor
 * Date: 01.03.2017
 * Time: 21:22
 */

namespace AppBundle\Entity;

use FOS\UserBundle\FOSUserBundle as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */

class User extends BaseUser {
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Id;



    public function __construct()
    {
        parent::__construct();
    }
}