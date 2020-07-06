<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200703070430 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user ADD nom_user VARCHAR(150) NOT NULL, ADD prenom_user VARCHAR(160) NOT NULL, ADD adresse_user VARCHAR(255) NOT NULL, ADD cp_user VARCHAR(100) NOT NULL, ADD ville_user VARCHAR(255) NOT NULL, ADD telephone_user VARCHAR(15) NOT NULL, ADD statut TINYINT(1) NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE user DROP nom_user, DROP prenom_user, DROP adresse_user, DROP cp_user, DROP ville_user, DROP telephone_user, DROP statut');
    }
}
