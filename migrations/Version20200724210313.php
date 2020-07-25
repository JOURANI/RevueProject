<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200724210313 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_auteur ADD user_id INT DEFAULT NULL, ADD institution_id INT DEFAULT NULL, DROP liste_auteur');
        $this->addSql('ALTER TABLE groupe_auteur ADD CONSTRAINT FK_6E644D7AA76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('ALTER TABLE groupe_auteur ADD CONSTRAINT FK_6E644D7A10405986 FOREIGN KEY (institution_id) REFERENCES institution (id)');
        $this->addSql('CREATE INDEX IDX_6E644D7AA76ED395 ON groupe_auteur (user_id)');
        $this->addSql('CREATE INDEX IDX_6E644D7A10405986 ON groupe_auteur (institution_id)');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9302FBCD1');
        $this->addSql('DROP INDEX UNIQ_1483A5E9302FBCD1 ON users');
        $this->addSql('ALTER TABLE users DROP groupe_auteur_id');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE groupe_auteur DROP FOREIGN KEY FK_6E644D7AA76ED395');
        $this->addSql('ALTER TABLE groupe_auteur DROP FOREIGN KEY FK_6E644D7A10405986');
        $this->addSql('DROP INDEX IDX_6E644D7AA76ED395 ON groupe_auteur');
        $this->addSql('DROP INDEX IDX_6E644D7A10405986 ON groupe_auteur');
        $this->addSql('ALTER TABLE groupe_auteur ADD liste_auteur LONGTEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci` COMMENT \'(DC2Type:array)\', DROP user_id, DROP institution_id');
        $this->addSql('ALTER TABLE users ADD groupe_auteur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9302FBCD1 FOREIGN KEY (groupe_auteur_id) REFERENCES groupe_auteur (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9302FBCD1 ON users (groupe_auteur_id)');
    }
}
