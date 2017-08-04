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

class AddClassType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		
		$builder->add('classes',
					  EntityType::class,
					  array('class' 		=> 'EDUBundle:Classes',
							'expanded'  	=> true,
							'multiple'  	=> true,
							'attr'  		=> array(	'class' => 'form-control',
														'style' => 'margin:5px 0;'),
							'label' => 'class_classTypeform'
							));
		$builder->add('Add Classes',
						  SubmitType::class,
						  array('attr'  =>  array('class' => 'btn btn-primary',
												  'style' => 'margin:15px 0;'),
								'label' => 'AddClass_classTypeform'
								) );
		
		
	}
	
	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'translation_domain' => 'forms'
			
        ));
    }
	
	
	
}