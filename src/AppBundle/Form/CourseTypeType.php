<?php

namespace AppBundle\Form;



use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;



class CourseTypeType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('name')->add('description')->add('softPrerequisites' )->add('extraSoft', null, array('mapped' => false))
            ->add('visibility')->add('garantId',null, ['required'=>true])
            ->add('workplaces',null, ['choice_label'=> 'name','expanded'=> true, 'multiple'=> true])
            ->add('hardPrerequisites');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\CourseType',
        ));

    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'appbundle_coursetype';
    }


}
