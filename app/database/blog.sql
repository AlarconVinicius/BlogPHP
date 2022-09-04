-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 04-Set-2022 às 19:42
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `blog`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `topic_id` int(11) DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `published` tinyint(4) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `topic_id`, `title`, `body`, `image`, `published`, `created_at`) VALUES
(1, 1, 5, 'FRANGO DOURADO DE RESTAURANTE', '&lt;h2&gt;INGREDIENTES&lt;/h2&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;100 ml de &aacute;gua&lt;/li&gt;&lt;li&gt;1 colher(sopa) de a&ccedil;&uacute;car&lt;/li&gt;&lt;li&gt;2 colheres (sopa) de &oacute;leo&lt;/li&gt;&lt;li&gt;1/2 suco de lim&atilde;o&lt;/li&gt;&lt;li&gt;2 colheres (sopa) de iogurte&lt;/li&gt;&lt;li&gt;1 colher (ch&aacute;) de pimenta-calabresa&lt;/li&gt;&lt;li&gt;1 colher (ch&aacute;) de tomilho&lt;/li&gt;&lt;li&gt;1 colher (ch&aacute;) de p&aacute;prica defumada&lt;/li&gt;&lt;li&gt;1 colher (ch&aacute;) de alho em p&oacute;&lt;/li&gt;&lt;li&gt;1 colher (sopa) sal&lt;/li&gt;&lt;li&gt;1 kg de coxa de frango&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;MODO DE PREPARO&lt;/h2&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Em um recipiente, coloque o frango e todos os temperos na sequencia dos ingredientes, at&eacute; o suco de lim&atilde;o&lt;/li&gt;&lt;li&gt;Misture tudo muito bem, voc&ecirc; pode usar as m&atilde;os ou uma colher&lt;/li&gt;&lt;li&gt;Reserve e deixe marinar por 30 minutos&amp;nbsp;&lt;/li&gt;&lt;li&gt;Em uma frigideira bem quente, coloque o &oacute;leo&lt;/li&gt;&lt;li&gt;Junte as coxas e o a&ccedil;&uacute;car e deixe dourar bastante&amp;nbsp;&lt;/li&gt;&lt;li&gt;Despeje a &aacute;gua e v&aacute; misturando as coxas no fundo da panela, at&eacute; que elas estejam cozidas e bem douradas&lt;/li&gt;&lt;li&gt;Sirva&lt;/li&gt;&lt;/ol&gt;', '1662307368_banner02.jpg', 1, '2022-09-04 11:04:45'),
(2, 2, 5, 'Frangola', '&lt;h2&gt;INGREDIENTES&lt;/h2&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;100 ml de &aacute;gua&lt;/li&gt;&lt;li&gt;1 colher(sopa) de a&ccedil;&uacute;car&lt;/li&gt;&lt;li&gt;2 colheres (sopa) de &oacute;leo&lt;/li&gt;&lt;li&gt;1/2 suco de lim&atilde;o&lt;/li&gt;&lt;li&gt;2 colheres (sopa) de iogurte&lt;/li&gt;&lt;li&gt;1 colher (ch&aacute;) de pimenta-calabresa&lt;/li&gt;&lt;li&gt;1 colher (ch&aacute;) de tomilho&lt;/li&gt;&lt;li&gt;1 colher (ch&aacute;) de p&aacute;prica defumada&lt;/li&gt;&lt;li&gt;1 colher (ch&aacute;) de alho em p&oacute;&lt;/li&gt;&lt;li&gt;1 colher (sopa) sal&lt;/li&gt;&lt;li&gt;1 kg de coxa de frango&lt;/li&gt;&lt;/ol&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;h2&gt;MODO DE PREPARO&lt;/h2&gt;&lt;p&gt;&amp;nbsp;&lt;/p&gt;&lt;ol&gt;&lt;li&gt;Em um recipiente, coloque o frango e todos os temperos na sequencia dos ingredientes, at&eacute; o suco de lim&atilde;o&lt;/li&gt;&lt;li&gt;Misture tudo muito bem, voc&ecirc; pode usar as m&atilde;os ou uma colher&lt;/li&gt;&lt;li&gt;Reserve e deixe marinar por 30 minutos&amp;nbsp;&lt;/li&gt;&lt;li&gt;Em uma frigideira bem quente, coloque o &oacute;leo&lt;/li&gt;&lt;li&gt;Junte as coxas e o a&ccedil;&uacute;car e deixe dourar bastante&amp;nbsp;&lt;/li&gt;&lt;li&gt;Despeje a &aacute;gua e v&aacute; misturando as coxas no fundo da panela, at&eacute; que elas estejam cozidas e bem douradas&lt;/li&gt;&lt;li&gt;Sirva&lt;/li&gt;&lt;/ol&gt;', '1662307474_banner01.jpg', 1, '2022-09-04 13:04:34');

-- --------------------------------------------------------

--
-- Estrutura da tabela `topics`
--

CREATE TABLE `topics` (
  `id` int(11) NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `topics`
--

INSERT INTO `topics` (`id`, `name`, `description`) VALUES
(1, 'Doces', '<p>Gulositasss</p>'),
(4, 'Sobremesa', ''),
(5, 'Salgado', '');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT 0,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `admin`, `username`, `email`, `password`, `created_at`) VALUES
(1, 1, 'Vinícius Alarcon', 'alarcon@gmail.com', '$2y$10$9RfSHHOhbqczuAjO8rcfyekAJYEfNKLugPJ6QkbcMUYK5YUbE.nuC', '2022-09-04 13:52:54'),
(2, 1, 'Camila Vianna', 'camila@gmail.com', '$2y$10$NQ6thugH1PNWDwza6YHdN.3HneSQ1rU1/B9QcU4pzbzw/LUZcgKTO', '2022-09-04 15:58:56');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `topic_id` (`topic_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Índices para tabela `topics`
--
ALTER TABLE `topics`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `topics`
--
ALTER TABLE `topics`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`topic_id`) REFERENCES `topics` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
