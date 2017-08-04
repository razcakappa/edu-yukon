<?php

namespace EDUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Student
 *
 * @ORM\Table(name="student")
 * @ORM\Entity(repositoryClass="EDUBundle\Repository\StudentRepository")
 */
class Student
{

    /**
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $users;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", unique=true)
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Id
     */
    private $id;

    /**
     *
     * @ORM\ManyToOne(targetEntity="Classes")
     * @ORM\JoinColumn(name="classId", referencedColumnName="id" )
     */
    private $classes;


    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set users
     *
     * @param \EDUBundle\Entity\Users $users
     *
     * @return Student
     */
    public function setUsers(\EDUBundle\Entity\Users $users = null)
    {
        $this->users = $users;

        return $this;
    }

    /**
     * Get users
     *
     * @return \EDUBundle\Entity\Users
     */
    public function getUsers()
    {
        return $this->users;
    }

    /**
     * Set classes
     *
     * @param \EDUBundle\Entity\Classes $classes
     *
     * @return Student
     */
    public function setClasses(\EDUBundle\Entity\Classes $classes = null)
    {
        $this->classes = $classes;

        return $this;
    }

    /**
     * Get classes
     *
     * @return \EDUBundle\Entity\Classes
     */
    public function getClasses()
    {
        return $this->classes;
    }
}
