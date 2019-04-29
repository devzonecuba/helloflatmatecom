<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190422181601 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE blog (id INT AUTO_INCREMENT NOT NULL, nombrecliente VARCHAR(255) NOT NULL, asunto VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cama (id INT AUTO_INCREMENT NOT NULL, tipocama VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE casavacacional (id INT AUTO_INCREMENT NOT NULL, casadireccion VARCHAR(255) NOT NULL, casaprecio INT NOT NULL, cantbannos INT NOT NULL, canthabitaciones INT NOT NULL, patio TINYINT(1) NOT NULL, balcon TINYINT(1) NOT NULL, canthuesped INT NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE centrosalud (id INT AUTO_INCREMENT NOT NULL, nombrecentro VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contacto (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, correo VARCHAR(255) NOT NULL, asunto TINYINT(1) NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE habitaciones (id INT AUTO_INCREMENT NOT NULL, fechainicio DATE NOT NULL, fechafinal DATE NOT NULL, cantcamas INT NOT NULL, descripcion VARCHAR(255) NOT NULL, disponible TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE piso (id INT AUTO_INCREMENT NOT NULL, direccion VARCHAR(255) NOT NULL, precio INT NOT NULL, canthabitaciones INT NOT NULL, cantbannos INT NOT NULL, pisopatio TINYINT(1) NOT NULL, pisobalcon TINYINT(1) NOT NULL, chicas TINYINT(1) NOT NULL, pisocanthuesped INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reserva (id INT AUTO_INCREMENT NOT NULL, fechainicio DATE NOT NULL, fechafin DATE NOT NULL, pasaporte VARCHAR(255) NOT NULL, sexo TINYINT(1) NOT NULL, telefono VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicioadicional (id INT AUTO_INCREMENT NOT NULL, nombreservicio VARCHAR(255) NOT NULL, precio INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE supermercado (id INT AUTO_INCREMENT NOT NULL, nombresuper VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE universidad (id INT AUTO_INCREMENT NOT NULL, nombreuniversidad VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zona (id INT AUTO_INCREMENT NOT NULL, nombrezona VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE cama');
        $this->addSql('DROP TABLE casavacacional');
        $this->addSql('DROP TABLE centrosalud');
        $this->addSql('DROP TABLE contacto');
        $this->addSql('DROP TABLE habitaciones');
        $this->addSql('DROP TABLE piso');
        $this->addSql('DROP TABLE reserva');
        $this->addSql('DROP TABLE servicioadicional');
        $this->addSql('DROP TABLE supermercado');
        $this->addSql('DROP TABLE universidad');
        $this->addSql('DROP TABLE zona');
    }
}
