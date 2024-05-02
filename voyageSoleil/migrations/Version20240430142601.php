<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20240430142601 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE voyage_categorie (voyage_id INT NOT NULL, categorie_id INT NOT NULL, INDEX IDX_7B84F8AA68C9E5AF (voyage_id), INDEX IDX_7B84F8AABCF5E72D (categorie_id), PRIMARY KEY(voyage_id, categorie_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE voyage_categorie ADD CONSTRAINT FK_7B84F8AA68C9E5AF FOREIGN KEY (voyage_id) REFERENCES voyage (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE voyage_categorie ADD CONSTRAINT FK_7B84F8AABCF5E72D FOREIGN KEY (categorie_id) REFERENCES categorie (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE reservation ADD voyage_id INT NOT NULL');
        $this->addSql('ALTER TABLE reservation ADD CONSTRAINT FK_42C8495568C9E5AF FOREIGN KEY (voyage_id) REFERENCES voyage (id)');
        $this->addSql('CREATE INDEX IDX_42C8495568C9E5AF ON reservation (voyage_id)');
        $this->addSql('ALTER TABLE voyage ADD user_id INT NOT NULL, ADD logement_id INT NOT NULL, ADD destination_id INT NOT NULL');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D8955A76ED395 FOREIGN KEY (user_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D895558ABF955 FOREIGN KEY (logement_id) REFERENCES logement (id)');
        $this->addSql('ALTER TABLE voyage ADD CONSTRAINT FK_3F9D8955816C6140 FOREIGN KEY (destination_id) REFERENCES destination (id)');
        $this->addSql('CREATE INDEX IDX_3F9D8955A76ED395 ON voyage (user_id)');
        $this->addSql('CREATE INDEX IDX_3F9D895558ABF955 ON voyage (logement_id)');
        $this->addSql('CREATE INDEX IDX_3F9D8955816C6140 ON voyage (destination_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE voyage_categorie DROP FOREIGN KEY FK_7B84F8AA68C9E5AF');
        $this->addSql('ALTER TABLE voyage_categorie DROP FOREIGN KEY FK_7B84F8AABCF5E72D');
        $this->addSql('DROP TABLE voyage_categorie');
        $this->addSql('ALTER TABLE reservation DROP FOREIGN KEY FK_42C8495568C9E5AF');
        $this->addSql('DROP INDEX IDX_42C8495568C9E5AF ON reservation');
        $this->addSql('ALTER TABLE reservation DROP voyage_id');
        $this->addSql('ALTER TABLE voyage DROP FOREIGN KEY FK_3F9D8955A76ED395');
        $this->addSql('ALTER TABLE voyage DROP FOREIGN KEY FK_3F9D895558ABF955');
        $this->addSql('ALTER TABLE voyage DROP FOREIGN KEY FK_3F9D8955816C6140');
        $this->addSql('DROP INDEX IDX_3F9D8955A76ED395 ON voyage');
        $this->addSql('DROP INDEX IDX_3F9D895558ABF955 ON voyage');
        $this->addSql('DROP INDEX IDX_3F9D8955816C6140 ON voyage');
        $this->addSql('ALTER TABLE voyage DROP user_id, DROP logement_id, DROP destination_id');
    }
}
