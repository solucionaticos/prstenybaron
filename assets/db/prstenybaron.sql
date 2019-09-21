-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-09-2019 a las 04:10:03
-- Versión del servidor: 10.2.23-MariaDB-10.2.23+maria~xenial-log
-- Versión de PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `prstenybaron`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `category`
--

CREATE TABLE `category` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `category`
--

INSERT INTO `category` (`id`, `name`, `created_at`) VALUES
(1, 'Bílé zlato', '2019-08-20 20:23:39'),
(2, 'Kombinované zlato', '2019-08-20 20:23:44'),
(3, 'Žluté zlato', '2019-08-20 20:24:02'),
(4, 'Červené zlato', '2019-08-20 20:24:19');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `image`
--

CREATE TABLE `image` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `image`
--

INSERT INTO `image` (`id`, `product_id`, `image`, `created_at`) VALUES
(1, 12, '29df0-b38.png', '2019-08-23 07:13:45'),
(2, 12, 'b8495-b50.png', '2019-08-23 07:13:56'),
(3, 12, 'aafab-b24.png', '2019-08-23 07:14:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `order`
--

CREATE TABLE `order` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `address` varchar(250) NOT NULL DEFAULT '',
  `city` varchar(50) NOT NULL DEFAULT '',
  `zip_code` varchar(20) NOT NULL DEFAULT '',
  `contact_telephone` varchar(20) NOT NULL DEFAULT '',
  `contact_email` varchar(250) NOT NULL DEFAULT '',
  `type_male` varchar(50) NOT NULL DEFAULT '',
  `type_female` varchar(50) NOT NULL DEFAULT '',
  `size_male` varchar(50) NOT NULL DEFAULT '',
  `size_female` varchar(50) NOT NULL DEFAULT '',
  `type_stone` int(11) NOT NULL,
  `num_stone` varchar(50) NOT NULL,
  `material` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `text_engraving_male` varchar(100) NOT NULL DEFAULT '',
  `text_engraving_female` varchar(100) NOT NULL DEFAULT '',
  `takeover_method` int(11) NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `order`
--

INSERT INTO `order` (`id`, `name`, `address`, `city`, `zip_code`, `contact_telephone`, `contact_email`, `type_male`, `type_female`, `size_male`, `size_female`, `type_stone`, `num_stone`, `material`, `color`, `text_engraving_male`, `text_engraving_female`, `takeover_method`, `notes`, `created_at`) VALUES
(1, 'oijoi', 'oijoj', 'oijojoin', 'ojoijoi', 'oijoijoi', 'oijoi', 'oijoi', 'oijoi', 'oijoij', 'uyhiuh', 2, 'iuhiuhiu', 2, 1, 'sdsdfs', 'csdas', 0, 'erererter', '2019-08-27 22:52:46'),
(2, 'David 2', 'kilo 1', 'kilo 2', 'kilo 3', 'kilo 4', 'kilo 5', 'kilo 6', 'kilo 7', 'kilo 8', 'kilo 9', 1, 'kilo 11', 1, 1, 'kilo 13', 'kilo 12', 0, 'kilo 14', '2019-08-28 18:19:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pages`
--

CREATE TABLE `pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL DEFAULT '',
  `code` varchar(50) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `meta_keywords` varchar(250) NOT NULL DEFAULT '',
  `meta_description` text NOT NULL,
  `meta_image` varchar(250) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pages`
--

INSERT INTO `pages` (`id`, `title`, `code`, `description`, `meta_keywords`, `meta_description`, `meta_image`, `created_at`) VALUES
(1, 'Úvod', 'uvod', '<div>\n Snubní prsteny značky Baron vyrábíme ze zlata a stříbra. Snubní prsteny můžete vybírat z našich vzorků, které průběžně aktualizujeme. Nabízíme jak klasické vzory, tak poslední novinky mezi snubními prsteny.</div>\n<div>\n  </div>\n<div>\n Snubní prsteny půlkulaté jsou oblíbené díky své praktičnosti, nestárnoucímu designu a příznivé ceně. Nabízíme i luxusní snubní prsteny s diamanty a zirkony v různých barevných kombinacích s různými typy matu, šířek a profilů. Líbí se Vám originální a netradiční snubní prsteny? Nabízíme snubní prsteny na zakázku dle Vašeho vlastního návrhu, kombinací a variant je nekonečně. Každý snubní prsten může být originál, záleží pouze na Vás!</div>\n<div>\n  </div>\n<div>\n Kubické zirkony zasazujeme do snubních prstenů zdarma, zdarma je také vnitřní rytina a krabička na prsteny. Pozáruční servis a údržba snubních prstenů je samozřejmostí, našim výrobkům věříme. Vámi dodané zlato, části prstenu, náušnic a řetízků jakékoliv ryzosti, může být použito k uhrazení části nebo i celé zakázky.</div>\n<div>\n  </div>\n<div>\n Těšíme se na návštěvu v naší zlatnické dílně, kde výroba snubních prstenů probíhá. Tady budete moci všechny prsteny zhlédnout a doslova osahat. Nabízíme Vám nezávazné telefonické konzultace, kdy s Vámi probereme veškeré Vaše dotazy a přání.</div>\n<div>\n  </div>\n<div>\n S pozdravem Váš Antonín Baroň.</div>\n', 'rest', '<p>\n test</p>\n', '', '2019-09-17 15:30:44'),
(2, 'O nás', 'o_nas', '<div>\n Jmenuji se Antonín Baroň a zlatníkem jsem od roku 1992. Posledních 15 let jsem se věnoval výrobě a designu snubních prstenů pro několik firem zabývajících se prodejem snubních prstenů na českém, ale i zahraničním trhu. V roce 2013 jsem se rozhodl veškeré své nastřádané odborné znalosti a zkušenosti s výrobou snubních prstenů zaštítit svou vlastní značkou BARON. Svým zákazníkům nabízím dlouholeté zkušenosti, kvalitu, individuální přístup, komplexní servis v oboru zlatník/klenotník a v neposlední řadě příznivé ceny.</div>\n<div>\n  </div>\n<div>\n Přejete si luxusní, originální snubní prsteny? Obraťte se na nás. S výběrem Vám rádi poradíme a vyjdeme Vám vstříc i pokud toužíte po netradičních snubních prstenech. Poskytujeme i rytí do snubních prstenů, které může být stálou připomínkou toho, co ke svému protějšku cítíte.</div>\n', '', '', '', '2019-08-23 04:35:54'),
(3, 'Zlato', 'zlato', '<div>\n Snubní prsteny vyrábíme nejčastěji ze zlata o ryzosti 14 karátů 585/1000 bílé, žluté a červené barvy. Snubní prsteny z bílého zlata na přání zákazníků galvanicky pokovujeme vrstvou rhodia, čímž docílíme stříbřitě bílé barvy. Vámi dodané zlato, části prstenů, náušnic a řetízků jakékoliv ryzosti, může být použito k uhrazení části nebo i celé zakázky. Starší klenoty se tak mohou podílet na splnění vašeho snu o luxusních snubních prstenech.</div>\n<div>\n  </div>\n<div>\n Kvalita zlata je kontrolována Puncovním úřadem. Všechny naše snubní prsteny prošly touto zkouškou a jsou označeny výrobní značkou A.B., ryzostní značkou a značkou Státní zkušebny - Puncovnim úřadem. Tímto je státem zaručena kvalita a správná ryzost zlata, což je pro každého zákazníka to nejdůležitější.</div>\n<div>\n  </div>\n<div>\n Zlato je relativně měkký kov a lze jej poměrně snadno mechanicky poškodit. Doporučujeme proto při manuálních činnostech, jako jsou obsluha míchačky nebo adrenalinové sporty, snubní prsteny sundávat. Pro Vás, kteří nechtějí své prsteny sundávat za žádných okolností, navrhneme design originálních snubních prstenů, který bude praktický a vhodný pro manuální práce či sport. Vše můžete doplnit rytím do snubních prstenů, které je součástí naší nabídky. Každý snubní prsten se může stát netradičním!</div>\n', '', '', '', '2019-08-23 04:36:41'),
(4, 'Kameny', 'kameny', '<div>\n Snubní prsteny by měly být na celý život a tomu by měl odpovídat i vsazený kámen. V přírodě po miliony let vznikal drahokam, který je věčný. Je to diamant-nejtvrdší známý nerost. Diamant s briliantovým výbrusem a prsteny představují dokonalé spojení pro luxusní snubní prsteny. Není třeba obávat se ceny briliantu, vzhledem k nejčastěji zasazovaným velikostem se cena pohybuje od 350 do 1600 Kč.</div>\n<div>\n  </div>\n<div>\n Do snubních prstenů zasazujeme také kubické zirkony. Jejich výhodou je jednoznačně cena. Do našich prstenů je vsazujeme zdarma. Nevýhodou jsou nepatrně horší optické vlastnosti a nižší tvrdost oproti diamantu a tím i větší náchylnost k mechanickému poškození. Kubický zirkon není na věky, ale i on může být na celý život. Množství a druh kamenů lze individuálně upravovat! Nabízíme tak bohatou nabídku originálních a netradičních snubních prstenů. Využít můžete i naší nabídky rytí do snubních prstenů. Záleží pouze na Vašem přání.</div>\n', '', '', '', '2019-08-23 04:37:19'),
(5, 'Důležité Informace', 'dulezite_informace', '<div>\n <strong>Cena</strong></div>\n<div>\n Pro přesný výpočet ceny vyplňte přiložený formulář. Ceny jsou spočítány pro průměrné velikosti 52 a 62 a jsou tedy pouze orientační.</div>\n<div>\n  </div>\n<div>\n Vámi dodané zlato, časti prstenu, náušnic a řetízků jakekoliv ryzosti může být použito k uhrazení části nebo i celé zakázky.</div>\n<div>\n  </div>\n<div>\n Můžete také navštívit naši zlatnickou dílnu v srdci Českého ráje a výběr snubních prstenů s nezávaznou objednávkou provést na místě. Prohlédnete si naše luxusní a originální snubní prsteny na vlastní oči a uvidíte, které Vás osloví. S naší pomocí si i sami můžete navrhnout netradiční snubní prsteny.</div>\n<div>\n  </div>\n<div>\n <strong>Rytina do prstenu</strong></div>\n<div>\n Využijte naší služby rytí do snubních prstenů, které provádíme zdarma, dle Vašeho přání. Písmo používáme klasické psací a tiskací. Nejčastější rytina je datum svatby a jména snoubenců.</div>\n<div>\n  </div>\n<div>\n <strong>Výběr správné velikosti je možné provést následovně:</strong></div>\n<ol>\n <li>\n  Návštěvou naší zlatnické dílny, kde Vám změříme prsty mírami, které odpovídají Vašim budoucím snubním prstenům.</li>\n <li>\n  Po telefonické domluvě Vám zašleme prstenové míry poštou dle Vámi vybraných snubních prstenů.</li>\n <li>\n  Návštěvou prodejny zlatých a stříbrných šperků ve Vašem okolí a požádáním o změření a určení velikosti.</li>\n</ol>\n<p>\n Měření provázkem či proužkem papíru nedoporučujeme!</p>\n<div>\n  </div>\n<div>\n <strong>Dodací doba</strong></div>\n<div>\n Termíny dodání se pohybují od 3 dnů do 3 týdnů. Snubní prsteny Vám budou dodány i s krabičkou.</div>\n<div>\n  </div>\n<div>\n <strong>Postup objednání</strong></div>\n<ol>\n <li>\n  Po vybrání požadovaného vzoru vyplňte objednávkový formulář nebo proveďte objednávku telefonicky. Tel.: 732450054</li>\n <li>\n  Obratem bude na Váš email zaslán potvrzený formulář a číslo účtu. Proveďte kontrolu údajů, především adresu, velikosti prstenů, typ prstenů a specifikaci rytiny do prstenů.</li>\n <li>\n  Vše odsouhlasíte zasláním 30% zálohy na náš účet. Po obdržení zálohy se nezávazná objednávka stává závaznou a Vaše prsteny jdou do výroby. O dokončení zakázky Vás budeme informovat emailem nebo telefonicky. Prsteny Vám budou zaslány v určeném termínu poštou na dobírku nebo si je můžete osobně převzít v naší provozovně. Každá zásilka je pojištěna a dopravce za ni ručí.</li>\n</ol>\n<div>\n <strong>Reklamace a záruka</strong></div>\n<div>\n Záruka se vztahuje na prokazatelné výrobní vady a na vady materiálu. Záruka se nevtahuje na deformace vnější silou, poškození povrchové úpravy vzniklé nesprávným používáním a mechanickým poškozením. Závady vzniklé v důsledku chybně zadaných informací zákazníkem v objednávkovém formuláři se jako důvod reklamace neuznávají.</div>\n', '', '', '', '2019-08-23 04:41:08');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `price_calculation`
--

CREATE TABLE `price_calculation` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `type_male` varchar(50) NOT NULL DEFAULT '',
  `type_female` varchar(50) NOT NULL DEFAULT '',
  `size_male` varchar(50) NOT NULL DEFAULT '',
  `size_female` varchar(50) NOT NULL DEFAULT '',
  `type_stone` int(11) NOT NULL,
  `num_stone` varchar(50) NOT NULL,
  `material` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `notes` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `price_calculation`
--

INSERT INTO `price_calculation` (`id`, `name`, `email`, `telephone`, `type_male`, `type_female`, `size_male`, `size_female`, `type_stone`, `num_stone`, `material`, `color`, `notes`, `created_at`) VALUES
(1, 'sad asdas', 'sdasd@sdsdfs.com', 'asd asd', 'asd as', 'asdas', 'asdas', 'asdas', 2, 'asdasdas', 2, 3, 'asdasdasdas', '2019-08-27 22:53:32'),
(2, 'David', 'solucionaticos@gmail.com', '3164176666', 'kilo 1', 'kilo 2', 'kilo 3', 'kilo 4', 2, 'kilo 5', 2, 2, 'kilo 6', '2019-08-28 18:16:44');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `product`
--

CREATE TABLE `product` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` varchar(250) NOT NULL DEFAULT '',
  `url` varchar(250) NOT NULL DEFAULT '',
  `description` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `sku` varchar(20) NOT NULL,
  `image` varchar(250) NOT NULL DEFAULT '',
  `material` varchar(250) NOT NULL DEFAULT '',
  `width` varchar(250) NOT NULL DEFAULT '',
  `price_size` decimal(11,2) NOT NULL,
  `price_brillants` decimal(11,2) NOT NULL,
  `meta_keywords` varchar(250) NOT NULL DEFAULT '\\0',
  `meta_description` text NOT NULL,
  `meta_image` varchar(250) NOT NULL DEFAULT '',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `product`
--

INSERT INTO `product` (`id`, `name`, `url`, `description`, `category_id`, `sku`, `image`, `material`, `width`, `price_size`, `price_brillants`, `meta_keywords`, `meta_description`, `meta_image`, `created_at`) VALUES
(1, 'BI', 'b1', '', 1, '', '7f387-b1.png', '', '', '0.00', '0.00', '', '', '', '2019-08-21 11:34:59'),
(2, 'B10', 'b10', '', 1, '', '90685-b10.png', '', '', '0.00', '0.00', '', '', '', '2019-08-21 11:34:36'),
(3, 'B20', 'b20', '', 1, '', 'bff3c-b20.png', '', '', '0.00', '0.00', '', '', '', '2019-08-21 11:35:16'),
(4, 'B24', 'b24', '', 1, '', 'f3537-b24.png', '', '', '0.00', '0.00', '', '', '', '2019-08-21 11:35:34'),
(5, 'B32', 'b32', '', 1, '', '7b6c9-b32.png', '', '', '0.00', '0.00', '', '', '', '2019-08-23 07:17:35'),
(6, 'B35', 'b35', '', 1, '', '4557e-b35.png', '', '', '0.00', '0.00', '', '', '', '2019-08-23 07:18:09'),
(7, 'B38', 'b38', '', 1, '', '82ef8-b38.png', '', '', '0.00', '0.00', '', '', '', '2019-08-23 07:18:09'),
(8, 'B50', 'b50', '', 1, '', 'ac0c3-b50.png', '', '', '0.00', '0.00', '', '', '', '2019-08-21 13:02:02'),
(9, 'B3', 'b3', '', 1, '', '2725c-b3.png', 'ZLATO 14 KT', '5 MM', '52.00', '0.00', '', '', '', '2019-08-21 15:09:32'),
(10, 'B36', 'b36', '', 1, '', 'b1c63-b36.png', 'ZLATO 14 KT', '4,5 MM', '52.00', '10.72', '', '', '', '2019-08-21 15:28:05'),
(11, 'B2', 'b2', '', 1, '', 'e1851-b2.png', 'ZLATO 14 KT', '4 MM', '52.00', '9155.00', '', '', '', '2019-08-23 07:18:09'),
(12, 'B11', 'b11', '<p>\n <span xss=\"removed\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span></p>\n<p>\n <span xss=\"removed\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span></p>\n', 1, '123456', '77dba-b11.png', 'ZLATO 14 KT', '4,5 MM', '52.00', '11.49', '', '', '', '2019-09-18 04:43:35'),
(13, 'B6', 'b6', '', 1, '', 'd22a5-b6.png', 'ZLATO 14 KT', '3,5 MM', '52.00', '9385.00', '', '', '', '2019-08-23 07:18:09'),
(14, 'B27', 'b27', '', 1, '', '2ff3b-b27.png', 'ZLATO 14 KT', '2,5 MM', '52.00', '0.00', '', '', '', '2019-08-23 07:18:09'),
(15, 'B4', 'b4', '', 1, '', 'bf328-b4.png', 'ZLATO 14 KT', '3 MM', '52.00', '7.56', '', '', '', '2019-08-23 07:18:09'),
(16, 'B29', 'b29', '', 1, '', '20573-b29.png', 'ZLATO 14 KT', '3 MM', '52.00', '0.00', '', '', '', '2019-08-23 07:18:09'),
(17, 'B5', 'b5', '', 1, '', '9ba42-b5.png', 'ZLATO 14 KT', '4 MM', '52.00', '0.00', '', '', '', '2019-08-21 15:28:56'),
(18, 'B33', 'b33', '', 1, '', '0ebd9-b33.png', 'ZLATO 14 KT', '4 MM', '52.00', '9.46', '', '', '', '2019-08-23 07:18:09'),
(19, 'B7', 'b7', '', 1, '', 'e19d0-b7.png', 'ZLATO 14 KT', '3,5 MM', '52.00', '9385.00', '', '', '', '2019-08-23 07:18:09'),
(20, 'B8', 'b8', '', 1, '', 'b47f8-b8.png', 'ZLATO 14 KT', '4,5 MM', '52.00', '15.85', '', '', '', '2019-08-23 07:18:09'),
(21, 'B12', 'b12', '', 1, '', '465fc-b12.png', 'ZLATO 14 KT', '5 MM', '52.00', '0.00', '', '', '', '2019-08-23 07:18:09'),
(22, 'B41', 'b41', '', 1, '', '2c9d5-b41.png', 'ZLATO 14 KT', '6 MM', '52.00', '0.00', '', '', '', '2019-08-23 07:18:09'),
(23, 'B28', 'b28', '', 1, '', '90c48-b28.png', 'ZLATO 14 KT', '3 MM', '52.00', '7.22', '', '', '', '2019-08-23 07:18:09'),
(24, 'B14', 'b14', '', 1, '', 'b2e25-b14.png', 'ZLATO 14 KT', '6 MM', '52.00', '13.47', '', '', '', '2019-08-23 07:18:09'),
(25, 'B15', 'b15', '', 1, '', '1ae9d-b15.png', 'ZLATO 14 KT', '4 MM', '52.00', '9.16', '', '', '', '2019-08-23 07:18:09'),
(26, 'B16', 'b16', '', 1, '', '69770-b16.png', 'ZLATO 14 KT', '4 MM', '8.24', '0.00', '', '', '', '2019-08-23 07:18:09'),
(27, 'B51', 'b51', '', 1, '', '32569-b51.png', 'ZLATO 14 KT', '3,5 MM', '52.00', '8.82', '', '', '', '2019-08-23 07:18:09'),
(28, 'B34', 'b34', '', 1, '', '90f93-b34.png', 'ZLATO 14 KT', '2 MM', '4.06', '0.00', '', '', '', '2019-08-23 07:18:09'),
(29, 'B18', 'b18', '', 1, '', 'b3718-b18.png', 'ZLATO 14 KT', '2 MM', '4.06', '0.00', '', '', '', '2019-08-23 07:18:09'),
(30, 'B31', 'b31', '', 1, '', '49dd6-b31.png', 'ZLATO 14 KT', '3 MM', '6.86', '7.56', '', '', '', '2019-08-23 07:18:09'),
(31, 'B40', 'b40', '', 1, '', '51f10-b40.png', 'ZLATO 14 KT', '6 MM', '12.02', '16.51', '', '', '', '2019-08-23 07:18:09'),
(32, 'B43', 'b43', '', 1, '', '7e13b-b43.png', 'ZLATO 14 KT', '5 MM', '9.80', '12.89', '', '', '', '2019-08-23 07:18:09'),
(33, 'B21', 'b21', '', 1, '', '7be6c-b21.png', 'ZLATO 14 KT', '3 MM', '6.30', '7.00', '', '', '', '2019-08-23 07:18:09'),
(34, 'B9', 'b9', '', 1, '', 'd8c62-b9.png', 'ZLATO 14 KT', '4,5 MM', '14.04', '15.85', '', '', '', '2019-08-23 07:18:09'),
(35, 'B48', 'b48', '', 1, '', 'c07e2-b48.png', 'ZLATO 14 KT', '4 MM', '7.84', '10.35', '', '', '', '2019-08-23 07:18:09'),
(36, 'B13', 'b13', '', 1, '', '90834-b13.png', 'ZLATO 14 KT', '5 MM', '8.91', '9.83', '', '', '', '2019-08-23 07:18:09'),
(37, 'B23', 'b23', '', 1, '', 'aade2-b23.png', 'ZLATO 14 KT', '3 MM', '6.02', '6.72', '', '', '', '2019-08-23 07:18:09'),
(38, 'B22', 'b22', '', 1, '', '6b584-b22.png', 'ZLATO 14 KT', '3 MM', '6.30', '7.00', '', '', '', '2019-08-23 07:18:09'),
(39, 'B25', 'b25', '', 1, '', '2f2a7-b25.png', 'ZLATO 14 KT', '5 MM', '9.24', '10.16', '', '', '', '2019-08-23 07:18:09'),
(40, 'B26', 'b26', '', 1, '', '20720-b26.png', 'ZLATO 14 KT', '4 MM', '8.54', '9.46', '', '', '', '2019-08-23 07:18:09'),
(41, 'B17', 'b17', '', 1, '', '56680-b17.png', 'ZLATO 14 KT', '5 MM', '9.24', '10.16', '', '', '', '2019-08-23 07:18:09'),
(42, 'B30', 'b30', '', 1, '', 'ca89d-b30.png', 'ZLATO 14 KT', '3 MM', '6.86', '7.56', '', '', '', '2019-08-23 07:18:09'),
(43, 'B19', 'b19', '', 1, '', '5347e-b19.png', 'ZLATO 14 KT', '2 MM', '4.06', '0.00', '', '', '', '2019-08-23 07:18:09'),
(44, 'B42', 'b42', '', 1, '', '62405-b42.png', 'ZLATO 14 KT', '6 MM', '12.02', '13.56', '', '', '', '2019-08-23 07:18:09'),
(45, 'B39', 'b39', '', 1, '', '056cc-b39.png', 'ZLATO 14 KT', '6 MM', '12.02', '0.00', '', '', '', '2019-08-23 07:18:09'),
(46, 'B37', 'b37', '', 1, '', 'ac755-b37.png', 'ZLATO 14 KT', '4,5 MM', '8.12', '8.82', '', '', '', '2019-08-23 07:18:09'),
(47, 'B46', 'B46', '', 1, '', 'de128-b46.png', 'ZLATO 14 KT', '3,5 MM', '6.82', '0.00', '', '', '', '2019-08-23 07:18:09'),
(48, 'B47', 'b47', '', 1, '', '2ee34-b47.png', 'ZLATO 14 KT', '3 MM', '6.09', '0.00', '', '', '', '2019-08-23 07:17:05'),
(49, 'B49', 'b49', '', 1, '', 'd3bce-b49.png', 'ZLATO 14 KT', '4,5 MM', '8.84', '0.00', '', '', '', '2019-08-23 07:18:09'),
(50, 'B44', 'b44', '', 1, '', 'e6605-b44.png', 'ZLATO 14 KT', '5,5 MM', '10.15', '0.00', '', '', '', '2019-08-23 07:18:09'),
(51, 'B52', 'b52', '', 1, '', '42e9c-b52.png', 'ZLATO 14 KT', '4,5 MM', '8.85', '0.00', '', '', '', '2019-08-23 07:18:09'),
(52, 'B53', 'b53', '', 1, '', '1745a-b53.png', 'ZLATO 14 KT', '5,5 MM', '10.15', '0.00', '', '', '', '2019-08-23 07:18:09'),
(53, 'K54', 'k54', '', 2, '', '91e4b-k54.png', 'ZLATO 14 KT', '4 MM', '10.07', '0.00', '', '', '', '2019-08-23 07:16:52'),
(54, 'K59', 'k59', '', 2, '', 'c0ad4-k59.png', 'ZLATO 14 KT', '3 MM', '7.35', '8.05', '', '', '', '2019-08-23 07:16:41'),
(55, 'K54', 'k54', '', 2, '', '92c30-k54.png', 'ZLATO 14 KT', '4 MM', '9.15', '10.07', '', '', '34f72-k54.png', '2019-08-23 16:57:12'),
(56, 'K59', 'k59', '', 2, '', 'a65ae-k59.png', ' ZLATO 14 KT', '3 MM', '7.35', '8.05', '', '', '00723-k59.png', '2019-08-23 17:12:28'),
(57, 'K62', 'k62', '', 2, '', 'd5737-k62.png', 'ZLATO 14 KT', '6 MM', '13.35', '17.85', '', '', 'c4399-k62.png', '2019-08-23 17:13:18'),
(58, 'K66', 'k66', '', 2, '', '6a440-k66.png', 'ZLATO 14 KT', '5.5 MM', '12.75', '16.12', '', '', '1fe60-k66.png', '2019-08-23 17:13:46'),
(59, 'K55', 'k55', '', 2, '', '37381-k55.png', 'ZLATO 14 KT', ' 4 MM', '9.15', '10.07', '', '', 'f05fc-k55.png', '2019-08-23 17:14:07'),
(60, 'K65', 'k65', '', 2, '', '49e14-k65.png', 'ZLATO 14 KT', '6 MM', '13.35', '16.49', '', '', 'df0cb-k65.png', '2019-08-23 17:14:27'),
(61, 'K61', 'k61', '', 2, '', 'dda06-k61.png', 'ZLATO 14 KT', ' 5 MM', '9.90', '10.82', '', '', 'eff25-k61.png', '2019-08-23 17:16:22'),
(62, ' K60', 'k60', '', 2, '', 'f11fa-k60.png', 'ZLATO 14 KT', ' 4 MM', '9.15', '10.07', '', '', '1013c-k60.png', '2019-08-23 17:17:47'),
(63, 'K63', 'K63', '', 2, '', 'aa21a-k63.png', 'ZLATO 14 KT', ' 4,5 MM', '9.90', '10.60', '', '', 'd04a1-k63.png', '2019-08-23 17:19:00'),
(64, 'K64', 'k64', '', 2, '', '28019-k64.png', 'ZLATO 14 KT', ' 5 MM', '10.50', '11.20', '', '', '8a759-k64.png', '2019-08-23 17:20:53'),
(65, 'K124', 'k124', '', 2, '', 'e8f49-k124.png', 'ZLATO 14 KT', '4,5 MM', '9.90', '12.71', '', '', '9ae97-k124.png', '2019-08-23 17:22:18'),
(66, 'K56', 'k56', '', 3, '', 'ea979-k56.png', 'ZLATO 14 KT', '4 MM', '9.15', '10.07', '', '', '35089-k56.png', '2019-08-23 17:26:03'),
(67, ' K57', ' k57', '', 3, '', '0e91f-k57.png', 'ZLATO 14 KT', '4 MM', '9.15', '10.07', '', '', '7f0ff-k57.png', '2019-08-23 17:27:19'),
(68, 'K58', 'k58', '', 3, '', '6ae2b-k58.png', 'ZLATO 14 KT', '4 MM', '9.15', '10.07', '', '', '3738a-k58.png', '2019-08-23 17:28:50'),
(69, 'A69', 'a69', '', 3, '', 'c77ed-a69.png', 'ZLATO 14 KT', ' 4 MM', '8.24', '9.16', '', '', '2e04d-a69.png', '2019-08-23 17:31:09'),
(70, 'A93', 'a93', '', 3, '', '685d4-a93.png', 'ZLATO 14 KT', '6 MM', '12.02', '0.00', '', '', '2195f-a93.png', '2019-08-23 17:32:26'),
(71, ' A94', 'a94', '', 3, '', '0df7d-a94.png', 'ZLATO 14 KT', '6 MM', '12.02', '13.47', '', '', 'bdfff-a94.png', '2019-08-23 17:33:29'),
(72, 'A71', 'a71', '', 3, '', 'b92ab-a71.png', 'ZLATO 14 KT', '3 MM', '6.86', '7.56', '', '', 'af181-a71.png', '2019-08-23 17:34:35'),
(73, ' A68', 'a68', '', 3, '', 'ce21e-a68.png', 'ZLATO 14 KT', '3 MM', '6.86', '7.56', '', '', 'f36b3-a68.png', '2019-08-23 17:35:44'),
(74, 'A73', 'a73', '', 3, '', '0befa-a73.png', 'ZLATO 14 KT', '3,5 MM', '8.24', '9.39', '', '', '41707-a73.png', '2019-08-23 17:38:30'),
(75, ' A74', 'a74', '', 3, '', 'bd2cf-a74.png', 'ZLATO 14 KT', '3,5 MM', '8.24', '9.39', '', '', 'a7aea-a74.png', '2019-08-23 17:39:47'),
(76, 'A67', 'a67', '', 3, '', '49c20-a67.png', 'ZLATO 14 KT', ' 6 MM', '12.29', '17.91', '', '', 'ae83d-a67.png', '2019-08-23 17:41:26'),
(77, ' A92', 'a92', '', 3, '', '40b17-a92.png', 'ZLATO 14 KT', '5 MM', '9.24', '10.16', '', '', '773f1-a92.png', '2019-08-23 17:42:35'),
(78, 'A91', 'a91', '', 3, '', '14f2b-a91.png', 'ZLATO 14 KT', '4 MM', '8.54', '9.46', '', '', 'dc3c7-a91.png', '2019-08-23 17:44:03'),
(79, 'A90', 'a90', '', 3, '', '765f0-a90.png', 'ZLATO 14 KT', '4,5 MM', '9.80', '10.72', '', '', 'b60a0-a90.png', '2019-08-23 17:45:02'),
(80, 'A70', 'a70', '', 3, '', '0e76a-a70.png', 'ZLATO 14 KT', '5 MM', '10.80', '0.00', '', '', '87c9e-a70.png', '2019-08-23 17:45:55'),
(81, 'A72', 'a72', '', 3, '', '48e33-a72.png', 'ZLATO 14 KT', '4 MM', '8.24', '0.00', '', '', '0fdae-a72.png', '2019-08-23 17:46:51'),
(82, 'A95', 'a95', '', 3, '', 'b28e2-a95.png', 'ZLATO 14 KT', '3,5 MM', '7.56', '8.82', '', '', '3f92a-a95.png', '2019-08-23 17:47:52'),
(83, ' A123', 'a123', '', 3, '', '211bd-a123.png', 'ZLATO 14 KT', '5 MM', '9.80', '12.89', '', '', '55212-a123.png', '2019-08-23 17:49:26'),
(84, 'A84', 'a84', '', 3, '', '691c4-a84.png', 'ZLATO 14 KT', '3 MM', '6.30', '7.22', '', '', '46096-a84.png', '2019-08-23 17:50:18'),
(85, 'A88', 'a88', '', 3, '', '154c3-a88.png', 'ZLATO 14 KT', ' 2 MM', '4.06', '0.00', '', '', '8d4f9-a88.png', '2019-08-23 17:51:11'),
(86, ' A81', 'a81', '', 3, '', 'dfe04-a81.png', 'ZLATO 14 KT', '3 MM', '6.30', '7.00', '', '', '4acc2-a81.png', '2019-08-23 17:52:11'),
(87, 'A83', 'a83', '', 3, '', 'be515-a83.png', 'ZLATO 14 KT', '3 MM', '6.30', '7.00', '', '', 'b40a1-a83.png', '2019-08-23 17:53:04'),
(88, ' A75', 'a75', '', 3, '', '1be48-a75.png', 'ZLATO 14 KT', '4,5 MM', '14.04', '15.85', '', '', 'd02da-a75.png', '2019-08-23 17:54:08'),
(89, 'A76', 'a76', '', 3, '', '85eaf-a76.png', 'ZLATO 14 KT', '4,5 MM', '14.04', '15.85', '', '', '72c35-a76.png', '2019-08-23 17:55:04'),
(90, ' A77', 'a77', '', 3, '', '84192-a77.png', 'ZLATO 14 KT', '4 MM', '8.24', '9.16', '', '', '87d23-a77.png', '2019-08-23 17:56:18'),
(91, 'A78', 'a78', '', 3, '', 'e6b44-a78.png', 'ZLATO 14 KT', '4 MM', '8.24', '9.16', '', '', '88541-a78.png', '2019-08-23 17:57:21'),
(92, 'A82', 'a82', '', 3, '', '1cf91-a82.png', 'ZLATO 14 KT', ' 3 MM', '6.30', '7.00', '', '', '74ef8-a82.png', '2019-08-23 17:58:18'),
(93, ' A85', 'a85', '', 3, '', '8e787-a85.png', 'ZLATO 14 KT', '3 MM', '7.56', '8.71', '', '', '080ed-a85.png', '2019-08-23 17:59:29'),
(94, 'A86', 'a86', '', 3, '', 'c06f1-a86.png', 'ZLATO 14 KT', '2,5 MM', '5.08', '5.56', '', '', '14fa8-a86.png', '2019-08-23 18:00:20'),
(95, 'A87', 'a87', '', 3, '', '27f69-a87.png', 'ZLATO 14 KT', '3,5 MM', '7.56', '8.48', '', '', '4cf92-a87.png', '2019-08-23 18:01:17'),
(96, 'A89', 'a89', '', 3, '', '5b00b-a89.png', 'ZLATO 14 KT', '4,5 MM', '8.12', '8.82', '', '', '93d8c-a89.png', '2019-08-23 18:02:19'),
(97, ' A79', 'a79', '', 3, '', '0d2c2-a79.png', 'ZLATO 14 KT', '5 MM', '8.91', '0.00', '', '', '67b62-a79.png', '2019-08-23 18:03:18'),
(98, 'A80', 'a80', '', 3, '', 'ac7a1-a80.png', 'ZLATO 14 KT', '5 MM', '8.91', '0.00', '', '', 'ccf24-a80.png', '2019-08-23 18:05:23'),
(99, 'A96', 'a96', '', 3, '', 'cba31-a96.png', 'ZLATO 14 KT', '4,5 MM', '8.85', '0.00', '', '', '32a28-a96.png', '2019-08-23 18:06:23'),
(100, 'A101', 'a101', '', 3, '', 'a78fc-a101.png', 'ZLATO 14 KT', ' 3 MM', '6.09', '0.00', '', '', '8eb2b-a101.png', '2019-08-23 18:07:12'),
(101, 'A98', 'a98', '', 3, '', '4e17c-a98.png', 'ZLATO 14 KT', '5,5 MM', '10.15', '0.00', '', '', '017ed-a98.png', '2019-08-23 18:08:04'),
(102, 'A99', 'a99', '', 3, '', '3205e-a99.png', 'ZLATO 14 KT', '3 MM', '6.09', '0.00', '', '', 'af49e-a99.png', '2019-08-23 18:08:56'),
(103, 'A100', 'a100', '', 3, '', '04360-a100.png', 'ZLATO 14 KT', '3,5 MM', '6.82', '0.00', '', '', 'ab0e4-a100.png', '2019-08-23 20:49:47'),
(104, 'A97', 'a97', '', 3, '', '617a8-a97.png', 'ZLATO 14 KT', '3,5 MM', '6.82', '0.00', '', '', '9940b-a97.png', '2019-08-23 20:50:48'),
(105, 'C119', 'c119', '', 3, '', 'b4a6b-c119.png', 'ZLATO 14 KT', '6 MM', '12.02', '0.00', '', '', '250d1-c119.png', '2019-08-23 20:51:40'),
(106, 'C110', 'c100', '', 4, '', '891c5-c110.png', 'ZLATO 14 KT', '3,5 MM', '8.24', '9.39', '', '', '21d3a-c110.png', '2019-08-23 20:55:01'),
(107, 'C120', 'c120', '', 4, '', '1d3df-c120.png', '6 MM', '12.285 KČ', '0.00', '0.00', '', '', '9ff11-c120.png', '2019-08-23 20:56:15'),
(108, 'C121', ' 6 MM', '', 4, '', '93971-c121.png', 'ZLATO 14 KT', '12.285 KČ', '17.91', '0.00', '', '', '1e920-c121.png', '2019-08-23 20:58:29'),
(109, 'C102', 'c102', '', 4, '', 'e2bb2-c102.png', 'ZLATO 14 KT', '5 MM', '8.91', '0.00', '', '', 'a276f-c102.png', '2019-08-23 21:00:30'),
(110, 'C103', 'c103', '', 4, '', '10770-c103.png', 'ZLATO 14 KT', ' 3 MM', '6.86', '7.56', '', '', '1bb86-c103.png', '2019-08-23 21:01:53'),
(111, 'C118', 'c118', '', 4, '', '0074f-c118.png', 'ZLATO 14 KT', '3 MM', '6.30', '7.22', '', '', '86663-c118.png', '2019-08-23 21:03:47'),
(112, ' C104', 'c104', '', 4, '', 'b20c2-c104.png', 'ZLATO 14 KT', '4 MM', '8.24', '0.00', '', '', '23d6a-c104.png', '2019-08-23 21:05:49'),
(113, 'C105', 'c105', '', 4, '', 'af0c4-c105.png', 'ZLATO 14 KT', '5 MM', '10.80', '11.72', '', '', '4cdc8-c105.png', '2019-08-23 21:07:28'),
(114, 'C106', 'c106', '', 4, '', 'da6c1-c106.png', 'ZLATO 14 KT', '3 MM', '6.86', '0.00', '', '', '1b6e5-c106.png', '2019-08-23 21:08:17'),
(115, 'C107', 'c107', '', 4, '', 'c2ef6-c107.png', 'ZLATO 14 KT', '4 MM', '8.24', '9.16', '', '', '8358d-c107.png', '2019-08-23 21:09:26'),
(116, 'C108', 'c108', '', 4, '', 'c7322-c108.png', 'ZLATO 14 KT', ' 4,5 MM', '14.04', '15.85', '', '', '4a339-c108.png', '2019-08-23 21:10:54'),
(117, 'C114', 'c114', '', 4, '', 'd733c-c114.png', 'ZLATO 14 KT', ' 4 MM', '8.54', '9.46', '', '', 'db38a-c114.png', '2019-08-23 21:12:10'),
(118, 'C122', 'c122', '', 4, '', '30240-c122.png', 'ZLATO 14 KT', '3,5 MM', '7.56', '8.82', '', '', 'b25a1-c122.png', '2019-08-23 21:13:34'),
(119, 'C109', 'c109', '', 4, '', '1d206-c109.png', 'ZLATO 14 KT', '3,5 MM', '8.24', '9.39', '', '', '389aa-c109.png', '2019-08-23 21:14:52'),
(120, 'C111', 'c111', '', 4, '', '50767-c111.png', 'ZLATO 14 KT', '2 MM', '4.06', '0.00', '', '', 'a03a6-c111.png', '2019-08-23 21:15:47'),
(121, 'C112', 'c112', '', 4, '', 'c313e-c112.png', 'ZLATO 14 KT', '4 MM', '8.24', '9.16', '', '', '2d261-c112.png', '2019-08-23 22:17:37'),
(122, ' C112', 'c112', '', 4, '', 'd93fe-c112.png', 'ZLATO 14 KT', '4 MM', '8.24', '9.16', '', '', 'eaae8-c112.png', '2019-08-23 21:18:08'),
(123, 'C113', 'c113', '', 4, '', '9c8f1-c113.png', 'ZLATO 14 KT', '4 MM', '8.24', '0.00', '', '', '276b8-c113.png', '2019-08-23 21:19:15'),
(124, 'C115', 'c115', '', 4, '', '2a136-c115.png', 'ZLATO 14 KT', '3 MM', '6.30', '7.00', '', '', 'cf0be-c115.png', '2019-08-23 21:20:23'),
(125, 'C116', 'c116', '', 4, '', 'a45c5-c116.png', 'ZLATO 14 KT', '3 MM', '6.30', '7.00', '', '', '7039f-c116.png', '2019-08-23 21:21:14'),
(126, ' C117', ' c117', '', 4, '', 'dd34b-c117.png', 'ZLATO 14 KT', '3 MM', '6.44', '7.14', '', '', '3bf13-c117.png', '2019-08-23 21:22:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `related_product`
--

CREATE TABLE `related_product` (
  `id` int(11) UNSIGNED NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_related` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `related_product`
--

INSERT INTO `related_product` (`id`, `product_id`, `product_related`, `created_at`) VALUES
(1, 12, 2, '2019-08-22 20:20:43'),
(2, 12, 21, '2019-08-22 20:20:49'),
(3, 12, 21, '2019-08-22 20:20:49'),
(4, 12, 24, '2019-08-22 20:20:59'),
(5, 12, 25, '2019-08-22 20:21:03');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `settings`
--

CREATE TABLE `settings` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` varchar(250) NOT NULL DEFAULT '',
  `logo` varchar(250) NOT NULL DEFAULT '',
  `whatsapp` varchar(20) NOT NULL DEFAULT '',
  `facebook` varchar(250) NOT NULL DEFAULT '',
  `instagram` varchar(250) NOT NULL DEFAULT '',
  `email` varchar(250) NOT NULL DEFAULT '',
  `telephone` varchar(20) NOT NULL DEFAULT '',
  `city` varchar(20) NOT NULL DEFAULT '',
  `address_1` varchar(250) NOT NULL DEFAULT '',
  `address_2` varchar(250) NOT NULL DEFAULT '',
  `zip_code` varchar(20) NOT NULL DEFAULT '',
  `contact_name` varchar(100) NOT NULL DEFAULT '',
  `contact_identification` varchar(20) NOT NULL DEFAULT '',
  `latitude` varchar(20) NOT NULL DEFAULT '',
  `longitude` varchar(20) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `settings`
--

INSERT INTO `settings` (`id`, `title`, `logo`, `whatsapp`, `facebook`, `instagram`, `email`, `telephone`, `city`, `address_1`, `address_2`, `zip_code`, `contact_name`, `contact_identification`, `latitude`, `longitude`) VALUES
(1, 'Prsteny Baroň', '3034a-logo.png', '573164176666', 'https://www.facebook.com/pages/Snubní-prsteny-BARON/623818347711081', 'https://www.instagram.com/snubniprstenybaron/', 'info@prstenybaron.cz', '732 450 054', 'Turnov', 'Snubní prsteny BARON', 'Nádražní 1082', '51101', 'Antonín Baroň', '68603223', '50.5890046', '15.1320886');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `price_calculation`
--
ALTER TABLE `price_calculation`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `related_product`
--
ALTER TABLE `related_product`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `image`
--
ALTER TABLE `image`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `price_calculation`
--
ALTER TABLE `price_calculation`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;

--
-- AUTO_INCREMENT de la tabla `related_product`
--
ALTER TABLE `related_product`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
