<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220615133729 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD formation_id_id INT NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6499CF0022 FOREIGN KEY (formation_id_id) REFERENCES formation (id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_8D93D6499CF0022 ON user (formation_id_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6499CF0022');
        $this->addSql('DROP INDEX UNIQ_8D93D6499CF0022 ON user');
        $this->addSql('ALTER TABLE user DROP formation_id_id');
    }
}
