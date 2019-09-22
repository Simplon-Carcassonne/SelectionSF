<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidateRepository")
 */
class Candidate
{
    const STATE_FORM = 'Form soumis';
    const STATE_PRESELECTION = 'Préselection';
    const STATE_PRESELECTION_KO = 'Préselection refusée';
    const STATE_SELECTION = 'Sélection';
    const STATE_SELECTION_WAITING = 'Liste d\'attente';
    const STATE_SELECTION_KO = 'Sélection refusée';
    const STATE_SIMPLON = 'En formation';

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Item 'genre' oublié à l'étape 1 !")
     * @ORM\Column(type="string", length=10)
     */
    private $genus;

    /**
     * @Assert\NotBlank(message="Item 'prénom' oublié à l'étape 1 !")
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @Assert\NotBlank(message="Item 'nom' oublié à l'étape 1 !")
     * @ORM\Column(type="string", length=255)
     */
    private $surname;

    /**
     * @Assert\NotBlank(message="Item 'date de naissance' oublié à l'étape 1 !")
     * @ORM\Column(type="datetime")
     */
    private $date_of_birth;

        /**
     * @Assert\NotBlank(message="Item 'pays de naissance' oublié à l'étape 1 !")
     * @ORM\Column(type="string", length=50)
     */
    private $birth_country;

    /**
     * @Assert\NotBlank(message="Item 'nationalité' oublié à l'étape 1 !")
     * @ORM\Column(type="string", length=50)
     */
    private $nationality;

    /**
     * @Assert\NotBlank(message="Item 'adresse' oublié à l'étape 2 !")
     * @ORM\Column(type="string", length=255)
     *
     */
    private $address;

    /**
     * @Assert\NotBlank(message="Item 'code postal' oublié à l'étape 2 !")
     * @ORM\Column(type="integer")
     *
     */
    private $post_code;

    /**
     * @Assert\NotBlank(message="Item 'ville' oublié à l'étape 2 !")
     * @ORM\Column(type="string", length=255)
     */
    private $city;

    /**
     * @Assert\NotBlank(message="Item 'numéro de téléphone' oublié à l'étape 2 !")
     * @ORM\Column(type="integer")
     */
    private $phone_number;

    /**
     * @Assert\NotBlank(message="Item 'adresse e-mail' oublié à l'étape 2 !")
     * @ORM\Column(type="string", length=255)
     */
    private $mail_address;

        /**
     * @Assert\NotBlank(message="Item 'année de décrochage' oublié à l'étape 3 !")
     * @ORM\Column(type="string", length=4)
     */
    private $school_stopped_year;

    /**
     * @Assert\NotBlank(message="Item 'dernier diplôme' oublié à l'étape 3 !")
     * @ORM\Column(type="string", length=255)
     */
    private $school_level;

    /**
     * @Assert\NotBlank(message="Item 'situation professionnelle' oublié à l'étape 3 !")
     * @ORM\Column(type="string", length=255)
     */
    private $situation;


    /**
     * @Assert\NotBlank(message="Item 'identifiant Pôle Emploi' oublié à l'étape 3 !")
     * @ORM\Column(type="string", length=20)
     */
    private $pole_emploi_id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $pole_emploi_compensation_end_date;

    /**
     * @Assert\NotBlank(message="Item 'numéro de sécurité sociale' oublié à l'étape 3 !")
     * @ORM\Column(type="string", length=255)
     */
    private $social_security;


       /**
     * @Assert\NotBlank(message="Item 'parcours' oublié à l'étape 4 !")
     * @ORM\Column(type="text")
     */
    private $resume;

        /**
     * @Assert\NotBlank(message="Item 'niveau de dév. web' oublié à l'étape 4 !")
     * @ORM\Column(type="string", length=255)
     */
    private $dev_skills;

        /**
     * @Assert\NotBlank(message="Item 'niveau d'anglais' oublié à l'étape 4 !")
     * @ORM\Column(type="string", length=255)
     */
    private $english_level;

    /**
     * @Assert\NotBlank(message="Item 'superhéro(ïne)' oublié à l'étape 4 !")
     * @ORM\Column(type="string", length=255)
     */
    private $superhero;

