-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Dec 17, 2020 at 01:04 PM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `csy2028`
--

-- --------------------------------------------------------

--
-- Table structure for table `persons`
--

CREATE TABLE `persons` (
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `persons`
--

INSERT INTO `persons` (`name`, `surname`, `dob`, `email`) VALUES
('Ram', 'Das', '2001-09-02', 'email1@email.com'),
('Sita', 'Lal', '2005-02-01', 'email2@email.com'),
('Gita', 'Sen', '2002-04-08', 'email3@email.com'),
('Lal', 'Chandra', '2002-09-12', 'email5@email.com'),
('Ram', 'Chandra', '2000-06-03', 'email@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `test`
--

CREATE TABLE `test` (
  `id` int(255) NOT NULL,
  `name` varchar(300) NOT NULL,
  `username` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `test`
--

INSERT INTO `test` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'hello', 'hello1', 'hell@hello.com', '1234'),
(2, 'lol', 'lolo', 'cc95a08398a947262fd4bf1b3b8b6d26', '1234'),
(3, 'pop', '123asdf', 'op@ha.com', '$2y$10$ZlxKDdHMMlKMv.qiu4bx4e9eMrXfVm9oOnyCSUXdkTbOn1bM9Qof.'),
(4, 'name', 'user', 'name@user.com', '$2y$10$BdnxjHGJo0NiHQj3MmDryuhEpXh3bFCUscAtnd8/DBkIP3GFcee5a'),
(5, '123', 'user1', 'name1@user.com', '$2y$10$CmfpKQUl2rEMHbQhDZyAEeTOwaQga/TYK2AI9i8sga..6xfdwOp0.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `test`
--
ALTER TABLE `test`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `test`
--
ALTER TABLE `test`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
