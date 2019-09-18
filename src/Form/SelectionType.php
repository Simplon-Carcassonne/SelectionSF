<?php

namespace App\Form;

use App\Entity\Selection;
use App\Form\DataTransformer\FrenchToDateTimeTransformer;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SelectionType extends ApplicationType
{
    private $transformer;

    public function __construct(FrenchToDateTimeTransformer $transformer){
        $this->transformer = $transformer;
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('title',
                TextType::class,
                $this->getConfiguration("Titre de la formation", "Titre de la formation")
            )
            ->add('date_start',
                TextType::class,
                $this->getConfiguration("Date d'ouverture", "00/00/0000")
            )
            ->add('date_end',
                TextType::class,
                $this->getConfiguration("Date de clôture", "00/00/0000")
            )
            ->add('address',
                TextType::class,
                $this->getConfiguration("Adresse", "adresse")
            )
            ->add('post_code',
                TextType::class,
                $this->getConfiguration("Code postal", "code postal")
            )
            ->add('city',
                TextType::class,
                $this->getConfiguration("Ville", "Nom de la ville")
            )
        ;
        $builder->get('date_start')->addModelTransformer($this->transformer);
        $builder->get('date_end')->addModelTransformer($this->transformer);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Selection::class,
        ]);
    }
}
