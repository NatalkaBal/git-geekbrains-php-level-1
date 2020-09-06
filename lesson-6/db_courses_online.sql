-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Sep 06, 2020 at 04:43 PM
-- Server version: 5.7.26
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_courses_online`
--

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `id` int(11) NOT NULL,
  `titel` varchar(1024) NOT NULL,
  `price` double NOT NULL,
  `name` varchar(255) NOT NULL,
  `path` varchar(1024) NOT NULL,
  `full-titel` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`id`, `titel`, `price`, `name`, `path`, `full-titel`) VALUES
(2, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum voluptatibus molestias, laboriosam odio hic natus numquam ut iusto, soluta harum nobis repellendus debitis ipsa tempore voluptates expedita facere eos velit.', 12000, 'Курсы HTML', 'public_html/img/small/HTML5_b.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae omnis fugit ducimus aperiam dignissimos facilis deserunt quasi doloremque fuga, totam dolores soluta quas repudiandae! Voluptas quos totam esse cumque hic ducimus nam, id ut, facere consequuntur ipsum neque unde maxime quasi expedita excepturi, cum maiores! Est cupiditate voluptate sunt laboriosam, culpa eveniet, architecto. Atque error ab accusamus tenetur laborum beatae similique itaque qui, quasi magni, a, inventore, eos suscipit iste eius molestiae. Voluptas rerum voluptatum, quos mollitia consequatur rem laudantium, cupiditate repudiandae, molestias porro iure. Quis placeat libero id quidem tenetur ab sapiente, cum. Aperiam a rerum vel! Neque, ea. Tempora in, quidem quam temporibus. Earum minus iusto id sit minima officia eum beatae, tempora eligendi nemo odio doloremque, deserunt atque dolorum assumenda asperiores mollitia ex ipsa. Cum ut porro beatae voluptatibus labore incidunt dolorum tenetur repellat illo ad, quas commodi possimus, placeat ipsum officia dolor dolorem dignissimos corrupti aut animi nostrum rerum unde sint tempore libero. Placeat, dolore. Voluptate iure obcaecati aspernatur quidem vel magnam, accusantium commodi nostrum, repellat dolorum consequatur velit quo nihil nulla cupiditate. Magni est ipsa, facere voluptates impedit iste qui repellat ullam, blanditiis recusandae a. Magni cum repellendus officiis qui, possimus reprehenderit fuga sed doloribus culpa sapiente iste officia modi ex dolorem illum, voluptates corporis ad id, autem voluptatem molestiae! Ea optio doloribus enim sint iusto perferendis voluptatem saepe quo odio at, atque veniam possimus commodi, maiores! Natus perspiciatis voluptas adipisci, quasi laboriosam fugiat? Perferendis.'),
(3, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum voluptatibus molestias, laboriosam odio hic natus numquam ut iusto, soluta harum nobis repellendus debitis ipsa tempore voluptates expedita facere eos velit.', 12000, 'Курсы CSS для начинающих', 'public_html/img/small/css-b.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae omnis fugit ducimus aperiam dignissimos facilis deserunt quasi doloremque fuga, totam dolores soluta quas repudiandae! Voluptas quos totam esse cumque hic ducimus nam, id ut, facere consequuntur ipsum neque unde maxime quasi expedita excepturi, cum maiores! Est cupiditate voluptate sunt laboriosam, culpa eveniet, architecto. Atque error ab accusamus tenetur laborum beatae similique itaque qui, quasi magni, a, inventore, eos suscipit iste eius molestiae. Voluptas rerum voluptatum, quos mollitia consequatur rem laudantium, cupiditate repudiandae, molestias porro iure. Quis placeat libero id quidem tenetur ab sapiente, cum. Aperiam a rerum vel! Neque, ea. Tempora in, quidem quam temporibus. Earum minus iusto id sit minima officia eum beatae, tempora eligendi nemo odio doloremque, deserunt atque dolorum assumenda asperiores mollitia ex ipsa. Cum ut porro beatae voluptatibus labore incidunt dolorum tenetur repellat illo ad, quas commodi possimus, placeat ipsum officia dolor dolorem dignissimos corrupti aut animi nostrum rerum unde sint tempore libero. Placeat, dolore. Voluptate iure obcaecati aspernatur quidem vel magnam, accusantium commodi nostrum, repellat dolorum consequatur velit quo nihil nulla cupiditate. Magni est ipsa, facere voluptates impedit iste qui repellat ullam, blanditiis recusandae a. Magni cum repellendus officiis qui, possimus reprehenderit fuga sed doloribus culpa sapiente iste officia modi ex dolorem illum, voluptates corporis ad id, autem voluptatem molestiae! Ea optio doloribus enim sint iusto perferendis voluptatem saepe quo odio at, atque veniam possimus commodi, maiores! Natus perspiciatis voluptas adipisci, quasi laboriosam fugiat? Perferendis.'),
(4, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum voluptatibus molestias, laboriosam odio hic natus numquam ut iusto, soluta harum nobis repellendus debitis ipsa tempore voluptates expedita facere eos velit.', 15000, 'Курсы С++', 'public_html/img/small/cpp-b.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae omnis fugit ducimus aperiam dignissimos facilis deserunt quasi doloremque fuga, totam dolores soluta quas repudiandae! Voluptas quos totam esse cumque hic ducimus nam, id ut, facere consequuntur ipsum neque unde maxime quasi expedita excepturi, cum maiores! Est cupiditate voluptate sunt laboriosam, culpa eveniet, architecto. Atque error ab accusamus tenetur laborum beatae similique itaque qui, quasi magni, a, inventore, eos suscipit iste eius molestiae. Voluptas rerum voluptatum, quos mollitia consequatur rem laudantium, cupiditate repudiandae, molestias porro iure. Quis placeat libero id quidem tenetur ab sapiente, cum. Aperiam a rerum vel! Neque, ea. Tempora in, quidem quam temporibus. Earum minus iusto id sit minima officia eum beatae, tempora eligendi nemo odio doloremque, deserunt atque dolorum assumenda asperiores mollitia ex ipsa. Cum ut porro beatae voluptatibus labore incidunt dolorum tenetur repellat illo ad, quas commodi possimus, placeat ipsum officia dolor dolorem dignissimos corrupti aut animi nostrum rerum unde sint tempore libero. Placeat, dolore. Voluptate iure obcaecati aspernatur quidem vel magnam, accusantium commodi nostrum, repellat dolorum consequatur velit quo nihil nulla cupiditate. Magni est ipsa, facere voluptates impedit iste qui repellat ullam, blanditiis recusandae a. Magni cum repellendus officiis qui, possimus reprehenderit fuga sed doloribus culpa sapiente iste officia modi ex dolorem illum, voluptates corporis ad id, autem voluptatem molestiae! Ea optio doloribus enim sint iusto perferendis voluptatem saepe quo odio at, atque veniam possimus commodi, maiores! Natus perspiciatis voluptas adipisci, quasi laboriosam fugiat? Perferendis.'),
(5, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum voluptatibus molestias, laboriosam odio hic natus numquam ut iusto, soluta harum nobis repellendus debitis ipsa tempore voluptates expedita facere eos velit.', 14000, 'Курсы 1С программирования', 'public_html/img/small/1c-b.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae omnis fugit ducimus aperiam dignissimos facilis deserunt quasi doloremque fuga, totam dolores soluta quas repudiandae! Voluptas quos totam esse cumque hic ducimus nam, id ut, facere consequuntur ipsum neque unde maxime quasi expedita excepturi, cum maiores! Est cupiditate voluptate sunt laboriosam, culpa eveniet, architecto. Atque error ab accusamus tenetur laborum beatae similique itaque qui, quasi magni, a, inventore, eos suscipit iste eius molestiae. Voluptas rerum voluptatum, quos mollitia consequatur rem laudantium, cupiditate repudiandae, molestias porro iure. Quis placeat libero id quidem tenetur ab sapiente, cum. Aperiam a rerum vel! Neque, ea. Tempora in, quidem quam temporibus. Earum minus iusto id sit minima officia eum beatae, tempora eligendi nemo odio doloremque, deserunt atque dolorum assumenda asperiores mollitia ex ipsa. Cum ut porro beatae voluptatibus labore incidunt dolorum tenetur repellat illo ad, quas commodi possimus, placeat ipsum officia dolor dolorem dignissimos corrupti aut animi nostrum rerum unde sint tempore libero. Placeat, dolore. Voluptate iure obcaecati aspernatur quidem vel magnam, accusantium commodi nostrum, repellat dolorum consequatur velit quo nihil nulla cupiditate. Magni est ipsa, facere voluptates impedit iste qui repellat ullam, blanditiis recusandae a. Magni cum repellendus officiis qui, possimus reprehenderit fuga sed doloribus culpa sapiente iste officia modi ex dolorem illum, voluptates corporis ad id, autem voluptatem molestiae! Ea optio doloribus enim sint iusto perferendis voluptatem saepe quo odio at, atque veniam possimus commodi, maiores! Natus perspiciatis voluptas adipisci, quasi laboriosam fugiat? Perferendis.'),
(6, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum voluptatibus molestias, laboriosam odio hic natus numquam ut iusto, soluta harum nobis repellendus debitis ipsa tempore voluptates expedita facere eos velit.', 15000, 'Курсы JS', 'public_html/img/small/js-b.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae omnis fugit ducimus aperiam dignissimos facilis deserunt quasi doloremque fuga, totam dolores soluta quas repudiandae! Voluptas quos totam esse cumque hic ducimus nam, id ut, facere consequuntur ipsum neque unde maxime quasi expedita excepturi, cum maiores! Est cupiditate voluptate sunt laboriosam, culpa eveniet, architecto. Atque error ab accusamus tenetur laborum beatae similique itaque qui, quasi magni, a, inventore, eos suscipit iste eius molestiae. Voluptas rerum voluptatum, quos mollitia consequatur rem laudantium, cupiditate repudiandae, molestias porro iure. Quis placeat libero id quidem tenetur ab sapiente, cum. Aperiam a rerum vel! Neque, ea. Tempora in, quidem quam temporibus. Earum minus iusto id sit minima officia eum beatae, tempora eligendi nemo odio doloremque, deserunt atque dolorum assumenda asperiores mollitia ex ipsa. Cum ut porro beatae voluptatibus labore incidunt dolorum tenetur repellat illo ad, quas commodi possimus, placeat ipsum officia dolor dolorem dignissimos corrupti aut animi nostrum rerum unde sint tempore libero. Placeat, dolore. Voluptate iure obcaecati aspernatur quidem vel magnam, accusantium commodi nostrum, repellat dolorum consequatur velit quo nihil nulla cupiditate. Magni est ipsa, facere voluptates impedit iste qui repellat ullam, blanditiis recusandae a. Magni cum repellendus officiis qui, possimus reprehenderit fuga sed doloribus culpa sapiente iste officia modi ex dolorem illum, voluptates corporis ad id, autem voluptatem molestiae! Ea optio doloribus enim sint iusto perferendis voluptatem saepe quo odio at, atque veniam possimus commodi, maiores! Natus perspiciatis voluptas adipisci, quasi laboriosam fugiat? Perferendis.'),
(7, 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum voluptatibus molestias, laboriosam odio hic natus numquam ut iusto, soluta harum nobis repellendus debitis ipsa tempore voluptates expedita facere eos velit.', 6700, 'Курсы Java для начинающих', 'public_html/img/small/java-b.png', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae omnis fugit ducimus aperiam dignissimos facilis deserunt quasi doloremque fuga, totam dolores soluta quas repudiandae! Voluptas quos totam esse cumque hic ducimus nam, id ut, facere consequuntur ipsum neque unde maxime quasi expedita excepturi, cum maiores! Est cupiditate voluptate sunt laboriosam, culpa eveniet, architecto. Atque error ab accusamus tenetur laborum beatae similique itaque qui, quasi magni, a, inventore, eos suscipit iste eius molestiae. Voluptas rerum voluptatum, quos mollitia consequatur rem laudantium, cupiditate repudiandae, molestias porro iure. Quis placeat libero id quidem tenetur ab sapiente, cum. Aperiam a rerum vel! Neque, ea. Tempora in, quidem quam temporibus. Earum minus iusto id sit minima officia eum beatae, tempora eligendi nemo odio doloremque, deserunt atque dolorum assumenda asperiores mollitia ex ipsa. Cum ut porro beatae voluptatibus labore incidunt dolorum tenetur repellat illo ad, quas commodi possimus, placeat ipsum officia dolor dolorem dignissimos corrupti aut animi nostrum rerum unde sint tempore libero. Placeat, dolore. Voluptate iure obcaecati aspernatur quidem vel magnam, accusantium commodi nostrum, repellat dolorum consequatur velit quo nihil nulla cupiditate. Magni est ipsa, facere voluptates impedit iste qui repellat ullam, blanditiis recusandae a. Magni cum repellendus officiis qui, possimus reprehenderit fuga sed doloribus culpa sapiente iste officia modi ex dolorem illum, voluptates corporis ad id, autem voluptatem molestiae! Ea optio doloribus enim sint iusto perferendis voluptatem saepe quo odio at, atque veniam possimus commodi, maiores! Natus perspiciatis voluptas adipisci, quasi laboriosam fugiat? Perferendis.');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `review` text NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `review`, `data`) VALUES
(6, 'Наталья', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio molestias in repellat doloribus assumenda magni incidunt ut totam, aliquam, architecto suscipit odio, quo temporibus necessitatibus sapiente provident. Nostrum, aliquam, voluptates! Doloribus aut illo doloremque reiciendis, laboriosam deleniti. Ratione reiciendis facilis, soluta saepe fuga deleniti laudantium culpa sint commodi, exercitationem accusamus.', '2009-06-20'),
(7, 'Николай', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio molestias in repellat doloribus assumenda magni incidunt ut totam, aliquam, architecto suscipit odio, quo temporibus necessitatibus sapiente provident. Nostrum, aliquam, voluptates! Doloribus aut illo doloremque reiciendis, laboriosam deleniti. Ratione reiciendis facilis, soluta saepe fuga deleniti laudantium culpa sint commodi, exercitationem accusamus.', '2009-06-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
