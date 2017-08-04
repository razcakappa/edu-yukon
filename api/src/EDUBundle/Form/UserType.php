<?php

namespace EDUBundle\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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

//use EDUBundle\Form\AddressType;

class UserType extends AbstractType
{
	/*
	private $roles;
	
	public function __construct()
    {
        $this->roles = $this->getParameter('security.role_hierarchy.roles');
    }*
	*/
	public function buildForm(FormBuilderInterface $builder, array $options)
    {

		$this->UserRole = $options['UserRole'];

		$builder->add('firstname',
					  TextType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),'label' => 'firstname_addUserFrom'

							) );
		
		$builder->add('lastname',
					  TextType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),
							'label' => 'lastname_addUserFrom'
							) );
		
		$builder->add('email',
					  EmailType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),'label' => 'email_addUserFrom'
							) );
		
		$builder->add('username',
					  TextType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),
												'label' =>'username_addUserFrom'
							) );
		
		$builder->add('password',
					  PasswordType::class,


					  array('attr'  =>  array(	'class' => 'form-control',
												'style' => 'margin:5px 0 15px 0;'),
												'label' =>'password_addUserFrom'

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
								'label' =>'locale_addUserFrom'));
		
		$builder->add('phonenumber',
					  TextType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),
                      'label' =>'phonenumber_addUserFrom',
							));

        $builder->add('contact',
					  AddressType::class,
					  array('label' => false
							));
			
		$builder->add('Add User',
					  SubmitType::class,
					  array('attr'  =>  array('class' => 'btn btn-primary',
											  'style' => 'margin:15px 0;'),
							'label' =>'Add User_addUserFrom') );

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
