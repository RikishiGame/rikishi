<?php

namespace AppBundle\Entity;

use FOS\UserBundle\FOSUserBundle as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity
 * @ORM\Table(name="user")
 */
class User extends BaseUser
{

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $Id;

    /**
     * @var int
     *
     * @ORM\Column(name="rank_level", type="integer")
     */
    protected $rank_level = 0;

    /**
     * @var int
     *
     * @ORM\Column(name="profile", type="text", nullable=true)
     */
    protected $profile;

    /**
     * @var string
     *
     * @ORM\Column(name="custom_name", type="string", length=25, nullable=true)
     */
    protected $custom_name;

    /**
     * @var string
     *
     * @ORM\Column(name="nation", type="string", length=2)
     */
    protected $nation = "PL";

    /**
     * @var string
     *
     * @ORM\Column(name="language", type="string", length=2)
     */
    protected $language = "PL";


    /**
     * @param mixed $rank_level
     */
    public function setRankLevel($rank_level)
    {
        $this->rank_level = $rank_level;
    }

    /**
     * @return mixed
     */
    public function getRankLevel()
    {
        return $this->rank_level;
    }

    /**
     * @param int $profile
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
    }

    /**
     * @return int
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param string $custom_name
     */
    public function setCustomName($custom_name)
    {
        $this->custom_name = $custom_name;
    }

    /**
     * @return string
     */
    public function getCustomName()
    {
        return $this->custom_name;
    }
}