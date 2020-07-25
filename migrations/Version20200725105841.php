<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200725105841 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_auteur DROP FOREIGN KEY FK_6E644D7A10405986');
        $this->addSql('DROP INDEX IDX_6E644D7A10405986 ON groupe_auteur');
        $this->addSql('ALTER TABLE groupe_auteur ADD nom_auteur VARCHAR(255) DEFAULT NULL, ADD prenom_auteur VARCHAR(255) DEFAULT NULL, ADD nom_ins VARCHAR(255) DEFAULT NULL, ADD adresse_ins VARCHAR(255) DEFAULT NULL, DROP institution_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_auteur ADD institution_id INT DEFAULT NULL, DROP nom_auteur, DROP prenom_auteur, DROP nom_ins, DROP adresse_ins');
        $this->addSql('ALTER TABLE groupe_auteur ADD CONSTRAINT FK_6E644D7A10405986 FOREIGN KEY (institution_id) REFERENCES institution (id)');
        $this->addSql('CREATE INDEX IDX_6E644D7A10405986 ON groupe_auteur (institution_id)');
    }
}
