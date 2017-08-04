<?php

namespace EDUBundle\Form;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Doctrine\ORM\EntityRepository;

// form input types
use Symfony\Component\Form\Extension\Core\Type\SubmitType; 
use Symfony\Component\Form\Extension\Core\Type\ChoiceType; 

#use EDUBundle\Entity\Classes;

class ClassSubjectType extends AbstractType
{
	
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder->add('subject',
					  EntityType::class,
					  array('class' 		=> 'EDUBundle:Subject',
							'expanded'  	=> true,
							'multiple'  	=> true,
							'attr'  		=> array(	'class' => 'form-control',
														'style' => 'margin:5px 0;'),
							'label' => 'subject_class_subject_type'
							));
		
		$builder->add('Add Classes',
						  SubmitType::class,
						  array('attr'  =>  array('class' => 'btn btn-primary',
												  'style' => 'margin:15px 0;'),
								'label' => 'Add Classes_classSubjectType'
								) );
		
	}
	
	
	
	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'translation_domain' => 'forms'
			
        ));
    }
	
}