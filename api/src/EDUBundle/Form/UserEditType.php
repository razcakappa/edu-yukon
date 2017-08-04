<?php

namespace EDUBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;

// form input types
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; 
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;


class UserEditType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
		$this->UserRole = $options['UserRole'];
		
		//$roles = $this->getParent('security.role_hierarchy.roles');
		$builder->add('firstname',
					  TextType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),
							'label' => 'firstname_edit_user_form')
						 );
		
		$builder->add('lastname',
					  TextType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),
							'label' => 'lastname_edit_user_form'
							) );
		
		$builder->add('email',
					  EmailType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),
							'label' => 'email_edit_user_form'
							) );
		
		$builder->add('roles', ChoiceType::class, array(
                                'choices' => $this->UserRole,
                                'multiple' => true,
                                'expanded' => true,
                            ));

		$builder->add(	'locale',
						ChoiceType::class,
						array(	'expanded'  => false,
								'multiple'  => false,
								'attr'  	=> array(	'class' => 'form-control',
														'style' => 'height:auto'),
								'choices' 	=> array(	'French' => 'fr',
														'English'=> 'en',
														'Dutch'	 => 'nl'),
								'label'		=> 'Language',
								'placeholder'=> '',
								'label' => 'locale_edit_user_form'
								
								));
		
		$builder->add('phonenumber',
					  TextType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),
							'label' => 'phonenumber_edit_user_form'
							) );
        $builder->add('contact',
					  ContactEditType::class,
					  array('label' => false
							
							
							));
			
		$builder->add('Edit User',
					  SubmitType::class,
					  array('attr'  =>  array('class' => 'btn btn-primary',
											  'style' => 'margin:15px 0;'),
							'label' => 'Edit User_edit_user_form'
							) );
    }
	
	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EDUBundle\Entity\Users',
			'translation_domain' => 'forms',
			'UserRole' => null,			
        ));
    }
}