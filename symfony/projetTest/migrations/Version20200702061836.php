<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200702061836 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE adresse (id INT AUTO_INCREMENT NOT NULL, num_rue VARCHAR(10) DEFAULT NULL, nom_rue VARCHAR(255) DEFAULT NULL, cp VARCHAR(12) DEFAULT NULL, nom_ville VARCHAR(190) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE color (id INT AUTO_INCREMENT NOT NULL, nom_color VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE energy (id INT AUTO_INCREMENT NOT NULL, nom_energy VARCHAR(100) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE marque (id INT AUTO_INCREMENT NOT NULL, nom_marque VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE options (id INT AUTO_INCREMENT NOT NULL, nom_option VARCHAR(255) NOT NULL, vehicules VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE type_vehicule (id INT AUTO_INCREMENT NOT NULL, nom_type_vehicule VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE user ADD adresse_id INT DEFAULT NULL, CHANGE phone phone VARCHAR(80) NOT NULL');
        $this->addSql('ALTER TABLE user ADD CONSTRAINT FK_8D93D6494DE7DC5C FOREIGN KEY (adresse_id) REFERENCES adresse (id)');
        $this->addSql('CREATE INDEX IDX_8D93D6494DE7DC5C ON user (adresse_id)');
        $this->addSql('ALTER TABLE vehicule ADD marque_id INT DEFAULT NULL, ADD options_id INT DEFAULT NULL, ADD type_vehicule_id INT DEFAULT NULL, ADD color_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D4827B9B2 FOREIGN KEY (marque_id) REFERENCES marque (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D3ADB05F1 FOREIGN KEY (options_id) REFERENCES options (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D153E280 FOREIGN KEY (type_vehicule_id) REFERENCES type_vehicule (id)');
        $this->addSql('ALTER TABLE vehicule ADD CONSTRAINT FK_292FFF1D7ADA1FB5 FOREIGN KEY (color_id) REFERENCES color (id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D4827B9B2 ON vehicule (marque_id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D3ADB05F1 ON vehicule (options_id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D153E280 ON vehicule (type_vehicule_id)');
        $this->addSql('CREATE INDEX IDX_292FFF1D7ADA1FB5 ON vehicule (color_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP FOREIGN KEY FK_8D93D6494DE7DC5C');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D7ADA1FB5');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D4827B9B2');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D3ADB05F1');
        $this->addSql('ALTER TABLE vehicule DROP FOREIGN KEY FK_292FFF1D153E280');
        $this->addSql('DROP TABLE adresse');
        $this->addSql('DROP TABLE color');
        $this->addSql('DROP TABLE energy');
        $this->addSql('DROP TABLE marque');
        $this->addSql('DROP TABLE options');
        $this->addSql('DROP TABLE type_vehicule');
        $this->addSql('DROP INDEX IDX_8D93D6494DE7DC5C ON user');
        $this->addSql('ALTER TABLE user DROP adresse_id, CHANGE phone phone VARCHAR(100) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`');
        $this->addSql('DROP INDEX IDX_292FFF1D4827B9B2 ON vehicule');
        $this->addSql('DROP INDEX IDX_292FFF1D3ADB05F1 ON vehicule');
        $this->addSql('DROP INDEX IDX_292FFF1D153E280 ON vehicule');
        $this->addSql('DROP INDEX IDX_292FFF1D7ADA1FB5 ON vehicule');
        $this->addSql('ALTER TABLE vehicule DROP marque_id, DROP options_id, DROP type_vehicule_id, DROP color_id');
    }
}
