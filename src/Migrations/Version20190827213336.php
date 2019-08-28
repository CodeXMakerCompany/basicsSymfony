<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190827213336 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comentarios CHANGE id_producto id_producto INT DEFAULT NULL');
        $this->addSql('ALTER TABLE compras CHANGE id_usuario id_usuario INT DEFAULT NULL, CHANGE id_producto id_producto INT DEFAULT NULL');
        $this->addSql('ALTER TABLE productos CHANGE id_categoria id_categoria INT DEFAULT NULL, CHANGE id_subcategoria id_subcategoria INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE comentarios CHANGE id_producto id_producto INT NOT NULL');
        $this->addSql('ALTER TABLE compras CHANGE id_usuario id_usuario INT NOT NULL, CHANGE id_producto id_producto INT NOT NULL');
        $this->addSql('ALTER TABLE productos CHANGE id_categoria id_categoria INT NOT NULL, CHANGE id_subcategoria id_subcategoria INT NOT NULL');
    }
}
