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

class ClassSubjectEditType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		//print_r($this->subjects);die;
		$subs = array(
            'Monday'    => TRUE,
            'Tuesday'   => TRUE,
        );
		
		$builder->add('Subjects',
					  EntityType::class,
					  array('class' 		=> 'EDUBundle:Subject',
							'expanded'  	=> true,
							'multiple'  	=> true,
							'attr'  		=> array(	'class' => 'form-control',
														'style' => 'margin:5px 0;'),
							'label' => 'Subjects_classSubjectEditType'
							
							));
		$builder->add('Update Subjects',
						  SubmitType::class,
						  array('attr'  =>  array('class' => 'btn btn-primary',
												  'style' => 'margin:15px 0;'),
								'label' => 'Update Subjects_classSubjectEditType'
								) );
		
	}
	
	
	public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'translation_domain' => 'forms'
			
        ));
    }

	
}