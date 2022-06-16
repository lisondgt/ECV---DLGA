<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220616082550 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE admin (id INT AUTO_INCREMENT NOT NULL, username VARCHAR(180) NOT NULL, roles JSON NOT NULL, password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_880E0D76F85E0677 (username), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE avocats (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, prenom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation (id INT AUTO_INCREMENT NOT NULL, titre VARCHAR(255) NOT NULL, description LONGTEXT NOT NULL, date_debut DATETIME NOT NULL, date_fin DATETIME NOT NULL, presentiel TINYINT(1) DEFAULT NULL, formation_dlga TINYINT(1) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation_thematiques (formation_id INT NOT NULL, thematiques_id INT NOT NULL, INDEX IDX_9CC44ADF5200282E (formation_id), INDEX IDX_9CC44ADFA15F660A (thematiques_id), PRIMARY KEY(formation_id, thematiques_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE formation_avocats (formation_id INT NOT NULL, avocats_id INT NOT NULL, INDEX IDX_D192B69A5200282E (formation_id), INDEX IDX_D192B69AC2F3D0A8 (avocats_id), PRIMARY KEY(formation_id, avocats_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE thematiques (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, formation_id_id INT NOT NULL, firstname VARCHAR(255) NOT NULL, lastname VARCHAR(255) NOT NULL, phone VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, society VARCHAR(255) NOT NULL, office VARCHAR(255) NOT NULL, INDEX IDX_8D93D6499CF0022 (formation_id_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE formation_thematiques ADD CONSTRAINT FK_9CC44ADF5200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_thematiques ADD CONSTRAINT FK_9CC44ADFA15F660A FOREIGN KEY (thematiques_id) REFERENCES thematiques (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_avocats ADD CONSTRAINT FK_D192B69A5200282E FOREIGN KEY (formation_id) REFERENCES formation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE formation_avocats ADD CONSTRAINT FK_D192B69AC2F3D0A8 FOREIGN KEY (avocats_id) REFERENCES avocats (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6499CF0022 FOREIGN KEY (formation_id_id) REFERENCES formation (id)');
        $this->addSql('INSERT INTO admin (username, roles, password)
VALUES ("admin", "[\"ROLE_ADMIN\"]", "\$argon2id\$v=19\$m=65536,t=4,p=1\$BQG+jovPcunctc30xG5PxQ\$TiGbx451NKdo+g9vLtfkMy4KjASKSOcnNxjij4gTX1s")');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE formation_avocats DROP FOREIGN KEY FK_D192B69AC2F3D0A8');
        $this->addSql('ALTER TABLE formation_thematiques DROP FOREIGN KEY FK_9CC44ADF5200282E');
        $this->addSql('ALTER TABLE formation_avocats DROP FOREIGN KEY FK_D192B69A5200282E');
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6499CF0022');
        $this->addSql('ALTER TABLE formation_thematiques DROP FOREIGN KEY FK_9CC44ADFA15F660A');
        $this->addSql('DROP TABLE admin');
        $this->addSql('DROP TABLE avocats');
        $this->addSql('DROP TABLE formation');
        $this->addSql('DROP TABLE formation_thematiques');
        $this->addSql('DROP TABLE formation_avocats');
        $this->addSql('DROP TABLE thematiques');
        $this->addSql('DROP TABLE user');
    }
}
