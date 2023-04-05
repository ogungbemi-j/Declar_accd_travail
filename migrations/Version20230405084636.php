<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230405084636 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE users (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) NOT NULL, password VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE messenger_messages (id BIGINT AUTO_INCREMENT NOT NULL, body LONGTEXT NOT NULL, headers LONGTEXT NOT NULL, queue_name VARCHAR(190) NOT NULL, created_at DATETIME NOT NULL, available_at DATETIME NOT NULL, delivered_at DATETIME DEFAULT NULL, INDEX IDX_75EA56E0FB7336F0 (queue_name), INDEX IDX_75EA56E0E3BD61CE (available_at), INDEX IDX_75EA56E016BA31DB (delivered_at), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('DROP TABLE accid_travail');
        $this->addSql('DROP TABLE declaration_accid_travail');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE accid_travail (N° VARCHAR(8) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Noms de l\'agent VARCHAR(35) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Serv VARCHAR(12) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Métier VARCHAR(24) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Statut VARCHAR(11) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Date
        AT INT DEFAULT NULL, Imputable VARCHAR(3) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Type VARCHAR(11) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Arrêt VARCHAR(3) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Nb jours INT DEFAULT NULL, Age VARCHAR(10) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Absent jusqu\'au VARCHAR(11) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, AT après repos INT DEFAULT NULL, Nb heure après embauche VARCHAR(9) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Secteur VARCHAR(24) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Rue VARCHAR(27) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Véhicule VARCHAR(11) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Type de véhicule VARCHAR(21) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Type d\'activité VARCHAR(23) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Type de bac VARCHAR(10) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Météo VARCHAR(8) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Intervention police VARCHAR(3) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Intervention Pompiers VARCHAR(3) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Transport Hôpital VARCHAR(3) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Témoin VARCHAR(3) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Circonstances VARCHAR(30) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Lésions VARCHAR(17) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Siège VARCHAR(13) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, EPI VARCHAR(4) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Respect consigne VARCHAR(5) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Tiers VARCHAR(14) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Facteur VARCHAR(25) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Rédaction
        Enquête VARCHAR(44) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Retour
        Enquête VARCHAR(44) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Délais VARCHAR(4) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Suivi VARCHAR(1) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Date
        demande VARCHAR(28) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Date de retour du service VARCHAR(28) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Corrections VARCHAR(225) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, En cours
        Clôturé le : VARCHAR(72) CHARACTER SET utf8mb3 DEFAULT NULL COLLATE `utf8mb3_general_ci`, Année INT DEFAULT NULL, Mois INT DEFAULT NULL) DEFAULT CHARACTER SET utf8mb3 COLLATE `utf8mb3_general_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('CREATE TABLE declaration_accid_travail (N° INT NOT NULL, Noms de l\'agent VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Service VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Métier VARCHAR(225) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Statut VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Date AT INT NOT NULL, Imputable VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Type VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Arrêt VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Nb jours INT NOT NULL, Age INT NOT NULL, Absent_jusqu\'au INT NOT NULL, AT après repos INT NOT NULL, Nb heure après embauche INT NOT NULL, Secteur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Rue VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Véhicule VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Type de véhicule VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Type d\'activité VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Type de bac VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Météo VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Intervention police VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Intervention Pompiers VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Transport Hôpital VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Témoin VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Circonstances VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Lésions VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Siège VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, EPI VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Respect consigne VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Facteur VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Rédaction  Enquête TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Retour  Enquête TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Délais VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Suivi VARCHAR(20) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Date demande DATE NOT NULL, Date de retour du service DATE NOT NULL, Corrections TEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, En cours Clôturé le : VARCHAR(255) CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_0900_ai_ci`, Année INT NOT NULL, Mois INT NOT NULL, PRIMARY KEY(N°)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_0900_ai_ci` ENGINE = MyISAM COMMENT = \'\' ');
        $this->addSql('DROP TABLE users');
        $this->addSql('DROP TABLE messenger_messages');
    }
}
