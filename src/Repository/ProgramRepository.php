<?php

namespace App\Repository;

use App\Entity\Program;
use App\Entity\Actor;
use App\Entity\Category;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use Doctrine\ORM\QueryBuilder;
/**
 * @extends ServiceEntityRepository<Program>
 *
 * @method Program|null find($id, $lockMode = null, $lockVersion = null)
 * @method Program|null findOneBy(array $criteria, array $orderBy = null)
 * @method Program[]    findAll()
 * @method Program[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 * @method Program[]    findByAllAndReturnNews()
 */
class ProgramRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Program::class);
    }

    public function findByAllAndReturnNews(): array
    {
        
        return $this->createQueryBuilder('p')
            ->andWhere('p.id > :val')
            ->setParameter('val', 0)
            ->orderBy('p.id', 'DESC')
            ->setMaxResults(3)
            ->getQuery()
            ->getResult()
        ;
    }

    public function findByQuery($searchTerm): array
    {
        if (empty($searchTerm)) {
            return $this->findAll();
        }

        $queryBuilder = $this->createQueryBuilder('p');

        $query = $queryBuilder
            ->select('p')
            ->leftJoin('p.actors', 'a')
            ->leftJoin('p.category', 'c')
            ->orWhere('p.title LIKE :query Or a.name LIKE :query Or c.name LIKE :query' )
            ->setParameter('query', '%' . $searchTerm . '%')
            ->orderBy('p.id', 'DESC')
            ->getQuery();

        $response = $query->getResult();
        return $response;
    }


     

    

//    /**
//     * @return Program[] Returns an array of Program objects
//     */
//    public function findByExampleField($value): array
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->orderBy('p.id', 'ASC')
//            ->setMaxResults(10)
//            ->getQuery()
//            ->getResult()
//        ;
//    }

//    public function findOneBySomeField($value): ?Program
//    {
//        return $this->createQueryBuilder('p')
//            ->andWhere('p.exampleField = :val')
//            ->setParameter('val', $value)
//            ->getQuery()
//            ->getOneOrNullResult()
//        ;
//    }
}
