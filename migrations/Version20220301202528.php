<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220301202528 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C786A81FB');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C38B217A7');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C38B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id)');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C6779786A81FB');
        $this->addSql('ALTER TABLE publication ADD abn INT DEFAULT NULL');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C6779786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C38B217A7');
        $this->addSql('ALTER TABLE comment DROP FOREIGN KEY FK_9474526C786A81FB');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C38B217A7 FOREIGN KEY (publication_id) REFERENCES publication (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE comment ADD CONSTRAINT FK_9474526C786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
        $this->addSql('ALTER TABLE publication DROP FOREIGN KEY FK_AF3C6779786A81FB');
        $this->addSql('ALTER TABLE publication DROP abn');
        $this->addSql('ALTER TABLE publication ADD CONSTRAINT FK_AF3C6779786A81FB FOREIGN KEY (iduser_id) REFERENCES user (id) ON UPDATE CASCADE ON DELETE CASCADE');
    }
}
