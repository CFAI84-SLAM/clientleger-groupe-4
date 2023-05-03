<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230503140335 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Utilisateur CHANGE nom nom VARCHAR(50) DEFAULT \'NULL\', CHANGE prenom prenom VARCHAR(50) DEFAULT \'NULL\', CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', CHANGE adresse adresse VARCHAR(50) DEFAULT \'NULL\', CHANGE dateNaissance dateNaissance DATE DEFAULT \'NULL\'');
        $this->addSql('CREATE UNIQUE INDEX email ON Utilisateur (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP INDEX email ON Utilisateur');
        $this->addSql('ALTER TABLE Utilisateur CHANGE nom nom VARCHAR(50) DEFAULT NULL, CHANGE prenom prenom VARCHAR(50) DEFAULT NULL, CHANGE roles roles VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(50) DEFAULT NULL, CHANGE dateNaissance dateNaissance DATE DEFAULT NULL');
    }
}
