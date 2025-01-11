-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2025 at 05:12 PM
-- Server version: 10.11.10-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `u729750794_advancecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `middlename` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `firstname`, `middlename`, `lastname`, `phone`, `address`, `email`, `dob`, `gender`, `date`, `created_at`, `updated_at`) VALUES
(10, 'ABU BUCKKER', 'SIDDIQ', 'LABIB', '01720843651', 'Islamia College Road', 'siddiq1907108@stud.kuet.ac.bd', '2021-10-20', 'male', '2024-04-18', '2024-04-19 02:12:56', '2024-04-19 02:12:56'),
(11, 'Md.', 'Maruf', 'Miah', '0152172', 'Amin Trade Center, 17, KDA Avenue', 'admin@gmail.com', '2024-04-21', 'male', '2024-04-12', '2024-04-19 11:33:58', '2024-04-19 11:33:58'),
(15, 'sumon', 'hossian', 'sumon', '1213456454', 'jessore', 'sumon@gmail.com', '2024-06-06', 'male', '2024-06-13', '2024-06-01 01:03:48', '2024-06-01 01:04:24'),
(16, 'Domial', 'Tripura', 'Danial', '48468987987', 'dhaka', 'donail@gmail.com', '2024-01-10', 'male', '2024-05-31', '2024-06-01 01:55:45', '2024-06-01 01:56:05'),
(17, 'Shahriar', 'Al', 'Rafi', '01701906677', 'KUET,Rashid Hall', 'shahriaralrafi7070@gmail.com', '2002-01-04', 'male', '2025-01-04', '2025-01-04 17:20:19', '2025-01-04 17:20:19');

-- --------------------------------------------------------

--
-- Table structure for table `basic_soap_answers`
--

CREATE TABLE `basic_soap_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `basic_soap_question_id` bigint(20) UNSIGNED NOT NULL,
  `basic_soap_option_id` bigint(20) UNSIGNED DEFAULT NULL,
  `basic_soap_answer` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_soap_answers`
--

INSERT INTO `basic_soap_answers` (`id`, `appointment_id`, `basic_soap_question_id`, `basic_soap_option_id`, `basic_soap_answer`, `created_at`, `updated_at`) VALUES
(100, 10, 1, 1, '1', '2024-04-20 01:41:49', '2024-04-20 01:41:49'),
(102, 10, 2, 13, '13', '2024-04-20 01:41:49', '2024-04-20 01:41:49'),
(104, 10, 1, 5, '5', '2024-05-07 03:32:59', '2024-05-07 03:32:59'),
(105, 10, 2, 14, '14', '2024-05-07 03:32:59', '2024-05-07 03:32:59'),
(106, 10, 1, 1, '1', '2024-05-09 06:17:25', '2024-05-09 06:17:25'),
(107, 10, 2, 13, '13', '2024-05-09 06:17:25', '2024-05-09 06:17:25'),
(108, 11, 1, 5, '5', '2024-05-09 06:48:48', '2024-05-09 06:48:48'),
(109, 11, 2, 13, '13', '2024-05-09 06:48:48', '2024-05-09 06:48:48'),
(110, 11, 1, 6, '6', '2024-05-09 06:50:12', '2024-05-09 06:50:12'),
(111, 11, 2, 14, '14', '2024-05-09 06:50:12', '2024-05-09 06:50:12'),
(112, 16, 1, 1, '1', '2024-06-01 01:59:29', '2024-06-01 01:59:29'),
(113, 16, 2, 12, '12', '2024-06-01 01:59:29', '2024-06-01 01:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `basic_soap_options`
--

CREATE TABLE `basic_soap_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `basic_soap_question_id` bigint(20) UNSIGNED NOT NULL,
  `basic_soap_option` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_soap_options`
--

INSERT INTO `basic_soap_options` (`id`, `basic_soap_question_id`, `basic_soap_option`, `created_at`, `updated_at`) VALUES
(1, 1, 'Relieve Plan', NULL, NULL),
(2, 1, 'Relieve Tension', NULL, NULL),
(3, 1, 'Relieve Stress', NULL, NULL),
(4, 1, 'Rrelieve Anixiety', NULL, NULL),
(5, 1, 'Improve Mobility', NULL, NULL),
(6, 1, 'Improve Quality of Life(Sleep, Mood, etc)', NULL, NULL),
(8, 1, 'Relaxation', NULL, NULL),
(12, 2, 'Yes', NULL, NULL),
(13, 2, 'No', NULL, NULL),
(14, 2, 'Unsure', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `basic_soap_other_question_answers`
--

CREATE TABLE `basic_soap_other_question_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `treatment_goal` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `subjective` varchar(255) NOT NULL,
  `objective` varchar(255) NOT NULL,
  `assessment` varchar(255) NOT NULL,
  `plan` varchar(255) NOT NULL,
  `document` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_soap_other_question_answers`
--

INSERT INTO `basic_soap_other_question_answers` (`id`, `appointment_id`, `treatment_goal`, `image`, `subjective`, `objective`, `assessment`, `plan`, `document`, `created_at`, `updated_at`) VALUES
(11, 10, 'asd', 'document/YAgsod4UFPyMkvHIDzmM7d5b9a4AESVn6WkWqhec.jpg', 'asd', 'asd', 'sda', 'asd', 'document/YAgsod4UFPyMkvHIDzmM7d5b9a4AESVn6WkWqhec.jpg', '2024-04-20 01:41:49', '2024-04-20 01:41:49'),
(13, 10, 'vdf', 'document/zUOqcWs3mM4ACclAuX43HLn3kvtLFdL76nHsKKnC.jpg', 'efef', 'fce', 'fsd', 'df', 'document/zUOqcWs3mM4ACclAuX43HLn3kvtLFdL76nHsKKnC.jpg', '2024-05-07 03:32:59', '2024-05-07 03:32:59'),
(14, 10, 'gaal', 'document/vLklRBawlirmlW5YECPtJnhDg0W6tKIWafnmRZrK.jpg', 'sub', 'onj', 'ass', 'plan', 'document/vLklRBawlirmlW5YECPtJnhDg0W6tKIWafnmRZrK.jpg', '2024-05-09 06:17:25', '2024-05-09 06:17:25'),
(15, 11, 'a', 'document/sY9ZpdxhvSdpSGRn0P9X96NbX5HKQ7LfjIADJwLr.jpg', 'x', 'y', 'z', 't', 'document/sY9ZpdxhvSdpSGRn0P9X96NbX5HKQ7LfjIADJwLr.jpg', '2024-05-09 06:48:48', '2024-05-09 06:48:48'),
(16, 11, 'er', 'document/GwwFlNZ138XjUnYBfMimHkYzCtP0YQQ7AlryxyeC.jpg', 'yt', 'iu', 'po', 're', 'document/GwwFlNZ138XjUnYBfMimHkYzCtP0YQQ7AlryxyeC.jpg', '2024-05-09 06:50:12', '2024-05-09 06:50:12'),
(17, 16, 'ghjgh', 'document/CQDvnIGybMsF6QGgZ5sIpGdYCrCUOFv3HF32ceW0.jpg', 'jhfg', 'kjmngh', 'jghcj', 'hgj', 'document/CQDvnIGybMsF6QGgZ5sIpGdYCrCUOFv3HF32ceW0.jpg', '2024-06-01 01:59:29', '2024-06-01 01:59:29');

-- --------------------------------------------------------

--
-- Table structure for table `basic_soap_questions`
--

CREATE TABLE `basic_soap_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `basic_soap_question` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_soap_questions`
--

INSERT INTO `basic_soap_questions` (`id`, `basic_soap_question`, `created_at`, `updated_at`) VALUES
(1, 'What is the primary reason for visit?', NULL, NULL),
(2, 'Have you treated in Past?', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_soap_answers`
--

