<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230503131307 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs

        $this->addSql('CREATE TABLE Categorie (Id_Categorie INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) DEFAULT NULL, PRIMARY KEY(Id_Categorie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE commande_item (id INT AUTO_INCREMENT NOT NULL, quantite INT NOT NULL, Id_Produit INT DEFAULT NULL, Id_Commandes INT DEFAULT NULL, INDEX IDX_747724FD77D87F1B (Id_Produit), INDEX IDX_747724FD2F21CD50 (Id_Commandes), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE commande_item ADD CONSTRAINT FK_747724FD77D87F1B FOREIGN KEY (Id_Produit) REFERENCES Produit (Id_Produit)');
        $this->addSql('ALTER TABLE commande_item ADD CONSTRAINT FK_747724FD2F21CD50 FOREIGN KEY (Id_Commandes) REFERENCES Commandes (Id_Commandes)');
        $this->addSql('DROP TABLE Categorie');
        $this->addSql('ALTER TABLE Commandes CHANGE Id_Utilisateur_1 Id_Utilisateur_1 INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Produit CHANGE Id_Categorie Id_Categorie INT DEFAULT NULL');
        $this->addSql('ALTER TABLE Produit ADD CONSTRAINT FK_E618D5BB53883348 FOREIGN KEY (Id_Categorie) REFERENCES Categorie (Id_Categorie)');

        $this->addSql('ALTER TABLE Ligne_Commande DROP quantite, DROP prixHT, DROP prixTTC, DROP tva');
        $this->addSql('DROP INDEX id_commandes ON Ligne_Commande');
        $this->addSql('CREATE INDEX IDX_562ADC52F21CD50 ON Ligne_Commande (Id_Commandes)');

        $this->addSql('ALTER TABLE Utilisateur CHANGE nom nom VARCHAR(50) DEFAULT \'NULL\', CHANGE prenom prenom VARCHAR(50) DEFAULT \'NULL\', CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', CHANGE adresse adresse VARCHAR(50) DEFAULT \'NULL\', CHANGE dateNaissance dateNaissance DATE DEFAULT \'CURRENT_TIMESTAMP\'');
        $this->addSql('CREATE UNIQUE INDEX email ON Utilisateur (email)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE Produit DROP FOREIGN KEY FK_E618D5BB53883348');
        $this->addSql('CREATE TABLE Categorie (Id_Categorie INT AUTO_INCREMENT NOT NULL, type VARCHAR(50) CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_general_ci`, PRIMARY KEY(Id_Categorie)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_general_ci` ENGINE = InnoDB COMMENT = \'\' ');
        $this->addSql('ALTER TABLE commande_item DROP FOREIGN KEY FK_747724FD77D87F1B');
        $this->addSql('ALTER TABLE commande_item DROP FOREIGN KEY FK_747724FD2F21CD50');
        $this->addSql('DROP TABLE Categorie');
        $this->addSql('DROP TABLE commande_item');
        $this->addSql('DROP TABLE messenger_messages');
        $this->addSql('ALTER TABLE Commandes CHANGE Id_Utilisateur_1 Id_Utilisateur_1 INT NOT NULL');
        $this->addSql('ALTER TABLE Produit CHANGE Id_Categorie Id_Categorie INT NOT NULL');

        $this->addSql('ALTER TABLE Ligne_Commande DROP FOREIGN KEY FK_562ADC52F21CD50');
        $this->addSql('ALTER TABLE Ligne_Commande ADD quantite INT DEFAULT NULL, ADD prixHT NUMERIC(15, 3) DEFAULT NULL, ADD prixTTC NUMERIC(15, 2) DEFAULT NULL, ADD tva NUMERIC(15, 2) DEFAULT NULL');
        $this->addSql('DROP INDEX idx_562adc52f21cd50 ON Ligne_Commande');
        $this->addSql('CREATE INDEX Id_Commandes ON Ligne_Commande (Id_Commandes)');
        $this->addSql('ALTER TABLE Ligne_Commande ADD CONSTRAINT FK_562ADC52F21CD50 FOREIGN KEY (Id_Commandes) REFERENCES Commandes (Id_Commandes)');
        $this->addSql('DROP INDEX email ON Utilisateur');
        $this->addSql('ALTER TABLE Utilisateur CHANGE nom nom VARCHAR(50) DEFAULT NULL, CHANGE prenom prenom VARCHAR(50) DEFAULT NULL, CHANGE roles roles VARCHAR(255) NOT NULL, CHANGE adresse adresse VARCHAR(50) DEFAULT NULL, CHANGE dateNaissance dateNaissance DATE DEFAULT CURRENT_TIMESTAMP');
    }
}
