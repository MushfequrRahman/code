-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 10, 2019 at 07:37 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test_DB`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(11) NOT NULL,
  `sortname` varchar(3) NOT NULL,
  `name` varchar(150) NOT NULL,
  `slug` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `sortname`, `name`, `slug`) VALUES
(1, 'AF', 'Afghanistan', 'afghanistan'),
(2, 'AL', 'Albania', 'albania'),
(3, 'DZ', 'Algeria', 'algeria'),
(4, 'AS', 'American Samoa', 'american-samoa'),
(5, 'AD', 'Andorra', 'andorra'),
(6, 'AO', 'Angola', 'angola'),
(7, 'AI', 'Anguilla', 'anguilla'),
(8, 'AQ', 'Antarctica', 'antarctica'),
(9, 'AG', 'Antigua And Barbuda', 'antigua-and-barbuda'),
(10, 'AR', 'Argentina', 'argentina'),
(11, 'AM', 'Armenia', 'armenia'),
(12, 'AW', 'Aruba', 'aruba'),
(13, 'AU', 'Australia', 'australia'),
(14, 'AT', 'Austria', 'austria'),
(15, 'AZ', 'Azerbaijan', 'azerbaijan'),
(16, 'BS', 'Bahamas The', 'bahamas-the'),
(17, 'BH', 'Bahrain', 'bahrain'),
(18, 'BD', 'Bangladesh', 'bangladesh'),
(19, 'BB', 'Barbados', 'barbados'),
(20, 'BY', 'Belarus', 'belarus'),
(21, 'BE', 'Belgium', 'belgium'),
(22, 'BZ', 'Belize', 'belize'),
(23, 'BJ', 'Benin', 'benin'),
(24, 'BM', 'Bermuda', 'bermuda'),
(25, 'BT', 'Bhutan', 'bhutan'),
(26, 'BO', 'Bolivia', 'bolivia'),
(27, 'BA', 'Bosnia and Herzegovina', 'bosnia-and-herzegovina'),
(28, 'BW', 'Botswana', 'botswana'),
(29, 'BV', 'Bouvet Island', 'bouvet-island'),
(30, 'BR', 'Brazil', 'brazil'),
(31, 'IO', 'British Indian Ocean Territory', 'british-indian-ocean-territory'),
(32, 'BN', 'Brunei', 'brunei'),
(33, 'BG', 'Bulgaria', 'bulgaria'),
(34, 'BF', 'Burkina Faso', 'burkina-faso'),
(35, 'BI', 'Burundi', 'burundi'),
(36, 'KH', 'Cambodia', 'cambodia'),
(37, 'CM', 'Cameroon', 'cameroon'),
(38, 'CA', 'Canada', 'canada'),
(39, 'CV', 'Cape Verde', 'cape-verde'),
(40, 'KY', 'Cayman Islands', 'cayman-islands'),
(41, 'CF', 'Central African Republic', 'central-african-republic'),
(42, 'TD', 'Chad', 'chad'),
(43, 'CL', 'Chile', 'chile'),
(44, 'CN', 'China', 'china'),
(45, 'CX', 'Christmas Island', 'christmas-island'),
(46, 'CC', 'Cocos (Keeling) Islands', 'cocos-keeling-islands'),
(47, 'CO', 'Colombia', 'colombia'),
(48, 'KM', 'Comoros', 'comoros'),
(49, 'CG', 'Congo', 'congo'),
(50, 'CD', 'Democratic Republic of the Congo', 'congo-the-democratic-republic-of-the'),
(51, 'CK', 'Cook Islands', 'cook-islands'),
(52, 'CR', 'Costa Rica', 'costa-rica'),
(53, 'CI', 'Cote D\'Ivoire (Ivory Coast)', 'cote-d-ivoire-ivory-coast'),
(54, 'HR', 'Croatia (Hrvatska)', 'croatia-hrvatska'),
(55, 'CU', 'Cuba', 'cuba'),
(56, 'CY', 'Cyprus', 'cyprus'),
(57, 'CZ', 'Czech Republic', 'czech-republic'),
(58, 'DK', 'Denmark', 'denmark'),
(59, 'DJ', 'Djibouti', 'djibouti'),
(60, 'DM', 'Dominica', 'dominica'),
(61, 'DO', 'Dominican Republic', 'dominican-republic'),
(62, 'TP', 'East Timor', 'east-timor'),
(63, 'EC', 'Ecuador', 'ecuador'),
(64, 'EG', 'Egypt', 'egypt'),
(65, 'SV', 'El Salvador', 'el-salvador'),
(66, 'GQ', 'Equatorial Guinea', 'equatorial-guinea'),
(67, 'ER', 'Eritrea', 'eritrea'),
(68, 'EE', 'Estonia', 'estonia'),
(69, 'ET', 'Ethiopia', 'ethiopia'),
(70, 'XA', 'External Territories of Australia', 'external-territories-of-australia'),
(71, 'FK', 'Falkland Islands', 'falkland-islands'),
(72, 'FO', 'Faroe Islands', 'faroe-islands'),
(73, 'FJ', 'Fiji Islands', 'fiji-islands'),
(74, 'FI', 'Finland', 'finland'),
(75, 'FR', 'France', 'france'),
(76, 'GF', 'French Guiana', 'french-guiana'),
(77, 'PF', 'French Polynesia', 'french-polynesia'),
(78, 'TF', 'French Southern Territories', 'french-southern-territories'),
(79, 'GA', 'Gabon', 'gabon'),
(80, 'GM', 'Gambia The', 'gambia-the'),
(81, 'GE', 'Georgia', 'georgia'),
(82, 'DE', 'Germany', 'germany'),
(83, 'GH', 'Ghana', 'ghana'),
(84, 'GI', 'Gibraltar', 'gibraltar'),
(85, 'GR', 'Greece', 'greece'),
(86, 'GL', 'Greenland', 'greenland'),
(87, 'GD', 'Grenada', 'grenada'),
(88, 'GP', 'Guadeloupe', 'guadeloupe'),
(89, 'GU', 'Guam', 'guam'),
(90, 'GT', 'Guatemala', 'guatemala'),
(91, 'XU', 'Guernsey and Alderney', 'guernsey-and-alderney'),
(92, 'GN', 'Guinea', 'guinea'),
(93, 'GW', 'Guinea-Bissau', 'guinea-bissau'),
(94, 'GY', 'Guyana', 'guyana'),
(95, 'HT', 'Haiti', 'haiti'),
(96, 'HM', 'Heard and McDonald Islands', 'heard-and-mcdonald-islands'),
(97, 'HN', 'Honduras', 'honduras'),
(98, 'HK', 'Hong Kong S.A.R.', 'hong-kong-s-a-r'),
(99, 'HU', 'Hungary', 'hungary'),
(100, 'IS', 'Iceland', 'iceland'),
(101, 'IN', 'India', 'india'),
(102, 'ID', 'Indonesia', 'indonesia'),
(103, 'IR', 'Iran', 'iran'),
(104, 'IQ', 'Iraq', 'iraq'),
(105, 'IE', 'Ireland', 'ireland'),
(106, 'IL', 'Israel', 'israel'),
(107, 'IT', 'Italy', 'italy'),
(108, 'JM', 'Jamaica', 'jamaica'),
(109, 'JP', 'Japan', 'japan'),
(110, 'XJ', 'Jersey', 'jersey'),
(111, 'JO', 'Jordan', 'jordan'),
(112, 'KZ', 'Kazakhstan', 'kazakhstan'),
(113, 'KE', 'Kenya', 'kenya'),
(114, 'KI', 'Kiribati', 'kiribati'),
(115, 'KP', 'Korea North', 'korea-north'),
(116, 'KR', 'Korea South', 'korea-south'),
(117, 'KW', 'Kuwait', 'kuwait'),
(118, 'KG', 'Kyrgyzstan', 'kyrgyzstan'),
(119, 'LA', 'Laos', 'laos'),
(120, 'LV', 'Latvia', 'latvia'),
(121, 'LB', 'Lebanon', 'lebanon'),
(122, 'LS', 'Lesotho', 'lesotho'),
(123, 'LR', 'Liberia', 'liberia'),
(124, 'LY', 'Libya', 'libya'),
(125, 'LI', 'Liechtenstein', 'liechtenstein'),
(126, 'LT', 'Lithuania', 'lithuania'),
(127, 'LU', 'Luxembourg', 'luxembourg'),
(128, 'MO', 'Macau S.A.R.', 'macau-s-a-r'),
(129, 'MK', 'Macedonia', 'macedonia'),
(130, 'MG', 'Madagascar', 'madagascar'),
(131, 'MW', 'Malawi', 'malawi'),
(132, 'MY', 'Malaysia', 'malaysia'),
(133, 'MV', 'Maldives', 'maldives'),
(134, 'ML', 'Mali', 'mali'),
(135, 'MT', 'Malta', 'malta'),
(136, 'XM', 'Man (Isle of)', 'man-isle-of'),
(137, 'MH', 'Marshall Islands', 'marshall-islands'),
(138, 'MQ', 'Martinique', 'martinique'),
(139, 'MR', 'Mauritania', 'mauritania'),
(140, 'MU', 'Mauritius', 'mauritius'),
(141, 'YT', 'Mayotte', 'mayotte'),
(142, 'MX', 'Mexico', 'mexico'),
(143, 'FM', 'Micronesia', 'micronesia'),
(144, 'MD', 'Moldova', 'moldova'),
(145, 'MC', 'Monaco', 'monaco'),
(146, 'MN', 'Mongolia', 'mongolia'),
(147, 'MS', 'Montserrat', 'montserrat'),
(148, 'MA', 'Morocco', 'morocco'),
(149, 'MZ', 'Mozambique', 'mozambique'),
(150, 'MM', 'Myanmar', 'myanmar'),
(151, 'NA', 'Namibia', 'namibia'),
(152, 'NR', 'Nauru', 'nauru'),
(153, 'NP', 'Nepal', 'nepal'),
(154, 'AN', 'Netherlands Antilles', 'netherlands-antilles'),
(155, 'NL', 'Netherlands The', 'netherlands-the'),
(156, 'NC', 'New Caledonia', 'new-caledonia'),
(157, 'NZ', 'New Zealand', 'new-zealand'),
(158, 'NI', 'Nicaragua', 'nicaragua'),
(159, 'NE', 'Niger', 'niger'),
(160, 'NG', 'Nigeria', 'nigeria'),
(161, 'NU', 'Niue', 'niue'),
(162, 'NF', 'Norfolk Island', 'norfolk-island'),
(163, 'MP', 'Northern Mariana Islands', 'northern-mariana-islands'),
(164, 'NO', 'Norway', 'norway'),
(165, 'OM', 'Oman', 'oman'),
(166, 'PK', 'Pakistan', 'pakistan'),
(167, 'PW', 'Palau', 'palau'),
(168, 'PS', 'Palestinian Territory Occupied', 'palestinian-territory-occupied'),
(169, 'PA', 'Panama', 'panama'),
(170, 'PG', 'Papua new Guinea', 'papua-new-guinea'),
(171, 'PY', 'Paraguay', 'paraguay'),
(172, 'PE', 'Peru', 'peru'),
(173, 'PH', 'Philippines', 'philippines'),
(174, 'PN', 'Pitcairn Island', 'pitcairn-island'),
(175, 'PL', 'Poland', 'poland'),
(176, 'PT', 'Portugal', 'portugal'),
(177, 'PR', 'Puerto Rico', 'puerto-rico'),
(178, 'QA', 'Qatar', 'qatar'),
(179, 'RE', 'Reunion', 'reunion'),
(180, 'RO', 'Romania', 'romania'),
(181, 'RU', 'Russia', 'russia'),
(182, 'RW', 'Rwanda', 'rwanda'),
(183, 'SH', 'Saint Helena', 'saint-helena'),
(184, 'KN', 'Saint Kitts And Nevis', 'saint-kitts-and-nevis'),
(185, 'LC', 'Saint Lucia', 'saint-lucia'),
(186, 'PM', 'Saint Pierre and Miquelon', 'saint-pierre-and-miquelon'),
(187, 'VC', 'Saint Vincent And The Grenadines', 'saint-vincent-and-the-grenadines'),
(188, 'WS', 'Samoa', 'samoa'),
(189, 'SM', 'San Marino', 'san-marino'),
(190, 'ST', 'Sao Tome and Principe', 'sao-tome-and-principe'),
(191, 'SA', 'Saudi Arabia', 'saudi-arabia'),
(192, 'SN', 'Senegal', 'senegal'),
(193, 'RS', 'Serbia', 'serbia'),
(194, 'SC', 'Seychelles', 'seychelles'),
(195, 'SL', 'Sierra Leone', 'sierra-leone'),
(196, 'SG', 'Singapore', 'singapore'),
(197, 'SK', 'Slovakia', 'slovakia'),
(198, 'SI', 'Slovenia', 'slovenia'),
(199, 'XG', 'Smaller Territories of the UK', 'smaller-territories-of-the-uk'),
(200, 'SB', 'Solomon Islands', 'solomon-islands'),
(201, 'SO', 'Somalia', 'somalia'),
(202, 'ZA', 'South Africa', 'south-africa'),
(203, 'GS', 'South Georgia', 'south-georgia'),
(204, 'SS', 'South Sudan', 'south-sudan'),
(205, 'ES', 'Spain', 'spain'),
(206, 'LK', 'Sri Lanka', 'sri-lanka'),
(207, 'SD', 'Sudan', 'sudan'),
(208, 'SR', 'Suriname', 'suriname'),
(209, 'SJ', 'Svalbard And Jan Mayen Islands', 'svalbard-and-jan-mayen-islands'),
(210, 'SZ', 'Swaziland', 'swaziland'),
(211, 'SE', 'Sweden', 'sweden'),
(212, 'CH', 'Switzerland', 'switzerland'),
(213, 'SY', 'Syria', 'syria'),
(214, 'TW', 'Taiwan', 'taiwan'),
(215, 'TJ', 'Tajikistan', 'tajikistan'),
(216, 'TZ', 'Tanzania', 'tanzania'),
(217, 'TH', 'Thailand', 'thailand'),
(218, 'TG', 'Togo', 'togo'),
(219, 'TK', 'Tokelau', 'tokelau'),
(220, 'TO', 'Tonga', 'tonga'),
(221, 'TT', 'Trinidad And Tobago', 'trinidad-and-tobago'),
(222, 'TN', 'Tunisia', 'tunisia'),
(223, 'TR', 'Turkey', 'turkey'),
(224, 'TM', 'Turkmenistan', 'turkmenistan'),
(225, 'TC', 'Turks And Caicos Islands', 'turks-and-caicos-islands'),
(226, 'TV', 'Tuvalu', 'tuvalu'),
(227, 'UG', 'Uganda', 'uganda'),
(228, 'UA', 'Ukraine', 'ukraine'),
(229, 'AE', 'United Arab Emirates', 'united-arab-emirates'),
(230, 'GB', 'United Kingdom', 'united-kingdom'),
(231, 'US', 'United States', 'united-states'),
(232, 'UM', 'United States Minor Outlying Islands', 'united-states-minor-outlying-islands'),
(233, 'UY', 'Uruguay', 'uruguay'),
(234, 'UZ', 'Uzbekistan', 'uzbekistan'),
(235, 'VU', 'Vanuatu', 'vanuatu'),
(236, 'VA', 'Vatican City State (Holy See)', 'vatican-city-state-holy-see-'),
(237, 'VE', 'Venezuela', 'venezuela'),
(238, 'VN', 'Vietnam', 'vietnam'),
(239, 'VG', 'Virgin Islands (British)', 'virgin-islands-british'),
(240, 'VI', 'Virgin Islands (US)', 'virgin-islands-us-'),
(241, 'WF', 'Wallis And Futuna Islands', 'wallis-and-futuna-islands'),
(242, 'EH', 'Western Sahara', 'western-sahara'),
(243, 'YE', 'Yemen', 'yemen'),
(244, 'YU', 'Yugoslavia', 'yugoslavia'),
(245, 'ZM', 'Zambia', 'zambia'),
(246, 'ZW', 'Zimbabwe', 'zimbabwe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=247;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
