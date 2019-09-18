<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass="App\Repository\CandidateRepository")
 */
class Candidate
{
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
     * @ORM\ManyToOne(targetEntity="App\Entity\Selection", inversedBy="candidates")
     * @ORM\JoinColumn(nullable=false)
     */
    private $selection;

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
}
