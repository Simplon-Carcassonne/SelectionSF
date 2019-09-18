<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190917084655 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE user (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(180) NOT NULL, role VARCHAR(100) NOT NULL, password VARCHAR(255) NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_8D93D649E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE candidate (id INT AUTO_INCREMENT NOT NULL, selection_id INT NOT NULL, genus VARCHAR(10) NOT NULL, name VARCHAR(255) NOT NULL, surname VARCHAR(255) NOT NULL, date_of_birth DATETIME NOT NULL, birth_country VARCHAR(50) NOT NULL, nationality VARCHAR(50) NOT NULL, address VARCHAR(255) NOT NULL, post_code INT NOT NULL, city VARCHAR(255) NOT NULL, phone_number INT NOT NULL, mail_address VARCHAR(255) NOT NULL, school_stopped_year VARCHAR(4) NOT NULL, school_level VARCHAR(255) NOT NULL, situation VARCHAR(255) NOT NULL, pole_emploi_id VARCHAR(20) NOT NULL, pole_emploi_compensation_end_date DATETIME NOT NULL, social_security VARCHAR(255) NOT NULL, resume LONGTEXT NOT NULL, dev_skills VARCHAR(255) NOT NULL, english_level VARCHAR(255) NOT NULL, superhero VARCHAR(255) NOT NULL, one_year_later LONGTEXT NOT NULL, hack_experience LONGTEXT NOT NULL, motivation LONGTEXT NOT NULL, sololearn VARCHAR(255) NOT NULL, sololearn_bonus LONGTEXT NOT NULL COMMENT \'(DC2Type:array)\', disponibility TINYINT(1) NOT NULL, remuneration LONGTEXT NOT NULL, guidance_source VARCHAR(255) NOT NULL, status TINYINT(1) NOT NULL, INDEX IDX_C8B28E44E48EFE78 (selection_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE selection (id INT AUTO_INCREMENT NOT NULL, title VARCHAR(255) NOT NULL, date_start DATETIME NOT NULL, date_end DATETIME NOT NULL, address VARCHAR(255) NOT NULL, post_code INT NOT NULL, city VARCHAR(255) NOT NULL, status TINYINT(1) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE candidate ADD CONSTRAINT FK_C8B28E44E48EFE78 FOREIGN KEY (selection_id) REFERENCES selection (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE candidate DROP FOREIGN KEY FK_C8B28E44E48EFE78');
        $this->addSql('DROP TABLE user');
        $this->addSql('DROP TABLE candidate');
        $this->addSql('DROP TABLE selection');
    }
}
