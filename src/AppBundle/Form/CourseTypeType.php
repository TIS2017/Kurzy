<?php

namespace AppBundle\Form;

use AppBundle\Entity\Workplace;
use Doctrine\Common\Collections\ArrayCollection;
use function PHPSTORM_META\type;
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
        $user = $options['user'];
        $workplaces = $user->getWorkplaces();

        $builder->add('name')->add('description')->add('softPrerequisites')
            ->add('visibility')->add('garant_id')
            ->add('workplaces')
            ->add('hardPrerequisites');
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'AppBundle\Entity\CourseType',
            'user' =>null
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
