<?php

namespace App\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\OptionsResolver\OptionsResolver;

class SkillsLevelChoiceType extends AbstractType
{
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'choices' => [
                'Débutant' => 'beginner',
                'Basique' => 'elementary',
                'Moyen' => 'intermediate',
                'Bon' => 'advanced',
                'Expert' => 'expert',
            ]
        ]);
    }

    public function getParent()
    {
        return ChoiceType::class;
    }
}
