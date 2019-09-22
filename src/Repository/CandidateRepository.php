<?php

namespace App\Repository;

use App\Entity\Candidate;
use App\Entity\Selection;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method Candidate|null find($id, $lockMode = null, $lockVersion = null)
 * @method Candidate|null findOneBy(array $criteria, array $orderBy = null)
 * @method Candidate[]    findAll()
 * @method Candidate[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CandidateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candidate::class);
    }

   /* public function findAll(){
        return $this->findBy(array('selection' => $selection), array('name' => 'ASC'));
    }*/

    public function getCandidatesBySelectionAlphabetical($selection){
        return $this->createQueryBuilder('s')
            ->andWhere('s.selection = :selection')
            ->setParameter('selection', $selection)
            ->orderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();
    }
    public function getPreselectedCandidatesBySelectionAlphabetical($selection){
        return $this->createQueryBuilder('s')
            ->andWhere('s.selection = :selection')
            ->andWhere('s.status = 1')
            ->setParameter('selection', $selection)
            ->orderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();
    }

    public function getSelectedCandidatesBySelectionAlphabetical($selection){
        return $this->createQueryBuilder('s')
            ->andWhere('s.selection = :selection')
            ->andWhere('s.status = 1')
            ->andWhere('s.simplonien = 1')
            ->setParameter('selection', $selection)
            ->orderBy('s.name', 'ASC')
            ->getQuery()
            ->getResult();
    }



    // /**
    //  * @return Candidate[] Returns an array of Candidate objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('c.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Candidate
    {
        return $this->createQueryBuilder('c')
            ->andWhere('c.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
