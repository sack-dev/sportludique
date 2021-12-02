<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20211202141835 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE article (id INT AUTO_INCREMENT NOT NULL, nom VARCHAR(200) NOT NULL, description VARCHAR(255) DEFAULT NULL, prix INT NOT NULL, image VARCHAR(255) DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE avis (id INT AUTO_INCREMENT NOT NULL, id_a_id INT DEFAULT NULL, note DOUBLE PRECISION DEFAULT NULL, commentaire VARCHAR(255) DEFAULT NULL, UNIQUE INDEX UNIQ_8F91ABF0B0FE4F5A (id_a_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier (id INT AUTO_INCREMENT NOT NULL, quantite DOUBLE PRECISION DEFAULT NULL, valide TINYINT(1) DEFAULT NULL, date DATE DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE panier_article (panier_id INT NOT NULL, article_id INT NOT NULL, INDEX IDX_F880CAE7F77D927C (panier_id), INDEX IDX_F880CAE77294869C (article_id), PRIMARY KEY(panier_id, article_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE avis ADD CONSTRAINT FK_8F91ABF0B0FE4F5A FOREIGN KEY (id_a_id) REFERENCES article (id)');
        $this->addSql('ALTER TABLE panier_article ADD CONSTRAINT FK_F880CAE7F77D927C FOREIGN KEY (panier_id) REFERENCES panier (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE panier_article ADD CONSTRAINT FK_F880CAE77294869C FOREIGN KEY (article_id) REFERENCES article (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE utilisateur ADD id_u_id INT NOT NULL');
        $this->addSql('ALTER TABLE utilisateur ADD CONSTRAINT FK_1D1C63B36F858F92 FOREIGN KEY (id_u_id) REFERENCES panier (id)');
        $this->addSql('CREATE INDEX IDX_1D1C63B36F858F92 ON utilisateur (id_u_id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE avis DROP FOREIGN KEY FK_8F91ABF0B0FE4F5A');
        $this->addSql('ALTER TABLE panier_article DROP FOREIGN KEY FK_F880CAE77294869C');
        $this->addSql('ALTER TABLE panier_article DROP FOREIGN KEY FK_F880CAE7F77D927C');
        $this->addSql('ALTER TABLE utilisateur DROP FOREIGN KEY FK_1D1C63B36F858F92');
        $this->addSql('DROP TABLE article');
        $this->addSql('DROP TABLE avis');
        $this->addSql('DROP TABLE panier');
        $this->addSql('DROP TABLE panier_article');
        $this->addSql('DROP INDEX IDX_1D1C63B36F858F92 ON utilisateur');
        $this->addSql('ALTER TABLE utilisateur DROP id_u_id');
    }
}
