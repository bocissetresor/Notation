-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Mer 16 Janvier 2019 à 12:05
-- Version du serveur :  10.1.21-MariaDB
-- Version de PHP :  7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `administrateur`
--

CREATE TABLE `administrateur` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `matricule` varchar(15) NOT NULL,
  `date_naissance` varchar(11) NOT NULL,
  `fonction` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `administrateur`
--

INSERT INTO `administrateur` (`id`, `nom`, `prenom`, `matricule`, `date_naissance`, `fonction`) VALUES
(1, 'SORO', 'ETIENNNE', '00-ESATICOOOOET', '30/06/1954', 'DIRECTEUR PEDAGOGIQUE ');

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `p1` int(11) NOT NULL,
  `p2` int(11) NOT NULL,
  `p3` int(11) NOT NULL,
  `p4` int(11) NOT NULL,
  `p5` int(11) NOT NULL,
  `p6` int(11) NOT NULL,
  `p7` int(11) NOT NULL,
  `p8` int(11) NOT NULL,
  `p9` int(11) NOT NULL,
  `p10` int(11) NOT NULL,
  `p11` int(11) NOT NULL,
  `p12` int(11) NOT NULL,
  `p13` varchar(270) NOT NULL,
  `p14` varchar(270) NOT NULL,
  `p15` varchar(270) NOT NULL,
  `date` varchar(20) NOT NULL,
  `matiere` varchar(20) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `classe` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `p1`, `p2`, `p3`, `p4`, `p5`, `p6`, `p7`, `p8`, `p9`, `p10`, `p11`, `p12`, `p13`, `p14`, `p15`, `date`, `matiere`, `nom`, `classe`) VALUES
(3, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'BUIRN', ' VOTRE COMMENTAIREEZD', ' VOTRE COMMENTAIREAED', '2018-2019', 'POO', 'SOULIE KOLO', 'SIGL2'),
(4, 3, 3, 3, 2, 2, 2, 2, 2, 2, 2, 2, 2, ' VOTRE COMMENTAIREdfrg', ' VOTRE COMMENTAIRdeffgrrE', ' VOTRE COMMENTAIREezfrget', '2018-2019', 'POO', 'SILUE KOLO', 'SIGL2'),
(5, 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, ' VOTRE COMMENTAIREaezfrz', 'ezzrt VOTRE COMMENTAIRE', ' VOTRE COMMENTAIREdaze\'ftr(\'', '2018-2019', 'ANGLAIS', 'BAMBA', 'SIGL2'),
(6, 2, 0, 1, 0, 3, 4, 3, 4, 3, 4, 3, 4, 'BIEN', 'NUL', 'NUL', '2018-2019', 'POO', 'SILUE KOLO', 'SIGL2'),
(7, 1, 2, 0, 3, 4, 4, 4, 4, 4, 4, 4, 4, 'BIEN', 'NUL', 'NUL', '2018-2019', 'POO', 'SILUE KOLO', 'SIGL2'),
(8, 1, 4, 4, 0, 4, 1, 0, 3, 2, 2, 3, 1, 'BIEN', 'NUL', 'NUL', '2018-2019', 'ANGLAIS', 'BAMBA', 'SIGL2'),
(9, 0, 3, 4, 1, 2, 3, 3, 0, 2, 1, 2, 5, 'BIEN', 'PRATIQUE', 'NUL', '2018-2019', 'ANGLAIS', 'BAMBA', 'SIGL2');

-- --------------------------------------------------------

--
-- Structure de la table `enseignant`
--

CREATE TABLE `enseignant` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `matricule` varchar(15) NOT NULL,
  `date_naissance` varchar(11) NOT NULL,
  `matiere` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `enseignant`
--

INSERT INTO `enseignant` (`id`, `nom`, `prenom`, `matricule`, `date_naissance`, `matiere`) VALUES
(1, 'SILUE', 'KOLO', '00-ESATIC0001KO', '17/04/1970', 'PROGRAMMATION ORIENTE OBJET'),
(2, 'BAMBA', 'SOULE', '00-ESATIC0002SO', '06/12/1983', 'ANGLAIS'),
(3, 'KAMAGATE', 'ZAKARIA', '1111', '17/04/1970', 'WEB'),
(4, 'KOUASSI', 'ADLESSE', '2222', '23-12-1968', 'LINUX');

-- --------------------------------------------------------

--
-- Structure de la table `etudiant`
--

CREATE TABLE `etudiant` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `matricule` varchar(15) NOT NULL,
  `date_naissance` varchar(11) NOT NULL,
  `classe` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `etudiant`
--

INSERT INTO `etudiant` (`id`, `nom`, `prenom`, `matricule`, `date_naissance`, `classe`) VALUES
(1, 'CISSE', 'YAYA', '17-ESATIC0175BO', '19/06/1997', 'SIGL2'),
(5, 'soro', 'mamadou loa', '111', '2019-01-01', 'sigl2'),
(6, 'SORO', 'FOUGNIGUE MARC ARNAUD', '17-ESATIC0139KO', '02-11-2000', 'SIGL2'),
(7, 'KONAN', 'FRANCK FABRICE', '0000', '07-08-1999', 'SRIT2B');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `administrateur`
--
ALTER TABLE `administrateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `enseignant`
--
ALTER TABLE `enseignant`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `etudiant`
--
ALTER TABLE `etudiant`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `administrateur`
--
ALTER TABLE `administrateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `enseignant`
--
ALTER TABLE `enseignant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `etudiant`
--
ALTER TABLE `etudiant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
