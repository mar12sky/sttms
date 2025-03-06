
SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `agenda`;
CREATE TABLE `agenda` (
  `agenda_id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `agenda_title` text COLLATE utf8mb4_general_ci,
  `agenda_subtitle` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `agenda_desc` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `agenda_type` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `agenda_time` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `agenda_date` timestamp NULL DEFAULT NULL,
  `agenda_status` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL DEFAULT 'open',
  `speaker_list` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `in_the_chair` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`agenda_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `agenda` (`agenda_id`, `agenda_title`, `agenda_subtitle`, `agenda_desc`, `agenda_type`, `agenda_time`, `agenda_date`, `agenda_status`, `speaker_list`, `in_the_chair`, `created_at`) VALUES
(3,	'BILL FOR INTRODUCTION',	'SUB TITLE',	'DESCRIPTION',	'discussion',	'180',	'2025-01-30 01:20:07',	'closed',	'19,4,18,13,14,20,21',	'SHRI JAGAT PRAKASH NADDA',	'2025-02-28 06:58:19'),
(4,	'EAXPLE BILL',	'',	'',	'zero-hours',	'240',	'2025-01-30 01:20:07',	'closed',	'23,25,26,24,48,20,22,155,159,160,161',	'SMT. NIRMALA SITHARAMAN',	'2025-03-03 07:55:03'),
(5,	'new',	'',	'',	'speaking',	'240',	'2025-01-30 01:20:07',	'closed',	'30,63,65,33,34,35,67,64',	'SMT. NIRMALA SITHARAMAN',	'2025-03-06 06:26:01'),
(6,	'Hello',	'',	'',	'zero-hours',	'',	'2025-01-30 01:20:07',	'open',	'0',	'SHRI PRAFUL PATEL',	'2025-03-06 06:26:04');

