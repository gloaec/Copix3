CREATE TABLE `bench_news` (
  `id_bench_news` int(11) NOT NULL auto_increment,
  `title_bench_news` varchar(100) NOT NULL,
  `content_bench_news` text NOT NULL,
  `datetime_bench_news` varchar(14) NOT NULL,
  `author_bench_news` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_bench_news`)
) CHARACTER SET utf8;

INSERT INTO `bench_news` (`id_bench_news`, `title_bench_news`, `content_bench_news`, `datetime_bench_news`, `author_bench_news`) VALUES (1, 'Copix & Jelix Benchmark', '<p>Enfin un vrai comparatif de performances entre les deux framework issus du même tronc commun.</p>\r\n\r\n</p>La table bench_news est destinée à contenir des informations "foo" histoire d''avoir des choses à comparer.</p>', '20070104140000', 'Gérald & Laurent'),
(2, 'Jelix plus rapide que Copix  ?', '<p>D''après Laurent, c''est sûr, Jelix est plus rapide que Copix.</p>\r\n\r\n<p>C''est ce que ce test va tenter de démontrer avec plusieurs pages tests représentatives, avec les mêmes templates et les mêmes données.</p>\r\n\r\n<p>Que le meilleur gagne !</p>', '20070104140000', 'Laurent'),
(3, 'Copix plus rapide que Jelix ?', '<p>D''après Gérald, c''est sûr, Copix dispose de temps de réponse très efficaces et n''a rien à envier à Jelix en terme d''optimisations.</p>\r\n\r\n<p>C''est ce que ce test va tenter de démontrer avec plusieurs pages tests représentatives, avec les mêmes templates et les mêmes données.</p>\r\n\r\n<p>Que le meilleur gagne !</p>', '20070104140200', 'Gérald'),
(4, 'PHP 5.2.0 Released', '<p>\r\n The PHP development team is proud to announce the immediate release of PHP\r\n 5.2.0. This release is a major improvement in the 5.X series, which includes a\r\n large number of new features, bug fixes and security enhancements.\r\n Further details about this release can be found in the release announcement\r\n <a href="/releases/5_2_0.php">5.2.0</a>, the full list of changes is\r\n available in the ChangeLog <a href="/ChangeLog-5.php#5.2.0">PHP 5</a>.\r\n\r\n</p>\r\n<p>\r\nAll users of PHP, especially those using earlier PHP 5 releases are advised\r\nto upgrade to this release as soon as possible. This release also obsoletes\r\nthe 5.1 branch of PHP.\r\n</p>\r\n\r\n<p>\r\nFor users upgrading from PHP 5.0 and PHP 5.1 there is an upgrading guide \r\navailable <a href="/UPDATE_5_2.txt">here</a>, detailing the changes between those releases\r\nand PHP 5.2.0.\r\n</p>\r\n', '20061104201000', 'PHPGroup');