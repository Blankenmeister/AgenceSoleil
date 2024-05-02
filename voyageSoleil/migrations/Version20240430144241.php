<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240430144241 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact ADD statut_id INT NOT NULL');
        $this->addSql('ALTER TABLE contact ADD CONSTRAINT FK_4C62E638F6203804 FOREIGN KEY (statut_id) REFERENCES statut (id)');
        $this->addSql('CREATE INDEX IDX_4C62E638F6203804 ON contact (statut_id)');
        $this->addSql('ALTER TABLE reservation ADD statut_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C84955F6203804 FOREIGN KEY (statut_id) REFERENCES statut (id)');
        $this->addSql('CREATE INDEX IDX_42C84955F6203804 ON reservation (statut_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE contact DROP FOREIGN KEY FK_4C62E638F6203804');
        $this->addSql('DROP INDEX IDX_4C62E638F6203804 ON contact');
        $this->addSql('ALTER TABLE contact DROP statut_id');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C84955F6203804');
        $this->addSql('DROP INDEX IDX_42C84955F6203804 ON reservation');
        $this->addSql('ALTER TABLE reservation DROP statut_id');
    }
}
