<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230526181442 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', idUtilisateur INT DEFAULT NULL, INDEX IDX_7CE748A5D419CCB (idUtilisateur), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748A5D419CCB FOREIGN KEY (idUtilisateur) REFERENCES Utilisateur (Id_Utilisateur)');
        $this->addSql('ALTER TABLE Utilisateur CHANGE dateNaissance dateNaissance DATE DEFAULT \'1000-01-01\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748A5D419CCB');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('ALTER TABLE Utilisateur CHANGE dateNaissance dateNaissance DATE DEFAULT \'1000-01-01\'');
    }
}
