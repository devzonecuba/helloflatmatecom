<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190425233922 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE casavacacional (id INT AUTO_INCREMENT NOT NULL, zona_id INT DEFAULT NULL, centrosalud_id INT DEFAULT NULL, supermercado_id INT DEFAULT NULL, universidad_id INT DEFAULT NULL, servicios_id INT DEFAULT NULL, casadireccion VARCHAR(255) NOT NULL, nombrepromocion VARCHAR(255) NOT NULL, casaprecio INT NOT NULL, cantbannos INT NOT NULL, canthabitaciones INT NOT NULL, patio TINYINT(1) NOT NULL, balcon TINYINT(1) NOT NULL, canthuesped INT NOT NULL, descripcion VARCHAR(255) NOT NULL, INDEX IDX_F0AA5401104EA8FC (zona_id), INDEX IDX_F0AA5401A07B3205 (centrosalud_id), INDEX IDX_F0AA540131EC9F0F (supermercado_id), INDEX IDX_F0AA5401271768CD (universidad_id), INDEX IDX_F0AA5401D96E005D (servicios_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE blog (id INT AUTO_INCREMENT NOT NULL, nombrecliente VARCHAR(255) NOT NULL, asunto VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cama (id INT AUTO_INCREMENT NOT NULL, tipocama VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE centrosalud (id INT AUTO_INCREMENT NOT NULL, nombrecentro VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE cliente (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, apellidos VARCHAR(255) NOT NULL, correo VARCHAR(255) NOT NULL, contrasena VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE contacto (id INT AUTO_INCREMENT NOT NULL, nombre VARCHAR(255) NOT NULL, correo VARCHAR(255) NOT NULL, asunto TINYINT(1) NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE habitaciones (id INT AUTO_INCREMENT NOT NULL, cama_id INT DEFAULT NULL, servicios_id INT DEFAULT NULL, cantcamas INT NOT NULL, nombrepromocion VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, disponible TINYINT(1) NOT NULL, INDEX IDX_E10783B9FA26A41 (cama_id), INDEX IDX_E10783BD96E005D (servicios_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE piso (id INT AUTO_INCREMENT NOT NULL, zona_id INT DEFAULT NULL, habitaciones_id INT DEFAULT NULL, centrosalud_id INT DEFAULT NULL, supermercado_id INT DEFAULT NULL, universidad_id INT DEFAULT NULL, direccion VARCHAR(255) NOT NULL, precio INT NOT NULL, canthabitaciones INT NOT NULL, cantbannos INT NOT NULL, pisopatio TINYINT(1) NOT NULL, pisobalcon TINYINT(1) NOT NULL, chicas TINYINT(1) NOT NULL, pisocanthuesped INT NOT NULL, INDEX IDX_D462D9D3104EA8FC (zona_id), INDEX IDX_D462D9D3B42E2CD5 (habitaciones_id), INDEX IDX_D462D9D3A07B3205 (centrosalud_id), INDEX IDX_D462D9D331EC9F0F (supermercado_id), INDEX IDX_D462D9D3271768CD (universidad_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reserva (id INT AUTO_INCREMENT NOT NULL, cliente_id INT DEFAULT NULL, fechainicio DATE NOT NULL, fechafin DATE NOT NULL, pasaporte VARCHAR(255) NOT NULL, sexo TINYINT(1) NOT NULL, telefono VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, INDEX IDX_188D2E3BDE734E51 (cliente_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicioadicional (id INT AUTO_INCREMENT NOT NULL, nombreservicio VARCHAR(255) NOT NULL, precio INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE servicios (id INT AUTO_INCREMENT NOT NULL, servicio VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE supermercado (id INT AUTO_INCREMENT NOT NULL, nombresuper VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE universidad (id INT AUTO_INCREMENT NOT NULL, nombreuniversidad VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE zona (id INT AUTO_INCREMENT NOT NULL, nombrezona VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE casavacacional ADD CONSTRAINT FK_F0AA5401104EA8FC FOREIGN KEY (zona_id) REFERENCES zona (id)');
        $this->addSql('ALTER TABLE casavacacional ADD CONSTRAINT FK_F0AA5401A07B3205 FOREIGN KEY (centrosalud_id) REFERENCES centrosalud (id)');
        $this->addSql('ALTER TABLE casavacacional ADD CONSTRAINT FK_F0AA540131EC9F0F FOREIGN KEY (supermercado_id) REFERENCES supermercado (id)');
        $this->addSql('ALTER TABLE casavacacional ADD CONSTRAINT FK_F0AA5401271768CD FOREIGN KEY (universidad_id) REFERENCES universidad (id)');
        $this->addSql('ALTER TABLE casavacacional ADD CONSTRAINT FK_F0AA5401D96E005D FOREIGN KEY (servicios_id) REFERENCES servicios (id)');
        $this->addSql('ALTER TABLE habitaciones ADD CONSTRAINT FK_E10783B9FA26A41 FOREIGN KEY (cama_id) REFERENCES cama (id)');
        $this->addSql('ALTER TABLE habitaciones ADD CONSTRAINT FK_E10783BD96E005D FOREIGN KEY (servicios_id) REFERENCES servicios (id)');
        $this->addSql('ALTER TABLE piso ADD CONSTRAINT FK_D462D9D3104EA8FC FOREIGN KEY (zona_id) REFERENCES zona (id)');
        $this->addSql('ALTER TABLE piso ADD CONSTRAINT FK_D462D9D3B42E2CD5 FOREIGN KEY (habitaciones_id) REFERENCES habitaciones (id)');
        $this->addSql('ALTER TABLE piso ADD CONSTRAINT FK_D462D9D3A07B3205 FOREIGN KEY (centrosalud_id) REFERENCES centrosalud (id)');
        $this->addSql('ALTER TABLE piso ADD CONSTRAINT FK_D462D9D331EC9F0F FOREIGN KEY (supermercado_id) REFERENCES supermercado (id)');
        $this->addSql('ALTER TABLE piso ADD CONSTRAINT FK_D462D9D3271768CD FOREIGN KEY (universidad_id) REFERENCES universidad (id)');
        $this->addSql('ALTER TABLE reserva ADD CONSTRAINT FK_188D2E3BDE734E51 FOREIGN KEY (cliente_id) REFERENCES cliente (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE habitaciones DROP FOREIGN KEY FK_E10783B9FA26A41');
        $this->addSql('ALTER TABLE casavacacional DROP FOREIGN KEY FK_F0AA5401A07B3205');
        $this->addSql('ALTER TABLE piso DROP FOREIGN KEY FK_D462D9D3A07B3205');
        $this->addSql('ALTER TABLE reserva DROP FOREIGN KEY FK_188D2E3BDE734E51');
        $this->addSql('ALTER TABLE piso DROP FOREIGN KEY FK_D462D9D3B42E2CD5');
        $this->addSql('ALTER TABLE casavacacional DROP FOREIGN KEY FK_F0AA5401D96E005D');
        $this->addSql('ALTER TABLE habitaciones DROP FOREIGN KEY FK_E10783BD96E005D');
        $this->addSql('ALTER TABLE casavacacional DROP FOREIGN KEY FK_F0AA540131EC9F0F');
        $this->addSql('ALTER TABLE piso DROP FOREIGN KEY FK_D462D9D331EC9F0F');
        $this->addSql('ALTER TABLE casavacacional DROP FOREIGN KEY FK_F0AA5401271768CD');
        $this->addSql('ALTER TABLE piso DROP FOREIGN KEY FK_D462D9D3271768CD');
        $this->addSql('ALTER TABLE casavacacional DROP FOREIGN KEY FK_F0AA5401104EA8FC');
        $this->addSql('ALTER TABLE piso DROP FOREIGN KEY FK_D462D9D3104EA8FC');
        $this->addSql('DROP TABLE casavacacional');
        $this->addSql('DROP TABLE blog');
        $this->addSql('DROP TABLE cama');
        $this->addSql('DROP TABLE centrosalud');
        $this->addSql('DROP TABLE cliente');
        $this->addSql('DROP TABLE contacto');
        $this->addSql('DROP TABLE habitaciones');
        $this->addSql('DROP TABLE piso');
        $this->addSql('DROP TABLE reserva');
        $this->addSql('DROP TABLE servicioadicional');
        $this->addSql('DROP TABLE servicios');
        $this->addSql('DROP TABLE supermercado');
        $this->addSql('DROP TABLE universidad');
        $this->addSql('DROP TABLE zona');
    }
}
