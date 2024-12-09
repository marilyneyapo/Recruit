<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20241204093516 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE answers CHANGE answer_options answer_options LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE candidat DROP score, CHANGE status status VARCHAR(20) NOT NULL, CHANGE is_read is_read TINYINT(1) NOT NULL, CHANGE created_at created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE jobs CHANGE logo logo VARCHAR(255) DEFAULT NULL, CHANGE url url VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY FK_6000B0D38D0EB82');
        $this->addSql('DROP INDEX IDX_6000B0D38D0EB82 ON notifications');
        $this->addSql('ALTER TABLE notifications DROP candidat_id');
        $this->addSql('ALTER TABLE questions CHANGE options options LONGTEXT DEFAULT NULL COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE user CHANGE roles roles JSON NOT NULL, CHANGE first_name first_name VARCHAR(255) DEFAULT NULL, CHANGE last_name last_name VARCHAR(255) DEFAULT NULL, CHANGE phone phone VARCHAR(255) DEFAULT NULL, CHANGE address address VARCHAR(255) DEFAULT NULL, CHANGE city city VARCHAR(255) DEFAULT NULL, CHANGE birthdate birthdate DATE DEFAULT NULL, CHANGE domaine domaine VARCHAR(255) DEFAULT NULL, CHANGE cv_file cv_file VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT NULL COMMENT \'(DC2Type:datetime_immutable)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE answers CHANGE answer_options answer_options LONGTEXT DEFAULT \'NULL\' COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE candidat ADD score INT NOT NULL, CHANGE status status VARCHAR(20) DEFAULT \'NULL\', CHANGE is_read is_read TINYINT(1) DEFAULT NULL, CHANGE created_at created_at DATETIME DEFAULT \'current_timestamp()\' COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE jobs CHANGE logo logo VARCHAR(255) DEFAULT \'NULL\', CHANGE url url VARCHAR(255) DEFAULT \'NULL\'');
        $this->addSql('ALTER TABLE messenger_messages CHANGE delivered_at delivered_at DATETIME DEFAULT \'NULL\' COMMENT \'(DC2Type:datetime_immutable)\'');
        $this->addSql('ALTER TABLE notifications ADD candidat_id INT NOT NULL');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT FK_6000B0D38D0EB82 FOREIGN KEY (candidat_id) REFERENCES candidat (id)');
        $this->addSql('CREATE INDEX IDX_6000B0D38D0EB82 ON notifications (candidat_id)');
        $this->addSql('ALTER TABLE questions CHANGE options options LONGTEXT DEFAULT \'NULL\' COMMENT \'(DC2Type:array)\'');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COLLATE `utf8mb4_bin`, CHANGE first_name first_name VARCHAR(255) DEFAULT \'NULL\', CHANGE last_name last_name VARCHAR(255) DEFAULT \'NULL\', CHANGE phone phone VARCHAR(255) DEFAULT \'NULL\', CHANGE address address VARCHAR(255) DEFAULT \'NULL\', CHANGE city city VARCHAR(255) DEFAULT \'NULL\', CHANGE birthdate birthdate DATE DEFAULT \'NULL\', CHANGE domaine domaine VARCHAR(255) DEFAULT \'NULL\', CHANGE cv_file cv_file VARCHAR(255) DEFAULT \'NULL\'');
    }
}
