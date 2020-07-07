<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200707114152 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier ADD lunettes_id INT DEFAULT NULL, ADD tva_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF2144F5FA4 FOREIGN KEY (lunettes_id) REFERENCES lunettes (id)');
        $this->addSql('ALTER TABLE panier ADD CONSTRAINT FK_24CC0DF24D79775F FOREIGN KEY (tva_id) REFERENCES tva (id)');
        $this->addSql('CREATE INDEX IDX_24CC0DF2144F5FA4 ON panier (lunettes_id)');
        $this->addSql('CREATE UNIQUE INDEX UNIQ_24CC0DF24D79775F ON panier (tva_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF2144F5FA4');
        $this->addSql('ALTER TABLE panier DROP FOREIGN KEY FK_24CC0DF24D79775F');
        $this->addSql('DROP INDEX IDX_24CC0DF2144F5FA4 ON panier');
        $this->addSql('DROP INDEX UNIQ_24CC0DF24D79775F ON panier');
        $this->addSql('ALTER TABLE panier DROP lunettes_id, DROP tva_id');
    }
}
