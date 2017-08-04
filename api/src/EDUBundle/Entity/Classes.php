<?php

namespace EDUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Classes
 *
 * @ORM\Table(name="classes")
 * @ORM\Entity(repositoryClass="EDUBundle\Repository\ClassesRepository")
 */
class Classes
{

    public function __toString()
    {
        return (string)$this->getClassName();
    }

    public function __construct()
    {
        $this->student = new ArrayCollection();
    }
    
    /**
     * @var int
     *
     * @ORM\OneToMany(targetEntity="ClassSubject", mappedBy="class") 
     * @ORM\JoinColumn(name="is", referencedColumnName="class_id")
     */
    private $subjects;    
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="className", type="string", length=255, unique=true)
     */
    private $className;


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
     * Set className
     *
     * @param string $className
     *
     * @return Classes
     */
    public function setClassName($className)
    {
        $this->className = $className;

        return $this;
    }

    /**
     * Get className
     *
     * @return string
     */
    public function getClassName()
    {
        return $this->className;
    }

    /**
     * Add subject
     *
     * @param \EDUBundle\Entity\ClassSubject $subject
     *
     * @return Classes
     */
    public function addSubject(\EDUBundle\Entity\ClassSubject $subject)
    {
        $this->subjects[] = $subject;

        return $this;
    }

    /**
     * Remove subject
     *
     * @param \EDUBundle\Entity\ClassSubject $subject
     */
    public function removeSubject(\EDUBundle\Entity\ClassSubject $subject)
    {
        $this->subjects->removeElement($subject);
    }

    /**
     * Get subjects
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubjects()
    {
        return $this->subjects;
    }
}
