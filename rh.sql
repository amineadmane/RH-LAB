-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 24 avr. 2018 à 06:48
-- Version du serveur :  5.7.19
-- Version de PHP :  5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rh`
--

-- --------------------------------------------------------

--
-- Structure de la table `candidat`
--

DROP TABLE IF EXISTS `candidat`;
CREATE TABLE IF NOT EXISTS `candidat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(50) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `poste` varchar(255) DEFAULT NULL,
  `da_entretien` varchar(30) DEFAULT NULL,
  `experience` text,
  `question` text,
  `salaire` int(11) DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `commentaire` varchar(255) DEFAULT NULL,
  `etapsuiv` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `candidat`
--

INSERT INTO `candidat` (`id`, `nom`, `prenom`, `telephone`, `email`, `poste`, `da_entretien`, `experience`, `question`, `salaire`, `statut`, `commentaire`, `etapsuiv`) VALUES
(18, 'admane', 'amine', '0791378061', 'ga_admane@esi.dz', 'designer', '2018-04-07', 'aucun', '', 4000, '', '', 'a suivre'),
(17, 'bachounda', 'chakib', '0669425144', 'gc_bachounda@esi.dz', 'back-end', '2018-04-19', 'null', '- question 1 : votre age ? 20 ans\r\n- question 2 : niveau ? bac+2', 55000, 'a revoir', '', 'rappeler'),
(16, 'azzouz', 'bahaeddine', '0558945479', 'gb_azzouz@esi.dz', 'front-end', '2018-04-13', 'designer', '- question 1 : votre age ? 20 ans\r\n- question 2 : niveau ? bac+2 ', 45000, 'en pause', '', 'a recruter');

-- --------------------------------------------------------

--
-- Structure de la table `conge`
--

DROP TABLE IF EXISTS `conge`;
CREATE TABLE IF NOT EXISTS `conge` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` int(11) NOT NULL,
  `datebegin` varchar(255) NOT NULL,
  `datend` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `conge`
--

INSERT INTO `conge` (`id`, `matricule`, `datebegin`, `datend`, `type`) VALUES
(77, 35, '2018-04-06', '2018-04-12', 'p'),
(78, 34, '2018-04-10', '2018-04-20', 'm'),
(79, 33, '2018-04-17', '2018-04-27', 's');

-- --------------------------------------------------------

--
-- Structure de la table `employe`
--

DROP TABLE IF EXISTS `employe`;
CREATE TABLE IF NOT EXISTS `employe` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) DEFAULT NULL,
  `prenom` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `naissance` varchar(30) DEFAULT NULL,
  `situation` varchar(255) DEFAULT NULL,
  `embauche` varchar(30) DEFAULT NULL,
  `poste` varchar(255) DEFAULT NULL,
  `responsable` varchar(255) DEFAULT NULL,
  `salaire` int(11) DEFAULT NULL,
  `projet` varchar(255) DEFAULT NULL,
  `immatriculation` varchar(255) DEFAULT NULL,
  `statut` varchar(255) DEFAULT NULL,
  `adresse` varchar(255) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `nbjour` varchar(11) DEFAULT NULL,
  `cbancaire` varchar(255) DEFAULT NULL,
  `commentaire` text,
  `demission` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=36 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `employe`
--

INSERT INTO `employe` (`id`, `nom`, `prenom`, `email`, `naissance`, `situation`, `embauche`, `poste`, `responsable`, `salaire`, `projet`, `immatriculation`, `statut`, `adresse`, `telephone`, `nbjour`, `cbancaire`, `commentaire`, `demission`) VALUES
(35, 'yessad', 'samy', 'gs_yessad@esi.dz', '1998-06-21', 'CÃ©libataire', '2018-03-14', 'front-end', 'daoudi', 60000, 'grh', 'mml55', 'Actif', 'alger centre', '0555818655', '24', 'mljh44', '', ''),
(34, 'bouchafa', 'lotfi ', 'gl_bouchafa@esi.dz', '1998-12-13', 'CÃ©libataire', '2018-03-07', 'back-end', 'kacet', 64000, 'grh', 'mlkk44', 'Actif', 'birkhadem', '0551824453', '20', '255dd', '', ''),
(33, 'sadeg', 'mouloud', 'gm_sadeg@esi.dz', '1996-07-22', 'CÃ©libataire', '2018-02-28', 'full-stack', 'kacet', 65000, 'grh', 'rm2015', 'Actif', 'Docteur Trollard', '0557832035', '20', '514llm5', '', '');

-- --------------------------------------------------------

--
-- Structure de la table `evaluation`
--

DROP TABLE IF EXISTS `evaluation`;
CREATE TABLE IF NOT EXISTS `evaluation` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` int(11) NOT NULL,
  `date_evaluation` date DEFAULT NULL,
  `next_eva` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `evaluation`
--

INSERT INTO `evaluation` (`id`, `matricule`, `date_evaluation`, `next_eva`) VALUES
(15, 35, '2018-04-23', '2019-02-02'),
(16, 34, NULL, '2018-05-22'),
(17, 33, '2018-04-22', '2018-04-21');

-- --------------------------------------------------------

--
-- Structure de la table `parametres`
--

DROP TABLE IF EXISTS `parametres`;
CREATE TABLE IF NOT EXISTS `parametres` (
  `specialite` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `adrgerant` varchar(255) NOT NULL,
  `msgacueille` text NOT NULL,
  `tel` varchar(30) NOT NULL,
  `gerant` varchar(255) NOT NULL,
  `raisonsocial` varchar(255) NOT NULL,
  `rc` varchar(255) NOT NULL,
  `siteweb` varchar(255) NOT NULL,
  `theme` varchar(20) NOT NULL,
  `logo` varchar(50) NOT NULL,
  `idfisc` varchar(30) NOT NULL,
  `imgacueille` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `parametres`
--

INSERT INTO `parametres` (`specialite`, `adress`, `fax`, `adrgerant`, `msgacueille`, `tel`, `gerant`, `raisonsocial`, `rc`, `siteweb`, `theme`, `logo`, `idfisc`, `imgacueille`) VALUES
('INFORMATIQUE', '15 ARONDISMENT', '', 'sadeg.mld@gmail.com', 'Bienvenue\r\n', '0557832035', 'Proudlock', 'SARL', '02150', 'esi.dz', '343a40', 'public/theme/logo.jpg', '010166', 'public/theme/imgac1.jpg?public/theme/imgac2.jpg?public/theme/imgac3.jpg?non');

-- --------------------------------------------------------

--
-- Structure de la table `salaire`
--

DROP TABLE IF EXISTS `salaire`;
CREATE TABLE IF NOT EXISTS `salaire` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `matricule` int(11) DEFAULT NULL,
  `salaire` varchar(255) DEFAULT NULL,
  `date` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=65 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `salaire`
--

INSERT INTO `salaire` (`id`, `matricule`, `salaire`, `date`) VALUES
(59, 33, '60000', '22-04-2018'),
(60, 34, '65000', '22-04-2018'),
(61, 35, '59000', '22-04-2018'),
(62, 33, '65000', '22-04-2018'),
(63, 35, '60000', '22-04-2018'),
(64, 34, '64000', '22-04-2018');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `identifiant` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `identifiant`, `password`, `type`) VALUES
(3, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'admin');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
