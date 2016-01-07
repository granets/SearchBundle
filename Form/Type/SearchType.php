<?php
 
 namespace Mihail\SearchBundle\Form\Type;
 
 use Symfony\Component\Form\AbstractType;
 use Symfony\Component\Form\FormBuilderInterface;
 use Symfony\Component\Form\Extension\Core\Type\TextType;
 use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
 use Symfony\Component\Form\Extension\Core\Type\SubmitType;
 use Symfony\Component\OptionsResolver\OptionsResolver;
 
 class SearchType extends AbstractType
 {
 	public function buildForm(FormBuilderInterface $builder, array $options)
     {
         $builder
             ->add('searchFor', TextType::class, array('label'=> 'Search For:* '))
             ->add('fileType', TextType::class , array('label'=> 'File Type:* '))
             ->add('searchDir',  ChoiceType::class, array(
             	'label' => 'Search Path:',
             	'choices' => $options['dir_list'],
             	'choices_as_values' => true))
             ->add('save', SubmitType::class, array('label' => 'Search'));
     }
 
     public function configureOptions(OptionsResolver $resolver)
 	{
 		$resolver->setRequired(array(
 	        'dir_list',
 	    ));
 
 	    $resolver->setDefaults(array(
 	        'data_class' => 'Mihail\SearchBundle\Entity\FileSearch',
 	        'dir_list' => null,
 	    ));
 	}
 } 
