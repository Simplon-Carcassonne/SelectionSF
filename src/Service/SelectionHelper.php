<?php

// src/Service/SelectionHelper.php

namespace App\Service;

use App\Repository\RateRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class SelectionHelper
{


    public function __construct(
        EntityManagerInterface $entityManager,
        TokenStorageInterface $tokenStorage,
        SessionInterface $session,
        UserRepository $userRepo,
        RateRepository $rateRepo
    )
    {
        $this->entityManager = $entityManager;
        $this->tokenStorage = $tokenStorage;
        $this->session = $session;

        $this->userRepo = $userRepo;
        $this->rateRepo = $rateRepo;

    }

    //https://thisinterestsme.com/php-calculate-age-date-of-birth/
    public function calculateOld($candidateBirthDate){
        $now = time();//$now = new \DateTime('Y-m-d H:i:s');
        $dob = strtotime($candidateBirthDate->format('Y-m-d H:i:s'));
        $difference = $now - $dob;

        //There are 31556926 seconds in a year.
        $age = floor($difference / 31556926);

       return $age;
    }

    public function determineAvatar($sololeranLink){
        $word = "https://api.sololearn.com/Uploads/Avatars/";
        if(strpos($sololeranLink, $word) !== false){
            //var_dump($sololeranLink);
            return $sololeranLink;
        } else{
            //var_dump($sololeranLink);
            return 'https://www.sololearn.com/Images/NoAvatar.jpg';
        }
    }

    //TODO method for get total rate for one candidate from ALL Jury  (for selection or preselection)
    public function getCandidateTotalRates($selection, $candidate,$rateType){
        $rates = $this->rateRepo->findAllBySelectionAndCandidate($selection,$candidate,$rateType);
        $totalRate = 0;
        foreach($rates as $rate) {
            $totalRate += $rate->getValue();
        }
        return $totalRate;
    }

    //TODO method for get moy rate for one candidate from ALL Jury (for selection or preselection)
    public function getCandidateMoyRates($selection, $candidate,$rateType){
        $totalRate = $this->getCandidateTotalRates($selection, $candidate,$rateType);
        $users = $this->userRepo->findAll();
        $moy = $totalRate / (count($users)-1); // -1 admin
        return $moy;
    }

    public function getTotalMaxPoints($selection){
        $users = $this->userRepo->findAll();
        return (count($users)-1) * 2 ; //Max 2 points per Jury Member !!
    }

    public function hasUserRatedCandidate($selection, $candidate,$user,$rateType){
        $userRate = $this->rateRepo->findOneBySelectionCandidateAndUser($selection, $candidate,$user,$rateType);
        if($userRate)
            return true;
        else
            return false;
    }

}