        /**
     * @Assert\NotBlank(message="Item 'superpouvoirs' oublié à l'étape 4 !")
     * @ORM\Column(type="text")
     */
    private $one_year_later;

    /**
     * @Assert\NotBlank(message="Item 'hack' oublié à l'étape 4 !")
     * @ORM\Column(type="text")
     */
    private $hack_experience;

        /**
     * @Assert\NotBlank(message="Item 'motivation' oublié à l'étape 5 !")
     * @ORM\Column(type="text")
     */
    private $motivation;


    /**
     * @Assert\NotBlank(message="Item 'cours Sololearn' oublié à l'étape 5 !")
     * @ORM\Column(type="string", length=255)
     */
    private $sololearn;

    /**
     * @ORM\Column(type="array")
     */
    private $sololearn_bonus;

    /**
     * @Assert\NotBlank(message="Item 'disponibilité' oublié à l'étape 6 !")
     * @ORM\Column(type="boolean")
     */
    private $disponibility;

    /**
     * @Assert\NotBlank(message="Item 'rémunération' oublié à l'étape 6 !")
     * @ORM\Column(type="text")
     */
    private $remuneration;

    /**
     * @Assert\NotBlank(message="Item 'source' oublié à l'étape 6 !")
     * @ORM\Column(type="string", length=255)
     */
    private $guidance_source;

    /**
     * @ORM\Column(type="boolean")
     */
    private $status = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private $simplonien = false;

    /**
     * @ORM\Column(type="string")
     */
    private $selectionStatus;

    /**
     * @return mixed
     */
    public function getSelectionStatus()
    {
        return $this->selectionStatus;
    }

    /**
     * @param mixed $selectionStatus
     */
    public function setSelectionStatus($selectionStatus): void
    {
        $this->selectionStatus = $selectionStatus;
    }

    /**
     * @return mixed
     */
    public function getSimplonien()
    {
        return $this->simplonien;
    }

    /**
     * @param mixed $simplonien
     */
    public function setSimplonien($simplonien): void
    {
        $this->simplonien = $simplonien;
    }

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Selection", inversedBy="candidates")
     * @ORM\JoinColumn(nullable=false)
     */
    private $selection;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Rate", mappedBy="candidate", orphanRemoval=true)
     */
    private $rates;

    /**
     * @return mixed
     */
    public function getRates()
    {
        return $this->rates;
    }

    /**
     * @param mixed $rates
     */
    public function setRates($rates): void
    {
        $this->rates = $rates;
    }


