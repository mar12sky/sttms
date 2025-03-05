-- Adminer 4.8.1 MySQL 8.0.41 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `agenda_meta`;
CREATE TABLE `agenda_meta` (
  `agenda_meta_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `agenda_id` bigint unsigned NOT NULL,
  `del_id` bigint unsigned NOT NULL,
  `time_allotted` tinyint unsigned NOT NULL,
  `time_taken` tinyint unsigned NOT NULL,
  `created_at` timestamp NOT NULL,
  PRIMARY KEY (`agenda_meta_id`),
  KEY `agenda_id` (`agenda_id`),
  CONSTRAINT `agenda_meta_ibfk_1` FOREIGN KEY (`agenda_id`) REFERENCES `agenda` (`agenda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `agenda_meta` (`agenda_meta_id`, `agenda_id`, `del_id`, `time_allotted`, `time_taken`, `created_at`) VALUES
(1,	3,	19,	13,	6,	'2025-03-03 18:08:16'),
(2,	3,	4,	13,	9,	'2025-03-03 18:08:16'),
(3,	3,	18,	13,	11,	'2025-03-03 18:08:16'),
(4,	3,	14,	13,	13,	'2025-03-03 18:08:16'),
(5,	3,	20,	13,	15,	'2025-03-03 18:08:16'),
(6,	4,	1,	180,	5,	'2025-03-05 07:50:20'),
(7,	4,	48,	180,	5,	'2025-03-05 07:57:31'),
(8,	4,	159,	180,	5,	'2025-03-05 08:05:32'),
(9,	4,	161,	180,	172,	'2025-03-05 08:09:56'),
(10,	4,	25,	180,	159,	'2025-03-05 08:13:04'),
(11,	4,	161,	180,	176,	'2025-03-05 09:58:02'),
(12,	5,	30,	0,	7,	'2025-03-05 11:05:53'),
(13,	5,	63,	0,	99,	'2025-03-05 11:20:33'),
(14,	5,	30,	0,	13,	'2025-03-05 11:24:36'),
(15,	5,	63,	0,	10,	'2025-03-05 12:04:05');

-- 2025-03-05 12:10:15