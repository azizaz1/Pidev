<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220228113450 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hotel ADD promotion INT NOT NULL, CHANGE adresse adresse VARCHAR(255) NOT NULL, CHANGE superficie superficie DOUBLE PRECISION NOT NULL, CHANGE name name VARCHAR(255) NOT NULL, CHANGE etoile etoile INT NOT NULL, CHANGE nombrechambre nombrechambre INT NOT NULL, CHANGE etage etage INT NOT NULL, CHANGE prix prix DOUBLE PRECISION NOT NULL, CHANGE img img VARCHAR(255) NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE hotel DROP promotion, CHANGE adresse adresse VARCHAR(255) DEFAULT NULL, CHANGE superficie superficie DOUBLE PRECISION DEFAULT NULL, CHANGE name name VARCHAR(255) DEFAULT NULL, CHANGE etoile etoile INT DEFAULT NULL, CHANGE nombrechambre nombrechambre INT DEFAULT NULL, CHANGE etage etage INT DEFAULT NULL, CHANGE prix prix DOUBLE PRECISION DEFAULT NULL, CHANGE img img VARCHAR(255) DEFAULT NULL');
    }
}
