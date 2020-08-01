<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200722105640 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE institution DROP FOREIGN KEY FK_3A9F98E5A76ED395');
        $this->addSql('DROP INDEX IDX_3A9F98E5A76ED395 ON institution');
        $this->addSql('ALTER TABLE institution DROP user_id');
        $this->addSql('ALTER TABLE users ADD institution_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE users ADD CONSTRAINT FK_1483A5E910405986 FOREIGN KEY (institution_id) REFERENCES institution (id)');
        $this->addSql('CREATE INDEX IDX_1483A5E910405986 ON users (institution_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE institution ADD user_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE institution ADD CONSTRAINT FK_3A9F98E5A76ED395 FOREIGN KEY (user_id) REFERENCES users (id)');
        $this->addSql('CREATE INDEX IDX_3A9F98E5A76ED395 ON institution (user_id)');
        $this->addSql('ALTER TABLE users DROP FOREIGN KEY FK_1483A5E910405986');
        $this->addSql('DROP INDEX IDX_1483A5E910405986 ON users');
        $this->addSql('ALTER TABLE users DROP institution_id');
    }
}
