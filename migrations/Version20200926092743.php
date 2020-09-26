<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200926092743 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users CHANGE password password VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE crud ADD category LONGTEXT NOT NULL, ADD buying_date DATE NOT NULL, ADD end_waranty_date DATE NOT NULL, ADD maintenance_advice LONGTEXT NOT NULL, ADD user_manual LONGTEXT DEFAULT NULL, ADD price INT NOT NULL, CHANGE description credential LONGTEXT NOT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE crud ADD description LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, DROP credential, DROP category, DROP buying_date, DROP end_waranty_date, DROP maintenance_advice, DROP user_manual, DROP price');
        $this->addSql('ALTER TABLE USERS CHANGE password password TEXT CHARACTER SET utf8mb4 DEFAULT NULL COLLATE `utf8mb4_unicode_ci`');
    }
}
