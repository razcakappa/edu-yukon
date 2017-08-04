<?php

namespace EDUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

use Symfony\Component\Validator\Constraints as Assert; // custom validation unique entity
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity; // custom validation unique entity

/**
 * ClassSubject
 *
 * @ORM\Table(name="class_subject")
 * @ORM\Entity(repositoryClass="EDUBundle\Repository\ClassSubjectRepository")
 *
 * 
 * @UniqueEntity(   fields      = {"class", "subjects"},
 *                  errorPath   = "subjects",
 *                  message     = "This subject is already added" )
 *                  
 */
class ClassSubject
{
    public function __toString()
    {
        return (string)$this->getSubjects()->getId();
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
     * @ORM\ManyToOne(targetEntity="Classes") 
     * @ORM\JoinColumn(name="class_id", referencedColumnName="id")
     */
    private $class;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="Subject") 
     * @ORM\JoinColumn(name="subject_id", referencedColumnName="id")
     */
    private $subjects;


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
     * Set class
     *
     * @param \EDUBundle\Entity\Classes $class
     *
     * @return ClassSubject
     */
    public function setClass(\EDUBundle\Entity\Classes $class = null)
    {
        $this->class = $class;

        return $this;
    }

    /**
     * Get class
     *
     * @return \EDUBundle\Entity\Classes
     */
    public function getClass()
    {
        return $this->class;
    }

    /**
     * Set subjects
     *
     * @param \EDUBundle\Entity\Subject $subjects
     *
     * @return ClassSubject
     */
    public function setSubjects(\EDUBundle\Entity\Subject $subjects = null)
    {
        $this->subjects = $subjects;

        return $this;
    }

    /**
     * Get subjects
     *
     * @return \EDUBundle\Entity\Subject
     */
    public function getSubjects()
    {
        return $this->subjects;
    }
}
