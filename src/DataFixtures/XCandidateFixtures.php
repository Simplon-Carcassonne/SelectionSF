<?php

namespace App\DataFixtures;

use App\Entity\Candidate;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class XCandidateFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        for ($i = 1; $i < 6; $i++) {
            $candidate = new Candidate();
            $candidate->setGenus('female');
            $candidate->setName('Prénom'.$i.'');
            $candidate->setSurname('Nom'.$i.'');
            $candidate->setDateOfBirth(new \DateTime('1988-05-05 00:00:00'));
            $candidate->setAddress(''.$i.', avenue du code');
            $candidate->setPostCode(11000+$i);
            $candidate->setCity('Carcassonne');
            $candidate->setPhoneNumber(123456789);
            $candidate->setMailAddress('candidat'.$i.'@mail.fr');
            $candidate->setDevSkills('average');
            $candidate->setSchoolLevel('3');
            $candidate->setSituation('employé');
            $candidate->setBirthCountry('France');
            $candidate->setNationality('France');
            $candidate->setPoleEmploiId('8815962'.$i.'');
            $candidate->setPoleEmploiCompensationEndDate(new \DateTime('2020-12-12 00:00:00'));
            $candidate->setSocialSecurity(5596+$i);
            $candidate->setSuperhero('lorem ipsum');
            $candidate->setHackExperience('lorem ipsum');
            $candidate->setSchoolStoppedYear('1995');
            $candidate->setResume('lorem ipsum');
            $candidate->setEnglishLevel('average');
            $candidate->setMotivation('lorem ipsum');
            $candidate->setOneYearLater('lorem ipsum');
            $candidate->setSololearn('http://sololearn/profile/'.$i.'/data.com');
            $candidate->setSololearnBonus(['certificate']);
            $candidate->setDisponibility(rand(0,1) == 1);
            $candidate->setRemuneration('lorem ipsum');
            $candidate->setGuidanceSource('web');
            $candidate->setStatus(rand(0,1) == 1);
            $candidate->setSelection($this->getReference('Selection_'.$i));
            $candidate->setSelectionStatus(Candidate::STATE_FORM);
            $manager->persist($candidate);
        }
        $manager->flush();

    }
}
