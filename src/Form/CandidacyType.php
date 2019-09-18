<?php

namespace App\Form;

use DateTimeInterface;
use App\Entity\Candidate;
use App\Form\Type\CountryChoiceType;
use App\Form\Type\SkillsLevelChoiceType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TelType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\BirthdayType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Karser\Recaptcha3Bundle\Form\Recaptcha3Type;
use Karser\Recaptcha3Bundle\Validator\Constraints\Recaptcha3;

class CandidacyType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('genus', ChoiceType::class, [
                'choices' => [
                    'M.' => 'male',
                    'Mme.' => 'female'
                ],
                'error_bubbling' => true,
                'label' => 'Civilité',
                'required' => false,
            ])
            ->add('name', TextType::class, [
                'label' => 'Prénom',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('surname', TextType::class, [
                'label' => 'Nom',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('date_of_birth', BirthdayType::class, [
                'label' => 'Date de naissance (jour-mois-année)',
                'format' => 'dd-MM-yyyy',
                'by_reference' => true,
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('birth_country', CountryChoiceType::class, [
                'label' => 'Pays de naissance',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('nationality', CountryChoiceType::class, [
                'label' => 'Nationalité (un seul choix possible)',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('social_security', NumberType::class, [
                'label' => 'Numéro de sécurité sociale',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('address', TextType::class, [
                'label' => 'Adresse',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('post_code', NumberType::class, [
                'label' => 'Code Postal',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('city', TextType::class, [
                'label' => 'Ville',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('phone_number', TelType::class, [
                'label' => 'Téléphone',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('mail_address', EmailType::class, [
                'label' => 'E-mail',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('school_level', ChoiceType::class, [
                'label' => 'Quel est le niveau du dernier diplôme que vous ayez obtenu ?',
                'choices' => [
                    'Je n\'ai pas de diplôme' => '0',
                    'CAP, BEP, BEPC' => '3',
                    'Baccalauréat' => '4',
                    'DEUG, BTS, DUT, DEUST' => '5',
                    'Licence, Master, Doctorat' => '6',
                ],
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('situation', ChoiceType::class, [
                'label' => 'Quelle est votre situation professionnelle actuelle ?',
                'choices' => [
                    'Indépendant' => 'Indépendant',
                    'Salarié' => 'Salarié',
                    'Étudiant' => 'Étudiant',
                    'Demandeur d\'emploi indemnisé par Pôle Emploi' => 'Demandeur d\'emploi indemnisé par Pôle Emploi',
                    'Demandeur d\'emploi non indemnisé par Pôle Emploi' => 'Demandeur d\'emploi non indemnisé par Pôle Emploi',
                    'Allocataire RSA' => 'Allocataire RSA',
                    'Allocataire ASS' => 'Allocataire ASS',
                    'Allocataire ASH' => 'Allocataire ASH',
                    'Allocataire de la Garantie jeunes de la Mission Locale' => 'Allocataire de la Garantie jeunes de la Mission Locale',
                    'Autre' => 'Autre',
                ],
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('pole_emploi_id', TextType::class, [
                'label' => 'Identifiant Pôle Emploi',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('pole_emploi_compensation_end_date', DateType::class, [
                'label' => 'Date de fin de droits Pôle Emploi (facultatif)',
                'format' => 'dd-MM-yyyy',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('dev_skills', SkillsLevelChoiceType::class, [
                'label' => 'Comment estimez-vous votre niveau en développement web ?',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('superhero', TextareaType::class, [
                'label' => 'Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi ?',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('hack_experience', TextareaType::class, [
                'label' => 'Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('school_stopped_year', TextType::class, [
                'label' => 'En quelle année avez-vous quitté la formation initiale ?',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('resume', TextareaType::class, [
                'label' => 'Racontez-nous votre parcours en quelques lignes.',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('english_level', SkillsLevelChoiceType::class, [
                'label' => 'Quel est votre niveau d\'anglais (lu/écrit) ?',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('motivation', TextareaType::class, [
                'label' => 'Dites nous pourquoi vous voulez intégrer l\'ERN Simplon Carcassonne. Détaillez-nous vos motivations en vous exprimant avec votre style à vous, mais ne vous limitez pas à un texte tapé à la va-vite. Aussi, n\'hésitez pas à faire une vidéo, un site ou tout autre chose qui démontrera votre envie, votre motivation, et vos compétences !',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('one_year_later', TextareaType::class, [
                'label' => 'Dans un an, avec vos nouveaux superpouvoirs de code informatique, que souhaiterez-vous faire dans votre vie ?',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('sololearn', TextType::class, [
                'label' => 'Exercices SOLOLEARN obligatoires',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('sololearn_bonus', ChoiceType::class, [
                'label' => 'Bonus SOLOLEARN (facultatif)',
                'required' => false,
                'error_bubbling' => true,
                'choices' => [
                    'Créez la page web de votre choix en HTML/CSS/JS ou PHP en utilisant le Code Playground SOLOLEARN. Vérifiez qu\'elle soit accessible depuis votre profil public SOLOLEARN' => 'webpage',
                    'Obtenez des certificats en faisant d\'avantage de leçons SOLOLEARN' => 'certificates',
                    'Commencezs des leçons supplémentaires (SQL Fundamentals, JQuery Tutorial, Ruby Tutorial ou Python Tutorial)' => 'more langages'
                ],
                'multiple' => 'true',
                'expanded' => 'true',
            ])
            ->add('disponibility', TextareaType::class, [
                'label' => 'Êtes-vous totalement disponible pour suivre une formation de 7,5 mois à temps plein (35h/semaine) suivie d\'un stage de 3 mois ? (Si non, indiquez vos contraintes)',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('remuneration', TextareaType::class, [
                'label' => 'Cette formation peut ouvrir droit à une rémunération forfaitaire (ARE Pôle Emploi ou ASP Région, RSA) en fonction de votre situation familiale et de celle en regard de l\'emploi. Comment allez-vous financer votre vie quotidienne durant les 10,5 mois de formation?',
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('guidance_source', ChoiceType::class, [
                'label' => 'Comment avez-vous entendu parler de la formation ERN Simplon Carcasonne ?',
                'choices' => [
                    'Via Pôle Emploi' => 'pôle emploi',
                    'Via le Bureau Territorial' => 'bureau territorial',
                    'Via la Mission Locale' => 'mission locale',
                    'Via les réseaux sociaux et internet' => 'web',
                    'Autre' => 'other',
                ],
                'required' => false,
                'error_bubbling' => true,
            ])
            ->add('captcha', Recaptcha3Type::class, [
                'constraints' => new Recaptcha3(),
            ])
            ->add('submit', SubmitType::class, [
                'attr' => ['class' => 'btn btn-block bg-red'],
                'label' => 'Je candidate !'
            ]);


    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Candidate::class,
        ]);
    }
}
