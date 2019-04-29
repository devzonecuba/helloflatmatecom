<?php

namespace App\Repository;

use App\Entity\Servicioadicional;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Servicioadicional|null find($id, $lockMode = null, $lockVersion = null)
 * @method Servicioadicional|null findOneBy(array $criteria, array $orderBy = null)
 * @method Servicioadicional[]    findAll()
 * @method Servicioadicional[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ServicioadicionalRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Servicioadicional::class);
    }

    // /**
    //  * @return Servicioadicional[] Returns an array of Servicioadicional objects
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
    public function findOneBySomeField($value): ?Servicioadicional
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
