<?php

namespace App\Repository;

use App\Entity\Job;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class JobRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Job::class);
    }

    /**
     * Find active jobs, optionally filtered by category.
     *
     * @param string|null $category The category to filter by, or null for no filtering.
     * @return Job[] Returns an array of active Job objects.
     */
    public function findActiveJobs(string $category = null): array
    {
        $qb = $this->createQueryBuilder('j')
            ->where('j.expireAt > :date')
            ->setParameter('date', new \DateTimeImmutable())
            ->orderBy('j.expireAt', 'DESC');

        if ($category) {
            $qb->andWhere('j.category = :category')
                ->setParameter('category', $category);
        }

        return $qb->getQuery()->getResult();
    }

    /**
     * Find an active job by ID.
     *
     * @param int $id The ID of the job.
     * @return Job|null Returns a Job object or null if not found.
     */
    public function findActiveJob(int $id): ?Job
    {
        return $this->createQueryBuilder('j')
            ->where('j.id = :id')
            ->andWhere('j.expireAt > :date')
            ->setParameter('id', $id)
            ->setParameter('date', new \DateTimeImmutable())
            ->getQuery()
            ->getOneOrNullResult();
    }

    /**
     * Find jobs by category, only active jobs.
     *
     * @param string $category The category to filter by.
     * @return Job[] Returns an array of active Job objects.
     */
    public function findByCategory(string $category): array
    {
        return $this->createQueryBuilder('j')
            ->where('j.category = :category')
            ->andWhere('j.expireAt > :date')
            ->setParameter('category', $category)
            ->setParameter('date', new \DateTimeImmutable())
            ->getQuery()
            ->getResult();
    }
    public function findBySomeCriteria($category) // Ajoutez un paramètre
    {
        return $this->createQueryBuilder('j')
            ->where('j.category = :category') // Changez 'someField' selon votre logique
            ->setParameter('category', $category) // Utilisez le paramètre ici
            ->getQuery()
            ->getResult();
    }

    public function findBySearchCriteria(array $criteria): array
    {
        $qb = $this->createQueryBuilder('j');

        // Ajoute les critères dynamiquement
        if (!empty($criteria['location'])) {
            $qb->andWhere('j.location LIKE :location')
                ->setParameter('location', '%' . $criteria['location'] . '%');
        }

        if (!empty($criteria['category'])) {
            $qb->andWhere('j.category = :category')
                ->setParameter('category', $criteria['category']);
        }

        if (!empty($criteria['type'])) {
            $qb->andWhere('j.type = :type')
                ->setParameter('type', $criteria['type']);
        }

        // Retourne les résultats si des critères ont été ajoutés
        return $qb->getQuery()->getResult();
    }



    public function findUniqueLocations(): array
    {
        $locations = $this->createQueryBuilder('j')
            ->select('DISTINCT j.location')
            ->getQuery()
            ->getResult();

        // Transforme le résultat en un tableau de chaînes de caractères
        return array_map(function ($location) {
            return $location['location']; // suppose que 'location' est un champ dans votre entité Job
        }, $locations);
    }
    public function findUniqueTypes(): array
{
    // Créez la requête
    $query = $this->createQueryBuilder('j')
        ->select('DISTINCT j.type')
        ->getQuery();

    // Exécuter la requête et transformer les résultats
    $types = $query->getResult();
    
    // Si le résultat est un tableau d'associatifs avec un champ 'type'
    return array_map(function($type) {
        return $type['type']; // Retourne uniquement la valeur du type
    }, $types);
}

    




    
}
