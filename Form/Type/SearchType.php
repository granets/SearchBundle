<?php

namespace Mihail\SearchBundle\Controller;

use SearchBundle\Entity\Search;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class SearchContent extends AbstractType
{
	public function builForm(FormBuilderInterface $builder, array $options)
	{
		$builer
			->add('searchFor', TextType::class, array('label' => 'Search For: '))
			->add('fileType', TextType::class, array('label' => 'Serach in File Types: '))
			->add('searcDir', ChoiceType::class, array(
				'label' => 'Search In: ',
				'choices' => array(),
				'choices_as_values' => true,
				))
			->add('submit', SubmitType::class, array('label' => 'Search'))
			;
	}
}