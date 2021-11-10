<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211108160338 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('DROP SEQUENCE users_id_seq CASCADE');
        $this->addSql('DROP TABLE users');
        $this->addSql('ALTER TABLE products ADD code VARCHAR(255) DEFAULT NULL');
        $this->addSql('ALTER TABLE products ALTER id DROP DEFAULT');
        $this->addSql('ALTER TABLE products ALTER name SET NOT NULL');
        $this->addSql('ALTER TABLE products ALTER price SET NOT NULL');
        $this->addSql('ALTER TABLE products ALTER description TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE products ALTER description DROP DEFAULT');
        $this->addSql('ALTER TABLE products ALTER description SET NOT NULL');
        $this->addSql('ALTER TABLE products ALTER dimension TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE products ALTER dimension DROP DEFAULT');
        $this->addSql('ALTER TABLE products ALTER dimension SET NOT NULL');
        $this->addSql('ALTER TABLE products ALTER color TYPE VARCHAR(255)');
        $this->addSql('ALTER TABLE products ALTER color DROP DEFAULT');
        $this->addSql('ALTER TABLE products ALTER color SET NOT NULL');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE SCHEMA public');
        $this->addSql('CREATE SEQUENCE users_id_seq INCREMENT BY 1 MINVALUE 1 START 1');
        $this->addSql('CREATE TABLE users (id SERIAL NOT NULL, full_name VARCHAR(255) DEFAULT NULL, created_at TIMESTAMP(0) WITHOUT TIME ZONE DEFAULT NULL, country_code INT DEFAULT NULL, PRIMARY KEY(id))');
        $this->addSql('ALTER TABLE products DROP code');
        $this->addSql('CREATE SEQUENCE products_id_seq');
        $this->addSql('SELECT setval(\'products_id_seq\', (SELECT MAX(id) FROM products))');
        $this->addSql('ALTER TABLE products ALTER id SET DEFAULT nextval(\'products_id_seq\')');
        $this->addSql('ALTER TABLE products ALTER name DROP NOT NULL');
        $this->addSql('ALTER TABLE products ALTER price DROP NOT NULL');
        $this->addSql('ALTER TABLE products ALTER description TYPE TEXT');
        $this->addSql('ALTER TABLE products ALTER description DROP DEFAULT');
        $this->addSql('ALTER TABLE products ALTER description DROP NOT NULL');
        $this->addSql('ALTER TABLE products ALTER dimension TYPE TEXT');
        $this->addSql('ALTER TABLE products ALTER dimension DROP DEFAULT');
        $this->addSql('ALTER TABLE products ALTER dimension DROP NOT NULL');
        $this->addSql('ALTER TABLE products ALTER color TYPE TEXT');
        $this->addSql('ALTER TABLE products ALTER color DROP DEFAULT');
        $this->addSql('ALTER TABLE products ALTER color DROP NOT NULL');
    }
}
