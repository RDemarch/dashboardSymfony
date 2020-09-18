<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20200918122238 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE users MODIFY id INT NOT NULL');
        $this->addSql('ALTER TABLE users DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE users ADD US_PRENOM VARCHAR(50) DEFAULT NULL, ADD US_NOM VARCHAR(50) DEFAULT NULL, ADD US_MAIL VARCHAR(100) DEFAULT NULL, ADD US_PASS VARCHAR(50) DEFAULT NULL, ADD US_NIVEAU INT DEFAULT NULL, ADD INS_DATE DATETIME DEFAULT NULL, ADD INS_USER VARCHAR(100) DEFAULT NULL, ADD MAJ_DATE DATETIME DEFAULT NULL, ADD MAJ_USER VARCHAR(100) DEFAULT NULL, ADD is_verified TINYINT(1) NOT NULL, DROP name, DROP login, DROP password, DROP email, DROP firstname, DROP location, DROP postal_code, CHANGE id US_ID INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE users ADD PRIMARY KEY (US_ID)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE USERS MODIFY US_ID INT NOT NULL');
        $this->addSql('ALTER TABLE USERS DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE USERS ADD name LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD login LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD password LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD email LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD firstname LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD location LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_unicode_ci`, ADD postal_code INT NOT NULL, DROP US_PRENOM, DROP US_NOM, DROP US_MAIL, DROP US_PASS, DROP US_NIVEAU, DROP INS_DATE, DROP INS_USER, DROP MAJ_DATE, DROP MAJ_USER, DROP is_verified, CHANGE us_id id INT AUTO_INCREMENT NOT NULL');
        $this->addSql('ALTER TABLE USERS ADD PRIMARY KEY (id)');
    }
}
