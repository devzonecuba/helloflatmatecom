<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190424160716 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casavacacional ADD centrosalud_id INT DEFAULT NULL, ADD supermercado_id INT DEFAULT NULL, ADD universidad_id INT DEFAULT NULL, ADD servicios_id INT DEFAULT NULL, ADD reserva_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE casavacacional ADD CONSTRAINT FK_F0AA5401A07B3205 FOREIGN KEY (centrosalud_id) REFERENCES centrosalud (id)');
        $this->addSql('ALTER TABLE casavacacional ADD CONSTRAINT FK_F0AA540131EC9F0F FOREIGN KEY (supermercado_id) REFERENCES supermercado (id)');
        $this->addSql('ALTER TABLE casavacacional ADD CONSTRAINT FK_F0AA5401271768CD FOREIGN KEY (universidad_id) REFERENCES universidad (id)');
        $this->addSql('ALTER TABLE casavacacional ADD CONSTRAINT FK_F0AA5401D96E005D FOREIGN KEY (servicios_id) REFERENCES servicios (id)');
        $this->addSql('ALTER TABLE casavacacional ADD CONSTRAINT FK_F0AA5401D67139E8 FOREIGN KEY (reserva_id) REFERENCES reserva (id)');
        $this->addSql('CREATE INDEX IDX_F0AA5401A07B3205 ON casavacacional (centrosalud_id)');
        $this->addSql('CREATE INDEX IDX_F0AA540131EC9F0F ON casavacacional (supermercado_id)');
        $this->addSql('CREATE INDEX IDX_F0AA5401271768CD ON casavacacional (universidad_id)');
        $this->addSql('CREATE INDEX IDX_F0AA5401D96E005D ON casavacacional (servicios_id)');
        $this->addSql('CREATE INDEX IDX_F0AA5401D67139E8 ON casavacacional (reserva_id)');
        $this->addSql('ALTER TABLE habitaciones ADD servicios_id INT DEFAULT NULL, ADD reserva_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE habitaciones ADD CONSTRAINT FK_E10783BD96E005D FOREIGN KEY (servicios_id) REFERENCES servicios (id)');
        $this->addSql('ALTER TABLE habitaciones ADD CONSTRAINT FK_E10783BD67139E8 FOREIGN KEY (reserva_id) REFERENCES reserva (id)');
        $this->addSql('CREATE INDEX IDX_E10783BD96E005D ON habitaciones (servicios_id)');
        $this->addSql('CREATE INDEX IDX_E10783BD67139E8 ON habitaciones (reserva_id)');
        $this->addSql('ALTER TABLE piso ADD centrosalud_id INT DEFAULT NULL, ADD supermercado_id INT DEFAULT NULL, ADD universidad_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE piso ADD CONSTRAINT FK_D462D9D3A07B3205 FOREIGN KEY (centrosalud_id) REFERENCES centrosalud (id)');
        $this->addSql('ALTER TABLE piso ADD CONSTRAINT FK_D462D9D331EC9F0F FOREIGN KEY (supermercado_id) REFERENCES supermercado (id)');
        $this->addSql('ALTER TABLE piso ADD CONSTRAINT FK_D462D9D3271768CD FOREIGN KEY (universidad_id) REFERENCES universidad (id)');
        $this->addSql('CREATE INDEX IDX_D462D9D3A07B3205 ON piso (centrosalud_id)');
        $this->addSql('CREATE INDEX IDX_D462D9D331EC9F0F ON piso (supermercado_id)');
        $this->addSql('CREATE INDEX IDX_D462D9D3271768CD ON piso (universidad_id)');
        $this->addSql('ALTER TABLE reserva ADD cliente_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE reserva ADD CONSTRAINT FK_188D2E3BDE734E51 FOREIGN KEY (cliente_id) REFERENCES cliente (id)');
        $this->addSql('CREATE INDEX IDX_188D2E3BDE734E51 ON reserva (cliente_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE casavacacional DROP FOREIGN KEY FK_F0AA5401A07B3205');
        $this->addSql('ALTER TABLE casavacacional DROP FOREIGN KEY FK_F0AA540131EC9F0F');
        $this->addSql('ALTER TABLE casavacacional DROP FOREIGN KEY FK_F0AA5401271768CD');
        $this->addSql('ALTER TABLE casavacacional DROP FOREIGN KEY FK_F0AA5401D96E005D');
        $this->addSql('ALTER TABLE casavacacional DROP FOREIGN KEY FK_F0AA5401D67139E8');
        $this->addSql('DROP INDEX IDX_F0AA5401A07B3205 ON casavacacional');
        $this->addSql('DROP INDEX IDX_F0AA540131EC9F0F ON casavacacional');
        $this->addSql('DROP INDEX IDX_F0AA5401271768CD ON casavacacional');
        $this->addSql('DROP INDEX IDX_F0AA5401D96E005D ON casavacacional');
        $this->addSql('DROP INDEX IDX_F0AA5401D67139E8 ON casavacacional');
        $this->addSql('ALTER TABLE casavacacional DROP centrosalud_id, DROP supermercado_id, DROP universidad_id, DROP servicios_id, DROP reserva_id');
        $this->addSql('ALTER TABLE habitaciones DROP FOREIGN KEY FK_E10783BD96E005D');
        $this->addSql('ALTER TABLE habitaciones DROP FOREIGN KEY FK_E10783BD67139E8');
        $this->addSql('DROP INDEX IDX_E10783BD96E005D ON habitaciones');
        $this->addSql('DROP INDEX IDX_E10783BD67139E8 ON habitaciones');
        $this->addSql('ALTER TABLE habitaciones DROP servicios_id, DROP reserva_id');
        $this->addSql('ALTER TABLE piso DROP FOREIGN KEY FK_D462D9D3A07B3205');
        $this->addSql('ALTER TABLE piso DROP FOREIGN KEY FK_D462D9D331EC9F0F');
        $this->addSql('ALTER TABLE piso DROP FOREIGN KEY FK_D462D9D3271768CD');
        $this->addSql('DROP INDEX IDX_D462D9D3A07B3205 ON piso');
        $this->addSql('DROP INDEX IDX_D462D9D331EC9F0F ON piso');
        $this->addSql('DROP INDEX IDX_D462D9D3271768CD ON piso');
        $this->addSql('ALTER TABLE piso DROP centrosalud_id, DROP supermercado_id, DROP universidad_id');
        $this->addSql('ALTER TABLE reserva DROP FOREIGN KEY FK_188D2E3BDE734E51');
        $this->addSql('DROP INDEX IDX_188D2E3BDE734E51 ON reserva');
        $this->addSql('ALTER TABLE reserva DROP cliente_id');
    }
}
