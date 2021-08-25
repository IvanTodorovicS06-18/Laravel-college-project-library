-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2021 at 11:44 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `autor`
--

CREATE TABLE `autor` (
  `autorID` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `autor`
--

INSERT INTO `autor` (`autorID`, `firstName`, `lastName`, `created_at`, `updated_at`) VALUES
(1, 'Vanja', 'Bulic', '2021-08-08 14:26:27', '2021-08-08 14:26:27'),
(2, 'Ivo', 'Andric', '2021-08-08 14:26:33', '2021-08-08 14:26:33'),
(3, 'Marko', 'Vidojkovic', '2021-08-08 14:50:56', '2021-08-08 14:50:56'),
(4, 'Dobrica', 'Cosic', '2021-08-08 14:52:38', '2021-08-08 14:52:38'),
(5, 'Miroslav', 'Antic', '2021-08-08 14:54:52', '2021-08-08 14:54:52'),
(6, 'Pavle', 'Zelic', '2021-08-08 14:56:44', '2021-08-08 14:56:44'),
(7, 'Dejan', 'Tiago-Stankovic', '2021-08-08 14:58:21', '2021-08-08 15:27:46'),
(8, 'Gradimir', 'Stojkovic', '2021-08-08 14:59:55', '2021-08-08 15:27:51'),
(9, 'Jelena', 'Bačić Alimpić', '2021-08-08 15:01:36', '2021-08-08 15:01:36'),
(10, 'Tomas', 'Haris', '2021-08-08 15:14:17', '2021-08-08 15:14:17'),
(11, 'Ričard', 'Č. Morais', '2021-08-08 15:17:01', '2021-08-08 15:17:01'),
(12, 'Aleksandar', 'Đurović', '2021-08-08 15:18:17', '2021-08-08 15:18:17'),
(13, 'Natali', 'Džener', '2021-08-08 15:20:39', '2021-08-08 15:20:39'),
(14, 'Majkl', 'Blejk', '2021-08-08 15:25:10', '2021-08-08 15:25:10'),
(15, 'Zoran', 'Feric', '2021-08-08 15:27:39', '2021-08-08 15:27:39'),
(16, 'Aleksandar', 'Gatalica', '2021-08-08 15:30:59', '2021-08-08 15:30:59'),
(17, 'Miloš', 'Latinović', '2021-08-08 16:05:39', '2021-08-08 16:05:39'),
(18, 'Đorđe', 'Sibinović', '2021-08-08 16:07:27', '2021-08-08 16:07:27'),
(19, 'Šimon', 'Đarmati', '2021-08-08 16:18:34', '2021-08-08 16:18:34'),
(20, 'Vedrana', 'Rudan', '2021-08-08 16:19:54', '2021-08-08 16:19:54'),
(21, 'Dušan', 'Pejčić', '2021-08-08 16:26:14', '2021-08-08 16:26:14'),
(22, 'Vila', 'Kater', '2021-08-08 16:27:35', '2021-08-08 16:27:35'),
(23, 'Ronald', 'Balson', '2021-08-08 16:29:47', '2021-08-08 16:29:47'),
(24, 'Joram', 'Hazoni', '2021-08-08 16:33:12', '2021-08-08 16:33:12'),
(25, 'Aleksandar', 'Todorović', '2021-08-08 16:35:31', '2021-08-08 16:35:31'),
(26, 'Olga', 'Slavnikova', '2021-08-08 16:41:18', '2021-08-08 16:41:18'),
(27, 'Slobodan', 'Micković', '2021-08-08 16:42:25', '2021-08-08 16:42:25'),
(28, 'Venko', 'Andonovski', '2021-08-08 16:44:44', '2021-08-08 16:44:44'),
(29, 'Marko', 'Sosič', '2021-08-08 16:46:24', '2021-08-08 16:46:24'),
(30, 'Dimitar', 'Baševski', '2021-08-08 16:47:38', '2021-08-08 16:47:38'),
(31, 'Zdravka', 'Evtimova', '2021-08-08 16:48:35', '2021-08-08 16:48:35'),
(32, 'Dragi', 'Mihajlovski', '2021-08-08 16:49:26', '2021-08-08 16:49:26'),
(33, 'Dmitrij', 'Bikov', '2021-08-08 16:50:31', '2021-08-08 16:50:31'),
(34, 'Aleš', 'Čar', '2021-08-08 16:51:50', '2021-08-08 16:51:50'),
(35, 'Dušan', 'Mitana', '2021-08-08 16:53:28', '2021-08-08 16:53:28'),
(36, 'Dušan', 'Kužel', '2021-08-08 16:54:38', '2021-08-08 16:54:38'),
(37, 'Vincent', 'Šikula', '2021-08-08 16:56:06', '2021-08-08 16:56:06'),
(38, 'Petre', 'Andreevski', '2021-08-08 16:57:10', '2021-08-08 16:57:10'),
(39, 'David', 'Flanagan', '2021-08-10 06:34:21', '2021-08-10 06:34:21'),
(40, 'Fatos', 'Ljubonja', '2021-08-10 06:35:34', '2021-08-10 06:35:34'),
(41, 'Šimon', 'Đarmati', '2021-08-10 06:38:03', '2021-08-10 06:38:03'),
(42, 'Aleksandar', 'Đurović', '2021-08-10 06:40:37', '2021-08-10 06:40:37'),
(43, 'Tukidid', '1', '2021-08-10 07:05:29', '2021-08-10 07:05:29'),
(44, 'Robert Ejkman', 'Ejkman', '2021-08-10 07:07:45', '2021-08-10 07:07:45'),
(45, 'Federiko', 'Moća', '2021-08-10 07:09:35', '2021-08-10 07:09:35'),
(46, 'Lorin', 'Vajsberger', '2021-08-10 07:10:40', '2021-08-10 07:10:40'),
(47, 'Elen', 'Kit', '2021-08-10 07:11:44', '2021-08-10 07:11:44'),
(48, 'Isidora', 'Bjelica', '2021-08-10 07:13:15', '2021-08-10 07:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `izdavac`
--

CREATE TABLE `izdavac` (
  `izdavacID` bigint(20) UNSIGNED NOT NULL,
  `imeIzdavaca` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brojTelefona` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `izdavac`
--

INSERT INTO `izdavac` (`izdavacID`, `imeIzdavaca`, `adress`, `email`, `brojTelefona`, `created_at`, `updated_at`) VALUES
(1, 'Laguna', 'Resavska 33, Beograd', 'klub@laguna.rs', '0155321221', '2021-08-08 14:27:30', '2021-08-08 15:12:59'),
(2, 'Vulkan', 'Sremska 2 11000 Beograd', 'info@knjizare-vulkan.rs', '0114540900', '2021-08-08 15:12:34', '2021-08-08 15:13:13'),
(3, 'Izdavačka kuća Dereta', 'Vladimira Rolovića 94a', 'office@dereta.rs', '3811123990', '2021-08-08 16:23:41', '2021-08-08 16:23:41'),
(4, 'Izdavačka kuća CLIO', 'Gospodar Jovanova 63', 'info@clio.rs', '0112624334', '2021-08-08 16:32:41', '2021-08-08 16:32:41'),
(5, 'Izdavačka kuća Arhipelag', '11000 Beograd, Srbija', 'knjige@arhipelag.rs', '0113344536', '2021-08-08 16:39:52', '2021-08-08 16:39:52'),
(6, 'Izdavačka kuća Makart', 'Online', 'makart@makart.rs', '0600501567', '2021-08-10 06:33:41', '2021-08-10 06:33:41');

-- --------------------------------------------------------

--
-- Table structure for table `izdavanjeknjiga`
--

CREATE TABLE `izdavanjeknjiga` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `knjigaID` bigint(20) UNSIGNED NOT NULL,
  `datumIzdavanja` date NOT NULL,
  `datumVracanja` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `izdavanjeknjiga`
--

INSERT INTO `izdavanjeknjiga` (`id`, `userID`, `knjigaID`, `datumIzdavanja`, `datumVracanja`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2021-01-10', '2021-08-08', '2021-08-08 14:30:40', '2021-08-08 16:04:48'),
(2, 1, 5, '2021-02-09', '2021-08-10', '2021-08-08 15:57:44', '2021-08-10 07:44:00'),
(3, 5, 2, '2021-03-11', '2021-08-10', '2021-08-08 15:58:21', '2021-08-10 07:44:01'),
(4, 6, 8, '2021-05-15', '2021-08-10', '2021-08-08 15:58:55', '2021-08-10 07:44:02'),
(5, 6, 10, '2021-06-15', '2021-08-10', '2021-08-08 15:59:05', '2021-08-10 07:44:02'),
(6, 3, 11, '2021-07-06', '2021-08-10', '2021-08-08 15:59:32', '2021-08-10 07:44:03'),
(7, 3, 6, '2021-07-30', '2021-08-10', '2021-08-08 15:59:44', '2021-08-10 07:44:04'),
(8, 3, 18, '2021-08-03', '2021-08-10', '2021-08-08 15:59:58', '2021-08-10 07:44:06'),
(9, 1, 8, '2021-09-11', '2021-08-10', '2021-08-08 16:00:53', '2021-08-10 07:44:07'),
(10, 1, 1, '2021-10-20', '2021-08-10', '2021-08-08 16:00:57', '2021-08-10 07:44:09'),
(11, 1, 8, '2021-11-02', '2021-08-10', '2021-08-08 16:01:51', '2021-08-10 07:44:10'),
(12, 1, 10, '2021-12-05', '2021-08-10', '2021-08-08 16:02:00', '2021-08-10 07:44:11'),
(13, 2, 7, '2021-04-06', '2021-08-10', '2021-08-08 16:02:38', '2021-08-10 07:44:12'),
(14, 3, 43, '2021-01-03', '2021-08-10', '2021-08-10 07:19:28', '2021-08-10 07:44:40'),
(15, 3, 32, '2021-02-16', NULL, '2021-08-10 07:19:42', '2021-08-10 07:19:42'),
(16, 3, 42, '2021-02-15', '2021-08-10', '2021-08-10 07:19:52', '2021-08-10 07:44:39'),
(17, 4, 14, '2021-08-04', '2021-08-10', '2021-08-10 07:20:26', '2021-08-10 07:44:20'),
(18, 4, 8, '2021-05-18', NULL, '2021-08-10 07:20:33', '2021-08-10 07:20:33'),
(19, 4, 10, '2021-02-08', '2021-08-10', '2021-08-10 07:20:43', '2021-08-10 07:44:22'),
(20, 5, 22, '2021-08-05', NULL, '2021-08-10 07:21:12', '2021-08-10 07:21:12'),
(21, 5, 34, '2021-08-07', NULL, '2021-08-10 07:21:19', '2021-08-10 07:21:19'),
(22, 5, 48, '2021-07-10', '2021-08-10', '2021-08-10 07:21:34', '2021-08-10 07:44:18'),
(23, 7, 23, '2021-08-04', NULL, '2021-08-10 07:22:27', '2021-08-10 07:22:27'),
(24, 7, 24, '2021-08-05', '2021-08-10', '2021-08-10 07:22:34', '2021-08-10 07:44:26'),
(25, 9, 27, '2021-02-08', NULL, '2021-08-10 07:24:52', '2021-08-10 07:24:52'),
(26, 9, 20, '2021-04-05', '2021-08-10', '2021-08-10 07:25:08', '2021-08-10 07:44:24'),
(27, 9, 34, '2021-03-18', NULL, '2021-08-10 07:25:27', '2021-08-10 07:25:27'),
(28, 10, 50, '2021-08-05', NULL, '2021-08-10 07:25:48', '2021-08-10 07:25:48'),
(29, 10, 44, '2021-03-08', NULL, '2021-08-10 07:26:00', '2021-08-10 07:26:00'),
(30, 10, 8, '2021-08-04', '2021-08-10', '2021-08-10 07:26:09', '2021-08-10 07:44:14'),
(31, 10, 6, '2021-08-05', NULL, '2021-08-10 07:26:15', '2021-08-10 07:26:15'),
(32, 1, 3, '2021-06-07', NULL, '2021-08-10 07:26:49', '2021-08-10 07:26:49'),
(33, 1, 39, '2021-05-05', '2021-08-10', '2021-08-10 07:27:12', '2021-08-10 07:44:29');

-- --------------------------------------------------------

--
-- Table structure for table `knjige`
--

CREATE TABLE `knjige` (
  `knjigaID` bigint(20) UNSIGNED NOT NULL,
  `imeKnjige` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autorID` bigint(20) UNSIGNED NOT NULL,
  `izdavacID` bigint(20) UNSIGNED NOT NULL,
  `zanrID` bigint(20) UNSIGNED NOT NULL,
  `kolicina` int(11) NOT NULL,
  `ocena` double(8,2) NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `knjige`
--

INSERT INTO `knjige` (`knjigaID`, `imeKnjige`, `autorID`, `izdavacID`, `zanrID`, `kolicina`, `ocena`, `opis`, `created_at`, `updated_at`) VALUES
(1, 'Na Drini cuprija', 2, 1, 2, 8, 9.00, 'Mnogo dobra knjiga', NULL, NULL),
(2, 'Rupe u glavi', 1, 1, 1, 2, 7.00, 'Nagrađene knjige / Komedija / Domaći autori / Priče', NULL, NULL),
(3, 'Kovid 19+', 3, 1, 1, 3, 9.00, 'Trileri / Komedija / Horor / Domaći autori / Fantastika / Priče', NULL, NULL),
(4, 'Vernik, knjiga I – Vreme zla 3', 4, 1, 4, 8, 9.00, 'Nagrađene knjige / Istorijski / Drama / Domaći autori / Vreme zla', NULL, NULL),
(5, 'Mit o ptici', 5, 1, 5, 12, 9.00, 'Domaći autori / E-knjige / Poezija', NULL, NULL),
(6, 'Dum-dum - Potpisan primerak', 6, 1, 6, 3, 5.00, 'Domaći autori / Priče / Potpisane knjige', NULL, NULL),
(7, 'Zamalek', 7, 1, 4, 6, 9.00, 'Nagrađene knjige / Istorijski / Drama / Domaći autori / E-knjige', NULL, NULL),
(8, 'Hajduk ostaje Hajduk', 8, 1, 7, 19, 9.00, 'Domaći autori / Knjige za decu / Serijal o Hajduku', NULL, NULL),
(9, 'Nisam kriva', 9, 1, 1, 4, 8.00, 'Drama / Trileri / Domaći autori / E-knjige', NULL, NULL),
(10, 'Nemiri', 2, 1, 9, 3, 10.00, 'Stihovi u prozi', NULL, NULL),
(11, 'Oko otoka', 1, 1, 4, 4, 8.00, 'Istorijski / Domaći autori / E-knjige', NULL, NULL),
(12, 'Hanibal', 10, 2, 10, 4, 8.00, 'Bogataš koji je zbog Lektera osakaćen. Korumpirani italijanski policajac željan slave i novca.', NULL, NULL),
(13, 'Covek bez granica', 11, 2, 2, 8, 8.00, 'Suočen sa bliskom smrću, Hose Marija Alvarez utrkuje se s vremenom kako bi sveo račune svog burnog finansijskog i ličnog života.', NULL, NULL),
(14, 'Renesansa za Renatu', 12, 2, 2, 3, 9.00, 'U ovoj knjizi se kroz prepisku razdvojenih ljubavnika talijanska i dubrovačka renesansa susreću sa romantičarskim duhom XIX veka, a ukusi petrarkističke lirike sa lascivnošću folklornog stvaraoca.', NULL, NULL),
(15, 'Drustvo Dzejn Ostin', 13, 2, 2, 0, 10.00, '\"Svi mi, svi do jednog, na kraju živimo sa tugom. Odmah po završetku Drugog svetskog rata, u malom engleskom selu Coton, neobicna grupa istomišljenika okupila se kako bi ostvarila poduhvat vredan divljenja.', NULL, NULL),
(16, 'Igra s\' vukovima', 14, 2, 2, 4, 10.00, 'Prvi put na srpskom jeziku. Roman po kojem je snimljen legendarni film ovenčan sa 7 Oskara. Priča o iskonskoj potrebi za otkrivanjem sopstvenog identiteta.', NULL, NULL),
(17, 'Putujuće Kazalište', 15, 2, 11, 12, 7.00, 'Peti roman Zorana Ferića, Putujuće kazalište, impresivna je porodična saga u kojoj se prelamaju sudbine autorovih živopisnih predaka i tragične slike naše zajedničke prošlosti.', NULL, NULL),
(18, 'Dvadeset peti sat', 16, 2, 11, 4, 6.00, 'Pandemija je. Die Pandemie, ovako izgovaraju ovu strašnu reč u Nemačkoj. La pandémie, kažu je na francuskom. Kroz prozor gledam proleće.', NULL, NULL),
(19, 'Dugodnevnica', 17, 2, 11, 0, 10.00, 'Likovi romana Dugodnevica traće sopstvene živote skriveni iza ličnih paravana, daleko od bučne i razmetljive gomile. Oni su usamljenici u megalopolisu.', NULL, NULL),
(20, 'Plač mačke Božije', 18, 2, 11, 8, 5.00, 'Roman posvećen Goranu Paskalјeviću, slavnom reditelјu, iz pera njegovog dugogodišnjeg prijatelјa!„Hoću da snimim još jedan, drugačiji film o bolesnoj devojčici.', NULL, NULL),
(21, 'Puding od vanile', 20, 2, 12, 1, 6.00, 'Za mene bi bilo mnogo bolje ne objašnjavati kakva je ovo knjiga. Ne bih htjela da pomislite kako ćete uz njenu pomoć naučiti kuhati puding od vanilije, pa kad shvatite da to nije to, krenuti nazad u Lagunu i tražiti povrat novca.', NULL, NULL),
(22, 'Priče o muškom i druge pripovetke', 20, 3, 13, 1, 10.00, 'Niko nikada u srpskoj književnosti nije pisao tako strastveno i zavodljivo o Banatu, i Vojvodini uopšte, kao što je to činio Miloš Crnjanski. Veliki pisac sledi i osvaja događaje u sebi i u prostoru, ali doživljaj iz događaja poklanja čitaocu.', NULL, NULL),
(23, 'Pesak i zvezde 3', 21, 3, 6, 0, 9.00, 'Zašto pesak i zvezde?\r\n\r\nZato što je svako zrnce peska na Zemlji deo beskrajne Vaseljene i zvezdanog neba iznad nas. U Tihom okeanu postoji ostrvo. Na njemu se nalazi plaža Hošizuna no hama. Puna je zvezdanih zrnaca peska.', NULL, NULL),
(24, 'Izgubljena dama', 22, 3, 2, 5, 9.00, 'Dvanaestogodišnji Nil Herbert, opčinjen je mladom Marijan Forester, suprugom vremešnog kapetana ključnog za dovođenje železničke pruge na Zapad.', NULL, NULL),
(25, 'Elijevo obećanje', 23, 3, 2, 2, 4.00, 'Elijevo obećanje je vešto napisan istorijski roman čija se radnja proteže kroz tri različite dekade: u Poljskoj za vreme nacističke okupacije, u Američkoj zoni u posleratnoj Nemačkoj i u Sjedinjenim Državama za vreme rata u Vijetnamu.', NULL, NULL),
(26, 'Vrlina nacionalizma', 24, 4, 1, 1, 6.00, 'Ovo je jedna od onih knjiga koje na izvanredan način zahvataju previranja i teme vlastitog vremena, zbog čega nesumnjivo obeležavaju period u kome su se pojavile.', NULL, NULL),
(27, 'Medijske industrije', 25, 4, 1, 0, 8.00, 'Medijske industrije predstavljaju pojavu koja se dugo rađala i razvijala i dosegla takve razmere da je postala jedan od najvažnijih faktora savremenog društva, koji utiče na skoro sva društvena kretanja.', NULL, NULL),
(28, '2017', 26, 5, 2, 1, 10.00, 'Na stogodišnjicu Oktobarske revolucije, 2017. godine, u Rusiji počinje nova revolucija, u znaku istih ideologija i u identičnim uniformama koje su korišćene i pre sto godina.', NULL, NULL),
(29, 'ALEKSANDAR I SMRT', 27, 5, 2, 5, 7.00, 'Jedan veliki trenutak, u isto vreme i surovo stvaran i neizrecivo simboličkog karaktera, obeležava pripovedanje u romanu Aleksandar i smrt Slobodana Mickovića. Taj trenutak jeste smrt Aleksandra Makedonskog.', NULL, NULL),
(30, 'Azbuka za neposlusne', 28, 5, 2, 4, 2.00, 'Roman Azbuka za neposlušne Venka Andonovskog i u strukturi i na idejnom i misaonom planu ima dvojnost koja uznemirava, obezbeđuje dramski sukob u radnji i koja postaje mamac za čitaoca i uslov dinamike i razvoja priče.', NULL, NULL),
(31, 'Balerina', 29, 5, 2, 2, 9.00, 'Balerina, balerina  je roman o petnaestogodišnjoj autističnoj devojci koja je na mentalnom nivou trogodišnjeg deteta.', NULL, NULL),
(32, 'Bunar', 30, 5, 2, 17, 3.00, 'Smeštena u jedno malo makedonsko mesto, radnja romana Bunar Dimitra Baševskog prikazuje balkanski svet u malom.\r\nU svakodnevici tog prostora progovaraju mit i istorija, strasti i omraze, drevnost i savremenost.', NULL, NULL),
(33, 'Četvrtak', 31, 5, 2, 4, 4.00, 'Četvrtak Zdravke Evtimove je roman o sudbini istočnoevropskih društava posle pada Berlinskog zida, kao i o ljudima koji u novim životnim okolnostima pokušavaju da se izbore za razumevanje vlastitog sveta i za mesto u tom svetu.', NULL, NULL),
(34, 'Djakova smrt', 32, 5, 2, 6, 3.00, 'U romanu Dijakova smrt Dragi Mihajlovski čitaoca uvodi u vreme ranog prodora Osmanlija na Balkan, apokaliptično doba između maričke i kosovske bitke.', NULL, NULL),
(35, 'Evakuator', 33, 5, 2, 5, 6.00, 'Kojih pet ljudi spasiti od predstojeće apokalipse?\r\nOblikovan kao društveni roman sa snažnim kritičkim potencijalom, Evakuator na upečatljiv način prikazuje tranzicione drame i napetosti savremenog ruskog društva.', NULL, NULL),
(36, 'Igra anđela i šišmiša', 34, 5, 2, 5, 5.00, 'Roman bez mnogo poteškoća može da se čita i kao slovenačka replika na planetarni književni hit, proslavljeni Trejnspoting škotskog pisca Irvina Velša.', NULL, NULL),
(37, 'Kraj igre', 35, 5, 2, 2, 6.00, 'Psihološko-kriminalistički roman koji u sebi ujedinjuje Zločin i kaznu Dostojevskog sa elementima humora, groteske i apsurda.', NULL, NULL),
(38, 'Lampa', 36, 5, 2, 5, 6.00, 'Lampa je složeno stilizovana alegorija o moralnom i socijalnom iskustvu autorove generacije.', NULL, NULL),
(39, 'Ornament', 37, 5, 2, 2, 5.00, 'Ornament je životno delo klasika slovačke književnosti XX veka. Ovaj roman je drama jednog prijateljstva, istorija progona, susret s velikim mehanizmom društvene moći. Sve do poslednje stranice, čitaoca Ornamenta pratiće atmosfera tuge i teskobe.', NULL, NULL),
(40, 'Poslednji seljaci', 38, 5, 2, 4, 9.00, 'Roman Petreta M. Andreevskog Poslednji seljaci govori o jednom selu kao o prokletom mestu koje nastanjuju tvrdoglavi, svojeglavi, ćudljivi, zavađeni, zlobni i samoljubivi ljudi, koje na delanje pokreću strahovi, a sputavaju nesreće.', NULL, NULL),
(41, 'JavaScript sveoubuhvatan vodic', 39, 6, 14, 5, 7.00, 'Ova knjiga pokriva JavaScript jezik i JavaScript API-je implementirane od strane veb čitača i Noda.', NULL, NULL),
(42, 'Ponovo osudjen', 40, 6, 2, 15, 8.00, 'Fatos Ljubonja je zivi spomenik zajednickih konstanti istorijskog i politickog stradanja ovdasnjih naroda.', NULL, NULL),
(43, 'Ljubav u Orlovatu', 41, 6, 6, 4, 8.00, 'Kad čovek počne da čita zbirku priča Ljubav u Orlovatu, on se neminovno, od prvih reči seti nekih ranijih knjiga Šimona Đarmatija vezanih za Banat.', NULL, NULL),
(44, 'Lelo moja', 42, 6, 5, 4, 8.00, 'Pred vama je poezija eruptivne snage, koja nije za mlake i preosetljive, niti za grube i neosetljive, nego, pre svega, za one koji imaju snage, smelosti i senzibiliteta da se suoče sa jakim poetskim viđenjem i doživljajem sveta.', NULL, NULL),
(45, 'Peloponeski rat', 43, 6, 4, 5, 8.00, 'I antička i moderna nauka slažu se u oceni da je Tukidid najveći istoričar antike. I dok Herodota nazivaju \"ocem istorije\", Tukidid je opštepriznat kao osnivač naučne istoriografije.', NULL, NULL),
(46, 'More, poput vina tamno', 44, 6, 15, 2, 4.00, '\"More poput vina tamno\" je knjiga od 7 paranoidno \"tihih\" priča Roberta Ejkmana.', NULL, NULL),
(47, 'Hiljadu noci s\' tobom', 45, 6, 2, 4, 9.00, 'Šta se dogodi kad ljubav zgasne, kad nestane strasti i život postane pustinja? Da li je beg rešenje ili samo sidro koje nas vuče sve dublje u mrak? Šta treba da se desi kako bi se život vratio na ono što je nekad bio?', NULL, NULL),
(48, 'Djavo pobedjuje na Vimbldonu', 46, 6, 2, 1, 9.00, 'Lorin Vajsberger nam donosi zabavnu i duhovito napisanu priču o mladoj Čarli, finoj i dobroj devojci koja je jedna od najvećih nada svetskog tenisa.', NULL, NULL),
(49, 'Holandjanka', 47, 6, 2, 5, 10.00, 'Elen Kit nas smešta u period Drugog svetskog rata na dva različita kontinenta. U Amsterdamu hapse Marajke de Graf i njenog muža i šalju ih u logor u Nemačkoj gde će ona biti dovedena u situaciju da bira.', NULL, NULL),
(50, 'Ostrva ljubavi', 48, 6, 16, 1, 10.00, 'Nije svaki čovek samo ostrvo nego i grad. Iako tako ne izgleda, zapravo je svaki grad novo ostrvo ljubavi, sa svojim granicama, hridima, urbanim uvalama.', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_07_20_110009_create_table_autor', 1),
(5, '2021_07_20_110529_create_table_publisher', 1),
(6, '2021_07_20_110626_create_table_genre', 1),
(7, '2021_07_20_113023_create_table_book', 1),
(8, '2021_07_20_113035_create_table_rent_book', 1),
(9, '2021_07_31_111635_create_post_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `postID` bigint(20) UNSIGNED NOT NULL,
  `userID` bigint(20) UNSIGNED NOT NULL,
  `knjigaID` bigint(20) UNSIGNED NOT NULL,
  `opis` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`postID`, `userID`, `knjigaID`, `opis`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'WOWWWW', NULL, NULL),
(2, 1, 2, 'Steta sto je trenutno nema!!!!!!!!!', '2021-08-08 14:34:19', '2021-08-08 14:34:19'),
(3, 1, 2, 'DObraa knjiga.....', '2021-08-10 07:27:49', '2021-08-10 07:27:49'),
(4, 10, 6, 'Nadam se da ce biti i sledeci deo.', '2021-08-10 07:28:15', '2021-08-10 07:28:15'),
(5, 10, 3, 'Skoro vecu glupost nisam video.... Nadam se da nece biti vise na stanju da se i ostali ne prevare', '2021-08-10 07:28:46', '2021-08-10 07:28:46'),
(6, 2, 4, 'Skoro vecu glupost nisam video.... Nadam se da nece biti vise na stanju da se i ostali ne prevare', '2021-08-10 07:29:03', '2021-08-10 07:29:03'),
(7, 5, 5, 'Au kakva glupost', '2021-08-10 07:29:28', '2021-08-10 07:29:28'),
(8, 5, 7, 'Zeljno iscekujem nastavak :D :D :D', '2021-08-10 07:29:46', '2021-08-10 07:29:46'),
(9, 7, 8, 'WOWWWWWWWW', '2021-08-10 07:30:10', '2021-08-10 07:30:10'),
(10, 7, 9, 'Bas sam se rasplakao na ovu pricu', '2021-08-10 07:30:30', '2021-08-10 07:30:30'),
(11, 7, 10, 'KAKO JE PROCITATI KAD NIJE NA STANJU????????????????????', '2021-08-10 07:30:54', '2021-08-10 07:30:54');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` bigint(20) UNSIGNED NOT NULL,
  `firstName` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `privilegeLevel` enum('ADMINISTRATOR','USER','EDITOR') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USER',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(250) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `firstName`, `lastName`, `privilegeLevel`, `password`, `adress`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Marko', 'Lazarevic', 'ADMINISTRATOR', '$2y$10$RzUNxxYCwmaJ2Q3zC9JBiOvKPjC88NM1V9eTu8G9YmM8RI1wBsCJa', 'Nikole Doksata 71', 'ml@gmail.com', NULL, NULL, '2021-08-08 14:26:01', '2021-08-08 14:26:01'),
(2, 'Ivan', 'Todorovic', 'EDITOR', '$2y$10$FESzXFol7CkSiRDshHS3/eaqdnLSHqGEk5YvjUIbJcghrQIaiGq3O', 'asd123123', 'ivan@gmail.com', NULL, NULL, '2021-08-08 14:37:30', '2021-08-08 14:37:30'),
(3, 'Marko', 'Atic', 'USER', '$2y$10$nXol0241zYI9RcGzpNVqTO4TU2z48XaJbsrxv1dmOw6r9POWTh1nq', 'Aticeva 5', 'mAtic@gmail.com', NULL, NULL, '2021-08-08 15:33:00', '2021-08-08 15:33:00'),
(4, 'Aleksandar', 'Petrovic', 'USER', '$2y$10$dNJ.Kib3kif9wHdANZr5huaHwkCg5Dkd6lvUwBnb0.016FJmC8j5G', 'Petrovaradinska 12', 'ap@gmail.com', NULL, NULL, '2021-08-08 15:51:21', '2021-08-08 15:51:21'),
(5, 'Ana', 'Miljkovic', 'USER', '$2y$10$EjmMe.tfG.bds36ZlSFE5en.jS4XamNeLDZ3sZM5WCIbrkkM9ClvS', 'Miljkovska 8', 'am@gmail.com', NULL, NULL, '2021-08-08 15:55:44', '2021-08-08 15:55:44'),
(6, 'Filip', 'Andric', 'EDITOR', '$2y$10$7ZNkrAr24Z4C00pkmiSbBuPFK/rHD.adhWOLavGuQ8n5UPRctY2P.', 'Andriceva 6', 'fA@gmail.com', NULL, NULL, '2021-08-08 15:56:49', '2021-08-08 15:56:49'),
(7, 'Petar', 'Petrovic', 'USER', '$2y$10$HDtKzuegPebYY.l.ZlWxauEDsgrh13kmVJ86NO7DHe3w/Jn7myyhi', 'Petroviceva 19', 'petroviccc@gmail.com', NULL, NULL, '2021-08-10 07:16:28', '2021-08-10 07:16:28'),
(8, 'Milan', 'Antonic', 'USER', '$2y$10$pcdHlAsJcq67yx5YFq5iGehPVIZbNHSWxQPBpKuo9UG/wMGDyiSOW', 'Milanova 12', 'mAntonic@gmail.com', NULL, NULL, '2021-08-10 07:17:14', '2021-08-10 07:17:14'),
(9, 'Ognjen', 'Popovic', 'USER', '$2y$10$UuZyqir2fAVeS5LFgkBUvO/W7MmkbuidH2c8LAI.fhfvAeUZxMmpu', 'Popoviceva 22', 'opop@gmail.com', NULL, NULL, '2021-08-10 07:18:34', '2021-08-10 07:18:34'),
(10, 'Ognjen', 'Ribic', 'USER', '$2y$10$5pWHih8q2ZhiqL07QxLL/ubdsdOlMPLwt5VjKOnmKaebkBOsRRyvi', 'Ribiceva 12', 'oR@gmail.com', NULL, NULL, '2021-08-10 07:19:00', '2021-08-10 07:19:00');

-- --------------------------------------------------------

--
-- Table structure for table `zanr`
--

CREATE TABLE `zanr` (
  `zanrID` bigint(20) UNSIGNED NOT NULL,
  `imeZanra` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `zanr`
--

INSERT INTO `zanr` (`zanrID`, `imeZanra`, `created_at`, `updated_at`) VALUES
(1, 'Triler', '2021-08-08 14:26:44', '2021-08-08 14:26:44'),
(2, 'Roman', '2021-08-08 14:26:49', '2021-08-08 14:26:49'),
(3, 'Komedija', '2021-08-08 14:36:11', '2021-08-08 14:36:11'),
(4, 'Istorijski', '2021-08-08 14:36:25', '2021-08-08 14:36:25'),
(5, 'Poezija', '2021-08-08 14:36:44', '2021-08-08 14:36:44'),
(6, 'Price', '2021-08-08 14:57:06', '2021-08-08 14:57:06'),
(7, 'Knjige za decu', '2021-08-08 15:00:23', '2021-08-08 15:00:23'),
(9, 'Stihovi u prozi', '2021-08-08 15:02:57', '2021-08-08 15:02:57'),
(10, 'Misterija', '2021-08-08 15:14:05', '2021-08-08 15:14:05'),
(11, 'Domaci roman', '2021-08-08 15:28:24', '2021-08-08 15:28:24'),
(12, 'Esej', '2021-08-08 16:18:21', '2021-08-08 16:18:21'),
(13, 'Pripovetka', '2021-08-08 16:24:26', '2021-08-08 16:24:26'),
(14, 'Racunari', '2021-08-10 06:34:12', '2021-08-10 06:34:12'),
(15, 'Horor', '2021-08-10 07:07:04', '2021-08-10 07:07:04'),
(16, 'Ljubavni roman', '2021-08-10 07:13:24', '2021-08-10 07:13:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`autorID`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `izdavac`
--
ALTER TABLE `izdavac`
  ADD PRIMARY KEY (`izdavacID`),
  ADD UNIQUE KEY `izdavac_email_unique` (`email`);

--
-- Indexes for table `izdavanjeknjiga`
--
ALTER TABLE `izdavanjeknjiga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `izdavanjeknjiga_userid_foreign` (`userID`),
  ADD KEY `izdavanjeknjiga_knjigaid_foreign` (`knjigaID`);

--
-- Indexes for table `knjige`
--
ALTER TABLE `knjige`
  ADD PRIMARY KEY (`knjigaID`),
  ADD KEY `knjige_autorid_foreign` (`autorID`),
  ADD KEY `knjige_izdavacid_foreign` (`izdavacID`),
  ADD KEY `knjige_zanrid_foreign` (`zanrID`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`postID`),
  ADD KEY `post_userid_foreign` (`userID`),
  ADD KEY `post_knjigaid_foreign` (`knjigaID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `zanr`
--
ALTER TABLE `zanr`
  ADD PRIMARY KEY (`zanrID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autor`
--
ALTER TABLE `autor`
  MODIFY `autorID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `izdavac`
--
ALTER TABLE `izdavac`
  MODIFY `izdavacID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `izdavanjeknjiga`
--
ALTER TABLE `izdavanjeknjiga`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `knjige`
--
ALTER TABLE `knjige`
  MODIFY `knjigaID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `postID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `zanr`
--
ALTER TABLE `zanr`
  MODIFY `zanrID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `izdavanjeknjiga`
--
ALTER TABLE `izdavanjeknjiga`
  ADD CONSTRAINT `izdavanjeknjiga_knjigaid_foreign` FOREIGN KEY (`knjigaID`) REFERENCES `knjige` (`knjigaID`) ON DELETE CASCADE,
  ADD CONSTRAINT `izdavanjeknjiga_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `knjige`
--
ALTER TABLE `knjige`
  ADD CONSTRAINT `knjige_autorid_foreign` FOREIGN KEY (`autorID`) REFERENCES `autor` (`autorID`) ON DELETE CASCADE,
  ADD CONSTRAINT `knjige_izdavacid_foreign` FOREIGN KEY (`izdavacID`) REFERENCES `izdavac` (`izdavacID`) ON DELETE CASCADE,
  ADD CONSTRAINT `knjige_zanrid_foreign` FOREIGN KEY (`zanrID`) REFERENCES `zanr` (`zanrID`) ON DELETE CASCADE;

--
-- Constraints for table `post`
--
ALTER TABLE `post`
  ADD CONSTRAINT `post_knjigaid_foreign` FOREIGN KEY (`knjigaID`) REFERENCES `knjige` (`knjigaID`) ON DELETE CASCADE,
  ADD CONSTRAINT `post_userid_foreign` FOREIGN KEY (`userID`) REFERENCES `users` (`userID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
