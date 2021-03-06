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

	class ClassType extends AbstractType
	{
		public function buildForm(FormBuilderInterface $builder, array $options)
		{
			$builder->add('class',
						  EntityType::class,
						  array('class' 		=> 'EDUBundle:Classes',
								//'choice_label' 	=> 'id',
								'expanded'  	=> false,
								'multiple'  	=> false,
								'attr'  		=> array(	'class' => 'form-control',
															'style' => 'margin:5px 0;'),
								'label' => 'class_classType'
								));
			/*$builder->add('class',
						  EntityType::class,
						  array('class'     	=> 'EDUBundle:Classes',
								'query_builder' =>  function (EntityRepository $er)
													{
														return $er->createQueryBuilder('c');
													},
								'choice_label' 	=> 'className',
								'expanded'  	=> false,
								'multiple'  	=> false ));*/
			$builder->add('Add to Student',
						  SubmitType::class,
						  array('attr'  =>  array('class' => 'btn btn-primary',
												  'style' => 'margin:15px 0;'),
								'label' => 'Add to Student_classType'
								) );
		}
		
		
		public function configureOptions(OptionsResolver $resolver)
		{
			$resolver->setDefaults(array(
				'translation_domain' => 'forms'
				
			));
		}
		
		
		
		
	}
