<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200707114349 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lunettes ADD couleur_id INT DEFAULT NULL, ADD type_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lunettes ADD CONSTRAINT FK_59394B25C31BA576 FOREIGN KEY (couleur_id) REFERENCES couleur (id)');
        $this->addSql('ALTER TABLE lunettes ADD CONSTRAINT FK_59394B25C54C8C93 FOREIGN KEY (type_id) REFERENCES type (id)');
        $this->addSql('CREATE INDEX IDX_59394B25C31BA576 ON lunettes (couleur_id)');
        $this->addSql('CREATE INDEX IDX_59394B25C54C8C93 ON lunettes (type_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lunettes DROP FOREIGN KEY FK_59394B25C31BA576');
        $this->addSql('ALTER TABLE lunettes DROP FOREIGN KEY FK_59394B25C54C8C93');
        $this->addSql('DROP INDEX IDX_59394B25C31BA576 ON lunettes');
        $this->addSql('DROP INDEX IDX_59394B25C54C8C93 ON lunettes');
        $this->addSql('ALTER TABLE lunettes DROP couleur_id, DROP type_id');
    }
}
