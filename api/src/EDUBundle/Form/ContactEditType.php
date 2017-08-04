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

class ContactEditType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
		//parent::buildForm($builder, $options);
		$builder->add('address',
					  TextType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),
							'label' => 'address_edit_user_form') );
		
		$builder->add('postCode',
					  TextType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'
											  ),
							'label' => 'postCode_edit_user_form'
							) );
		
		$builder->add('contactNumber',
					  TextType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),
							'label' => 'contactNumber_edit_user_form') );
    }
	
	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'EDUBundle\Entity\contact',
			'translation_domain' => 'forms'
        ));
    }
}