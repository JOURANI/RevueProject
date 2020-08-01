<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200725233711 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article_groupe_auteur (article_id INT NOT NULL, groupe_auteur_id INT NOT NULL, INDEX IDX_E9BFA2DF7294869C (article_id), INDEX IDX_E9BFA2DF302FBCD1 (groupe_auteur_id), PRIMARY KEY(article_id, groupe_auteur_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE article_groupe_auteur ADD CONSTRAINT FK_E9BFA2DF7294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE article_groupe_auteur ADD CONSTRAINT FK_E9BFA2DF302FBCD1 FOREIGN KEY (groupe_auteur_id) REFERENCES groupe_auteur (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP TABLE article_groupe_auteur');
    }
}