CREATE TABLE `detail_soap_answers` (
  `id` int(11) NOT NULL,
  `patient_id` bigint(20) NOT NULL,
  `patient_data` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`patient_data`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `detail_soap_answers`
--

INSERT INTO `detail_soap_answers` (`id`, `patient_id`, `patient_data`) VALUES
(8, 10, '{\"appointment_id\":\"10\",\"q_answer\":[\"Relieve pain\",\"Relieve tension\",\"Relieve stress\"],\"past_treatment\":[\"No\"],\"time_pattern\":[\"Variable (Pain all the time. Moments of more pain or varying types of pain)\"],\"previous_practitioner\":[\"Physician\",\"Massage Therapist\"],\"tests\":[\"Posture assessment of spine\",\"Posture assessment of shoulders\"],\"treatGoal\":\"fg\",\"sensation_of_pain\":\"Throbbing\",\"pain_start_date\":\"2024-04-01\",\"specific_incident\":\"fsdf\",\"additional_comment\":\"fd\",\"lordosis\":[\"NONE\",\"MILD\",\"MODERATE\"],\"kyphosis\":[\"MODERATE\"],\"scoliosis\":[\"SERVER\"],\"tilt\":[\"MILD\"],\"twist\":[\"MILD\"],\"protraction\":[\"MILD\"],\"pelvic_tilt\":[\"MODERATE\"],\"pelvic_twist\":[\"MODERATE\"],\"pelvic_protraction\":[\"MODERATE\"],\"retraction\":[\"SERVER\"],\"posture_assessment\":\"dsf\",\"area_tested\":\"Right knee\",\"motion\":\"Passive\",\"Result\":\"Full range\",\"additional_palpation\":\"sdf\",\"areas_treated_another\":[\"Neck\",\"Chest\",\"Abdomen\"],\"area_of_focus\":\"sdf\",\"techniques_used\":[\"Craniosacral\",\"Cupping\",\"Joint mobilization\"],\"client_respond\":\"sdf\",\"another_additional_comment\":\"fsdf\",\"treatment_plan\":\"sdf\",\"self_care\":\"fsdf\",\"file\":\"document\\/JpRVci01s0LT0ClGtFKdZkWZa88luivmDWDhq5Qa.jpg\"}'),
(9, 16, '{\"appointment_id\":\"16\",\"q_answer\":[\"Relieve pain\"],\"past_treatment\":[\"No\"],\"time_pattern\":[\"Variable (Pain all the time. Moments of more pain or varying types of pain)\"],\"previous_practitioner\":[\"Physical Therapist\"],\"tests\":[\"Posture assessment of shoulders\"],\"treatGoal\":\"adfa\",\"sensation_of_pain\":\"Sensitive\",\"pain_start_date\":\"2024-05-29\",\"specific_incident\":\"ftaed\",\"additional_comment\":\"dfasd\",\"lordosis\":[\"NONE\",\"MILD\"],\"kyphosis\":[\"NONE\"],\"scoliosis\":[\"MODERATE\"],\"tilt\":[\"NONE\"],\"twist\":[\"MODERATE\"],\"protraction\":[\"SERVER\"],\"pelvic_tilt\":[\"NONE\"],\"pelvic_twist\":[\"MILD\"],\"pelvic_protraction\":[\"MODERATE\"],\"retraction\":[\"SERVER\"],\"posture_assessment\":\"fsdf\",\"area_tested\":\"Left ankle\",\"motion\":\"Active\",\"Result\":\"Full range\",\"additional_palpation\":\"asdfcasdf\",\"areas_treated_another\":[\"Jaw\"],\"area_of_focus\":\"fasdf\",\"techniques_used\":[\"Neuromobalization\"],\"client_respond\":\"fsdfcas\",\"another_additional_comment\":\"safc\",\"treatment_plan\":\"sdfas\",\"self_care\":\"fasdfc\",\"file\":\"document\\/bOot4zDm4SeC5XXLXTfzJf9Ld4tTUI5VuVSkaag7.jpg\"}');

-- --------------------------------------------------------

--
-- Table structure for table `general_soap_answers`
--

CREATE TABLE `general_soap_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `general_soap_question_id` bigint(20) UNSIGNED NOT NULL,
  `general_soap_option_id` bigint(20) UNSIGNED NOT NULL,
  `general_soap_answer` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_soap_answers`
--

INSERT INTO `general_soap_answers` (`id`, `appointment_id`, `general_soap_question_id`, `general_soap_option_id`, `general_soap_answer`, `created_at`, `updated_at`) VALUES
(4, 10, 1, 2, 2, '2024-04-21 04:42:45', '2024-04-21 04:42:45'),
(5, 10, 1, 3, 3, '2024-04-21 04:42:45', '2024-04-21 04:42:45'),
(6, 10, 2, 8, 8, '2024-04-21 04:42:45', '2024-04-21 04:42:45'),
(7, 10, 1, 1, 1, '2024-04-21 05:08:20', '2024-04-21 05:08:20'),
(8, 10, 1, 2, 2, '2024-04-21 05:08:20', '2024-04-21 05:08:20'),
(9, 10, 1, 3, 3, '2024-04-21 05:08:20', '2024-04-21 05:08:20'),
(10, 10, 2, 8, 8, '2024-04-21 05:08:20', '2024-04-21 05:08:20'),
(11, 16, 1, 2, 2, '2024-06-01 01:59:42', '2024-06-01 01:59:42'),
(12, 16, 2, 10, 10, '2024-06-01 01:59:42', '2024-06-01 01:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `general_soap_options`
--

CREATE TABLE `general_soap_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `general_soap_question_id` bigint(20) UNSIGNED NOT NULL,
  `general_soap_option` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_soap_options`
--

INSERT INTO `general_soap_options` (`id`, `general_soap_question_id`, `general_soap_option`, `created_at`, `updated_at`) VALUES
(1, 1, 'Relieve Plan', NULL, NULL),
(2, 1, 'Relieve Tension', NULL, NULL),
(3, 1, 'Relieve Stress', NULL, NULL),
(4, 1, 'Rrelieve Anixiety', NULL, NULL),
(5, 1, 'Improve Mobility', NULL, NULL),
(6, 1, 'Improve Quality of Life(Sleep, Mood, etc)', NULL, NULL),
(7, 1, 'Relaxation', NULL, NULL),
(8, 2, 'Yes', NULL, NULL),
(9, 2, 'NO', NULL, NULL),
(10, 2, 'Unsure', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `general_soap_other_answers`
--

CREATE TABLE `general_soap_other_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `treatment_goal` varchar(255) NOT NULL,
  `appointment_note` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_soap_other_answers`
--

INSERT INTO `general_soap_other_answers` (`id`, `appointment_id`, `treatment_goal`, `appointment_note`, `created_at`, `updated_at`) VALUES
(1, 10, 'jmkh', 'fkh', '2024-04-21 05:08:20', '2024-04-21 05:08:20'),
(2, 16, 'hrt', 'hg', '2024-06-01 01:59:42', '2024-06-01 01:59:42');

-- --------------------------------------------------------

--
-- Table structure for table `general_soap_questions`
--

CREATE TABLE `general_soap_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `general_soap_question` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `general_soap_questions`
--

INSERT INTO `general_soap_questions` (`id`, `general_soap_question`, `created_at`, `updated_at`) VALUES
(1, 'What is the primary reason for visit?', NULL, NULL),
(2, 'Have we treated you for this in the past?', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `histories`
--

CREATE TABLE `histories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `condition` varchar(255) NOT NULL,
  `symptoms` varchar(255) NOT NULL,
  `injuries` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `histories`
--

INSERT INTO `histories` (`id`, `appointment_id`, `condition`, `symptoms`, `injuries`, `other`, `date`, `created_at`, `updated_at`) VALUES
(10, 10, 'tension, stress, overuse', 'tear or stretching in a tendon or muscle', 'minor injuries', 'muscles or a small par', '2024-05-14', '2024-04-19 02:15:43', '2024-05-30 20:21:20'),
(15, 11, 'endometriosis', 'endometriosis', 'endometriosis', 'endometriosis', '2024-05-16', '2024-05-30 20:28:37', '2024-05-30 20:28:37'),
(16, 15, 'lower back pain', 'endometriosis', 'hfdg', 'gsdfg', '2024-05-31', '2024-06-01 01:05:47', '2024-06-01 01:05:47'),
(17, 16, 'Overweight', 'Environmental Quality.', 'Allergies', 'Diabetes', '2024-05-02', '2024-06-01 01:57:27', '2024-06-01 01:57:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2024_01_16_101820_create_users_table', 1),
(9, '2024_01_23_071249_create_answers_table', 5),
(12, '2024_01_29_004122_create_appointments_table', 6),
(16, '2024_02_25_074917_create_histories_table', 7),
(18, '2024_02_28_191349_create_basic_soap_questions_table', 8),
(19, '2024_02_28_192835_create_basic_soap_option_table', 9),
(20, '2024_02_28_193721_create_basic_soap_answers_table', 10),
(21, '2024_02_28_204523_create_general_soap_questions_table', 11),
(25, '2024_02_28_204839_create_general_soap_options_table', 12),
(26, '2024_03_04_155551_create_basic_soap_other_question_answers_table', 13),
(27, '2024_04_21_104424_create_general_soap_other_answers_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `otp`, `created_at`, `updated_at`) VALUES
(1, 'abubuckkersiddikh@gmail.com', '123456', '0', NULL, '2024-01-27 13:45:51'),
(3, 'shujonmoral@gmail.com', '123456', '', NULL, NULL),
(4, 'm@n.com', 'maruf', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_soap_answers`
--
ALTER TABLE `basic_soap_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `basic_soap_answers_appointment_id_foreign` (`appointment_id`),
  ADD KEY `basic_soap_answers_basic_soap_question_id_foreign` (`basic_soap_question_id`),
  ADD KEY `basic_soap_answers_basic_soap_option_id_foreign` (`basic_soap_option_id`);

--
-- Indexes for table `basic_soap_options`
--
ALTER TABLE `basic_soap_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `basic_soap_option_basic_soap_question_id_foreign` (`basic_soap_question_id`);

--
-- Indexes for table `basic_soap_other_question_answers`
--
ALTER TABLE `basic_soap_other_question_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `basic_soap_other_question_answers_appointment_id_foreign` (`appointment_id`);

--
-- Indexes for table `basic_soap_questions`
--
ALTER TABLE `basic_soap_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_soap_answers`
--
ALTER TABLE `detail_soap_answers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_soap_answers`
--
ALTER TABLE `general_soap_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `general_soap_answers_appointment_id_foreign` (`appointment_id`),
  ADD KEY `general_soap_answers_general_soap_question_id_foreign` (`general_soap_question_id`);

--
-- Indexes for table `general_soap_options`
--
ALTER TABLE `general_soap_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `general_soap_options_general_soap_question_id_foreign` (`general_soap_question_id`);

--
-- Indexes for table `general_soap_other_answers`
--
ALTER TABLE `general_soap_other_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `general_soap_other_answers_appointment_id_foreign` (`appointment_id`);

--
-- Indexes for table `general_soap_questions`
--
ALTER TABLE `general_soap_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `histories`
--
ALTER TABLE `histories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `histories_appointment_id_foreign` (`appointment_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `basic_soap_answers`
--
ALTER TABLE `basic_soap_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `basic_soap_options`
--
ALTER TABLE `basic_soap_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `basic_soap_other_question_answers`
--
ALTER TABLE `basic_soap_other_question_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `basic_soap_questions`
--
ALTER TABLE `basic_soap_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `detail_soap_answers`
--
ALTER TABLE `detail_soap_answers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `general_soap_answers`
--
ALTER TABLE `general_soap_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `general_soap_options`
--
ALTER TABLE `general_soap_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `general_soap_other_answers`
--
ALTER TABLE `general_soap_other_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `general_soap_questions`
--
ALTER TABLE `general_soap_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `histories`
--
ALTER TABLE `histories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `basic_soap_answers`
--
ALTER TABLE `basic_soap_answers`
  ADD CONSTRAINT `basic_soap_answers_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `basic_soap_answers_basic_soap_option_id_foreign` FOREIGN KEY (`basic_soap_option_id`) REFERENCES `basic_soap_options` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `basic_soap_answers_basic_soap_question_id_foreign` FOREIGN KEY (`basic_soap_question_id`) REFERENCES `basic_soap_questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `basic_soap_options`
--
ALTER TABLE `basic_soap_options`
  ADD CONSTRAINT `basic_soap_option_basic_soap_question_id_foreign` FOREIGN KEY (`basic_soap_question_id`) REFERENCES `basic_soap_questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `basic_soap_other_question_answers`
--
ALTER TABLE `basic_soap_other_question_answers`
  ADD CONSTRAINT `basic_soap_other_question_answers_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `general_soap_answers`
--
ALTER TABLE `general_soap_answers`
  ADD CONSTRAINT `general_soap_answers_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `general_soap_answers_general_soap_question_id_foreign` FOREIGN KEY (`general_soap_question_id`) REFERENCES `general_soap_questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `general_soap_options`
--
ALTER TABLE `general_soap_options`
  ADD CONSTRAINT `general_soap_options_general_soap_question_id_foreign` FOREIGN KEY (`general_soap_question_id`) REFERENCES `general_soap_questions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `general_soap_other_answers`
--
ALTER TABLE `general_soap_other_answers`
  ADD CONSTRAINT `general_soap_other_answers_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `histories`
--
ALTER TABLE `histories`
  ADD CONSTRAINT `histories_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
