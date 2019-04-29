<?php

namespace App\Repository;

use App\Entity\Centrosalud;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Centrosalud|null find($id, $lockMode = null, $lockVersion = null)
 * @method Centrosalud|null findOneBy(array $criteria, array $orderBy = null)
 * @method Centrosalud[]    findAll()
 * @method Centrosalud[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class CentrosaludRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Centrosalud::class);
    }

    // /**
    //  * @return Centrosalud[] Returns an array of Centrosalud objects
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
    public function findOneBySomeField($value): ?Centrosalud
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
