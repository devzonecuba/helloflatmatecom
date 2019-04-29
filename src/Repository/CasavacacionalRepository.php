<?php

namespace App\Repository;

use App\Entity\Casavacacional;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Casavacacional|null find($id, $lockMode = null, $lockVersion = null)
 * @method Casavacacional|null findOneBy(array $criteria, array $orderBy = null)
 * @method Casavacacional[]    findAll()
 * @method Casavacacional[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CasavacacionalRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Casavacacional::class);
    }

    // /**
    //  * @return Casavacacional[] Returns an array of Casavacacional objects
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
    public function findOneBySomeField($value): ?Casavacacional
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
