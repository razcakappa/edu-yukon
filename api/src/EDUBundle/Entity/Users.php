<?php

namespace EDUBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use JMS\Serializer\Annotation\ExclusionPolicy;
use JMS\Serializer\Annotation\Expose;
use JMS\Serializer\Annotation\VirtualProperty;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Users
 * @ORM\Entity
 * @ORM\Table(name="users")
 * @ExclusionPolicy("all")
 */
class Users extends BaseUser
{

    /**
     * @ORM\OneToOne(targetEntity="contact", mappedBy="userId", cascade={"persist", "merge"})
     * @ORM\JoinColumn(name="id",referencedColumnName="userId")
     */
    protected $contact;
    
    ///**
    // * @ORM\OneToOne(targetEntity="contact", mappedBy="address")
    // */
    //private $address;
    //
    ///**
    // * @ORM\OneToOne(targetEntity="contact", mappedBy="postCode")
    // */
    //private $postCode;
    //
    //
    // /**
    // * @ORM\OneToOne(targetEntity="contact", mappedBy="contactNumber")
    // */
    //private $contactNumber;

    /**
     * @ORM\OneToOne(targetEntity="Student", mappedBy="users")
     */
    private $student;

    public function __construct()
    {
        parent::__construct();
        //$this->address = new ArrayCollection();
        //$this->student = new ArrayCollection();
        //$this->address = new Address();
        //$this->contact = new ArrayCollection();
    }
    
    public function __toString()
    {
        return $this->getFirstname() . ' ' . $this->getLastname();
    }
 
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @Expose
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
    
    /**
     * @var string
     *
     * @ORM\Column(name="deviceToken", nullable=true, type="string")
     * @Expose
     */
    protected $deviceToken;

    /**
     * @var string
     *
     * @ORM\Column(name="firstname", type="string")
     * @Expose
     */
    protected $firstname;

    /**
     * @var string
     *
     * @ORM\Column(name="lastname", type="string")
     * @Assert\NotBlank()
     * @Expose
     */
    protected $lastname;

    /**
     * @var string
     *
     * @ORM\Column(name="phoneNumber", type="string")
     * @Expose
     */
    protected $phoneNumber;

    /**
     * @var string
     *
     * @ORM\Column(name="validationNumber", type="string",nullable=true)
     * @Expose
     */
    protected $validationNumber;
    
    /**
     * @var string
     *
     * @ORM\Column(name="locale", type="string",nullable=true)
     * @Expose
     */
    protected $locale;

    /**
     * @ORM\ManyToOne(targetEntity="UsersTokens", inversedBy="users")
     * @ORM\JoinColumn(name="token", referencedColumnName="id")
     */
    private $userToken;
    
    /**
     * @var datetime
     *
     * @ORM\Column(name="update_time", type="datetime",nullable=true)
     * @Expose
     */
    protected $update_time;

    /**
     * @var boolean
     *
     * @ORM\Column(name="updated", type="boolean",nullable=true)
     * @Expose
     */
    protected $updated;

    /**
     * Set phoneNumber
     *
     * @param string $phoneNumber
     *
     * @return Users
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get phoneNumber
     *
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * Set validationNumber
     *
     * @param string $validationNumber
     *
     * @return Users
     */
    public function setValidationNumber($validationNumber)
    {
        $this->validationNumber = $validationNumber;

        return $this;
    }

    /**
     * Get validationNumber
     *
     * @return string
     */
    public function getValidationNumber()
    {
        return $this->validationNumber;
    }

    /**
     * Set userToken
     *
     * @param \EDUBundle\Entity\UsersTokens $userToken
     *
     * @return Users
     */
    public function setUserToken(\EDUBundle\Entity\UsersTokens $userToken = null)
    {
        $this->userToken = $userToken;
        
        return $this;
    }

    /**
     * Get userToken
     *
     * @return \EDUBundle\Entity\UsersTokens
     */
    public function getUserToken()
    {
        return $this->userToken;
    }

    /**
     * Set firstname
     *
     * @param string $firstname
     *
     * @return Users
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
        return $this;
    }

    /**
     * Get firstname
     *
     * @return string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * Set lastname
     *
     * @param string $lastname
     *
     * @return Users
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get lastname
     *
     * @return string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * Set student
     *
     * @param \EDUBundle\Entity\Student $student
     *
     * @return Users
     */
    public function setStudent(\EDUBundle\Entity\Student $student = null)
    {
        $this->student = $student;

        return $this;
    }

    /**
     * Get student
     *
     * @return \EDUBundle\Entity\Student
     */
    public function getStudent()
    {
        return $this->student;
    }

    

    /**
     * Set contact
     *
     * @param \EDUBundle\Entity\contact $contact
     *
     * @return Users
     */
    public function setContact(\EDUBundle\Entity\contact $contact = null)
    {
        $this->contact = $contact;

        return $this;
    }

    /**
     * Get contact
     *
     * @return \EDUBundle\Entity\contact
     */
    public function getContact()
    {
        return $this->contact;
    }

    /**
     * Set deviceToken
     *
     * @param string $deviceToken
     *
     * @return Users
     */
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;

        return $this;
    }

    /**
     * Get deviceToken
     *
     * @return string
     */
    public function getDeviceToken()
    {
        return $this->deviceToken;
    }

    /**
     * Set locale
     *
     * @param string $locale
     *
     * @return Users
     */
    public function setLocale($locale)
    {
        $this->locale = $locale;

        return $this;
    }

    /**
     * Get locale
     *
     * @return string
     */
    public function getLocale()
    {
        return $this->locale;
    }

    /**
     * Set updateTime
     *
     * @param \DateTime $updateTime
     *
     * @return Users
     */
    public function setUpdateTime($updateTime)
    {
        $this->update_time = $updateTime;

        return $this;
    }

    /**
     * Get updateTime
     *
     * @return \DateTime
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * Set updated
     *
     * @param boolean $updated
     *
     * @return Users
     */
    public function setUpdated($updated)
    {
        $this->updated = $updated;
        
        return $this;
    }

    /**
     * Get updated
     *
     * @return boolean
     */
    public function getUpdated()
    {
        return $this->updated;
    }
}
