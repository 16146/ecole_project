<?php

namespace App\Repository;

use App\Entity\InfoStudents;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Common\Persistence\ManagerRegistry;

/**
 * @method InfoStudents|null find($id, $lockMode = null, $lockVersion = null)
 * @method InfoStudents|null findOneBy(array $criteria, array $orderBy = null)
 * @method InfoStudents[]    findAll()
 * @method InfoStudents[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class InfoStudentsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, InfoStudents::class);
    }

    // /**
    //  * @return InfoStudents[] Returns an array of InfoStudents objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('i.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?InfoStudents
    {
        return $this->createQueryBuilder('i')
            ->andWhere('i.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
