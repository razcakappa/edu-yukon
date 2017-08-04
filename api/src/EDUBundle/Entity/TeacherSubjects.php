<?php

namespace EDUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TeacherSubjects
 *
 * @ORM\Table(name="teacher_subjects")
 * @ORM\Entity(repositoryClass="EDUBundle\Repository\TeacherSubjectsRepository")
 */
class TeacherSubjects
{
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
    private $teachers;

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
     * Set teachers
     *
     * @param \EDUBundle\Entity\Users $teachers
     *
     * @return TeacherSubjects
     */
    public function setTeachers(\EDUBundle\Entity\Users $teachers = null)
    {
        $this->teachers = $teachers;

        return $this;
    }

    /**
     * Get teachers
     *
     * @return \EDUBundle\Entity\Users
     */
    public function getTeachers()
    {
        return $this->teachers;
    }

    /**
     * Set subjects
     *
     * @param \EDUBundle\Entity\Subject $subjects
     *
     * @return TeacherSubjects
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
