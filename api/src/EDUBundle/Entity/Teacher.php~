<?php

namespace EDUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Teacher
 *
 * @ORM\Table(name="teacher")
 * @ORM\Entity(repositoryClass="EDUBundle\Repository\TeacherRepository")
 */
class Teacher
{
    public function __toString()
    {
        return $this->getUsers()->getFirstname();
    }
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Users")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $users;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Classes")
     * @ORM\JoinColumn(name="class_id", unique=false, referencedColumnName="id")
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
     * @return Teacher
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
     * @return Teacher
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
