<?php

namespace NEWFormBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;

class PersonForm extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {

            $builder->add('firstname', TextType::class, array("label" => "Prénom"))
            ->add('lastname', TextType::class)
            ->add('gender', TextType::class)
            ->add('age', TextType::class)
            ->add('save', SubmitType::class, array("label" => "Enregistrer"));
    }

    public function configureOptions(OptionsResolver $resolver)
    {

    }

    public function getBlockPrefix()
    {
        return 'newform_bundle_person';
    }
}
