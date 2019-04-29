<?php

namespace App\Repository;

use App\Entity\Universidad;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Universidad|null find($id, $lockMode = null, $lockVersion = null)
 * @method Universidad|null findOneBy(array $criteria, array $orderBy = null)
 * @method Universidad[]    findAll()
 * @method Universidad[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class UniversidadRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Universidad::class);
    }

    // /**
    //  * @return Universidad[] Returns an array of Universidad objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('u.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Universidad
    {
        return $this->createQueryBuilder('u')
            ->andWhere('u.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
