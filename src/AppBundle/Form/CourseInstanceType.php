<?php

namespace AppBundle\Form;


use AppBundle\Controller\CourseInstanceController;
use Symfony\Component\Form\AbstractType;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class CourseInstanceType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('timeStamp')->add('capacity')
            ->add('disenrollDate')->add('place', null, array('required'=>true))->add('supervisor', null, array('required'=>true)); //
    }/**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\CourseInstance'
        ));
    }

    /**S
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_courseinstance';
    }


}
