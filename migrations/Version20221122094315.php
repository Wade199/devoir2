<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20221122094315 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bijou ADD idcégorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE bijou ADD CONSTRAINT FK_E4B4D7945F1F8724 FOREIGN KEY (idcégorie_id) REFERENCES catégorie (id)');
        $this->addSql('CREATE INDEX IDX_E4B4D7945F1F8724 ON bijou (idcégorie_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE bijou DROP FOREIGN KEY FK_E4B4D7945F1F8724');
        $this->addSql('DROP INDEX IDX_E4B4D7945F1F8724 ON bijou');
        $this->addSql('ALTER TABLE bijou DROP idcégorie_id');
    }
}
