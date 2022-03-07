<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220303155624 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationv ADD user_id INT NOT NULL, ADD voiture_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservationv ADD CONSTRAINT FK_702756B6A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE reservationv ADD CONSTRAINT FK_702756B6181A8BA FOREIGN KEY (voiture_id) REFERENCES voiture (id)');
        $this->addSql('CREATE INDEX IDX_702756B6A76ED395 ON reservationv (user_id)');
        $this->addSql('CREATE INDEX IDX_702756B6181A8BA ON reservationv (voiture_id)');
        $this->addSql('ALTER TABLE voiture ADD modele VARCHAR(255) NOT NULL, ADD anciennete INT NOT NULL, ADD killometrage INT NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reservationv DROP FOREIGN KEY FK_702756B6A76ED395');
        $this->addSql('ALTER TABLE reservationv DROP FOREIGN KEY FK_702756B6181A8BA');
        $this->addSql('DROP INDEX IDX_702756B6A76ED395 ON reservationv');
        $this->addSql('DROP INDEX IDX_702756B6181A8BA ON reservationv');
        $this->addSql('ALTER TABLE reservationv DROP user_id, DROP voiture_id');
        $this->addSql('ALTER TABLE voiture DROP modele, DROP anciennete, DROP killometrage');
    }
}
