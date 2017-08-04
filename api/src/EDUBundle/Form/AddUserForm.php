<?php

namespace EDUBundle\Form\AddUserForm;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; 
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

class AddUserForm extends AbstractType
{
	
	/*
	public function buildForm(FormBuilder $builder, array $options)
	{
		$builder->add('firstname');
        $builder->add('lastname');
        $builder->add('class');
	}
	
	public function getDefaultOptions(array $options)
    {
        return array(
            'data_class' => 'EDUBundle\Entity\Classes'
        );
    }
	*/
	
}