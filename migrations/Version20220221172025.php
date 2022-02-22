<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220221172025 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE participation ADD eventid_id INT NOT NULL');
        $this->addSql('ALTER TABLE participation ADD CONSTRAINT FK_AB55E24F3DAAA2E7 FOREIGN KEY (eventid_id) REFERENCES events (id)');
        $this->addSql('CREATE INDEX IDX_AB55E24F3DAAA2E7 ON participation (eventid_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE events CHANGE nom nom VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE place place VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('ALTER TABLE participation DROP FOREIGN KEY FK_AB55E24F3DAAA2E7');
        $this->addSql('DROP INDEX IDX_AB55E24F3DAAA2E7 ON participation');
        $this->addSql('ALTER TABLE participation DROP eventid_id, CHANGE nom nom VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE prenom prenom VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`, CHANGE adresse adresse VARCHAR(100) NOT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
