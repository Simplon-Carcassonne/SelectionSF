<?php

namespace App\Form;

use App\Entity\Rate;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class RateType extends ApplicationType
{


    public function __construct(){

    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('remarque',
                TextareaType::class,
                $this->getConfiguration("Commentaire", "Un commentaire à ajouter ?")
            )
            ->add('value', RangeType::class, [
            'attr' => [
                'min' => 0,
                'max' => 2
            ]
        ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Rate::class,
        ]);
    }
}
