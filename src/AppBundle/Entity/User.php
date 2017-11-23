<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\UserRepository")
 */
class User extends BaseUser
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(name="prn", type="integer", nullable=true)
     */
    protected $prn;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set prn
     *
     * @param integer $prn
     *
     * @return User
     */
    public function setPrn($prn)
    {
        $this->prn = $prn;

        return $this;
    }

    /**
     * Get prn
     *
     * @return int
     */
    public function getPrn()
    {
        return $this->prn;
    }
}

