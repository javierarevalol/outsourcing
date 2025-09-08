-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Server: 127.0.0.1
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

DROP DATABASE IF EXISTS db_outsourcing;
CREATE DATABASE db_outsourcing;
USE db_outsourcing;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "-05:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_outsourcing`
--

-- --------------------------------------------------------
--
-- Tablas Dinámicas de Usuarios
--
-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--
CREATE TABLE `usuarios` (
  `id` INT NOT NULL PRIMARY KEY,
  `nombres` VARCHAR(255) NOT NULL,  
  `cargo` VARCHAR(63) NOT NULL,
  `jefe` VARCHAR(63) NOT NULL,
  `usuario` VARCHAR(63) NOT NULL UNIQUE,
  `contrasena` VARCHAR(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- AUTO_INCREMENT values for tables
--

-- --------------------------------------------------------

--
-- AUTO_INCREMENT value for the table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` INT NOT NULL AUTO_INCREMENT;
