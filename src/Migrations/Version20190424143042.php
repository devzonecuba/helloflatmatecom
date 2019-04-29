<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190424143042 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casavacacional ADD zona_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casavacacional ADD CONSTRAINT FK_F0AA5401104EA8FC FOREIGN KEY (zona_id) REFERENCES zona (id)');
        $this->addSql('CREATE INDEX IDX_F0AA5401104EA8FC ON casavacacional (zona_id)');
        $this->addSql('ALTER TABLE habitaciones ADD cama_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE habitaciones ADD CONSTRAINT FK_E10783B9FA26A41 FOREIGN KEY (cama_id) REFERENCES cama (id)');
        $this->addSql('CREATE INDEX IDX_E10783B9FA26A41 ON habitaciones (cama_id)');
        $this->addSql('ALTER TABLE piso ADD zona_id INT DEFAULT NULL, ADD habitaciones_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE piso ADD CONSTRAINT FK_D462D9D3104EA8FC FOREIGN KEY (zona_id) REFERENCES zona (id)');
        $this->addSql('ALTER TABLE piso ADD CONSTRAINT FK_D462D9D3B42E2CD5 FOREIGN KEY (habitaciones_id) REFERENCES habitaciones (id)');
        $this->addSql('CREATE INDEX IDX_D462D9D3104EA8FC ON piso (zona_id)');
        $this->addSql('CREATE INDEX IDX_D462D9D3B42E2CD5 ON piso (habitaciones_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casavacacional DROP FOREIGN KEY FK_F0AA5401104EA8FC');
        $this->addSql('DROP INDEX IDX_F0AA5401104EA8FC ON casavacacional');
        $this->addSql('ALTER TABLE casavacacional DROP zona_id');
        $this->addSql('ALTER TABLE habitaciones DROP FOREIGN KEY FK_E10783B9FA26A41');
        $this->addSql('DROP INDEX IDX_E10783B9FA26A41 ON habitaciones');
        $this->addSql('ALTER TABLE habitaciones DROP cama_id');
        $this->addSql('ALTER TABLE piso DROP FOREIGN KEY FK_D462D9D3104EA8FC');
        $this->addSql('ALTER TABLE piso DROP FOREIGN KEY FK_D462D9D3B42E2CD5');
        $this->addSql('DROP INDEX IDX_D462D9D3104EA8FC ON piso');
        $this->addSql('DROP INDEX IDX_D462D9D3B42E2CD5 ON piso');
        $this->addSql('ALTER TABLE piso DROP zona_id, DROP habitaciones_id');
    }
}
