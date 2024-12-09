<?php

namespace App\Repository;

use App\Entity\Candidat;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<Candidat>
 */
class CandidatRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Candidat::class);
    }


    public function findCandidaturesWithDetails(): array
    {
        return $this->createQueryBuilder('c')
            ->select('c, u, q, r')
            ->join('c.user', 'u') 
            ->join('c.responses', 'r') 
            ->join('r.question', 'q') 
            ->where('c.isRead = :isRead') 
            ->setParameter('isRead', false)
            ->getQuery()
            ->getResult();
    }
    public function findCandidatureByUserAndJob($user, $job): ?Candidat
    {

        return $this->createQueryBuilder('c')
            ->where('c.user = :user')
            ->andWhere('c.job = :job')
            ->setParameter('user', $user)
            ->setParameter('job', $job)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }

public function countNewCandidatures(): int
{
    return $this->createQueryBuilder('c')
        //->andWhere('c.createdAt >= :today')
        //->setParameter('today', new \DateTime('-1 day'))
        ->select('count(c.id)')
        ->getQuery()
        ->getSingleScalarResult()
    ;
}

public function findUnreadCandidatures(): array
{
    return $this->createQueryBuilder('c')
        ->andWhere('c.isRead = :isRead')
        ->setParameter('isRead', false)
        ->orderBy('c.createdAt', 'DESC')  // Optionnel : trier par date
        ->getQuery()
        ->getResult();
}

//    /**
//     * @return Candidat[] Returns an array of Candidat objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('c.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Candidat
//    {
//        return $this->createQueryBuilder('c')
//            ->andWhere('c.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
