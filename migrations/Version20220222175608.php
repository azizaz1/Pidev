<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220222175608 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE comment (id INT AUTO_INCREMENT NOT NULL, publication_id INT NOT NULL, iduser_id INT DEFAULT NULL, content VARCHAR(255) NOT NULL, author_name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL, INDEX IDX_9474526C38B217A7 (publication_id), INDEX IDX_9474526C786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE evenement (id INT AUTO_INCREMENT NOT NULL, destination VARCHAR(255) NOT NULL, type VARCHAR(255) NOT NULL, prix INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE hotel (id INT AUTO_INCREMENT NOT NULL, classe VARCHAR(255) NOT NULL, lieu VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE produit (id INT AUTO_INCREMENT NOT NULL, type VARCHAR(255) NOT NULL, couleur VARCHAR(255) NOT NULL, prix DOUBLE PRECISION NOT NULL, quantite INT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE publication (id INT AUTO_INCREMENT NOT NULL, iduser_id INT DEFAULT NULL, title VARCHAR(255) NOT NULL, image VARCHAR(255) NOT NULL, content VARCHAR(255) NOT NULL, INDEX IDX_AF3C6779786A81FB (iduser_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reservation (id INT AUTO_INCREMENT NOT NULL, date_debut DATE NOT NULL, date_fin DATE NOT NULL, prix DOUBLE PRECISION NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, mail VARCHAR(255) NOT NULL, telephone INT NOT NULL, cin INT NOT NULL, date_naissance DATE NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE voiture (id INT AUTO_INCREMENT NOT NULL, matricule INT NOT NULL, marque VARCHAR(255) NOT NULL, couleur VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C38B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C6779786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C38B217A7');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C786A81FB');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C6779786A81FB');
        $this->addSql('DROP TABLE comment');
        $this->addSql('DROP TABLE evenement');
        $this->addSql('DROP TABLE hotel');
        $this->addSql('DROP TABLE produit');
        $this->addSql('DROP TABLE publication');
        $this->addSql('DROP TABLE reservation');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE voiture');
    }
}