    public function __construct()
    {
        $this->rates = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGenus(): ?string
    {
        return $this->genus;
    }

    public function setGenus(string $genus): self
    {
        $this->genus = $genus;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): self
    {
        $this->surname = $surname;

        return $this;
    }

    public function getDateOfBirth(): ?\DateTimeInterface
    {
        return $this->date_of_birth;
    }

    public function setDateOfBirth(\DateTimeInterface $date_of_birth): self
    {
        $this->date_of_birth = $date_of_birth;

        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;

        return $this;
    }

    public function getPostCode(): ?int
    {
        return $this->post_code;
    }

    public function setPostCode(int $post_code): self
    {
        $this->post_code = $post_code;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getPhoneNumber(): ?int
    {
        return $this->phone_number;
    }

    public function setPhoneNumber(int $phone_number): self
    {
        $this->phone_number = $phone_number;

        return $this;
    }

    public function getMailAddress(): ?string
    {
        return $this->mail_address;
    }

    public function setMailAddress(string $mail_address): self
    {
        $this->mail_address = $mail_address;

        return $this;
    }

    public function getDevSkills(): ?string
    {
        return $this->dev_skills;
    }

    public function setDevSkills(string $dev_skills): self
    {
        $this->dev_skills = $dev_skills;

        return $this;
    }

    public function getSchoolLevel(): ?string
    {
        return $this->school_level;
    }

    public function setSchoolLevel(string $school_level): self
    {
        $this->school_level = $school_level;

        return $this;
    }

    public function getSituation(): ?string
    {
        return $this->situation;
    }

    public function setSituation(string $situation): self
    {
        $this->situation = $situation;

        return $this;
    }

    public function getBirthCountry(): ?string
    {
        return $this->birth_country;
    }

    public function setBirthCountry(string $birth_country): self
    {
        $this->birth_country = $birth_country;

        return $this;
    }

    public function getNationality(): ?string
    {
        return $this->nationality;
    }

    public function setNationality(string $nationality): self
    {
        $this->nationality = $nationality;

        return $this;
    }

    public function getPoleEmploiId(): ?string
    {
        return $this->pole_emploi_id;
    }

    public function setPoleEmploiId(string $pole_emploi_id): self
    {
        $this->pole_emploi_id = $pole_emploi_id;

        return $this;
    }

    public function getPoleEmploiCompensationEndDate(): ?\DateTimeInterface
    {
        return $this->pole_emploi_compensation_end_date;
    }

    public function setPoleEmploiCompensationEndDate(?\DateTimeInterface $pole_emploi_compensation_end_date): self
    {
        $this->pole_emploi_compensation_end_date = $pole_emploi_compensation_end_date;

        return $this;
    }

    public function getSocialSecurity(): ?int
    {
        return $this->social_security;
    }

    public function setSocialSecurity(int $social_security): self
    {
        $this->social_security = $social_security;

        return $this;
    }

    public function getSuperhero(): ?string
    {
        return $this->superhero;
    }

    public function setSuperhero(string $superhero): self
    {
        $this->superhero = $superhero;

        return $this;
    }

    public function getHackExperience(): ?string
    {
        return $this->hack_experience;
    }

    public function setHackExperience(string $hack_experience): self
    {
        $this->hack_experience = $hack_experience;

        return $this;
    }

    public function getSchoolStoppedYear(): ?string
    {
        return $this->school_stopped_year;
    }

    public function setSchoolStoppedYear(string $school_stopped_year): self
    {
        $this->school_stopped_year = $school_stopped_year;

        return $this;
    }

    public function getResume(): ?string
    {
        return $this->resume;
    }

    public function setResume(string $resume): self
    {
        $this->resume = $resume;

        return $this;
    }

    public function getEnglishLevel(): ?string
    {
        return $this->english_level;
    }

    public function setEnglishLevel(string $english_level): self
    {
        $this->english_level = $english_level;

        return $this;
    }

    public function getMotivation(): ?string
    {
        return $this->motivation;
    }

    public function setMotivation(string $motivation): self
    {
        $this->motivation = $motivation;

        return $this;
    }

    public function getOneYearLater(): ?string
    {
        return $this->one_year_later;
    }

    public function setOneYearLater(string $one_year_later): self
    {
        $this->one_year_later = $one_year_later;

        return $this;
    }

    public function getSololearn(): ?string
    {
        return $this->sololearn;
    }

    public function setSololearn(string $sololearn): self
    {
        $this->sololearn = $sololearn;

        return $this;
    }

    public function getSololearnBonus(): ?array
    {
        return $this->sololearn_bonus;
    }

    public function setSololearnBonus(?array $sololearn_bonus): self
    {
        $this->sololearn_bonus = $sololearn_bonus;

        return $this;
    }

    public function getDisponibility(): ?bool
    {
        return $this->disponibility;
    }

    public function setDisponibility(bool $disponibility): self
    {
        $this->disponibility = $disponibility;

        return $this;
    }

    public function getRemuneration(): ?string
    {
        return $this->remuneration;
    }

    public function setRemuneration(string $remuneration): self
    {
        $this->remuneration = $remuneration;

        return $this;
    }

    public function getGuidanceSource(): ?string
    {
        return $this->guidance_source;
    }

    public function setGuidanceSource(string $guidance_source): self
    {
        $this->guidance_source = $guidance_source;

        return $this;
    }

    public function getStatus(): ?bool
    {
        return $this->status;
    }

    public function setStatus(bool $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getSelection(): ?Selection
    {
        return $this->selection;
    }

    public function setSelection(?Selection $selection): self
    {
        $this->selection = $selection;

        return $this;
    }

    public function __toString()
    {
        return $this->name;
    }

    public function hydrate($datas,$selection){

        $genus = $datas['Numéro de Sécurité Sociale'];
        $genus = $genus[0];
        $this->setGenus($genus == "1" ? 'M': 'F');

        $this->setName($datas['NOM']);
        $this->setSurname($datas['Prénom']);
        $this->setNationality($datas['Nationalité']);
        $this->setBirthCountry($datas['Pays de naissance']);
        $date = new \DateTime($datas['Date de naissance']); //TODO adjust format
        $this->setDateOfBirth($date);

        $this->setAddress($datas['Adresse']);
        $this->setCity($datas['Ville']);
        $this->setPostCode($datas['Code Postal ']);

        $this->setPhoneNumber($datas['Numéro où l\'on peut vous joindre ']);
        $this->setMailAddress($datas['Email']);

        $this->setSituation($datas['Statut au moment de votre candidature (plusieurs réponses possibles)']);
        $this->setPoleEmploiId($datas['Numéro Pôle Emploi']);
        $dateEndPE = new \DateTime($datas['Date de fin d\'indemnisation Pôle Emploi']); //TODO adjust format
        $this->setPoleEmploiCompensationEndDate($dateEndPE);
        $this->setSocialSecurity($datas['Numéro de Sécurité Sociale']);

        $this->setDevSkills($datas['Avez vous déjà eu une expérience avec la programmation et/ou l\'informatique avant de remplir ce formulaire ?']);
        $this->setSuperhero($datas['Si vous étiez un super héros/une super héroïne, qui seriez-vous et pourquoi?']);
        $this->setHackExperience($datas['Racontez-nous un de vos "hacks" (pas forcément technique ou informatique)']);
        $this->setSchoolLevel($datas['Quel est le dernier diplôme que vous ayez obtenu ?']);
        $this->setSchoolStoppedYear($datas['En quelle année avez-vous quitté la formation initiale ?']);

        $this->setResume(implode( $datas['Racontez-nous en quelques phrases votre parcours']) );  //[0]



        $this->setEnglishLevel($datas['Quel est votre niveau d\'anglais (lu/écrit) ?']);
        //$this->setMotivation($datas['Dites nous pourquoi vous voulez intégrer l\'ERN Simplon Carcassonne'] ); //[0]

        $reponse = $datas['Dites nous pourquoi vous voulez intégrer l\'ERN Simplon Carcassonne'];

        var_dump($datas['Dites nous pourquoi vous voulez intégrer l\'ERN Simplon Carcassonne']);//die();

        $reponse = $reponse[' Racontez-nous votre parcours et détaillez-nous votre motivation ci-dessous, en vous exprimant avec votre style à vous, mais ne vous limitez pas à un texte tapé à la va-vite'];
        $reponse = $reponse[' Aussi, n\'hésitez pas à faire une vidéo, un site ou tout autre chose qui démontrera votre envie, votre motivation, et vos compétences !'];
        $this->setMotivation($reponse);  //[0]


        $this->setOneYearLater($datas['Dans un an, avec vos nouveaux superpouvoirs de code informatique, que souhaiterez-vous faire dans votre vie ?']);

        $this->setSololearn($datas['Pré-requis •: SOLOLEARN #Lessons (OBLIGATOIRE) ']);
        $bonus = explode(', ', $datas['Pour aller plus loin : SOLOLEARN #SuperPouvoirs ']);
        $this->setSololearnBonus($bonus); //TODO control Array

        $this->setDisponibility($datas['Êtes-vous disponible pour suivre une formation de 7,5 mois à temps plein (35h/semaine) suivie d\'un stage de 3 mois ?']);
        $this->setRemuneration(implode($datas['Cette formation peut ouvrir droit à une rémunération forfaitaire (ARE Pôle Emploi ou ASP Région, RSA) en fonction de votre situation familiale et de celle en regard de l\'emploi']) );//[0]
        $this->setGuidanceSource($datas['Comment avez-vous entendu parler de la formation ERN Simplon Carcasonne ?']);

        $this->setSelection($selection);

        $this->setStatus('0');
        $this->setSelectionStatus(Candidate::STATE_FORM);
        $this->setSimplonien('0');
    }
}
