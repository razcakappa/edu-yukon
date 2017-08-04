<?php

namespace EDUBundle\Form;

use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Doctrine\ORM\EntityRepository;

// form input types
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; 
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\CheckboxType;

//use EDUBundle\Form\AddressType;

class StudentEditType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
    {
		/*$builder->add('classId',
					  TextType::class,
					  array('attr'  =>  array('class' => 'form-control',
											  'style' => 'margin:5px 0;'),
							'label'	=>	'Class'
							) );*/
		$builder->add('class',
						  EntityType::class,
						  array('class' 		=> 'EDUBundle:Classes',
								//'choice_label' 	=> 'id',
								'expanded'  	=> false,
								'multiple'  	=> false,
								'attr'  		=> array(	'class' => 'form-control',
															'style' => 'margin:5px 0;'),
								'label' => 'class_StudentEditform'));

		
		$builder->add('Update Student',
						  SubmitType::class,
						  array('attr'  =>  array('class' => 'btn btn-primary',
												  'style' => 'margin:15px 0;'),
								'label' => 'Update Student_StudentEditform') );

	}
	
	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'translation_domain' => 'forms'
        ));
    }
    
}
