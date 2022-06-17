<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220617091550 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE formation_secteur_activite (formation_id INT NOT NULL, secteur_activite_id INT NOT NULL, INDEX IDX_82F1FF8F5200282E (formation_id), INDEX IDX_82F1FF8F5233A7FC (secteur_activite_id), PRIMARY KEY(formation_id, secteur_activite_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE secteur_activite (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE formation_secteur_activite ADD CONSTRAINT FK_82F1FF8F5200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_secteur_activite ADD CONSTRAINT FK_82F1FF8F5233A7FC FOREIGN KEY (secteur_activite_id) REFERENCES secteur_activite (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation ADD ville VARCHAR(255) DEFAULT NULL, ADD programme LONGTEXT NOT NULL, ADD objectifs LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\', ADD modalites LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation_secteur_activite DROP FOREIGN KEY FK_82F1FF8F5233A7FC');
        $this->addSql('DROP TABLE formation_secteur_activite');
        $this->addSql('DROP TABLE secteur_activite');
        $this->addSql('ALTER TABLE formation DROP ville, DROP programme, DROP objectifs, DROP modalites');
    }
}
