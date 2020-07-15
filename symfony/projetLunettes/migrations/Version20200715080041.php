<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200715080041 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lunettes ADD genre_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE lunettes ADD CONSTRAINT FK_59394B254296D31F FOREIGN KEY (genre_id) REFERENCES genre (id)');
        $this->addSql('CREATE INDEX IDX_59394B254296D31F ON lunettes (genre_id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE lunettes DROP FOREIGN KEY FK_59394B254296D31F');
        $this->addSql('DROP INDEX IDX_59394B254296D31F ON lunettes');
        $this->addSql('ALTER TABLE lunettes DROP genre_id');
    }
}
