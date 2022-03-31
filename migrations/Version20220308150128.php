<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220308150128 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit ADD category_id INT DEFAULT NULL, ADD image_id INT DEFAULT NULL, ADD nom VARCHAR(50) NOT NULL, DROP type, CHANGE couleur couleur VARCHAR(50) NOT NULL');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC2712469DE2 FOREIGN KEY (category_id) REFERENCES category (id)');
        $this->addSql('ALTER TABLE produit ADD CONSTRAINT FK_29A5EC273DA5256D FOREIGN KEY (image_id) REFERENCES image (id)');
        $this->addSql('CREATE INDEX IDX_29A5EC2712469DE2 ON produit (category_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_29A5EC273DA5256D ON produit (image_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC2712469DE2');
        $this->addSql('ALTER TABLE produit DROP FOREIGN KEY FK_29A5EC273DA5256D');
        $this->addSql('DROP INDEX IDX_29A5EC2712469DE2 ON produit');
        $this->addSql('DROP INDEX UNIQ_29A5EC273DA5256D ON produit');
        $this->addSql('ALTER TABLE produit ADD type VARCHAR(255) NOT NULL, DROP category_id, DROP image_id, DROP nom, CHANGE couleur couleur VARCHAR(255) NOT NULL');
    }
}
