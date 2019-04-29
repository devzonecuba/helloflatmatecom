<?php

namespace App\Repository;

use App\Entity\Supermercado;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Supermercado|null find($id, $lockMode = null, $lockVersion = null)
 * @method Supermercado|null findOneBy(array $criteria, array $orderBy = null)
 * @method Supermercado[]    findAll()
 * @method Supermercado[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class SupermercadoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Supermercado::class);
    }

    // /**
    //  * @return Supermercado[] Returns an array of Supermercado objects
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
    public function findOneBySomeField($value): ?Supermercado
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
