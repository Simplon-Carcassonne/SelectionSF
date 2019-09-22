<?php

namespace App\Repository;

use App\Entity\Rate;
use App\Entity\Selection;
use App\Entity\User;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\ORM\Query\Expr\Select;
use phpDocumentor\Reflection\Types\Array_;

/**
 * @method Selection|null find($id, $lockMode = null, $lockVersion = null)
 * @method Selection|null findOneBy(array $criteria, array $orderBy = null)
 * @method Selection[]    findAll()
 * @method Selection[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class RateRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Rate::class);

    }

    public function findOneBySelectionUserAndCandidate($selection,$user,$candidate)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.candidate = :candidate')
            ->setParameter('candidate', $candidate)
            ->andWhere('s.selection = :selection')
            ->setParameter('selection', $selection)
            ->andWhere('s.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getOneOrNullResult();
    }

    public function findAllBySelectionAndCandidate($selection,$candidate,$rateType)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.candidate = :candidate')
            ->setParameter('candidate', $candidate)
            ->andWhere('s.selection = :selection')
            ->setParameter('selection', $selection)
            ->andWhere('s.rateType = :rateType')
            ->setParameter('rateType', $rateType)
            ->getQuery()
            ->getResult();
    }

    public function findOneBySelectionCandidateAndUser($selection,$candidate,$user,$rateType)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.candidate = :candidate')
            ->setParameter('candidate', $candidate)
            ->andWhere('s.selection = :selection')
            ->setParameter('selection', $selection)
            ->andWhere('s.rateType = :rateType')
            ->setParameter('rateType', $rateType)
            ->andWhere('s.user = :user')
            ->setParameter('user', $user)
            ->getQuery()
            ->getOneOrNullResult();
    }





    // /**
    //  * @return Selection[] Returns an array of Selection objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Selection
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
