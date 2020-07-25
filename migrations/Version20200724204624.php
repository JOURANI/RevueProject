<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200724204624 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE groupe_auteur (id INT AUTO_INCREMENT NOT NULL, liste_auteur LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE users ADD groupe_auteur_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E9302FBCD1 FOREIGN KEY (groupe_auteur_id) REFERENCES groupe_auteur (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_1483A5E9302FBCD1 ON users (groupe_auteur_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E9302FBCD1');
        $this->addSql('DROP TABLE groupe_auteur');
        $this->addSql('DROP INDEX UNIQ_1483A5E9302FBCD1 ON users');
        $this->addSql('ALTER TABLE users DROP groupe_auteur_id');
    }
}
