-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2025 at 09:27 AM
-- Server version: 11.7.2-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `btc`
--

-- --------------------------------------------------------

--
-- Table structure for table `wp_commentmeta`
--

CREATE TABLE `wp_commentmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `comment_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_comments`
--

CREATE TABLE `wp_comments` (
  `comment_ID` bigint(20) UNSIGNED NOT NULL,
  `comment_post_ID` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `comment_author` tinytext NOT NULL,
  `comment_author_email` varchar(100) NOT NULL DEFAULT '',
  `comment_author_url` varchar(200) NOT NULL DEFAULT '',
  `comment_author_IP` varchar(100) NOT NULL DEFAULT '',
  `comment_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `comment_content` text NOT NULL,
  `comment_karma` int(11) NOT NULL DEFAULT 0,
  `comment_approved` varchar(20) NOT NULL DEFAULT '1',
  `comment_agent` varchar(255) NOT NULL DEFAULT '',
  `comment_type` varchar(20) NOT NULL DEFAULT 'comment',
  `comment_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_comments`
--

INSERT INTO `wp_comments` (`comment_ID`, `comment_post_ID`, `comment_author`, `comment_author_email`, `comment_author_url`, `comment_author_IP`, `comment_date`, `comment_date_gmt`, `comment_content`, `comment_karma`, `comment_approved`, `comment_agent`, `comment_type`, `comment_parent`, `user_id`) VALUES
(1, 1, 'A WordPress Commenter', 'wapuu@wordpress.example', 'https://wordpress.org/', '', '2025-07-08 07:22:58', '2025-07-08 07:22:58', 'Hi, this is a comment.\nTo get started with moderating, editing, and deleting comments, please visit the Comments screen in the dashboard.\nCommenter avatars come from <a href=\"https://gravatar.com/\">Gravatar</a>.', 0, 'post-trashed', '', 'comment', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_links`
--

CREATE TABLE `wp_links` (
  `link_id` bigint(20) UNSIGNED NOT NULL,
  `link_url` varchar(255) NOT NULL DEFAULT '',
  `link_name` varchar(255) NOT NULL DEFAULT '',
  `link_image` varchar(255) NOT NULL DEFAULT '',
  `link_target` varchar(25) NOT NULL DEFAULT '',
  `link_description` varchar(255) NOT NULL DEFAULT '',
  `link_visible` varchar(20) NOT NULL DEFAULT 'Y',
  `link_owner` bigint(20) UNSIGNED NOT NULL DEFAULT 1,
  `link_rating` int(11) NOT NULL DEFAULT 0,
  `link_updated` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `link_rel` varchar(255) NOT NULL DEFAULT '',
  `link_notes` mediumtext NOT NULL,
  `link_rss` varchar(255) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_options`
--

CREATE TABLE `wp_options` (
  `option_id` bigint(20) UNSIGNED NOT NULL,
  `option_name` varchar(191) NOT NULL DEFAULT '',
  `option_value` longtext NOT NULL,
  `autoload` varchar(20) NOT NULL DEFAULT 'yes'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_options`
--

INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(1, 'cron', 'a:12:{i:1752222178;a:1:{s:16:\"wp_version_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1752222179;a:1:{s:34:\"wp_privacy_delete_old_export_files\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"hourly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:3600;}}}i:1752223978;a:1:{s:17:\"wp_update_plugins\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1752225778;a:1:{s:16:\"wp_update_themes\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1752261797;a:1:{s:21:\"wp_update_user_counts\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:10:\"twicedaily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:43200;}}}i:1752304979;a:1:{s:32:\"recovery_mode_clean_expired_keys\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1752304997;a:2:{s:19:\"wp_scheduled_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}s:25:\"delete_expired_transients\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1752305001;a:1:{s:30:\"wp_scheduled_auto_draft_delete\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:5:\"daily\";s:4:\"args\";a:0:{}s:8:\"interval\";i:86400;}}}i:1752564207;a:1:{s:30:\"wp_delete_temp_updater_backups\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}i:1752577130;a:1:{s:27:\"acf_update_site_health_data\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}i:1752650579;a:1:{s:30:\"wp_site_health_scheduled_check\";a:1:{s:32:\"40cd750bba9870f18aada2478b24840a\";a:3:{s:8:\"schedule\";s:6:\"weekly\";s:4:\"args\";a:0:{}s:8:\"interval\";i:604800;}}}s:7:\"version\";i:2;}', 'on'),
(2, 'siteurl', 'http://localhost/btc', 'on'),
(3, 'home', 'http://localhost/btc', 'on'),
(4, 'blogname', 'BTC', 'on'),
(5, 'blogdescription', 'Benin Textile Corporation', 'on'),
(6, 'users_can_register', '0', 'on'),
(7, 'admin_email', 'rajesh.kumar@thealphagency.com', 'on'),
(8, 'start_of_week', '1', 'on'),
(9, 'use_balanceTags', '0', 'on'),
(10, 'use_smilies', '1', 'on'),
(11, 'require_name_email', '1', 'on'),
(12, 'comments_notify', '1', 'on'),
(13, 'posts_per_rss', '10', 'on'),
(14, 'rss_use_excerpt', '0', 'on'),
(15, 'mailserver_url', 'mail.example.com', 'on'),
(16, 'mailserver_login', 'login@example.com', 'on'),
(17, 'mailserver_pass', '', 'on'),
(18, 'mailserver_port', '110', 'on'),
(19, 'default_category', '1', 'on'),
(20, 'default_comment_status', 'open', 'on'),
(21, 'default_ping_status', 'open', 'on'),
(22, 'default_pingback_flag', '0', 'on'),
(23, 'posts_per_page', '10', 'on'),
(24, 'date_format', 'F j, Y', 'on'),
(25, 'time_format', 'g:i a', 'on'),
(26, 'links_updated_date_format', 'F j, Y g:i a', 'on'),
(27, 'comment_moderation', '0', 'on'),
(28, 'moderation_notify', '1', 'on'),
(29, 'permalink_structure', '/%postname%/', 'on'),
(30, 'rewrite_rules', 'a:173:{s:11:\"^wp-json/?$\";s:22:\"index.php?rest_route=/\";s:14:\"^wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:21:\"^index.php/wp-json/?$\";s:22:\"index.php?rest_route=/\";s:24:\"^index.php/wp-json/(.*)?\";s:33:\"index.php?rest_route=/$matches[1]\";s:17:\"^wp-sitemap\\.xml$\";s:23:\"index.php?sitemap=index\";s:17:\"^wp-sitemap\\.xsl$\";s:36:\"index.php?sitemap-stylesheet=sitemap\";s:23:\"^wp-sitemap-index\\.xsl$\";s:34:\"index.php?sitemap-stylesheet=index\";s:48:\"^wp-sitemap-([a-z]+?)-([a-z\\d_-]+?)-(\\d+?)\\.xml$\";s:75:\"index.php?sitemap=$matches[1]&sitemap-subtype=$matches[2]&paged=$matches[3]\";s:34:\"^wp-sitemap-([a-z]+?)-(\\d+?)\\.xml$\";s:47:\"index.php?sitemap=$matches[1]&paged=$matches[2]\";s:9:\"events/?$\";s:25:\"index.php?post_type=event\";s:39:\"events/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?post_type=event&feed=$matches[1]\";s:34:\"events/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?post_type=event&feed=$matches[1]\";s:26:\"events/page/([0-9]{1,})/?$\";s:43:\"index.php?post_type=event&paged=$matches[1]\";s:10:\"product/?$\";s:27:\"index.php?post_type=product\";s:40:\"product/feed/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?post_type=product&feed=$matches[1]\";s:35:\"product/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?post_type=product&feed=$matches[1]\";s:27:\"product/page/([0-9]{1,})/?$\";s:45:\"index.php?post_type=product&paged=$matches[1]\";s:9:\"client/?$\";s:26:\"index.php?post_type=client\";s:39:\"client/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?post_type=client&feed=$matches[1]\";s:34:\"client/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?post_type=client&feed=$matches[1]\";s:26:\"client/page/([0-9]{1,})/?$\";s:44:\"index.php?post_type=client&paged=$matches[1]\";s:36:\"products/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:46:\"products/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:66:\"products/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:61:\"products/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:61:\"products/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:42:\"products/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:25:\"products/([^/]+)/embed/?$\";s:41:\"index.php?category=$matches[1]&embed=true\";s:29:\"products/([^/]+)/trackback/?$\";s:35:\"index.php?category=$matches[1]&tb=1\";s:37:\"products/([^/]+)/page/?([0-9]{1,})/?$\";s:48:\"index.php?category=$matches[1]&paged=$matches[2]\";s:44:\"products/([^/]+)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?category=$matches[1]&cpage=$matches[2]\";s:33:\"products/([^/]+)(?:/([0-9]+))?/?$\";s:47:\"index.php?category=$matches[1]&page=$matches[2]\";s:25:\"products/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:35:\"products/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:55:\"products/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:50:\"products/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:50:\"products/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:31:\"products/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:44:\"tag/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:39:\"tag/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?tag=$matches[1]&feed=$matches[2]\";s:20:\"tag/([^/]+)/embed/?$\";s:36:\"index.php?tag=$matches[1]&embed=true\";s:32:\"tag/([^/]+)/page/?([0-9]{1,})/?$\";s:43:\"index.php?tag=$matches[1]&paged=$matches[2]\";s:14:\"tag/([^/]+)/?$\";s:25:\"index.php?tag=$matches[1]\";s:45:\"type/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:40:\"type/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?post_format=$matches[1]&feed=$matches[2]\";s:21:\"type/([^/]+)/embed/?$\";s:44:\"index.php?post_format=$matches[1]&embed=true\";s:33:\"type/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?post_format=$matches[1]&paged=$matches[2]\";s:15:\"type/([^/]+)/?$\";s:33:\"index.php?post_format=$matches[1]\";s:34:\"events/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:44:\"events/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:64:\"events/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:59:\"events/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:59:\"events/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:40:\"events/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:23:\"events/([^/]+)/embed/?$\";s:38:\"index.php?event=$matches[1]&embed=true\";s:27:\"events/([^/]+)/trackback/?$\";s:32:\"index.php?event=$matches[1]&tb=1\";s:47:\"events/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?event=$matches[1]&feed=$matches[2]\";s:42:\"events/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:44:\"index.php?event=$matches[1]&feed=$matches[2]\";s:35:\"events/([^/]+)/page/?([0-9]{1,})/?$\";s:45:\"index.php?event=$matches[1]&paged=$matches[2]\";s:42:\"events/([^/]+)/comment-page-([0-9]{1,})/?$\";s:45:\"index.php?event=$matches[1]&cpage=$matches[2]\";s:31:\"events/([^/]+)(?:/([0-9]+))?/?$\";s:44:\"index.php?event=$matches[1]&page=$matches[2]\";s:23:\"events/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:33:\"events/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:53:\"events/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:48:\"events/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:48:\"events/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:29:\"events/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:35:\"product/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:45:\"product/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:65:\"product/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:60:\"product/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:60:\"product/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:41:\"product/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:24:\"product/([^/]+)/embed/?$\";s:40:\"index.php?product=$matches[1]&embed=true\";s:28:\"product/([^/]+)/trackback/?$\";s:34:\"index.php?product=$matches[1]&tb=1\";s:48:\"product/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:46:\"index.php?product=$matches[1]&feed=$matches[2]\";s:43:\"product/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:46:\"index.php?product=$matches[1]&feed=$matches[2]\";s:36:\"product/([^/]+)/page/?([0-9]{1,})/?$\";s:47:\"index.php?product=$matches[1]&paged=$matches[2]\";s:43:\"product/([^/]+)/comment-page-([0-9]{1,})/?$\";s:47:\"index.php?product=$matches[1]&cpage=$matches[2]\";s:32:\"product/([^/]+)(?:/([0-9]+))?/?$\";s:46:\"index.php?product=$matches[1]&page=$matches[2]\";s:24:\"product/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:34:\"product/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:54:\"product/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:49:\"product/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:49:\"product/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:30:\"product/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:34:\"client/[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:44:\"client/[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:64:\"client/[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:59:\"client/[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:59:\"client/[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:40:\"client/[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:23:\"client/([^/]+)/embed/?$\";s:39:\"index.php?client=$matches[1]&embed=true\";s:27:\"client/([^/]+)/trackback/?$\";s:33:\"index.php?client=$matches[1]&tb=1\";s:47:\"client/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:45:\"index.php?client=$matches[1]&feed=$matches[2]\";s:42:\"client/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:45:\"index.php?client=$matches[1]&feed=$matches[2]\";s:35:\"client/([^/]+)/page/?([0-9]{1,})/?$\";s:46:\"index.php?client=$matches[1]&paged=$matches[2]\";s:42:\"client/([^/]+)/comment-page-([0-9]{1,})/?$\";s:46:\"index.php?client=$matches[1]&cpage=$matches[2]\";s:31:\"client/([^/]+)(?:/([0-9]+))?/?$\";s:45:\"index.php?client=$matches[1]&page=$matches[2]\";s:23:\"client/[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:33:\"client/[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:53:\"client/[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:48:\"client/[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:48:\"client/[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:29:\"client/[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:48:\".*wp-(atom|rdf|rss|rss2|feed|commentsrss2)\\.php$\";s:18:\"index.php?feed=old\";s:20:\".*wp-app\\.php(/.*)?$\";s:19:\"index.php?error=403\";s:18:\".*wp-register.php$\";s:23:\"index.php?register=true\";s:32:\"feed/(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:27:\"(feed|rdf|rss|rss2|atom)/?$\";s:27:\"index.php?&feed=$matches[1]\";s:8:\"embed/?$\";s:21:\"index.php?&embed=true\";s:20:\"page/?([0-9]{1,})/?$\";s:28:\"index.php?&paged=$matches[1]\";s:27:\"comment-page-([0-9]{1,})/?$\";s:38:\"index.php?&page_id=2&cpage=$matches[1]\";s:41:\"comments/feed/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:36:\"comments/(feed|rdf|rss|rss2|atom)/?$\";s:42:\"index.php?&feed=$matches[1]&withcomments=1\";s:17:\"comments/embed/?$\";s:21:\"index.php?&embed=true\";s:44:\"search/(.+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:39:\"search/(.+)/(feed|rdf|rss|rss2|atom)/?$\";s:40:\"index.php?s=$matches[1]&feed=$matches[2]\";s:20:\"search/(.+)/embed/?$\";s:34:\"index.php?s=$matches[1]&embed=true\";s:32:\"search/(.+)/page/?([0-9]{1,})/?$\";s:41:\"index.php?s=$matches[1]&paged=$matches[2]\";s:14:\"search/(.+)/?$\";s:23:\"index.php?s=$matches[1]\";s:47:\"author/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:42:\"author/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:50:\"index.php?author_name=$matches[1]&feed=$matches[2]\";s:23:\"author/([^/]+)/embed/?$\";s:44:\"index.php?author_name=$matches[1]&embed=true\";s:35:\"author/([^/]+)/page/?([0-9]{1,})/?$\";s:51:\"index.php?author_name=$matches[1]&paged=$matches[2]\";s:17:\"author/([^/]+)/?$\";s:33:\"index.php?author_name=$matches[1]\";s:69:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:64:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:80:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&feed=$matches[4]\";s:45:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/embed/?$\";s:74:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&embed=true\";s:57:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:81:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]&paged=$matches[4]\";s:39:\"([0-9]{4})/([0-9]{1,2})/([0-9]{1,2})/?$\";s:63:\"index.php?year=$matches[1]&monthnum=$matches[2]&day=$matches[3]\";s:56:\"([0-9]{4})/([0-9]{1,2})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:51:\"([0-9]{4})/([0-9]{1,2})/(feed|rdf|rss|rss2|atom)/?$\";s:64:\"index.php?year=$matches[1]&monthnum=$matches[2]&feed=$matches[3]\";s:32:\"([0-9]{4})/([0-9]{1,2})/embed/?$\";s:58:\"index.php?year=$matches[1]&monthnum=$matches[2]&embed=true\";s:44:\"([0-9]{4})/([0-9]{1,2})/page/?([0-9]{1,})/?$\";s:65:\"index.php?year=$matches[1]&monthnum=$matches[2]&paged=$matches[3]\";s:26:\"([0-9]{4})/([0-9]{1,2})/?$\";s:47:\"index.php?year=$matches[1]&monthnum=$matches[2]\";s:43:\"([0-9]{4})/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:38:\"([0-9]{4})/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?year=$matches[1]&feed=$matches[2]\";s:19:\"([0-9]{4})/embed/?$\";s:37:\"index.php?year=$matches[1]&embed=true\";s:31:\"([0-9]{4})/page/?([0-9]{1,})/?$\";s:44:\"index.php?year=$matches[1]&paged=$matches[2]\";s:13:\"([0-9]{4})/?$\";s:26:\"index.php?year=$matches[1]\";s:27:\".?.+?/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\".?.+?/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\".?.+?/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\".?.+?/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\".?.+?/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"(.?.+?)/embed/?$\";s:41:\"index.php?pagename=$matches[1]&embed=true\";s:20:\"(.?.+?)/trackback/?$\";s:35:\"index.php?pagename=$matches[1]&tb=1\";s:40:\"(.?.+?)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:35:\"(.?.+?)/(feed|rdf|rss|rss2|atom)/?$\";s:47:\"index.php?pagename=$matches[1]&feed=$matches[2]\";s:28:\"(.?.+?)/page/?([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&paged=$matches[2]\";s:35:\"(.?.+?)/comment-page-([0-9]{1,})/?$\";s:48:\"index.php?pagename=$matches[1]&cpage=$matches[2]\";s:24:\"(.?.+?)(?:/([0-9]+))?/?$\";s:47:\"index.php?pagename=$matches[1]&page=$matches[2]\";s:27:\"[^/]+/attachment/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:37:\"[^/]+/attachment/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:57:\"[^/]+/attachment/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:52:\"[^/]+/attachment/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:33:\"[^/]+/attachment/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";s:16:\"([^/]+)/embed/?$\";s:37:\"index.php?name=$matches[1]&embed=true\";s:20:\"([^/]+)/trackback/?$\";s:31:\"index.php?name=$matches[1]&tb=1\";s:40:\"([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:35:\"([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:43:\"index.php?name=$matches[1]&feed=$matches[2]\";s:28:\"([^/]+)/page/?([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&paged=$matches[2]\";s:35:\"([^/]+)/comment-page-([0-9]{1,})/?$\";s:44:\"index.php?name=$matches[1]&cpage=$matches[2]\";s:24:\"([^/]+)(?:/([0-9]+))?/?$\";s:43:\"index.php?name=$matches[1]&page=$matches[2]\";s:16:\"[^/]+/([^/]+)/?$\";s:32:\"index.php?attachment=$matches[1]\";s:26:\"[^/]+/([^/]+)/trackback/?$\";s:37:\"index.php?attachment=$matches[1]&tb=1\";s:46:\"[^/]+/([^/]+)/feed/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/(feed|rdf|rss|rss2|atom)/?$\";s:49:\"index.php?attachment=$matches[1]&feed=$matches[2]\";s:41:\"[^/]+/([^/]+)/comment-page-([0-9]{1,})/?$\";s:50:\"index.php?attachment=$matches[1]&cpage=$matches[2]\";s:22:\"[^/]+/([^/]+)/embed/?$\";s:43:\"index.php?attachment=$matches[1]&embed=true\";}', 'on'),
(31, 'hack_file', '0', 'on'),
(32, 'blog_charset', 'UTF-8', 'on'),
(33, 'moderation_keys', '', 'off'),
(34, 'active_plugins', 'a:3:{i:0;s:30:\"advanced-custom-fields/acf.php\";i:1;s:39:\"manual-image-crop/manual-image-crop.php\";i:3;s:21:\"safe-svg/safe-svg.php\";}', 'on'),
(35, 'category_base', '', 'on'),
(36, 'ping_sites', 'http://rpc.pingomatic.com/', 'on'),
(37, 'comment_max_links', '2', 'on'),
(38, 'gmt_offset', '0', 'on'),
(39, 'default_email_category', '1', 'on'),
(40, 'recently_edited', 'a:5:{i:0;s:57:\"C:\\xampp\\htdocs\\btc/wp-content/themes/btc-theme/index.php\";i:2;s:57:\"C:\\xampp\\htdocs\\btc/wp-content/themes/btc-theme/style.css\";i:3;s:61:\"C:\\xampp\\htdocs\\btc/wp-content/themes/btc-theme/functions.php\";i:4;s:64:\"C:\\xampp\\htdocs\\btc/wp-content/themes/btc-theme/page-why-btc.php\";i:5;s:69:\"C:\\xampp\\htdocs\\btc/wp-content/themes/btc-theme/page-textile-park.php\";}', 'off'),
(41, 'template', 'btc-theme', 'on'),
(42, 'stylesheet', 'btc-theme', 'on'),
(43, 'comment_registration', '0', 'on'),
(44, 'html_type', 'text/html', 'on'),
(45, 'use_trackback', '0', 'on'),
(46, 'default_role', 'subscriber', 'on'),
(47, 'db_version', '58975', 'on'),
(48, 'uploads_use_yearmonth_folders', '1', 'on'),
(49, 'upload_path', '', 'on'),
(50, 'blog_public', '0', 'on'),
(51, 'default_link_category', '2', 'on'),
(52, 'show_on_front', 'page', 'on'),
(53, 'tag_base', '', 'on'),
(54, 'show_avatars', '1', 'on'),
(55, 'avatar_rating', 'G', 'on'),
(56, 'upload_url_path', '', 'on'),
(57, 'thumbnail_size_w', '150', 'on'),
(58, 'thumbnail_size_h', '150', 'on'),
(59, 'thumbnail_crop', '1', 'on'),
(60, 'medium_size_w', '300', 'on'),
(61, 'medium_size_h', '300', 'on'),
(62, 'avatar_default', 'mystery', 'on'),
(63, 'large_size_w', '1024', 'on'),
(64, 'large_size_h', '1024', 'on'),
(65, 'image_default_link_type', 'none', 'on'),
(66, 'image_default_size', '', 'on'),
(67, 'image_default_align', '', 'on'),
(68, 'close_comments_for_old_posts', '0', 'on'),
(69, 'close_comments_days_old', '14', 'on'),
(70, 'thread_comments', '1', 'on'),
(71, 'thread_comments_depth', '5', 'on'),
(72, 'page_comments', '0', 'on'),
(73, 'comments_per_page', '50', 'on'),
(74, 'default_comments_page', 'newest', 'on'),
(75, 'comment_order', 'asc', 'on'),
(76, 'sticky_posts', 'a:0:{}', 'on'),
(77, 'widget_categories', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'auto'),
(78, 'widget_text', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'auto'),
(79, 'widget_rss', 'a:2:{i:1;a:0:{}s:12:\"_multiwidget\";i:1;}', 'auto'),
(80, 'uninstall_plugins', 'a:0:{}', 'off'),
(81, 'timezone_string', '', 'on'),
(82, 'page_for_posts', '30', 'on'),
(83, 'page_on_front', '2', 'on'),
(84, 'default_post_format', '0', 'on'),
(85, 'link_manager_enabled', '0', 'on'),
(86, 'finished_splitting_shared_terms', '1', 'on'),
(87, 'site_icon', '79', 'on'),
(88, 'medium_large_size_w', '768', 'on'),
(89, 'medium_large_size_h', '0', 'on'),
(90, 'wp_page_for_privacy_policy', '18', 'on'),
(91, 'show_comments_cookies_opt_in', '1', 'on'),
(92, 'admin_email_lifespan', '1767511378', 'on'),
(93, 'disallowed_keys', '', 'off'),
(94, 'comment_previously_approved', '1', 'on'),
(95, 'auto_plugin_theme_update_emails', 'a:0:{}', 'off'),
(96, 'auto_update_core_dev', 'enabled', 'on'),
(97, 'auto_update_core_minor', 'enabled', 'on'),
(98, 'auto_update_core_major', 'enabled', 'on'),
(99, 'wp_force_deactivated_plugins', 'a:0:{}', 'on'),
(100, 'wp_attachment_pages_enabled', '0', 'on'),
(101, 'initial_db_version', '58975', 'on'),
(102, 'wp_user_roles', 'a:5:{s:13:\"administrator\";a:2:{s:4:\"name\";s:13:\"Administrator\";s:12:\"capabilities\";a:61:{s:13:\"switch_themes\";b:1;s:11:\"edit_themes\";b:1;s:16:\"activate_plugins\";b:1;s:12:\"edit_plugins\";b:1;s:10:\"edit_users\";b:1;s:10:\"edit_files\";b:1;s:14:\"manage_options\";b:1;s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:6:\"import\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:8:\"level_10\";b:1;s:7:\"level_9\";b:1;s:7:\"level_8\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;s:12:\"delete_users\";b:1;s:12:\"create_users\";b:1;s:17:\"unfiltered_upload\";b:1;s:14:\"edit_dashboard\";b:1;s:14:\"update_plugins\";b:1;s:14:\"delete_plugins\";b:1;s:15:\"install_plugins\";b:1;s:13:\"update_themes\";b:1;s:14:\"install_themes\";b:1;s:11:\"update_core\";b:1;s:10:\"list_users\";b:1;s:12:\"remove_users\";b:1;s:13:\"promote_users\";b:1;s:18:\"edit_theme_options\";b:1;s:13:\"delete_themes\";b:1;s:6:\"export\";b:1;}}s:6:\"editor\";a:2:{s:4:\"name\";s:6:\"Editor\";s:12:\"capabilities\";a:34:{s:17:\"moderate_comments\";b:1;s:17:\"manage_categories\";b:1;s:12:\"manage_links\";b:1;s:12:\"upload_files\";b:1;s:15:\"unfiltered_html\";b:1;s:10:\"edit_posts\";b:1;s:17:\"edit_others_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:10:\"edit_pages\";b:1;s:4:\"read\";b:1;s:7:\"level_7\";b:1;s:7:\"level_6\";b:1;s:7:\"level_5\";b:1;s:7:\"level_4\";b:1;s:7:\"level_3\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:17:\"edit_others_pages\";b:1;s:20:\"edit_published_pages\";b:1;s:13:\"publish_pages\";b:1;s:12:\"delete_pages\";b:1;s:19:\"delete_others_pages\";b:1;s:22:\"delete_published_pages\";b:1;s:12:\"delete_posts\";b:1;s:19:\"delete_others_posts\";b:1;s:22:\"delete_published_posts\";b:1;s:20:\"delete_private_posts\";b:1;s:18:\"edit_private_posts\";b:1;s:18:\"read_private_posts\";b:1;s:20:\"delete_private_pages\";b:1;s:18:\"edit_private_pages\";b:1;s:18:\"read_private_pages\";b:1;}}s:6:\"author\";a:2:{s:4:\"name\";s:6:\"Author\";s:12:\"capabilities\";a:10:{s:12:\"upload_files\";b:1;s:10:\"edit_posts\";b:1;s:20:\"edit_published_posts\";b:1;s:13:\"publish_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_2\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;s:22:\"delete_published_posts\";b:1;}}s:11:\"contributor\";a:2:{s:4:\"name\";s:11:\"Contributor\";s:12:\"capabilities\";a:5:{s:10:\"edit_posts\";b:1;s:4:\"read\";b:1;s:7:\"level_1\";b:1;s:7:\"level_0\";b:1;s:12:\"delete_posts\";b:1;}}s:10:\"subscriber\";a:2:{s:4:\"name\";s:10:\"Subscriber\";s:12:\"capabilities\";a:2:{s:4:\"read\";b:1;s:7:\"level_0\";b:1;}}}', 'on'),
(103, 'fresh_site', '0', 'off'),
(104, 'user_count', '2', 'off'),
(105, 'widget_block', 'a:6:{i:2;a:1:{s:7:\"content\";s:19:\"<!-- wp:search /-->\";}i:3;a:1:{s:7:\"content\";s:154:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Recent Posts</h2><!-- /wp:heading --><!-- wp:latest-posts /--></div><!-- /wp:group -->\";}i:4;a:1:{s:7:\"content\";s:227:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Recent Comments</h2><!-- /wp:heading --><!-- wp:latest-comments {\"displayAvatar\":false,\"displayDate\":false,\"displayExcerpt\":false} /--></div><!-- /wp:group -->\";}i:5;a:1:{s:7:\"content\";s:146:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Archives</h2><!-- /wp:heading --><!-- wp:archives /--></div><!-- /wp:group -->\";}i:6;a:1:{s:7:\"content\";s:150:\"<!-- wp:group --><div class=\"wp-block-group\"><!-- wp:heading --><h2>Categories</h2><!-- /wp:heading --><!-- wp:categories /--></div><!-- /wp:group -->\";}s:12:\"_multiwidget\";i:1;}', 'auto'),
(106, 'sidebars_widgets', 'a:2:{s:19:\"wp_inactive_widgets\";a:5:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";i:3;s:7:\"block-5\";i:4;s:7:\"block-6\";}s:13:\"array_version\";i:3;}', 'auto'),
(107, 'widget_pages', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(108, 'widget_calendar', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(109, 'widget_archives', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(110, 'widget_media_audio', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(111, 'widget_media_image', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(112, 'widget_media_gallery', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(113, 'widget_media_video', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(114, 'widget_meta', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(115, 'widget_search', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(116, 'widget_recent-posts', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(117, 'widget_recent-comments', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(118, 'widget_tag_cloud', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(119, 'widget_nav_menu', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(120, 'widget_custom_html', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto');
INSERT INTO `wp_options` (`option_id`, `option_name`, `option_value`, `autoload`) VALUES
(121, '_transient_wp_core_block_css_files', 'a:2:{s:7:\"version\";s:5:\"6.8.1\";s:5:\"files\";a:536:{i:0;s:23:\"archives/editor-rtl.css\";i:1;s:27:\"archives/editor-rtl.min.css\";i:2;s:19:\"archives/editor.css\";i:3;s:23:\"archives/editor.min.css\";i:4;s:22:\"archives/style-rtl.css\";i:5;s:26:\"archives/style-rtl.min.css\";i:6;s:18:\"archives/style.css\";i:7;s:22:\"archives/style.min.css\";i:8;s:20:\"audio/editor-rtl.css\";i:9;s:24:\"audio/editor-rtl.min.css\";i:10;s:16:\"audio/editor.css\";i:11;s:20:\"audio/editor.min.css\";i:12;s:19:\"audio/style-rtl.css\";i:13;s:23:\"audio/style-rtl.min.css\";i:14;s:15:\"audio/style.css\";i:15;s:19:\"audio/style.min.css\";i:16;s:19:\"audio/theme-rtl.css\";i:17;s:23:\"audio/theme-rtl.min.css\";i:18;s:15:\"audio/theme.css\";i:19;s:19:\"audio/theme.min.css\";i:20;s:21:\"avatar/editor-rtl.css\";i:21;s:25:\"avatar/editor-rtl.min.css\";i:22;s:17:\"avatar/editor.css\";i:23;s:21:\"avatar/editor.min.css\";i:24;s:20:\"avatar/style-rtl.css\";i:25;s:24:\"avatar/style-rtl.min.css\";i:26;s:16:\"avatar/style.css\";i:27;s:20:\"avatar/style.min.css\";i:28;s:21:\"button/editor-rtl.css\";i:29;s:25:\"button/editor-rtl.min.css\";i:30;s:17:\"button/editor.css\";i:31;s:21:\"button/editor.min.css\";i:32;s:20:\"button/style-rtl.css\";i:33;s:24:\"button/style-rtl.min.css\";i:34;s:16:\"button/style.css\";i:35;s:20:\"button/style.min.css\";i:36;s:22:\"buttons/editor-rtl.css\";i:37;s:26:\"buttons/editor-rtl.min.css\";i:38;s:18:\"buttons/editor.css\";i:39;s:22:\"buttons/editor.min.css\";i:40;s:21:\"buttons/style-rtl.css\";i:41;s:25:\"buttons/style-rtl.min.css\";i:42;s:17:\"buttons/style.css\";i:43;s:21:\"buttons/style.min.css\";i:44;s:22:\"calendar/style-rtl.css\";i:45;s:26:\"calendar/style-rtl.min.css\";i:46;s:18:\"calendar/style.css\";i:47;s:22:\"calendar/style.min.css\";i:48;s:25:\"categories/editor-rtl.css\";i:49;s:29:\"categories/editor-rtl.min.css\";i:50;s:21:\"categories/editor.css\";i:51;s:25:\"categories/editor.min.css\";i:52;s:24:\"categories/style-rtl.css\";i:53;s:28:\"categories/style-rtl.min.css\";i:54;s:20:\"categories/style.css\";i:55;s:24:\"categories/style.min.css\";i:56;s:19:\"code/editor-rtl.css\";i:57;s:23:\"code/editor-rtl.min.css\";i:58;s:15:\"code/editor.css\";i:59;s:19:\"code/editor.min.css\";i:60;s:18:\"code/style-rtl.css\";i:61;s:22:\"code/style-rtl.min.css\";i:62;s:14:\"code/style.css\";i:63;s:18:\"code/style.min.css\";i:64;s:18:\"code/theme-rtl.css\";i:65;s:22:\"code/theme-rtl.min.css\";i:66;s:14:\"code/theme.css\";i:67;s:18:\"code/theme.min.css\";i:68;s:22:\"columns/editor-rtl.css\";i:69;s:26:\"columns/editor-rtl.min.css\";i:70;s:18:\"columns/editor.css\";i:71;s:22:\"columns/editor.min.css\";i:72;s:21:\"columns/style-rtl.css\";i:73;s:25:\"columns/style-rtl.min.css\";i:74;s:17:\"columns/style.css\";i:75;s:21:\"columns/style.min.css\";i:76;s:33:\"comment-author-name/style-rtl.css\";i:77;s:37:\"comment-author-name/style-rtl.min.css\";i:78;s:29:\"comment-author-name/style.css\";i:79;s:33:\"comment-author-name/style.min.css\";i:80;s:29:\"comment-content/style-rtl.css\";i:81;s:33:\"comment-content/style-rtl.min.css\";i:82;s:25:\"comment-content/style.css\";i:83;s:29:\"comment-content/style.min.css\";i:84;s:26:\"comment-date/style-rtl.css\";i:85;s:30:\"comment-date/style-rtl.min.css\";i:86;s:22:\"comment-date/style.css\";i:87;s:26:\"comment-date/style.min.css\";i:88;s:31:\"comment-edit-link/style-rtl.css\";i:89;s:35:\"comment-edit-link/style-rtl.min.css\";i:90;s:27:\"comment-edit-link/style.css\";i:91;s:31:\"comment-edit-link/style.min.css\";i:92;s:32:\"comment-reply-link/style-rtl.css\";i:93;s:36:\"comment-reply-link/style-rtl.min.css\";i:94;s:28:\"comment-reply-link/style.css\";i:95;s:32:\"comment-reply-link/style.min.css\";i:96;s:30:\"comment-template/style-rtl.css\";i:97;s:34:\"comment-template/style-rtl.min.css\";i:98;s:26:\"comment-template/style.css\";i:99;s:30:\"comment-template/style.min.css\";i:100;s:42:\"comments-pagination-numbers/editor-rtl.css\";i:101;s:46:\"comments-pagination-numbers/editor-rtl.min.css\";i:102;s:38:\"comments-pagination-numbers/editor.css\";i:103;s:42:\"comments-pagination-numbers/editor.min.css\";i:104;s:34:\"comments-pagination/editor-rtl.css\";i:105;s:38:\"comments-pagination/editor-rtl.min.css\";i:106;s:30:\"comments-pagination/editor.css\";i:107;s:34:\"comments-pagination/editor.min.css\";i:108;s:33:\"comments-pagination/style-rtl.css\";i:109;s:37:\"comments-pagination/style-rtl.min.css\";i:110;s:29:\"comments-pagination/style.css\";i:111;s:33:\"comments-pagination/style.min.css\";i:112;s:29:\"comments-title/editor-rtl.css\";i:113;s:33:\"comments-title/editor-rtl.min.css\";i:114;s:25:\"comments-title/editor.css\";i:115;s:29:\"comments-title/editor.min.css\";i:116;s:23:\"comments/editor-rtl.css\";i:117;s:27:\"comments/editor-rtl.min.css\";i:118;s:19:\"comments/editor.css\";i:119;s:23:\"comments/editor.min.css\";i:120;s:22:\"comments/style-rtl.css\";i:121;s:26:\"comments/style-rtl.min.css\";i:122;s:18:\"comments/style.css\";i:123;s:22:\"comments/style.min.css\";i:124;s:20:\"cover/editor-rtl.css\";i:125;s:24:\"cover/editor-rtl.min.css\";i:126;s:16:\"cover/editor.css\";i:127;s:20:\"cover/editor.min.css\";i:128;s:19:\"cover/style-rtl.css\";i:129;s:23:\"cover/style-rtl.min.css\";i:130;s:15:\"cover/style.css\";i:131;s:19:\"cover/style.min.css\";i:132;s:22:\"details/editor-rtl.css\";i:133;s:26:\"details/editor-rtl.min.css\";i:134;s:18:\"details/editor.css\";i:135;s:22:\"details/editor.min.css\";i:136;s:21:\"details/style-rtl.css\";i:137;s:25:\"details/style-rtl.min.css\";i:138;s:17:\"details/style.css\";i:139;s:21:\"details/style.min.css\";i:140;s:20:\"embed/editor-rtl.css\";i:141;s:24:\"embed/editor-rtl.min.css\";i:142;s:16:\"embed/editor.css\";i:143;s:20:\"embed/editor.min.css\";i:144;s:19:\"embed/style-rtl.css\";i:145;s:23:\"embed/style-rtl.min.css\";i:146;s:15:\"embed/style.css\";i:147;s:19:\"embed/style.min.css\";i:148;s:19:\"embed/theme-rtl.css\";i:149;s:23:\"embed/theme-rtl.min.css\";i:150;s:15:\"embed/theme.css\";i:151;s:19:\"embed/theme.min.css\";i:152;s:19:\"file/editor-rtl.css\";i:153;s:23:\"file/editor-rtl.min.css\";i:154;s:15:\"file/editor.css\";i:155;s:19:\"file/editor.min.css\";i:156;s:18:\"file/style-rtl.css\";i:157;s:22:\"file/style-rtl.min.css\";i:158;s:14:\"file/style.css\";i:159;s:18:\"file/style.min.css\";i:160;s:23:\"footnotes/style-rtl.css\";i:161;s:27:\"footnotes/style-rtl.min.css\";i:162;s:19:\"footnotes/style.css\";i:163;s:23:\"footnotes/style.min.css\";i:164;s:23:\"freeform/editor-rtl.css\";i:165;s:27:\"freeform/editor-rtl.min.css\";i:166;s:19:\"freeform/editor.css\";i:167;s:23:\"freeform/editor.min.css\";i:168;s:22:\"gallery/editor-rtl.css\";i:169;s:26:\"gallery/editor-rtl.min.css\";i:170;s:18:\"gallery/editor.css\";i:171;s:22:\"gallery/editor.min.css\";i:172;s:21:\"gallery/style-rtl.css\";i:173;s:25:\"gallery/style-rtl.min.css\";i:174;s:17:\"gallery/style.css\";i:175;s:21:\"gallery/style.min.css\";i:176;s:21:\"gallery/theme-rtl.css\";i:177;s:25:\"gallery/theme-rtl.min.css\";i:178;s:17:\"gallery/theme.css\";i:179;s:21:\"gallery/theme.min.css\";i:180;s:20:\"group/editor-rtl.css\";i:181;s:24:\"group/editor-rtl.min.css\";i:182;s:16:\"group/editor.css\";i:183;s:20:\"group/editor.min.css\";i:184;s:19:\"group/style-rtl.css\";i:185;s:23:\"group/style-rtl.min.css\";i:186;s:15:\"group/style.css\";i:187;s:19:\"group/style.min.css\";i:188;s:19:\"group/theme-rtl.css\";i:189;s:23:\"group/theme-rtl.min.css\";i:190;s:15:\"group/theme.css\";i:191;s:19:\"group/theme.min.css\";i:192;s:21:\"heading/style-rtl.css\";i:193;s:25:\"heading/style-rtl.min.css\";i:194;s:17:\"heading/style.css\";i:195;s:21:\"heading/style.min.css\";i:196;s:19:\"html/editor-rtl.css\";i:197;s:23:\"html/editor-rtl.min.css\";i:198;s:15:\"html/editor.css\";i:199;s:19:\"html/editor.min.css\";i:200;s:20:\"image/editor-rtl.css\";i:201;s:24:\"image/editor-rtl.min.css\";i:202;s:16:\"image/editor.css\";i:203;s:20:\"image/editor.min.css\";i:204;s:19:\"image/style-rtl.css\";i:205;s:23:\"image/style-rtl.min.css\";i:206;s:15:\"image/style.css\";i:207;s:19:\"image/style.min.css\";i:208;s:19:\"image/theme-rtl.css\";i:209;s:23:\"image/theme-rtl.min.css\";i:210;s:15:\"image/theme.css\";i:211;s:19:\"image/theme.min.css\";i:212;s:29:\"latest-comments/style-rtl.css\";i:213;s:33:\"latest-comments/style-rtl.min.css\";i:214;s:25:\"latest-comments/style.css\";i:215;s:29:\"latest-comments/style.min.css\";i:216;s:27:\"latest-posts/editor-rtl.css\";i:217;s:31:\"latest-posts/editor-rtl.min.css\";i:218;s:23:\"latest-posts/editor.css\";i:219;s:27:\"latest-posts/editor.min.css\";i:220;s:26:\"latest-posts/style-rtl.css\";i:221;s:30:\"latest-posts/style-rtl.min.css\";i:222;s:22:\"latest-posts/style.css\";i:223;s:26:\"latest-posts/style.min.css\";i:224;s:18:\"list/style-rtl.css\";i:225;s:22:\"list/style-rtl.min.css\";i:226;s:14:\"list/style.css\";i:227;s:18:\"list/style.min.css\";i:228;s:22:\"loginout/style-rtl.css\";i:229;s:26:\"loginout/style-rtl.min.css\";i:230;s:18:\"loginout/style.css\";i:231;s:22:\"loginout/style.min.css\";i:232;s:25:\"media-text/editor-rtl.css\";i:233;s:29:\"media-text/editor-rtl.min.css\";i:234;s:21:\"media-text/editor.css\";i:235;s:25:\"media-text/editor.min.css\";i:236;s:24:\"media-text/style-rtl.css\";i:237;s:28:\"media-text/style-rtl.min.css\";i:238;s:20:\"media-text/style.css\";i:239;s:24:\"media-text/style.min.css\";i:240;s:19:\"more/editor-rtl.css\";i:241;s:23:\"more/editor-rtl.min.css\";i:242;s:15:\"more/editor.css\";i:243;s:19:\"more/editor.min.css\";i:244;s:30:\"navigation-link/editor-rtl.css\";i:245;s:34:\"navigation-link/editor-rtl.min.css\";i:246;s:26:\"navigation-link/editor.css\";i:247;s:30:\"navigation-link/editor.min.css\";i:248;s:29:\"navigation-link/style-rtl.css\";i:249;s:33:\"navigation-link/style-rtl.min.css\";i:250;s:25:\"navigation-link/style.css\";i:251;s:29:\"navigation-link/style.min.css\";i:252;s:33:\"navigation-submenu/editor-rtl.css\";i:253;s:37:\"navigation-submenu/editor-rtl.min.css\";i:254;s:29:\"navigation-submenu/editor.css\";i:255;s:33:\"navigation-submenu/editor.min.css\";i:256;s:25:\"navigation/editor-rtl.css\";i:257;s:29:\"navigation/editor-rtl.min.css\";i:258;s:21:\"navigation/editor.css\";i:259;s:25:\"navigation/editor.min.css\";i:260;s:24:\"navigation/style-rtl.css\";i:261;s:28:\"navigation/style-rtl.min.css\";i:262;s:20:\"navigation/style.css\";i:263;s:24:\"navigation/style.min.css\";i:264;s:23:\"nextpage/editor-rtl.css\";i:265;s:27:\"nextpage/editor-rtl.min.css\";i:266;s:19:\"nextpage/editor.css\";i:267;s:23:\"nextpage/editor.min.css\";i:268;s:24:\"page-list/editor-rtl.css\";i:269;s:28:\"page-list/editor-rtl.min.css\";i:270;s:20:\"page-list/editor.css\";i:271;s:24:\"page-list/editor.min.css\";i:272;s:23:\"page-list/style-rtl.css\";i:273;s:27:\"page-list/style-rtl.min.css\";i:274;s:19:\"page-list/style.css\";i:275;s:23:\"page-list/style.min.css\";i:276;s:24:\"paragraph/editor-rtl.css\";i:277;s:28:\"paragraph/editor-rtl.min.css\";i:278;s:20:\"paragraph/editor.css\";i:279;s:24:\"paragraph/editor.min.css\";i:280;s:23:\"paragraph/style-rtl.css\";i:281;s:27:\"paragraph/style-rtl.min.css\";i:282;s:19:\"paragraph/style.css\";i:283;s:23:\"paragraph/style.min.css\";i:284;s:35:\"post-author-biography/style-rtl.css\";i:285;s:39:\"post-author-biography/style-rtl.min.css\";i:286;s:31:\"post-author-biography/style.css\";i:287;s:35:\"post-author-biography/style.min.css\";i:288;s:30:\"post-author-name/style-rtl.css\";i:289;s:34:\"post-author-name/style-rtl.min.css\";i:290;s:26:\"post-author-name/style.css\";i:291;s:30:\"post-author-name/style.min.css\";i:292;s:26:\"post-author/editor-rtl.css\";i:293;s:30:\"post-author/editor-rtl.min.css\";i:294;s:22:\"post-author/editor.css\";i:295;s:26:\"post-author/editor.min.css\";i:296;s:25:\"post-author/style-rtl.css\";i:297;s:29:\"post-author/style-rtl.min.css\";i:298;s:21:\"post-author/style.css\";i:299;s:25:\"post-author/style.min.css\";i:300;s:33:\"post-comments-form/editor-rtl.css\";i:301;s:37:\"post-comments-form/editor-rtl.min.css\";i:302;s:29:\"post-comments-form/editor.css\";i:303;s:33:\"post-comments-form/editor.min.css\";i:304;s:32:\"post-comments-form/style-rtl.css\";i:305;s:36:\"post-comments-form/style-rtl.min.css\";i:306;s:28:\"post-comments-form/style.css\";i:307;s:32:\"post-comments-form/style.min.css\";i:308;s:26:\"post-content/style-rtl.css\";i:309;s:30:\"post-content/style-rtl.min.css\";i:310;s:22:\"post-content/style.css\";i:311;s:26:\"post-content/style.min.css\";i:312;s:23:\"post-date/style-rtl.css\";i:313;s:27:\"post-date/style-rtl.min.css\";i:314;s:19:\"post-date/style.css\";i:315;s:23:\"post-date/style.min.css\";i:316;s:27:\"post-excerpt/editor-rtl.css\";i:317;s:31:\"post-excerpt/editor-rtl.min.css\";i:318;s:23:\"post-excerpt/editor.css\";i:319;s:27:\"post-excerpt/editor.min.css\";i:320;s:26:\"post-excerpt/style-rtl.css\";i:321;s:30:\"post-excerpt/style-rtl.min.css\";i:322;s:22:\"post-excerpt/style.css\";i:323;s:26:\"post-excerpt/style.min.css\";i:324;s:34:\"post-featured-image/editor-rtl.css\";i:325;s:38:\"post-featured-image/editor-rtl.min.css\";i:326;s:30:\"post-featured-image/editor.css\";i:327;s:34:\"post-featured-image/editor.min.css\";i:328;s:33:\"post-featured-image/style-rtl.css\";i:329;s:37:\"post-featured-image/style-rtl.min.css\";i:330;s:29:\"post-featured-image/style.css\";i:331;s:33:\"post-featured-image/style.min.css\";i:332;s:34:\"post-navigation-link/style-rtl.css\";i:333;s:38:\"post-navigation-link/style-rtl.min.css\";i:334;s:30:\"post-navigation-link/style.css\";i:335;s:34:\"post-navigation-link/style.min.css\";i:336;s:27:\"post-template/style-rtl.css\";i:337;s:31:\"post-template/style-rtl.min.css\";i:338;s:23:\"post-template/style.css\";i:339;s:27:\"post-template/style.min.css\";i:340;s:24:\"post-terms/style-rtl.css\";i:341;s:28:\"post-terms/style-rtl.min.css\";i:342;s:20:\"post-terms/style.css\";i:343;s:24:\"post-terms/style.min.css\";i:344;s:24:\"post-title/style-rtl.css\";i:345;s:28:\"post-title/style-rtl.min.css\";i:346;s:20:\"post-title/style.css\";i:347;s:24:\"post-title/style.min.css\";i:348;s:26:\"preformatted/style-rtl.css\";i:349;s:30:\"preformatted/style-rtl.min.css\";i:350;s:22:\"preformatted/style.css\";i:351;s:26:\"preformatted/style.min.css\";i:352;s:24:\"pullquote/editor-rtl.css\";i:353;s:28:\"pullquote/editor-rtl.min.css\";i:354;s:20:\"pullquote/editor.css\";i:355;s:24:\"pullquote/editor.min.css\";i:356;s:23:\"pullquote/style-rtl.css\";i:357;s:27:\"pullquote/style-rtl.min.css\";i:358;s:19:\"pullquote/style.css\";i:359;s:23:\"pullquote/style.min.css\";i:360;s:23:\"pullquote/theme-rtl.css\";i:361;s:27:\"pullquote/theme-rtl.min.css\";i:362;s:19:\"pullquote/theme.css\";i:363;s:23:\"pullquote/theme.min.css\";i:364;s:39:\"query-pagination-numbers/editor-rtl.css\";i:365;s:43:\"query-pagination-numbers/editor-rtl.min.css\";i:366;s:35:\"query-pagination-numbers/editor.css\";i:367;s:39:\"query-pagination-numbers/editor.min.css\";i:368;s:31:\"query-pagination/editor-rtl.css\";i:369;s:35:\"query-pagination/editor-rtl.min.css\";i:370;s:27:\"query-pagination/editor.css\";i:371;s:31:\"query-pagination/editor.min.css\";i:372;s:30:\"query-pagination/style-rtl.css\";i:373;s:34:\"query-pagination/style-rtl.min.css\";i:374;s:26:\"query-pagination/style.css\";i:375;s:30:\"query-pagination/style.min.css\";i:376;s:25:\"query-title/style-rtl.css\";i:377;s:29:\"query-title/style-rtl.min.css\";i:378;s:21:\"query-title/style.css\";i:379;s:25:\"query-title/style.min.css\";i:380;s:25:\"query-total/style-rtl.css\";i:381;s:29:\"query-total/style-rtl.min.css\";i:382;s:21:\"query-total/style.css\";i:383;s:25:\"query-total/style.min.css\";i:384;s:20:\"query/editor-rtl.css\";i:385;s:24:\"query/editor-rtl.min.css\";i:386;s:16:\"query/editor.css\";i:387;s:20:\"query/editor.min.css\";i:388;s:19:\"quote/style-rtl.css\";i:389;s:23:\"quote/style-rtl.min.css\";i:390;s:15:\"quote/style.css\";i:391;s:19:\"quote/style.min.css\";i:392;s:19:\"quote/theme-rtl.css\";i:393;s:23:\"quote/theme-rtl.min.css\";i:394;s:15:\"quote/theme.css\";i:395;s:19:\"quote/theme.min.css\";i:396;s:23:\"read-more/style-rtl.css\";i:397;s:27:\"read-more/style-rtl.min.css\";i:398;s:19:\"read-more/style.css\";i:399;s:23:\"read-more/style.min.css\";i:400;s:18:\"rss/editor-rtl.css\";i:401;s:22:\"rss/editor-rtl.min.css\";i:402;s:14:\"rss/editor.css\";i:403;s:18:\"rss/editor.min.css\";i:404;s:17:\"rss/style-rtl.css\";i:405;s:21:\"rss/style-rtl.min.css\";i:406;s:13:\"rss/style.css\";i:407;s:17:\"rss/style.min.css\";i:408;s:21:\"search/editor-rtl.css\";i:409;s:25:\"search/editor-rtl.min.css\";i:410;s:17:\"search/editor.css\";i:411;s:21:\"search/editor.min.css\";i:412;s:20:\"search/style-rtl.css\";i:413;s:24:\"search/style-rtl.min.css\";i:414;s:16:\"search/style.css\";i:415;s:20:\"search/style.min.css\";i:416;s:20:\"search/theme-rtl.css\";i:417;s:24:\"search/theme-rtl.min.css\";i:418;s:16:\"search/theme.css\";i:419;s:20:\"search/theme.min.css\";i:420;s:24:\"separator/editor-rtl.css\";i:421;s:28:\"separator/editor-rtl.min.css\";i:422;s:20:\"separator/editor.css\";i:423;s:24:\"separator/editor.min.css\";i:424;s:23:\"separator/style-rtl.css\";i:425;s:27:\"separator/style-rtl.min.css\";i:426;s:19:\"separator/style.css\";i:427;s:23:\"separator/style.min.css\";i:428;s:23:\"separator/theme-rtl.css\";i:429;s:27:\"separator/theme-rtl.min.css\";i:430;s:19:\"separator/theme.css\";i:431;s:23:\"separator/theme.min.css\";i:432;s:24:\"shortcode/editor-rtl.css\";i:433;s:28:\"shortcode/editor-rtl.min.css\";i:434;s:20:\"shortcode/editor.css\";i:435;s:24:\"shortcode/editor.min.css\";i:436;s:24:\"site-logo/editor-rtl.css\";i:437;s:28:\"site-logo/editor-rtl.min.css\";i:438;s:20:\"site-logo/editor.css\";i:439;s:24:\"site-logo/editor.min.css\";i:440;s:23:\"site-logo/style-rtl.css\";i:441;s:27:\"site-logo/style-rtl.min.css\";i:442;s:19:\"site-logo/style.css\";i:443;s:23:\"site-logo/style.min.css\";i:444;s:27:\"site-tagline/editor-rtl.css\";i:445;s:31:\"site-tagline/editor-rtl.min.css\";i:446;s:23:\"site-tagline/editor.css\";i:447;s:27:\"site-tagline/editor.min.css\";i:448;s:26:\"site-tagline/style-rtl.css\";i:449;s:30:\"site-tagline/style-rtl.min.css\";i:450;s:22:\"site-tagline/style.css\";i:451;s:26:\"site-tagline/style.min.css\";i:452;s:25:\"site-title/editor-rtl.css\";i:453;s:29:\"site-title/editor-rtl.min.css\";i:454;s:21:\"site-title/editor.css\";i:455;s:25:\"site-title/editor.min.css\";i:456;s:24:\"site-title/style-rtl.css\";i:457;s:28:\"site-title/style-rtl.min.css\";i:458;s:20:\"site-title/style.css\";i:459;s:24:\"site-title/style.min.css\";i:460;s:26:\"social-link/editor-rtl.css\";i:461;s:30:\"social-link/editor-rtl.min.css\";i:462;s:22:\"social-link/editor.css\";i:463;s:26:\"social-link/editor.min.css\";i:464;s:27:\"social-links/editor-rtl.css\";i:465;s:31:\"social-links/editor-rtl.min.css\";i:466;s:23:\"social-links/editor.css\";i:467;s:27:\"social-links/editor.min.css\";i:468;s:26:\"social-links/style-rtl.css\";i:469;s:30:\"social-links/style-rtl.min.css\";i:470;s:22:\"social-links/style.css\";i:471;s:26:\"social-links/style.min.css\";i:472;s:21:\"spacer/editor-rtl.css\";i:473;s:25:\"spacer/editor-rtl.min.css\";i:474;s:17:\"spacer/editor.css\";i:475;s:21:\"spacer/editor.min.css\";i:476;s:20:\"spacer/style-rtl.css\";i:477;s:24:\"spacer/style-rtl.min.css\";i:478;s:16:\"spacer/style.css\";i:479;s:20:\"spacer/style.min.css\";i:480;s:20:\"table/editor-rtl.css\";i:481;s:24:\"table/editor-rtl.min.css\";i:482;s:16:\"table/editor.css\";i:483;s:20:\"table/editor.min.css\";i:484;s:19:\"table/style-rtl.css\";i:485;s:23:\"table/style-rtl.min.css\";i:486;s:15:\"table/style.css\";i:487;s:19:\"table/style.min.css\";i:488;s:19:\"table/theme-rtl.css\";i:489;s:23:\"table/theme-rtl.min.css\";i:490;s:15:\"table/theme.css\";i:491;s:19:\"table/theme.min.css\";i:492;s:24:\"tag-cloud/editor-rtl.css\";i:493;s:28:\"tag-cloud/editor-rtl.min.css\";i:494;s:20:\"tag-cloud/editor.css\";i:495;s:24:\"tag-cloud/editor.min.css\";i:496;s:23:\"tag-cloud/style-rtl.css\";i:497;s:27:\"tag-cloud/style-rtl.min.css\";i:498;s:19:\"tag-cloud/style.css\";i:499;s:23:\"tag-cloud/style.min.css\";i:500;s:28:\"template-part/editor-rtl.css\";i:501;s:32:\"template-part/editor-rtl.min.css\";i:502;s:24:\"template-part/editor.css\";i:503;s:28:\"template-part/editor.min.css\";i:504;s:27:\"template-part/theme-rtl.css\";i:505;s:31:\"template-part/theme-rtl.min.css\";i:506;s:23:\"template-part/theme.css\";i:507;s:27:\"template-part/theme.min.css\";i:508;s:30:\"term-description/style-rtl.css\";i:509;s:34:\"term-description/style-rtl.min.css\";i:510;s:26:\"term-description/style.css\";i:511;s:30:\"term-description/style.min.css\";i:512;s:27:\"text-columns/editor-rtl.css\";i:513;s:31:\"text-columns/editor-rtl.min.css\";i:514;s:23:\"text-columns/editor.css\";i:515;s:27:\"text-columns/editor.min.css\";i:516;s:26:\"text-columns/style-rtl.css\";i:517;s:30:\"text-columns/style-rtl.min.css\";i:518;s:22:\"text-columns/style.css\";i:519;s:26:\"text-columns/style.min.css\";i:520;s:19:\"verse/style-rtl.css\";i:521;s:23:\"verse/style-rtl.min.css\";i:522;s:15:\"verse/style.css\";i:523;s:19:\"verse/style.min.css\";i:524;s:20:\"video/editor-rtl.css\";i:525;s:24:\"video/editor-rtl.min.css\";i:526;s:16:\"video/editor.css\";i:527;s:20:\"video/editor.min.css\";i:528;s:19:\"video/style-rtl.css\";i:529;s:23:\"video/style-rtl.min.css\";i:530;s:15:\"video/style.css\";i:531;s:19:\"video/style.min.css\";i:532;s:19:\"video/theme-rtl.css\";i:533;s:23:\"video/theme-rtl.min.css\";i:534;s:15:\"video/theme.css\";i:535;s:19:\"video/theme.min.css\";}}', 'on'),
(125, 'recovery_keys', 'a:0:{}', 'off'),
(126, 'theme_mods_twentytwentyfive', 'a:2:{s:18:\"custom_css_post_id\";i:-1;s:16:\"sidebars_widgets\";a:2:{s:4:\"time\";i:1751962371;s:4:\"data\";a:3:{s:19:\"wp_inactive_widgets\";a:0:{}s:9:\"sidebar-1\";a:3:{i:0;s:7:\"block-2\";i:1;s:7:\"block-3\";i:2;s:7:\"block-4\";}s:9:\"sidebar-2\";a:2:{i:0;s:7:\"block-5\";i:1;s:7:\"block-6\";}}}}', 'off'),
(127, '_transient_wp_styles_for_blocks', 'a:2:{s:4:\"hash\";s:32:\"8c7d46a72d7d4591fc1dd9485bedb304\";s:6:\"blocks\";a:5:{s:11:\"core/button\";s:0:\"\";s:14:\"core/site-logo\";s:0:\"\";s:18:\"core/post-template\";s:120:\":where(.wp-block-post-template.is-layout-flex){gap: 1.25em;}:where(.wp-block-post-template.is-layout-grid){gap: 1.25em;}\";s:12:\"core/columns\";s:102:\":where(.wp-block-columns.is-layout-flex){gap: 2em;}:where(.wp-block-columns.is-layout-grid){gap: 2em;}\";s:14:\"core/pullquote\";s:69:\":root :where(.wp-block-pullquote){font-size: 1.5em;line-height: 1.6;}\";}}', 'on'),
(128, '_site_transient_update_core', 'O:8:\"stdClass\":4:{s:7:\"updates\";a:1:{i:0;O:8:\"stdClass\":10:{s:8:\"response\";s:6:\"latest\";s:8:\"download\";s:59:\"https://downloads.wordpress.org/release/wordpress-6.8.1.zip\";s:6:\"locale\";s:5:\"en_US\";s:8:\"packages\";O:8:\"stdClass\":5:{s:4:\"full\";s:59:\"https://downloads.wordpress.org/release/wordpress-6.8.1.zip\";s:10:\"no_content\";s:70:\"https://downloads.wordpress.org/release/wordpress-6.8.1-no-content.zip\";s:11:\"new_bundled\";s:71:\"https://downloads.wordpress.org/release/wordpress-6.8.1-new-bundled.zip\";s:7:\"partial\";s:0:\"\";s:8:\"rollback\";s:0:\"\";}s:7:\"current\";s:5:\"6.8.1\";s:7:\"version\";s:5:\"6.8.1\";s:11:\"php_version\";s:6:\"7.2.24\";s:13:\"mysql_version\";s:5:\"5.5.5\";s:11:\"new_bundled\";s:3:\"6.7\";s:15:\"partial_version\";s:0:\"\";}}s:12:\"last_checked\";i:1752209483;s:15:\"version_checked\";s:5:\"6.8.1\";s:12:\"translations\";a:0:{}}', 'off'),
(132, '_site_transient_update_themes', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1752209484;s:7:\"checked\";a:1:{s:9:\"btc-theme\";s:3:\"1.0\";}s:8:\"response\";a:0:{}s:9:\"no_update\";a:0:{}s:12:\"translations\";a:0:{}}', 'off'),
(133, '_site_transient_timeout_browser_7ddeda88d0c599cc494da0dece6554d5', '1752564201', 'off'),
(134, '_site_transient_browser_7ddeda88d0c599cc494da0dece6554d5', 'a:10:{s:4:\"name\";s:6:\"Chrome\";s:7:\"version\";s:9:\"138.0.0.0\";s:8:\"platform\";s:7:\"Windows\";s:10:\"update_url\";s:29:\"https://www.google.com/chrome\";s:7:\"img_src\";s:43:\"http://s.w.org/images/browsers/chrome.png?1\";s:11:\"img_src_ssl\";s:44:\"https://s.w.org/images/browsers/chrome.png?1\";s:15:\"current_version\";s:2:\"18\";s:7:\"upgrade\";b:0;s:8:\"insecure\";b:0;s:6:\"mobile\";b:0;}', 'off'),
(135, '_site_transient_timeout_php_check_38979a08dcd71638878b7b4419751271', '1752564201', 'off'),
(136, '_site_transient_php_check_38979a08dcd71638878b7b4419751271', 'a:5:{s:19:\"recommended_version\";s:3:\"8.3\";s:15:\"minimum_version\";s:6:\"7.2.24\";s:12:\"is_supported\";b:0;s:9:\"is_secure\";b:0;s:13:\"is_acceptable\";b:0;}', 'off'),
(138, 'can_compress_scripts', '1', 'on'),
(154, 'WPLANG', '', 'auto'),
(155, 'new_admin_email', 'rajesh.kumar@thealphagency.com', 'auto'),
(160, 'finished_updating_comment_type', '1', 'auto'),
(161, '_site_transient_wp_plugin_dependencies_plugin_data', 'a:0:{}', 'off'),
(162, 'recently_activated', 'a:4:{s:21:\"meta-box/meta-box.php\";i:1752146297;s:23:\"ml-slider/ml-slider.php\";i:1752146004;s:31:\"ultimate-faqs/ultimate-faqs.php\";i:1752062637;s:9:\"hello.php\";i:1752059135;}', 'off'),
(168, 'wp_calendar_block_has_published_posts', '1', 'auto'),
(174, 'category_children', 'a:0:{}', 'auto'),
(182, 'current_theme', 'Benin Textile Corporation', 'auto'),
(183, 'theme_mods_btc-theme', 'a:3:{i:0;b:0;s:18:\"nav_menu_locations\";a:0:{}s:18:\"custom_css_post_id\";i:-1;}', 'on'),
(184, 'theme_switched', '', 'auto'),
(187, '_wp_suggested_policy_text_has_changed', 'not-changed', 'off'),
(262, 'mic_make2x', 'true', 'auto'),
(266, 'acf_first_activated_version', '6.4.2', 'on'),
(267, 'acf_site_health', '{\"version\":\"6.4.2\",\"plugin_type\":\"Free\",\"update_source\":\"wordpress.org\",\"wp_version\":\"6.8.1\",\"mysql_version\":\"11.7.2-MariaDB\",\"is_multisite\":false,\"active_theme\":{\"name\":\"Benin Textile Corporation\",\"version\":\"1.0\",\"theme_uri\":\"\",\"stylesheet\":false},\"active_plugins\":{\"advanced-custom-fields\\/acf.php\":{\"name\":\"Advanced Custom Fields\",\"version\":\"6.4.2\",\"plugin_uri\":\"https:\\/\\/www.advancedcustomfields.com\"},\"manual-image-crop\\/manual-image-crop.php\":{\"name\":\"Manual Image Crop\",\"version\":\"1.12\",\"plugin_uri\":\"https:\\/\\/github.com\\/tomaszsita\\/wp-manual-image-crop\"}},\"ui_field_groups\":\"0\",\"php_field_groups\":\"0\",\"json_field_groups\":\"0\",\"rest_field_groups\":\"0\",\"all_location_rules\":[],\"number_of_fields_by_type\":[],\"number_of_third_party_fields_by_type\":[],\"post_types_enabled\":true,\"ui_post_types\":\"3\",\"json_post_types\":\"0\",\"ui_taxonomies\":\"3\",\"json_taxonomies\":\"0\",\"rest_api_format\":\"light\",\"admin_ui_enabled\":true,\"field_type-modal_enabled\":true,\"field_settings_tabs_enabled\":false,\"shortcode_enabled\":false,\"registered_acf_forms\":\"0\",\"json_save_paths\":1,\"json_load_paths\":1,\"event_first_activated\":1751972330,\"last_updated\":1751972594,\"event_first_created_field_group\":1751972594}', 'off'),
(269, 'acf_version', '6.4.2', 'auto'),
(270, 'mic_options', 'a:1:{s:14:\"sizes_settings\";s:294:\"a:3:{s:9:\"thumbnail\";a:3:{s:10:\"visibility\";s:7:\"visible\";s:7:\"quality\";s:2:\"80\";s:5:\"label\";s:0:\"\";}s:9:\"btc_large\";a:3:{s:10:\"visibility\";s:7:\"visible\";s:7:\"quality\";s:2:\"80\";s:5:\"label\";s:0:\"\";}s:9:\"metaimage\";a:3:{s:10:\"visibility\";s:7:\"visible\";s:7:\"quality\";s:2:\"80\";s:5:\"label\";s:0:\"\";}}\";}', 'auto'),
(333, 'recovery_mode_email_last_sent', '1752041167', 'auto'),
(364, '_transient_health-check-site-status-result', '{\"good\":14,\"recommended\":8,\"critical\":1}', 'on'),
(601, 'ewd-ufaq-permission-level', 'a:1:{i:0;s:1:\"1\";}', 'auto'),
(602, 'widget_ewd_ufaq_display_faq_post_list', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(603, 'widget_ewd_ufaq_display_recent_faqs', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(604, 'widget_ewd_ufaq_popular_reviews_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(605, 'widget_ewd_ufaq_display_random_faq', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(606, 'widget_ewd_ufaq_display_faq_categories', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(607, 'ewd-ufaq-installation-time', '1752062488', 'auto'),
(713, 'ms_was_installed_on', '1752145876', 'auto'),
(714, 'metaslider_new_user', 'new', 'auto'),
(715, 'widget_metaslider_widget', 'a:1:{s:12:\"_multiwidget\";i:1;}', 'auto'),
(716, 'ms_hide_all_ads_until', '1753355487', 'auto'),
(717, 'ml-slider_children', 'a:0:{}', 'auto'),
(718, 'metaslider_systemcheck', 'a:2:{s:16:\"wordPressVersion\";b:1;s:12:\"imageLibrary\";b:0;}', 'off'),
(719, 'metaslider_tour_cancelled_on', 'add-slide', 'auto'),
(761, '_site_transient_update_plugins', 'O:8:\"stdClass\":5:{s:12:\"last_checked\";i:1752209485;s:8:\"response\";a:1:{s:19:\"akismet/akismet.php\";O:8:\"stdClass\":13:{s:2:\"id\";s:21:\"w.org/plugins/akismet\";s:4:\"slug\";s:7:\"akismet\";s:6:\"plugin\";s:19:\"akismet/akismet.php\";s:11:\"new_version\";s:3:\"5.4\";s:3:\"url\";s:38:\"https://wordpress.org/plugins/akismet/\";s:7:\"package\";s:54:\"https://downloads.wordpress.org/plugin/akismet.5.4.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:60:\"https://ps.w.org/akismet/assets/icon-256x256.png?rev=2818463\";s:2:\"1x\";s:60:\"https://ps.w.org/akismet/assets/icon-128x128.png?rev=2818463\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:63:\"https://ps.w.org/akismet/assets/banner-1544x500.png?rev=2900731\";s:2:\"1x\";s:62:\"https://ps.w.org/akismet/assets/banner-772x250.png?rev=2900731\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"5.8\";s:6:\"tested\";s:5:\"6.8.1\";s:12:\"requires_php\";s:3:\"7.2\";s:16:\"requires_plugins\";a:0:{}}}s:12:\"translations\";a:0:{}s:9:\"no_update\";a:3:{s:30:\"advanced-custom-fields/acf.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:36:\"w.org/plugins/advanced-custom-fields\";s:4:\"slug\";s:22:\"advanced-custom-fields\";s:6:\"plugin\";s:30:\"advanced-custom-fields/acf.php\";s:11:\"new_version\";s:5:\"6.4.2\";s:3:\"url\";s:53:\"https://wordpress.org/plugins/advanced-custom-fields/\";s:7:\"package\";s:71:\"https://downloads.wordpress.org/plugin/advanced-custom-fields.6.4.2.zip\";s:5:\"icons\";a:2:{s:2:\"1x\";s:67:\"https://ps.w.org/advanced-custom-fields/assets/icon.svg?rev=3207824\";s:3:\"svg\";s:67:\"https://ps.w.org/advanced-custom-fields/assets/icon.svg?rev=3207824\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:78:\"https://ps.w.org/advanced-custom-fields/assets/banner-1544x500.jpg?rev=3207824\";s:2:\"1x\";s:77:\"https://ps.w.org/advanced-custom-fields/assets/banner-772x250.jpg?rev=3207824\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"6.0\";}s:39:\"manual-image-crop/manual-image-crop.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:31:\"w.org/plugins/manual-image-crop\";s:4:\"slug\";s:17:\"manual-image-crop\";s:6:\"plugin\";s:39:\"manual-image-crop/manual-image-crop.php\";s:11:\"new_version\";s:4:\"1.12\";s:3:\"url\";s:48:\"https://wordpress.org/plugins/manual-image-crop/\";s:7:\"package\";s:65:\"https://downloads.wordpress.org/plugin/manual-image-crop.1.12.zip\";s:5:\"icons\";a:2:{s:2:\"2x\";s:70:\"https://ps.w.org/manual-image-crop/assets/icon-256x256.png?rev=1154913\";s:2:\"1x\";s:70:\"https://ps.w.org/manual-image-crop/assets/icon-128x128.png?rev=1154913\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:72:\"https://ps.w.org/manual-image-crop/assets/banner-1544x500.jpg?rev=781224\";s:2:\"1x\";s:71:\"https://ps.w.org/manual-image-crop/assets/banner-772x250.jpg?rev=781224\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"3.5\";}s:21:\"safe-svg/safe-svg.php\";O:8:\"stdClass\":10:{s:2:\"id\";s:22:\"w.org/plugins/safe-svg\";s:4:\"slug\";s:8:\"safe-svg\";s:6:\"plugin\";s:21:\"safe-svg/safe-svg.php\";s:11:\"new_version\";s:5:\"2.3.1\";s:3:\"url\";s:39:\"https://wordpress.org/plugins/safe-svg/\";s:7:\"package\";s:57:\"https://downloads.wordpress.org/plugin/safe-svg.2.3.1.zip\";s:5:\"icons\";a:2:{s:2:\"1x\";s:53:\"https://ps.w.org/safe-svg/assets/icon.svg?rev=2779013\";s:3:\"svg\";s:53:\"https://ps.w.org/safe-svg/assets/icon.svg?rev=2779013\";}s:7:\"banners\";a:2:{s:2:\"2x\";s:64:\"https://ps.w.org/safe-svg/assets/banner-1544x500.png?rev=2683939\";s:2:\"1x\";s:63:\"https://ps.w.org/safe-svg/assets/banner-772x250.png?rev=2683939\";}s:11:\"banners_rtl\";a:0:{}s:8:\"requires\";s:3:\"6.5\";}}s:7:\"checked\";a:4:{s:30:\"advanced-custom-fields/acf.php\";s:5:\"6.4.2\";s:19:\"akismet/akismet.php\";s:5:\"5.3.7\";s:39:\"manual-image-crop/manual-image-crop.php\";s:4:\"1.12\";s:21:\"safe-svg/safe-svg.php\";s:5:\"2.3.1\";}}', 'off'),
(762, '_site_transient_timeout_community-events-00672c665f252d9a6a3fb02b8ae8b67d', '1752252696', 'off'),
(763, '_site_transient_community-events-00672c665f252d9a6a3fb02b8ae8b67d', 'a:4:{s:9:\"sandboxed\";b:0;s:5:\"error\";N;s:8:\"location\";a:3:{s:11:\"description\";s:8:\"Gurugram\";s:8:\"latitude\";s:8:\"28.46010\";s:9:\"longitude\";s:8:\"77.02635\";}s:6:\"events\";a:0:{}}', 'off'),
(788, '_site_transient_timeout_wp_theme_files_patterns-8baad399809110a9cc024f4cd927ed42', '1752220356', 'off'),
(789, '_site_transient_wp_theme_files_patterns-8baad399809110a9cc024f4cd927ed42', 'a:2:{s:7:\"version\";s:3:\"1.0\";s:8:\"patterns\";a:0:{}}', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `wp_postmeta`
--

CREATE TABLE `wp_postmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `post_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_postmeta`
--

INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(1, 2, '_wp_page_template', 'default'),
(2, 3, '_wp_page_template', 'default'),
(3, 6, '_edit_lock', '1751959750:1'),
(4, 8, '_edit_lock', '1752041507:1'),
(6, 1, '_wp_trash_meta_status', 'publish'),
(7, 1, '_wp_trash_meta_time', '1751959879'),
(8, 1, '_wp_desired_post_slug', 'hello-world'),
(9, 1, '_wp_trash_meta_comments_status', 'a:1:{i:1;s:1:\"1\";}'),
(10, 11, '_edit_lock', '1752151010:1'),
(26, 2, '_edit_lock', '1752055887:1'),
(27, 3, '_wp_suggested_privacy_policy_content', 'a:3:{s:11:\"plugin_name\";s:9:\"WordPress\";s:11:\"policy_text\";s:4464:\"<h2 class=\"wp-block-heading\">Who we are</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/btc.</p><h2 class=\"wp-block-heading\">Comments</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><h2 class=\"wp-block-heading\">Media</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><h2 class=\"wp-block-heading\">Cookies</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><h2 class=\"wp-block-heading\">Embedded content from other websites</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><h2 class=\"wp-block-heading\">Who we share your data with</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><h2 class=\"wp-block-heading\">How long we retain your data</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><h2 class=\"wp-block-heading\">What rights you have over your data</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><h2 class=\"wp-block-heading\">Where your data is sent</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p>\";s:5:\"added\";i:1751962513;}'),
(28, 18, '_edit_lock', '1751967445:1'),
(29, 19, '_edit_lock', '1751965373:1'),
(30, 20, '_edit_lock', '1751965236:1'),
(31, 21, '_edit_lock', '1751965824:1'),
(32, 22, '_edit_lock', '1751965682:1'),
(33, 23, '_edit_lock', '1751966029:1'),
(34, 24, '_edit_lock', '1751966043:1'),
(35, 25, '_edit_lock', '1751966283:1'),
(36, 26, '_edit_lock', '1751966345:1'),
(37, 27, '_edit_lock', '1751966201:1'),
(39, 11, '_edit_last', '1'),
(41, 11, '_btc_meta_title', 'ARISE IIP secures $450 million Afreximbank facility to develop Industrial Parks and Special Economic Zones'),
(42, 11, '_btc_meta_description', 'Cairo, Egypt: In a significant move aimed at boosting industrial development across Africa, African Export-Import Bank (Afreximbank) signed a US$450 million global credit facility with ARISE IIP, the leading pan-African developer and operator of world-class industrial parks.'),
(46, 3, '_wp_trash_meta_status', 'draft'),
(47, 3, '_wp_trash_meta_time', '1751966481'),
(48, 3, '_wp_desired_post_slug', 'privacy-policy'),
(50, 2, '_edit_last', '1'),
(51, 2, '_btc_meta_title', 'Benin Textile Corporation'),
(52, 2, '_btc_meta_description', 'Meta description of Benin Textile Corporation'),
(53, 30, '_edit_lock', '1752056467:1'),
(54, 30, '_edit_last', '1'),
(55, 30, '_btc_meta_title', ''),
(56, 30, '_btc_meta_description', ''),
(57, 18, '_edit_last', '1'),
(58, 18, '_btc_meta_title', ''),
(59, 18, '_btc_meta_description', ''),
(60, 18, '_wp_suggested_privacy_policy_content', 'a:3:{s:11:\"plugin_name\";s:9:\"WordPress\";s:11:\"policy_text\";s:4464:\"<h2 class=\"wp-block-heading\">Who we are</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/btc.</p><h2 class=\"wp-block-heading\">Comments</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p><p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p><h2 class=\"wp-block-heading\">Media</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p><h2 class=\"wp-block-heading\">Cookies</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p><p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p><p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p><p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p><h2 class=\"wp-block-heading\">Embedded content from other websites</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p><p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p><h2 class=\"wp-block-heading\">Who we share your data with</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p><h2 class=\"wp-block-heading\">How long we retain your data</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p><p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p><h2 class=\"wp-block-heading\">What rights you have over your data</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p><h2 class=\"wp-block-heading\">Where your data is sent</h2><p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p>\";s:5:\"added\";i:1751967338;}'),
(61, 33, '_edit_lock', '1752152411:1'),
(62, 33, '_edit_last', '1'),
(63, 33, '_btc_meta_title', ''),
(64, 33, '_btc_meta_description', ''),
(68, 35, '_edit_lock', '1751969775:1'),
(87, 39, '_edit_lock', '1752153510:1'),
(88, 39, '_edit_last', '1'),
(90, 2, 'footnotes', ''),
(92, 42, 'footnotes', ''),
(94, 2, 'meta_image', ''),
(95, 2, '_meta_image', 'field_686cfa01f9a00'),
(96, 2, 'meta_title', 'BTC home Page'),
(97, 2, '_meta_title', 'field_686d0105ba4e7'),
(98, 42, 'meta_image', ''),
(99, 42, '_meta_image', 'field_686cfa01f9a00'),
(100, 42, 'meta_title', 'Meta description of Benin Textile Corporation  3'),
(101, 42, '_meta_title', 'field_686d0105ba4e7'),
(104, 44, 'footnotes', ''),
(106, 2, 'meta_description', 'Meta description Home Page'),
(107, 2, '_meta_description', 'field_686d01c8ead69'),
(108, 44, 'meta_image', ''),
(109, 44, '_meta_image', 'field_686cfa01f9a00'),
(110, 44, 'meta_title', 'Meta description of Benin Textile Corporation'),
(111, 44, '_meta_title', 'field_686d0105ba4e7'),
(112, 44, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion'),
(113, 44, '_meta_description', 'field_686d01c8ead69'),
(116, 45, 'footnotes', ''),
(118, 45, 'meta_image', ''),
(119, 45, '_meta_image', 'field_686cfa01f9a00'),
(120, 45, 'meta_title', 'Meta description of Benin Textile Corporation'),
(121, 45, '_meta_title', 'field_686d0105ba4e7'),
(122, 45, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(123, 45, '_meta_description', 'field_686d01c8ead69'),
(126, 46, 'footnotes', ''),
(128, 46, 'meta_image', '14'),
(129, 46, '_meta_image', 'field_686cfa01f9a00'),
(130, 46, 'meta_title', 'Meta description of Benin Textile Corporation'),
(131, 46, '_meta_title', 'field_686d0105ba4e7'),
(132, 46, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(133, 46, '_meta_description', 'field_686d01c8ead69'),
(135, 11, 'meta_image', ''),
(136, 11, '_meta_image', 'field_686cfa01f9a00'),
(137, 11, 'meta_title', ''),
(138, 11, '_meta_title', 'field_686d0105ba4e7'),
(139, 11, 'meta_description', ''),
(140, 11, '_meta_description', 'field_686d01c8ead69'),
(141, 47, 'meta_image', ''),
(142, 47, '_meta_image', 'field_686cfa01f9a00'),
(143, 47, 'meta_title', ''),
(144, 47, '_meta_title', 'field_686d0105ba4e7'),
(145, 47, 'meta_description', ''),
(146, 47, '_meta_description', 'field_686d01c8ead69'),
(150, 49, 'meta_image', ''),
(151, 49, '_meta_image', 'field_686cfa01f9a00'),
(152, 49, 'meta_title', ''),
(153, 49, '_meta_title', 'field_686d0105ba4e7'),
(154, 49, 'meta_description', ''),
(155, 49, '_meta_description', 'field_686d01c8ead69'),
(156, 11, '_oembed_7541082fc2a7c7b0e4f87d1d038bbc34', '<iframe title=\"Incredible Wildlife in Stunning 16K HDR 120fps Dolby Vision\" width=\"500\" height=\"281\" src=\"https://www.youtube.com/embed/qzGxK6Uiu04?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(157, 11, '_oembed_time_7541082fc2a7c7b0e4f87d1d038bbc34', '1751975439'),
(159, 50, 'meta_image', ''),
(160, 50, '_meta_image', 'field_686cfa01f9a00'),
(161, 50, 'meta_title', ''),
(162, 50, '_meta_title', 'field_686d0105ba4e7'),
(163, 50, 'meta_description', ''),
(164, 50, '_meta_description', 'field_686d01c8ead69'),
(166, 51, 'meta_image', ''),
(167, 51, '_meta_image', 'field_686cfa01f9a00'),
(168, 51, 'meta_title', ''),
(169, 51, '_meta_title', 'field_686d0105ba4e7'),
(170, 51, 'meta_description', ''),
(171, 51, '_meta_description', 'field_686d01c8ead69'),
(172, 11, '_oembed_d361070a618bc7fb9800becca90ecc4a', '<iframe title=\"family group portrait of lion cubs and their mother\" width=\"500\" height=\"281\" src=\"https://www.youtube.com/embed/SChbFSzIsdA?feature=oembed\" frameborder=\"0\" allow=\"accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share\" referrerpolicy=\"strict-origin-when-cross-origin\" allowfullscreen></iframe>'),
(173, 11, '_oembed_time_d361070a618bc7fb9800becca90ecc4a', '1751975529'),
(175, 52, 'meta_image', ''),
(176, 52, '_meta_image', 'field_686cfa01f9a00'),
(177, 52, 'meta_title', ''),
(178, 52, '_meta_title', 'field_686d0105ba4e7'),
(179, 52, 'meta_description', ''),
(180, 52, '_meta_description', 'field_686d01c8ead69'),
(183, 53, 'footnotes', ''),
(185, 53, 'meta_image', '14'),
(186, 53, '_meta_image', 'field_686cfa01f9a00'),
(187, 53, 'meta_title', 'Meta description of Benin Textile Corporation'),
(188, 53, '_meta_title', 'field_686d0105ba4e7'),
(189, 53, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(190, 53, '_meta_description', 'field_686d01c8ead69'),
(194, 54, 'footnotes', ''),
(196, 54, 'meta_image', '14'),
(197, 54, '_meta_image', 'field_686cfa01f9a00'),
(198, 54, 'meta_title', 'Meta description of Benin Textile Corporation'),
(199, 54, '_meta_title', 'field_686d0105ba4e7'),
(200, 54, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(201, 54, '_meta_description', 'field_686d01c8ead69'),
(204, 55, 'footnotes', ''),
(206, 55, 'meta_image', '14'),
(207, 55, '_meta_image', 'field_686cfa01f9a00'),
(208, 55, 'meta_title', 'Meta description of Benin Textile Corporation'),
(209, 55, '_meta_title', 'field_686d0105ba4e7'),
(210, 55, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(211, 55, '_meta_description', 'field_686d01c8ead69'),
(215, 56, 'footnotes', ''),
(217, 56, 'meta_image', '37'),
(218, 56, '_meta_image', 'field_686cfa01f9a00'),
(219, 56, 'meta_title', 'Meta description of Benin Textile Corporation'),
(220, 56, '_meta_title', 'field_686d0105ba4e7'),
(221, 56, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(222, 56, '_meta_description', 'field_686d01c8ead69'),
(225, 57, 'footnotes', ''),
(227, 57, 'meta_image', '37'),
(228, 57, '_meta_image', 'field_686cfa01f9a00'),
(229, 57, 'meta_title', 'Meta description of Benin Textile Corporation'),
(230, 57, '_meta_title', 'field_686d0105ba4e7'),
(231, 57, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(232, 57, '_meta_description', 'field_686d01c8ead69'),
(235, 58, 'footnotes', ''),
(237, 58, 'meta_image', '37'),
(238, 58, '_meta_image', 'field_686cfa01f9a00'),
(239, 58, 'meta_title', 'Meta description of Benin Textile Corporation'),
(240, 58, '_meta_title', 'field_686d0105ba4e7'),
(241, 58, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(242, 58, '_meta_description', 'field_686d01c8ead69'),
(246, 59, 'footnotes', ''),
(248, 59, 'meta_image', '13'),
(249, 59, '_meta_image', 'field_686cfa01f9a00'),
(250, 59, 'meta_title', 'Meta description of Benin Textile Corporation'),
(251, 59, '_meta_title', 'field_686d0105ba4e7'),
(252, 59, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(253, 59, '_meta_description', 'field_686d01c8ead69'),
(256, 60, 'footnotes', ''),
(258, 60, 'meta_image', ''),
(259, 60, '_meta_image', 'field_686cfa01f9a00'),
(260, 60, 'meta_title', 'Meta description of Benin Textile Corporation'),
(261, 60, '_meta_title', 'field_686d0105ba4e7'),
(262, 60, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(263, 60, '_meta_description', 'field_686d01c8ead69'),
(266, 61, 'footnotes', ''),
(268, 61, 'meta_image', '13'),
(269, 61, '_meta_image', 'field_686cfa01f9a00'),
(270, 61, 'meta_title', 'Meta description of Benin Textile Corporation'),
(271, 61, '_meta_title', 'field_686d0105ba4e7'),
(272, 61, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(273, 61, '_meta_description', 'field_686d01c8ead69'),
(278, 63, 'footnotes', ''),
(280, 63, 'meta_image', '62'),
(281, 63, '_meta_image', 'field_686cfa01f9a00'),
(282, 63, 'meta_title', 'Meta description of Benin Textile Corporation'),
(283, 63, '_meta_title', 'field_686d0105ba4e7'),
(284, 63, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(285, 63, '_meta_description', 'field_686d01c8ead69'),
(289, 64, 'footnotes', ''),
(291, 64, 'meta_image', '62'),
(292, 64, '_meta_image', 'field_686cfa01f9a00'),
(293, 64, 'meta_title', 'Meta description of Benin Textile Corporation'),
(294, 64, '_meta_title', 'field_686d0105ba4e7'),
(295, 64, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(296, 64, '_meta_description', 'field_686d01c8ead69'),
(299, 65, 'footnotes', ''),
(301, 65, 'meta_image', '62'),
(302, 65, '_meta_image', 'field_686cfa01f9a00'),
(303, 65, 'meta_title', 'Meta description of Benin Textile Corporation'),
(304, 65, '_meta_title', 'field_686d0105ba4e7'),
(305, 65, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(306, 65, '_meta_description', 'field_686d01c8ead69'),
(309, 66, 'footnotes', ''),
(311, 66, 'meta_image', '62'),
(312, 66, '_meta_image', 'field_686cfa01f9a00'),
(313, 66, 'meta_title', 'Meta description of Benin Textile Corporation'),
(314, 66, '_meta_title', 'field_686d0105ba4e7'),
(315, 66, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(316, 66, '_meta_description', 'field_686d01c8ead69'),
(319, 67, 'footnotes', ''),
(321, 67, 'meta_image', '62'),
(322, 67, '_meta_image', 'field_686cfa01f9a00'),
(323, 67, 'meta_title', 'Meta description of Benin Textile Corporation'),
(324, 67, '_meta_title', 'field_686d0105ba4e7'),
(325, 67, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(326, 67, '_meta_description', 'field_686d01c8ead69'),
(329, 68, 'footnotes', ''),
(331, 68, 'meta_image', '62'),
(332, 68, '_meta_image', 'field_686cfa01f9a00'),
(333, 68, 'meta_title', 'Meta description of Benin Textile Corporation'),
(334, 68, '_meta_title', 'field_686d0105ba4e7'),
(335, 68, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(336, 68, '_meta_description', 'field_686d01c8ead69'),
(339, 69, 'footnotes', ''),
(341, 69, 'meta_image', '62'),
(342, 69, '_meta_image', 'field_686cfa01f9a00'),
(343, 69, 'meta_title', 'Meta description of Benin Textile Corporation'),
(344, 69, '_meta_title', 'field_686d0105ba4e7'),
(345, 69, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(346, 69, '_meta_description', 'field_686d01c8ead69'),
(349, 70, 'footnotes', ''),
(351, 70, 'meta_image', '62'),
(352, 70, '_meta_image', 'field_686cfa01f9a00'),
(353, 70, 'meta_title', 'Meta description of Benin Textile Corporation'),
(354, 70, '_meta_title', 'field_686d0105ba4e7'),
(355, 70, 'meta_description', 'Meta description of Benin Textile Corporation Meta descripion Tets'),
(356, 70, '_meta_description', 'field_686d01c8ead69'),
(367, 75, '_wp_attached_file', '2025/07/DSC08735_-1440x780-1.jpg'),
(368, 75, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1440;s:6:\"height\";i:780;s:4:\"file\";s:32:\"2025/07/DSC08735_-1440x780-1.jpg\";s:8:\"filesize\";i:239188;s:5:\"sizes\";a:7:{s:6:\"medium\";a:5:{s:4:\"file\";s:32:\"DSC08735_-1440x780-1-300x163.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:163;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:13389;}s:5:\"large\";a:5:{s:4:\"file\";s:33:\"DSC08735_-1440x780-1-1024x555.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:555;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:96101;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:32:\"DSC08735_-1440x780-1-400x250.jpg\";s:5:\"width\";i:400;s:6:\"height\";i:250;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:23277;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:32:\"DSC08735_-1440x780-1-768x416.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:416;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:60040;}s:10:\"btc_medium\";a:5:{s:4:\"file\";s:32:\"DSC08735_-1440x780-1-800x433.jpg\";s:5:\"width\";i:800;s:6:\"height\";i:433;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:64751;}s:9:\"btc_large\";a:5:{s:4:\"file\";s:33:\"DSC08735_-1440x780-1-1200x780.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:780;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:151784;}s:9:\"metaimage\";a:5:{s:4:\"file\";s:33:\"DSC08735_-1440x780-1-1200x630.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:630;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:120445;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"4\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:8:\"ILCE-7M3\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:10:\"1622028316\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:2:\"24\";s:3:\"iso\";s:3:\"500\";s:13:\"shutter_speed\";s:4:\"0.04\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:0:{}}}'),
(369, 76, '_wp_attached_file', '2025/07/shutterstock_766749757-1440x780-1.jpg'),
(370, 76, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:1440;s:6:\"height\";i:780;s:4:\"file\";s:45:\"2025/07/shutterstock_766749757-1440x780-1.jpg\";s:8:\"filesize\";i:120146;s:5:\"sizes\";a:7:{s:6:\"medium\";a:5:{s:4:\"file\";s:45:\"shutterstock_766749757-1440x780-1-300x163.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:163;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:9995;}s:5:\"large\";a:5:{s:4:\"file\";s:46:\"shutterstock_766749757-1440x780-1-1024x555.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:555;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:63047;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:45:\"shutterstock_766749757-1440x780-1-400x250.jpg\";s:5:\"width\";i:400;s:6:\"height\";i:250;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:16529;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:45:\"shutterstock_766749757-1440x780-1-768x416.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:416;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:40252;}s:10:\"btc_medium\";a:5:{s:4:\"file\";s:45:\"shutterstock_766749757-1440x780-1-800x433.jpg\";s:5:\"width\";i:800;s:6:\"height\";i:433;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:43572;}s:9:\"btc_large\";a:5:{s:4:\"file\";s:46:\"shutterstock_766749757-1440x780-1-1200x780.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:780;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:88578;}s:9:\"metaimage\";a:5:{s:4:\"file\";s:46:\"shutterstock_766749757-1440x780-1-1200x630.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:630;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:77889;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:12:\"Shutterstock\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:75:\"Copyright (c) 2017 Billion Photos/Shutterstock.  No use without permission.\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:35:\"Newspaper,,Journalist,,Backgrounds.\";s:11:\"orientation\";s:1:\"1\";s:8:\"keywords\";a:1:{i:0;s:64:\"newspaper,data,advice,document,office,\"moving up\",210,white,\"pri\";}}}'),
(371, 77, '_wp_attached_file', '2025/07/BTC-logo.png'),
(372, 77, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:664;s:6:\"height\";i:224;s:4:\"file\";s:20:\"2025/07/BTC-logo.png\";s:8:\"filesize\";i:18655;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:20:\"BTC-logo-300x101.png\";s:5:\"width\";i:300;s:6:\"height\";i:101;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:12676;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:20:\"BTC-logo-400x224.png\";s:5:\"width\";i:400;s:6:\"height\";i:224;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:9519;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(373, 78, '_wp_attached_file', '2025/07/BTC-logo-1.png'),
(374, 78, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:664;s:6:\"height\";i:224;s:4:\"file\";s:22:\"2025/07/BTC-logo-1.png\";s:8:\"filesize\";i:18655;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:22:\"BTC-logo-1-300x101.png\";s:5:\"width\";i:300;s:6:\"height\";i:101;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:12676;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:22:\"BTC-logo-1-400x224.png\";s:5:\"width\";i:400;s:6:\"height\";i:224;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:9519;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(375, 79, '_wp_attached_file', '2025/07/cropped-BTC-logo-1.png'),
(376, 79, '_wp_attachment_context', 'site-icon'),
(377, 79, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:512;s:6:\"height\";i:512;s:4:\"file\";s:30:\"2025/07/cropped-BTC-logo-1.png\";s:8:\"filesize\";i:36094;s:5:\"sizes\";a:6:{s:6:\"medium\";a:5:{s:4:\"file\";s:30:\"cropped-BTC-logo-1-300x300.png\";s:5:\"width\";i:300;s:6:\"height\";i:300;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:24981;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:30:\"cropped-BTC-logo-1-400x400.png\";s:5:\"width\";i:400;s:6:\"height\";i:400;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:33961;}s:13:\"site_icon-270\";a:5:{s:4:\"file\";s:30:\"cropped-BTC-logo-1-270x270.png\";s:5:\"width\";i:270;s:6:\"height\";i:270;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:21918;}s:13:\"site_icon-192\";a:5:{s:4:\"file\";s:30:\"cropped-BTC-logo-1-192x192.png\";s:5:\"width\";i:192;s:6:\"height\";i:192;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:13446;}s:13:\"site_icon-180\";a:5:{s:4:\"file\";s:30:\"cropped-BTC-logo-1-180x180.png\";s:5:\"width\";i:180;s:6:\"height\";i:180;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:12531;}s:12:\"site_icon-32\";a:5:{s:4:\"file\";s:28:\"cropped-BTC-logo-1-32x32.png\";s:5:\"width\";i:32;s:6:\"height\";i:32;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:1316;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(378, 11, '_thumbnail_id', '75'),
(380, 80, '_edit_lock', '1752041349:1'),
(382, 8, '_thumbnail_id', '76'),
(383, 8, '_edit_last', '1'),
(384, 8, 'meta_image', ''),
(385, 8, '_meta_image', 'field_686cfa01f9a00'),
(386, 8, 'meta_title', ''),
(387, 8, '_meta_title', 'field_686d0105ba4e7'),
(388, 8, 'meta_description', ''),
(389, 8, '_meta_description', 'field_686d01c8ead69'),
(390, 9, 'meta_image', ''),
(391, 9, '_meta_image', 'field_686cfa01f9a00'),
(392, 9, 'meta_title', ''),
(393, 9, '_meta_title', 'field_686d0105ba4e7'),
(394, 9, 'meta_description', ''),
(395, 9, '_meta_description', 'field_686d01c8ead69'),
(396, 18, '_wp_trash_meta_status', 'publish'),
(397, 18, '_wp_trash_meta_time', '1752044153'),
(398, 18, '_wp_desired_post_slug', 'privacy-policy'),
(399, 81, '_edit_lock', '1752044975:1'),
(400, 82, '_edit_lock', '1752045038:1'),
(401, 83, '_edit_lock', '1752044904:1'),
(402, 84, '_edit_lock', '1752062590:1'),
(403, 84, '_edit_last', '1'),
(404, 86, '_edit_lock', '1752045185:1'),
(405, 87, '_edit_lock', '1752214546:1'),
(406, 88, '_edit_lock', '1752062632:1'),
(407, 89, '_edit_lock', '1752150826:1'),
(408, 90, '_edit_lock', '1752213287:1'),
(409, 91, '_edit_lock', '1752213083:1'),
(410, 92, '_edit_lock', '1752215944:1'),
(411, 93, '_edit_lock', '1752045575:1'),
(412, 94, '_edit_lock', '1752045601:1'),
(413, 95, '_edit_lock', '1752045463:1'),
(414, 96, '_edit_lock', '1752217244:1'),
(415, 96, '_edit_last', '1'),
(416, 96, 'category', 'a:1:{i:0;s:2:\"87\";}'),
(417, 96, '_category', 'field_686e160511db5'),
(418, 97, '_edit_lock', '1752214422:1'),
(420, 97, 'footnotes', ''),
(422, 98, 'footnotes', ''),
(424, 97, '_edit_last', '1'),
(425, 97, 'meta_image', ''),
(426, 97, '_meta_image', 'field_686cfa01f9a00'),
(427, 97, 'meta_title', 'Crafted for Qualityand Sustainability'),
(428, 97, '_meta_title', 'field_686d0105ba4e7'),
(429, 97, 'meta_description', ''),
(430, 97, '_meta_description', 'field_686d01c8ead69'),
(431, 98, 'meta_image', ''),
(432, 98, '_meta_image', 'field_686cfa01f9a00'),
(433, 98, 'meta_title', 'BTC Product List'),
(434, 98, '_meta_title', 'field_686d0105ba4e7'),
(435, 98, 'meta_description', ''),
(436, 98, '_meta_description', 'field_686d01c8ead69'),
(437, 99, '_edit_lock', '1752062606:1'),
(438, 99, '_edit_last', '1'),
(439, 99, 'meta_image', ''),
(440, 99, '_meta_image', 'field_686cfa01f9a00'),
(441, 99, 'meta_title', 'Why BTC'),
(442, 99, '_meta_title', 'field_686d0105ba4e7'),
(443, 99, 'meta_description', ''),
(444, 99, '_meta_description', 'field_686d01c8ead69'),
(445, 100, 'meta_image', ''),
(446, 100, '_meta_image', 'field_686cfa01f9a00'),
(447, 100, 'meta_title', ''),
(448, 100, '_meta_title', 'field_686d0105ba4e7'),
(449, 100, 'meta_description', ''),
(450, 100, '_meta_description', 'field_686d01c8ead69'),
(451, 101, '_edit_lock', '1752049354:1'),
(452, 102, '_edit_lock', '1752049648:1'),
(453, 103, '_edit_lock', '1752049650:1'),
(454, 104, '_edit_lock', '1752049830:1'),
(455, 105, '_edit_lock', '1752049738:1'),
(456, 106, '_edit_lock', '1752049796:1'),
(457, 107, '_edit_lock', '1752053304:1'),
(458, 108, '_edit_lock', '1752054246:1'),
(459, 109, '_edit_lock', '1752066130:1'),
(461, 109, 'footnotes', ''),
(463, 110, 'footnotes', ''),
(465, 109, '_edit_last', '1'),
(466, 109, 'meta_image', ''),
(467, 109, '_meta_image', 'field_686cfa01f9a00'),
(468, 109, 'meta_title', 'Contact Us'),
(469, 109, '_meta_title', 'field_686d0105ba4e7'),
(470, 109, 'meta_description', 'Contact Us'),
(471, 109, '_meta_description', 'field_686d01c8ead69'),
(472, 110, 'meta_image', ''),
(473, 110, '_meta_image', 'field_686cfa01f9a00'),
(474, 110, 'meta_title', 'Contact Us'),
(475, 110, '_meta_title', 'field_686d0105ba4e7'),
(476, 110, 'meta_description', 'Contact Us'),
(477, 110, '_meta_description', 'field_686d01c8ead69'),
(478, 111, '_edit_lock', '1752152859:1'),
(479, 112, '_edit_lock', '1752054751:1'),
(480, 113, '_edit_lock', '1752056654:1'),
(481, 113, '_edit_last', '1'),
(482, 113, 'meta_image', ''),
(483, 113, '_meta_image', 'field_686cfa01f9a00'),
(484, 113, 'meta_title', 'Event Listing'),
(485, 113, '_meta_title', 'field_686d0105ba4e7'),
(486, 113, 'meta_description', ''),
(487, 113, '_meta_description', 'field_686d01c8ead69'),
(488, 114, 'meta_image', ''),
(489, 114, '_meta_image', 'field_686cfa01f9a00'),
(490, 114, 'meta_title', ''),
(491, 114, '_meta_title', 'field_686d0105ba4e7'),
(492, 114, 'meta_description', ''),
(493, 114, '_meta_description', 'field_686d01c8ead69'),
(495, 30, 'footnotes', ''),
(497, 115, 'footnotes', ''),
(499, 30, 'meta_image', ''),
(500, 30, '_meta_image', 'field_686cfa01f9a00'),
(501, 30, 'meta_title', 'BTC Blog Listing'),
(502, 30, '_meta_title', 'field_686d0105ba4e7'),
(503, 30, 'meta_description', ''),
(504, 30, '_meta_description', 'field_686d01c8ead69'),
(505, 115, 'meta_image', ''),
(506, 115, '_meta_image', 'field_686cfa01f9a00'),
(507, 115, 'meta_title', 'Blog Listing'),
(508, 115, '_meta_title', 'field_686d0105ba4e7'),
(509, 115, 'meta_description', ''),
(510, 115, '_meta_description', 'field_686d01c8ead69'),
(511, 116, 'footnotes', ''),
(512, 116, 'meta_image', ''),
(513, 116, '_meta_image', 'field_686cfa01f9a00'),
(514, 116, 'meta_title', 'Blog Listing'),
(515, 116, '_meta_title', 'field_686d0105ba4e7'),
(516, 116, 'meta_description', ''),
(517, 116, '_meta_description', 'field_686d01c8ead69'),
(520, 117, 'footnotes', ''),
(522, 117, 'meta_image', ''),
(523, 117, '_meta_image', 'field_686cfa01f9a00'),
(524, 117, 'meta_title', 'BTC Blog Listing'),
(525, 117, '_meta_title', 'field_686d0105ba4e7'),
(526, 117, 'meta_description', ''),
(527, 117, '_meta_description', 'field_686d01c8ead69'),
(530, 118, 'footnotes', ''),
(532, 118, 'meta_image', ''),
(533, 118, '_meta_image', 'field_686cfa01f9a00'),
(534, 118, 'meta_title', 'Meta description of Benin Textile Corporation'),
(535, 118, '_meta_title', 'field_686d0105ba4e7'),
(536, 118, 'meta_description', 'Meta description Home Page'),
(537, 118, '_meta_description', 'field_686d01c8ead69'),
(540, 119, 'footnotes', ''),
(542, 119, 'meta_image', ''),
(543, 119, '_meta_image', 'field_686cfa01f9a00'),
(544, 119, 'meta_title', 'BTC home Page'),
(545, 119, '_meta_title', 'field_686d0105ba4e7'),
(546, 119, 'meta_description', 'Meta description Home Page'),
(547, 119, '_meta_description', 'field_686d01c8ead69'),
(549, 99, 'footnotes', ''),
(551, 120, 'footnotes', ''),
(553, 120, 'meta_image', ''),
(554, 120, '_meta_image', 'field_686cfa01f9a00'),
(555, 120, 'meta_title', 'Why BTC'),
(556, 120, '_meta_title', 'field_686d0105ba4e7'),
(557, 120, 'meta_description', ''),
(558, 120, '_meta_description', 'field_686d01c8ead69'),
(560, 113, 'footnotes', ''),
(562, 121, 'footnotes', ''),
(564, 121, 'meta_image', ''),
(565, 121, '_meta_image', 'field_686cfa01f9a00'),
(566, 121, 'meta_title', 'Event Listing'),
(567, 121, '_meta_title', 'field_686d0105ba4e7'),
(568, 121, 'meta_description', ''),
(569, 121, '_meta_description', 'field_686d01c8ead69'),
(570, 92, '_edit_last', '1'),
(571, 92, 'meta_image', ''),
(572, 92, '_meta_image', 'field_686cfa01f9a00'),
(573, 92, 'meta_title', 'Uniforms'),
(574, 92, '_meta_title', 'field_686d0105ba4e7'),
(575, 92, 'meta_description', ''),
(576, 92, '_meta_description', 'field_686d01c8ead69'),
(577, 111, '_edit_last', '1'),
(578, 111, 'meta_image', ''),
(579, 111, '_meta_image', 'field_686cfa01f9a00'),
(580, 111, 'meta_title', 'My Event'),
(581, 111, '_meta_title', 'field_686d0105ba4e7'),
(582, 111, 'meta_description', ''),
(583, 111, '_meta_description', 'field_686d01c8ead69'),
(584, 122, '_edit_lock', '1752214633:1'),
(585, 122, '_edit_last', '1'),
(586, 126, '_edit_lock', '1752058659:1'),
(587, 126, '_edit_last', '1'),
(588, 126, 'meta_image', ''),
(589, 126, '_meta_image', 'field_686cfa01f9a00'),
(590, 126, 'meta_title', ''),
(591, 126, '_meta_title', 'field_686d0105ba4e7'),
(592, 126, 'meta_description', ''),
(593, 126, '_meta_description', 'field_686d01c8ead69'),
(594, 127, 'meta_image', ''),
(595, 127, '_meta_image', 'field_686cfa01f9a00'),
(596, 127, 'meta_title', ''),
(597, 127, '_meta_title', 'field_686d0105ba4e7'),
(598, 127, 'meta_description', ''),
(599, 127, '_meta_description', 'field_686d01c8ead69'),
(600, 128, '_edit_lock', '1752058807:1'),
(602, 128, 'footnotes', ''),
(604, 129, 'footnotes', ''),
(606, 128, '_edit_last', '1'),
(607, 128, 'meta_image', ''),
(608, 128, '_meta_image', 'field_686cfa01f9a00'),
(609, 128, 'meta_title', 'Sustainability'),
(610, 128, '_meta_title', 'field_686d0105ba4e7'),
(611, 128, 'meta_description', ''),
(612, 128, '_meta_description', 'field_686d01c8ead69'),
(613, 129, 'meta_image', ''),
(614, 129, '_meta_image', 'field_686cfa01f9a00'),
(615, 129, 'meta_title', 'Sustainability'),
(616, 129, '_meta_title', 'field_686d0105ba4e7'),
(617, 129, 'meta_description', ''),
(618, 129, '_meta_description', 'field_686d01c8ead69'),
(619, 130, '_edit_lock', '1752058943:1'),
(620, 130, '_edit_last', '1'),
(621, 130, 'meta_image', ''),
(622, 130, '_meta_image', 'field_686cfa01f9a00'),
(623, 130, 'meta_title', ''),
(624, 130, '_meta_title', 'field_686d0105ba4e7'),
(625, 130, 'meta_description', ''),
(626, 130, '_meta_description', 'field_686d01c8ead69'),
(627, 131, 'meta_image', ''),
(628, 131, '_meta_image', 'field_686cfa01f9a00'),
(629, 131, 'meta_title', ''),
(630, 131, '_meta_title', 'field_686d0105ba4e7'),
(631, 131, 'meta_description', ''),
(632, 131, '_meta_description', 'field_686d01c8ead69'),
(633, 132, '_wp_attached_file', '2025/07/BTC-logo.svg'),
(634, 132, '_wp_attachment_metadata', 'a:4:{s:5:\"width\";i:166;s:6:\"height\";i:56;s:4:\"file\";s:20:\"2025/07/BTC-logo.svg\";s:5:\"sizes\";a:9:{s:9:\"thumbnail\";a:5:{s:5:\"width\";i:400;s:6:\"height\";i:400;s:4:\"crop\";i:1;s:4:\"file\";s:12:\"BTC-logo.svg\";s:9:\"mime-type\";s:13:\"image/svg+xml\";}s:6:\"medium\";a:5:{s:5:\"width\";s:3:\"300\";s:6:\"height\";s:3:\"300\";s:4:\"crop\";b:0;s:4:\"file\";s:12:\"BTC-logo.svg\";s:9:\"mime-type\";s:13:\"image/svg+xml\";}s:12:\"medium_large\";a:5:{s:5:\"width\";s:3:\"768\";s:6:\"height\";s:1:\"0\";s:4:\"crop\";b:0;s:4:\"file\";s:12:\"BTC-logo.svg\";s:9:\"mime-type\";s:13:\"image/svg+xml\";}s:5:\"large\";a:5:{s:5:\"width\";s:4:\"1024\";s:6:\"height\";s:4:\"1024\";s:4:\"crop\";b:0;s:4:\"file\";s:12:\"BTC-logo.svg\";s:9:\"mime-type\";s:13:\"image/svg+xml\";}s:9:\"1536x1536\";a:5:{s:5:\"width\";i:1536;s:6:\"height\";i:1536;s:4:\"crop\";i:0;s:4:\"file\";s:12:\"BTC-logo.svg\";s:9:\"mime-type\";s:13:\"image/svg+xml\";}s:9:\"2048x2048\";a:5:{s:5:\"width\";i:2048;s:6:\"height\";i:2048;s:4:\"crop\";i:0;s:4:\"file\";s:12:\"BTC-logo.svg\";s:9:\"mime-type\";s:13:\"image/svg+xml\";}s:10:\"btc_medium\";a:5:{s:5:\"width\";i:800;s:6:\"height\";i:600;s:4:\"crop\";i:0;s:4:\"file\";s:12:\"BTC-logo.svg\";s:9:\"mime-type\";s:13:\"image/svg+xml\";}s:9:\"btc_large\";a:5:{s:5:\"width\";i:1200;s:6:\"height\";i:800;s:4:\"crop\";i:1;s:4:\"file\";s:12:\"BTC-logo.svg\";s:9:\"mime-type\";s:13:\"image/svg+xml\";}s:9:\"metaimage\";a:5:{s:5:\"width\";i:1200;s:6:\"height\";i:630;s:4:\"crop\";i:1;s:4:\"file\";s:12:\"BTC-logo.svg\";s:9:\"mime-type\";s:13:\"image/svg+xml\";}}}'),
(635, 133, '_edit_lock', '1752061195:1'),
(636, 134, '_edit_lock', '1752062628:1'),
(637, 135, '_edit_lock', '1752062867:1'),
(638, 136, '_edit_lock', '1752063042:1'),
(639, 137, '_edit_lock', '1752063138:1'),
(640, 138, '_edit_lock', '1752063203:1'),
(641, 139, '_edit_lock', '1752063075:1'),
(642, 140, '_edit_lock', '1752064181:1'),
(643, 141, '_edit_lock', '1752064170:1'),
(644, 142, '_edit_lock', '1752064142:1'),
(645, 143, '_edit_lock', '1752063350:1'),
(646, 143, '_edit_last', '1'),
(647, 96, 'faqs', 'a:3:{i:0;s:3:\"141\";i:1;s:3:\"142\";i:2;s:3:\"140\";}'),
(648, 96, '_faqs', 'field_686e5d9da2fef'),
(649, 143, '_wp_trash_meta_status', 'publish'),
(650, 143, '_wp_trash_meta_time', '1752063627'),
(651, 143, '_wp_desired_post_slug', 'group_686e5d9da32cd'),
(652, 144, '_wp_trash_meta_status', 'publish'),
(653, 144, '_wp_trash_meta_time', '1752063627'),
(654, 144, '_wp_desired_post_slug', 'field_686e5d9da2fef'),
(655, 145, '_edit_lock', '1752063925:1'),
(656, 145, '_edit_last', '1'),
(657, 142, '_edit_last', '1'),
(658, 142, 'product', 'a:1:{i:0;s:2:\"96\";}'),
(659, 142, '_product', 'field_686e5fa6c9a91'),
(660, 148, '_edit_lock', '1752064001:1'),
(661, 141, '_edit_last', '1'),
(662, 141, 'product', 'a:1:{i:0;s:2:\"87\";}'),
(663, 141, '_product', 'field_686e5fa6c9a91'),
(664, 140, '_edit_last', '1'),
(665, 140, 'product', 'a:1:{i:0;s:2:\"87\";}'),
(666, 140, '_product', 'field_686e5fa6c9a91'),
(668, 145, '_wp_trash_meta_status', 'publish'),
(669, 145, '_wp_trash_meta_time', '1752064582'),
(670, 145, '_wp_desired_post_slug', 'group_686e5e9410630'),
(671, 147, '_wp_trash_meta_status', 'publish'),
(672, 147, '_wp_trash_meta_time', '1752064582'),
(673, 147, '_wp_desired_post_slug', 'field_686e5fa6c9a91'),
(674, 149, '_edit_lock', '1752064665:1'),
(675, 92, 'category_faqs', 'a:3:{i:0;a:2:{s:8:\"question\";s:41:\"Why invest in Africa’s cosmetic sector?\";s:6:\"answer\";s:300:\"Africa’s expected market size of cosmetics is around $21 billion, plus the country\'s young, growing population and rising disposable incomes create a booming market for cosmetics. Untapped demand, natural resources for production, and digital growth make it a high-potential investment destination.\";}i:1;a:2:{s:8:\"question\";s:43:\"What is the demand for cosmetics in Africa?\";s:6:\"answer\";s:232:\"Demand is surging due to urbanization, an expanding middle class, and a preference for products catering to diverse skin tones and natural ingredients. Consumers increasingly seek quality, inclusive, and sustainable beauty products.\";}i:2;a:2:{s:8:\"question\";s:75:\"Which countries offer the best opportunities in Africa’s cosmetic market?\";s:6:\"answer\";s:227:\"Nigeria, South Africa, Kenya, and Egypt lead with their large consumer bases, growing e-commerce sectors, and supportive business environments. Emerging markets like Ghana and Côte d’Ivoire also show strong growth potential.\";}}'),
(676, 92, 'title_color_code', '#FF0000'),
(677, 92, '_title_color_code', 'field_686e44e51e5c3'),
(678, 92, 'tags_color_code', '#FF0000'),
(679, 92, '_tags_color_code', 'field_686e453a1e5c4'),
(680, 92, 'tags_background_color_code', '#6cf542'),
(681, 92, '_tags_background_color_code', 'field_686e46561e5c5'),
(682, 109, 'category_faqs', 'a:2:{i:0;a:2:{s:8:\"question\";s:58:\"Are there opportunities for natural and organic cosmetics?\";s:6:\"answer\";s:207:\"Absolutely. Africa’s rich biodiversity provides ample raw materials for natural and organic cosmetics. The growing preference for sustainable products creates a lucrative niche for eco-conscious investors.\";}i:1;a:2:{s:8:\"question\";s:59:\"How does e-commerce enhance the cosmetics market in Africa?\";s:6:\"answer\";s:206:\"E-commerce platforms are transforming the market, enabling businesses to reach untapped areas cost-effectively. The rise of mobile penetration and online shopping makes digital channels a key growth driver.\";}}'),
(683, 150, '_edit_lock', '1752151163:1'),
(684, 150, '_edit_last', '1'),
(688, 152, '_edit_lock', '1752126419:1'),
(692, 153, '_wp_attached_file', '2025/07/Peek-Cloppenburg.png'),
(693, 153, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:455;s:6:\"height\";i:65;s:4:\"file\";s:28:\"2025/07/Peek-Cloppenburg.png\";s:8:\"filesize\";i:14110;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:27:\"Peek-Cloppenburg-300x43.png\";s:5:\"width\";i:300;s:6:\"height\";i:43;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:8053;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:27:\"Peek-Cloppenburg-400x65.png\";s:5:\"width\";i:400;s:6:\"height\";i:65;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:11649;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(694, 153, '_wp_attachment_image_alt', 'Peek & Cloppenburg'),
(695, 150, '_thumbnail_id', '153'),
(696, 154, '_edit_lock', '1752151155:1'),
(697, 155, '_wp_attached_file', '2025/07/celio.png'),
(698, 155, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:273;s:6:\"height\";i:75;s:4:\"file\";s:17:\"2025/07/celio.png\";s:8:\"filesize\";i:13473;s:5:\"sizes\";a:0:{}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(699, 154, '_edit_last', '1'),
(700, 154, '_thumbnail_id', '155'),
(701, 157, '_wp_attached_file', '2025/07/El-Corte-Ingles.png'),
(702, 157, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:364;s:6:\"height\";i:95;s:4:\"file\";s:27:\"2025/07/El-Corte-Ingles.png\";s:8:\"filesize\";i:17787;s:5:\"sizes\";a:1:{s:6:\"medium\";a:5:{s:4:\"file\";s:26:\"El-Corte-Ingles-300x78.png\";s:5:\"width\";i:300;s:6:\"height\";i:78;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:17054;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(703, 156, '_edit_lock', '1752151149:1'),
(704, 157, '_wp_attachment_image_alt', 'El Corte Inglés'),
(705, 156, '_edit_last', '1'),
(706, 156, '_thumbnail_id', '157'),
(707, 159, '_wp_attached_file', '2025/07/Gemo.png'),
(708, 159, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:315;s:6:\"height\";i:99;s:4:\"file\";s:16:\"2025/07/Gemo.png\";s:8:\"filesize\";i:20151;s:5:\"sizes\";a:1:{s:6:\"medium\";a:5:{s:4:\"file\";s:15:\"Gemo-300x94.png\";s:5:\"width\";i:300;s:6:\"height\";i:94;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:20598;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(709, 158, '_edit_lock', '1752151142:1'),
(710, 159, '_wp_attachment_image_alt', 'Gemo'),
(711, 158, '_edit_last', '1'),
(712, 158, '_thumbnail_id', '159'),
(713, 161, '_wp_attached_file', '2025/07/kiabi.png'),
(714, 161, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:319;s:6:\"height\";i:107;s:4:\"file\";s:17:\"2025/07/kiabi.png\";s:8:\"filesize\";i:26146;s:5:\"sizes\";a:1:{s:6:\"medium\";a:5:{s:4:\"file\";s:17:\"kiabi-300x101.png\";s:5:\"width\";i:300;s:6:\"height\";i:101;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:26814;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(715, 160, '_edit_lock', '1752151131:1'),
(716, 161, '_wp_attachment_image_alt', 'kiabi'),
(717, 160, '_edit_last', '1'),
(718, 160, '_thumbnail_id', '161'),
(719, 162, '_edit_lock', '1752151122:1'),
(720, 163, '_wp_attached_file', '2025/07/Mango.png'),
(721, 163, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:437;s:6:\"height\";i:72;s:4:\"file\";s:17:\"2025/07/Mango.png\";s:8:\"filesize\";i:8725;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:16:\"Mango-300x49.png\";s:5:\"width\";i:300;s:6:\"height\";i:49;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:5455;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:16:\"Mango-400x72.png\";s:5:\"width\";i:400;s:6:\"height\";i:72;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:6857;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(722, 163, '_wp_attachment_image_alt', 'Mango'),
(723, 162, '_edit_last', '1'),
(724, 162, '_thumbnail_id', '163'),
(727, 164, '_edit_lock', '1752127585:1'),
(728, 166, '_wp_attached_file', '2025/07/place.png');
INSERT INTO `wp_postmeta` (`meta_id`, `post_id`, `meta_key`, `meta_value`) VALUES
(729, 166, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:276;s:6:\"height\";i:99;s:4:\"file\";s:17:\"2025/07/place.png\";s:8:\"filesize\";i:18916;s:5:\"sizes\";a:0:{}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(730, 168, '_wp_attached_file', '2025/07/place-1.png'),
(731, 168, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:276;s:6:\"height\";i:99;s:4:\"file\";s:19:\"2025/07/place-1.png\";s:8:\"filesize\";i:18916;s:5:\"sizes\";a:0:{}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(732, 167, '_edit_lock', '1752151112:1'),
(733, 168, '_wp_attachment_image_alt', 'Place'),
(734, 167, '_edit_last', '1'),
(735, 167, '_thumbnail_id', '168'),
(736, 170, '_wp_attached_file', '2025/07/us-polo-assn.png'),
(737, 170, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:404;s:6:\"height\";i:118;s:4:\"file\";s:24:\"2025/07/us-polo-assn.png\";s:8:\"filesize\";i:41287;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:23:\"us-polo-assn-300x88.png\";s:5:\"width\";i:300;s:6:\"height\";i:88;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:27638;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:24:\"us-polo-assn-400x118.png\";s:5:\"width\";i:400;s:6:\"height\";i:118;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:46090;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(738, 169, '_edit_lock', '1752151104:1'),
(739, 170, '_wp_attachment_image_alt', 'US Polo Assn'),
(740, 169, '_edit_last', '1'),
(741, 169, '_thumbnail_id', '170'),
(742, 172, '_wp_attached_file', '2025/07/Walmart.png'),
(743, 172, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:414;s:6:\"height\";i:117;s:4:\"file\";s:19:\"2025/07/Walmart.png\";s:8:\"filesize\";i:53532;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:18:\"Walmart-300x85.png\";s:5:\"width\";i:300;s:6:\"height\";i:85;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:33687;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:19:\"Walmart-400x117.png\";s:5:\"width\";i:400;s:6:\"height\";i:117;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:51967;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(744, 171, '_edit_lock', '1752151097:1'),
(745, 172, '_wp_attachment_image_alt', 'Walmart'),
(746, 171, '_edit_last', '1'),
(747, 171, '_thumbnail_id', '172'),
(748, 174, '_wp_attached_file', '2025/07/zara.png'),
(749, 174, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:242;s:6:\"height\";i:103;s:4:\"file\";s:16:\"2025/07/zara.png\";s:8:\"filesize\";i:8482;s:5:\"sizes\";a:1:{s:27:\"meta-slider-resized-240x103\";a:5:{s:4:\"file\";s:16:\"zara-240x103.png\";s:5:\"width\";i:240;s:6:\"height\";i:103;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:7516;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(750, 173, '_edit_lock', '1752152142:1'),
(751, 174, '_wp_attachment_image_alt', 'zara'),
(752, 173, '_edit_last', '1'),
(753, 173, '_thumbnail_id', '174'),
(754, 175, '_edit_lock', '1752128461:1'),
(755, 176, '_edit_lock', '1752128987:1'),
(759, 180, '_edit_lock', '1752129662:1'),
(760, 181, '_edit_lock', '1752129522:1'),
(761, 182, '_edit_lock', '1752129526:1'),
(762, 183, '_edit_lock', '1752129528:1'),
(763, 184, '_edit_lock', '1752129692:1'),
(764, 185, '_edit_lock', '1752129550:1'),
(765, 186, '_edit_lock', '1752129552:1'),
(766, 187, '_edit_lock', '1752129582:1'),
(767, 188, '_edit_lock', '1752129584:1'),
(777, 189, '_edit_lock', '1752151592:1'),
(778, 190, '_edit_lock', '1752151699:1'),
(779, 191, '_edit_lock', '1752151708:1'),
(780, 192, '_edit_lock', '1752131683:1'),
(781, 193, '_edit_lock', '1752131700:1'),
(782, 194, '_edit_lock', '1752131731:1'),
(783, 195, '_edit_lock', '1752131593:1'),
(784, 196, '_edit_lock', '1752131748:1'),
(785, 197, '_edit_lock', '1752131641:1'),
(786, 197, '_edit_last', '1'),
(787, 197, '_customiz_category_id', '189'),
(788, 198, '_edit_lock', '1752131907:1'),
(789, 198, '_edit_last', '1'),
(790, 198, '_customiz_category_id', '189'),
(791, 199, '_edit_lock', '1752131975:1'),
(792, 199, '_edit_last', '1'),
(793, 199, '_customiz_category_id', '189'),
(794, 200, '_edit_lock', '1752131986:1'),
(795, 200, '_edit_last', '1'),
(796, 200, '_customiz_category_id', '189'),
(797, 201, '_edit_lock', '1752132002:1'),
(798, 201, '_edit_last', '1'),
(799, 201, '_customiz_category_id', '189'),
(800, 202, '_edit_lock', '1752132053:1'),
(801, 202, '_edit_last', '1'),
(802, 202, '_customiz_category_id', '190'),
(803, 203, '_edit_lock', '1752132081:1'),
(804, 203, '_edit_last', '1'),
(805, 203, '_customiz_category_id', '190'),
(806, 204, '_edit_lock', '1752132099:1'),
(807, 204, '_edit_last', '1'),
(808, 204, '_customiz_category_id', '190'),
(809, 205, '_edit_lock', '1752135005:1'),
(810, 205, '_edit_last', '1'),
(811, 205, '_customiz_category_id', '191'),
(812, 206, '_edit_lock', '1752135026:1'),
(813, 206, '_edit_last', '1'),
(814, 206, '_customiz_category_id', '191'),
(815, 207, '_edit_lock', '1752135108:1'),
(816, 207, '_edit_last', '1'),
(817, 207, '_customiz_category_id', '191'),
(818, 208, '_edit_lock', '1752135118:1'),
(819, 208, '_edit_last', '1'),
(820, 208, '_customiz_category_id', '191'),
(821, 209, '_edit_lock', '1752151421:1'),
(822, 209, '_edit_last', '1'),
(823, 209, '_customiz_category_id', '191'),
(824, 210, '_edit_lock', '1752135205:1'),
(825, 84, '_wp_trash_meta_status', 'publish'),
(826, 84, '_wp_trash_meta_time', '1752135284'),
(827, 84, '_wp_desired_post_slug', 'group_686e16057a41e'),
(828, 85, '_wp_trash_meta_status', 'publish'),
(829, 85, '_wp_trash_meta_time', '1752135284'),
(830, 85, '_wp_desired_post_slug', 'field_686e160511db5'),
(831, 96, '_category_id', '87'),
(832, 211, '_edit_lock', '1752135469:1'),
(833, 212, '_edit_lock', '1752135471:1'),
(834, 213, '_edit_lock', '1752135477:1'),
(835, 214, '_edit_lock', '1752218786:1'),
(836, 214, '_edit_last', '1'),
(837, 214, '_category_id', '87'),
(838, 215, '_edit_lock', '1752212638:1'),
(839, 215, '_edit_last', '1'),
(840, 215, '_category_id', '88'),
(841, 216, '_edit_lock', '1752136428:1'),
(847, 215, '_spotlight_image', 'http://localhost/btc/wp-content/uploads/2025/07/shutterstock_766749757-1440x780-1.jpg'),
(848, 215, '_thumbnail_id', '75'),
(851, 218, '_spotlight_image', ''),
(852, 218, '_edit_lock', '1752141619:1'),
(853, 215, '_is_spotlight', 'yes'),
(854, 219, '_spotlight_image', ''),
(855, 219, '_edit_lock', '1752142546:1'),
(856, 79, '_oembed_8a32933cfe74dddd6548ba04de1578d3', '{{unknown}}'),
(857, 219, '_thumbnail_id', '79'),
(858, 220, '_spotlight_image', ''),
(859, 220, '_edit_lock', '1752142607:1'),
(860, 221, '_spotlight_image', ''),
(861, 221, '_edit_lock', '1752142712:1'),
(862, 222, '_spotlight_image', ''),
(863, 222, '_edit_lock', '1752142763:1'),
(864, 223, '_spotlight_image', ''),
(865, 223, '_edit_lock', '1752151414:1'),
(866, 224, '_spotlight_image', ''),
(867, 224, '_edit_lock', '1752209619:1'),
(868, 111, '_spotlight_image', ''),
(869, 225, '_spotlight_image', ''),
(870, 225, '_edit_lock', '1752145471:1'),
(871, 225, '_edit_last', '1'),
(872, 226, '_spotlight_image', ''),
(873, 227, '_spotlight_image', ''),
(875, 229, '_spotlight_image', ''),
(876, 230, '_spotlight_image', ''),
(877, 230, 'metaslider_slideshow_theme', 'a:6:{s:6:\"folder\";s:12:\"default-base\";s:5:\"title\";s:4:\"Base\";s:4:\"type\";s:4:\"free\";s:8:\"supports\";a:1:{i:0;s:4:\"flex\";}s:4:\"tags\";a:0:{}s:11:\"description\";s:37:\"This is the default MetaSlider theme.\";}'),
(878, 230, 'ml-slider_settings', 'a:70:{s:5:\"title\";s:13:\"New Slideshow\";s:4:\"type\";s:4:\"flex\";s:6:\"random\";s:5:\"false\";s:8:\"cssClass\";s:0:\"\";s:8:\"printCss\";s:4:\"true\";s:7:\"printJs\";s:4:\"true\";s:5:\"width\";s:3:\"700\";s:6:\"height\";s:3:\"300\";s:3:\"spw\";i:7;s:3:\"sph\";i:5;s:5:\"delay\";s:4:\"3000\";s:6:\"sDelay\";i:30;s:7:\"opacity\";d:0.7;s:10:\"titleSpeed\";i:500;s:6:\"effect\";s:5:\"slide\";s:12:\"extra_effect\";s:4:\"none\";s:10:\"navigation\";s:4:\"true\";s:15:\"filmstrip_delay\";i:7000;s:24:\"filmstrip_animationSpeed\";i:600;s:5:\"links\";s:4:\"true\";s:10:\"hoverPause\";s:4:\"true\";s:5:\"theme\";s:4:\"none\";s:9:\"direction\";s:10:\"horizontal\";s:7:\"reverse\";s:5:\"false\";s:8:\"keyboard\";s:4:\"true\";s:5:\"touch\";s:4:\"true\";s:14:\"animationSpeed\";s:3:\"600\";s:8:\"prevText\";s:8:\"Previous\";s:8:\"nextText\";s:4:\"Next\";s:6:\"slices\";i:15;s:6:\"center\";s:5:\"false\";s:9:\"smartCrop\";s:4:\"true\";s:12:\"cropMultiply\";s:4:\"true\";s:12:\"smoothHeight\";s:5:\"false\";s:12:\"carouselMode\";s:5:\"false\";s:12:\"infiniteLoop\";s:5:\"false\";s:14:\"carouselMargin\";s:1:\"5\";s:8:\"minItems\";s:1:\"1\";s:11:\"forceHeight\";s:5:\"false\";s:16:\"firstSlideFadeIn\";s:5:\"false\";s:6:\"easing\";s:6:\"linear\";s:8:\"autoPlay\";s:4:\"true\";s:4:\"loop\";s:12:\"continuously\";s:11:\"thumb_width\";i:150;s:12:\"thumb_height\";i:100;s:17:\"responsive_thumbs\";s:5:\"false\";s:15:\"thumb_min_width\";i:100;s:9:\"fullWidth\";s:4:\"true\";s:10:\"noConflict\";s:4:\"true\";s:23:\"mobileArrows_smartphone\";s:5:\"false\";s:19:\"mobileArrows_tablet\";s:5:\"false\";s:19:\"mobileArrows_laptop\";s:5:\"false\";s:20:\"mobileArrows_desktop\";s:5:\"false\";s:27:\"mobileNavigation_smartphone\";s:5:\"false\";s:23:\"mobileNavigation_tablet\";s:5:\"false\";s:23:\"mobileNavigation_laptop\";s:5:\"false\";s:24:\"mobileNavigation_desktop\";s:5:\"false\";s:26:\"mobileSlideshow_smartphone\";s:5:\"false\";s:22:\"mobileSlideshow_tablet\";s:5:\"false\";s:22:\"mobileSlideshow_laptop\";s:5:\"false\";s:23:\"mobileSlideshow_desktop\";s:5:\"false\";s:8:\"ariaLive\";s:5:\"false\";s:11:\"ariaCurrent\";s:5:\"false\";s:8:\"tabIndex\";s:5:\"false\";s:9:\"pausePlay\";s:5:\"false\";s:11:\"progressBar\";s:5:\"false\";s:8:\"playText\";s:0:\"\";s:9:\"pauseText\";s:0:\"\";s:15:\"theme_customize\";a:16:{s:12:\"arrows_color\";s:7:\"#333333\";s:18:\"arrows_color_hover\";s:7:\"#333333\";s:11:\"arrows_icon\";s:7:\"#ffffff\";s:17:\"arrows_icon_hover\";s:7:\"#ffffff\";s:16:\"navigation_color\";s:15:\"rgba(0,0,0,0.5)\";s:22:\"navigation_color_hover\";s:15:\"rgba(0,0,0,0.7)\";s:23:\"navigation_color_active\";s:15:\"rgba(0,0,0,0.9)\";s:18:\"caption_background\";s:7:\"#000000\";s:18:\"caption_text_color\";s:7:\"#ffffff\";s:19:\"caption_links_color\";s:7:\"#ffffff\";s:11:\"play_button\";s:7:\"#000000\";s:17:\"play_button_hover\";s:7:\"#000000\";s:16:\"play_button_icon\";s:7:\"#ffffff\";s:22:\"play_button_icon_hover\";s:7:\"#ffffff\";s:20:\"slideshow_background\";s:4:\"#fff\";s:28:\"slideshow_progress_bar_color\";s:4:\"#fff\";}s:12:\"showPlayText\";s:5:\"false\";}'),
(879, 231, '_wp_attached_file', '2025/07/celio-1.png'),
(880, 231, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:273;s:6:\"height\";i:75;s:4:\"file\";s:19:\"2025/07/celio-1.png\";s:8:\"filesize\";i:13473;s:5:\"sizes\";a:1:{s:26:\"meta-slider-resized-175x75\";a:5:{s:4:\"file\";s:18:\"celio-1-175x75.png\";s:5:\"width\";i:175;s:6:\"height\";i:75;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:8463;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(881, 232, '_spotlight_image', ''),
(882, 232, '_thumbnail_id', '231'),
(883, 232, 'ml-slider_type', 'image'),
(884, 232, 'ml-slider_inherit_image_title', '1'),
(885, 232, 'ml-slider_inherit_image_alt', '1'),
(886, 232, 'ml-slider_crop_position', 'center-center'),
(887, 232, 'ml-slider_caption_source', 'override'),
(888, 232, '_wp_attachment_image_alt', ''),
(889, 231, '_wp_attachment_backup_sizes', 'a:1:{s:14:\"resized-175x75\";a:6:{s:4:\"path\";s:62:\"C:xampphtdocsbtc/wp-content/uploads/2025/07/celio-1-175x75.png\";s:4:\"file\";s:18:\"celio-1-175x75.png\";s:5:\"width\";i:175;s:6:\"height\";i:75;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:8463;}}'),
(890, 233, '_spotlight_image', ''),
(891, 233, '_thumbnail_id', '174'),
(892, 233, 'ml-slider_type', 'image'),
(893, 233, 'ml-slider_inherit_image_title', '1'),
(894, 233, 'ml-slider_inherit_image_alt', '1'),
(895, 233, 'ml-slider_crop_position', 'center-center'),
(896, 233, 'ml-slider_caption_source', 'override'),
(897, 233, '_wp_attachment_image_alt', ''),
(898, 174, '_wp_attachment_backup_sizes', 'a:1:{s:15:\"resized-240x103\";a:6:{s:4:\"path\";s:60:\"C:xampphtdocsbtc/wp-content/uploads/2025/07/zara-240x103.png\";s:4:\"file\";s:16:\"zara-240x103.png\";s:5:\"width\";i:240;s:6:\"height\";i:103;s:9:\"mime-type\";s:9:\"image/png\";s:8:\"filesize\";i:7516;}}'),
(899, 234, '_spotlight_image', ''),
(900, 234, '_edit_lock', '1752146177:1'),
(902, 111, 'event_location', ''),
(903, 111, '_event_location', 'field_686f9d731b8df'),
(904, 111, 'event_data', '20250712'),
(905, 111, '_event_data', 'field_686f9da31b8e0'),
(906, 111, 'map_embed_code', ''),
(907, 111, '_map_embed_code', 'field_686f9e6ffe130'),
(908, 235, '_spotlight_image', ''),
(909, 235, '_edit_lock', '1752147013:1'),
(910, 236, '_spotlight_image', ''),
(911, 236, '_edit_lock', '1752147016:1'),
(912, 111, '_event_gallery', 'a:2:{i:0;s:85:\"http://localhost/btc/wp-content/uploads/2025/07/shutterstock_766749757-1440x780-1.jpg\";i:1;s:72:\"http://localhost/btc/wp-content/uploads/2025/07/DSC08735_-1440x780-1.jpg\";}'),
(913, 87, '_spotlight_image', ''),
(914, 87, '_thumbnail_id', '75'),
(915, 87, '_edit_last', '1'),
(916, 87, 'title_color_code', '#FF0000'),
(917, 87, '_title_color_code', 'field_686e44e51e5c3'),
(918, 87, 'tags_color_code', '#FFFFFF'),
(919, 87, '_tags_color_code', 'field_686e453a1e5c4'),
(920, 87, 'tags_background_color_code', '#6cf542'),
(921, 87, '_tags_background_color_code', 'field_686e46561e5c5'),
(922, 87, 'meta_image', ''),
(923, 87, '_meta_image', 'field_686cfa01f9a00'),
(924, 87, 'meta_title', ''),
(925, 87, '_meta_title', 'field_686d0105ba4e7'),
(926, 87, 'meta_description', ''),
(927, 87, '_meta_description', 'field_686d01c8ead69'),
(928, 224, '_thumbnail_id', '76'),
(929, 173, '_spotlight_image', ''),
(930, 173, '_sort_order', '1'),
(931, 237, '_spotlight_image', ''),
(932, 171, '_sort_order', '2'),
(933, 171, '_spotlight_image', ''),
(934, 87, '_sort_order', '1'),
(935, 91, '_spotlight_image', ''),
(936, 91, '_edit_last', '1'),
(937, 91, '_sort_order', '2'),
(938, 91, 'title_color_code', '#000000'),
(939, 91, '_title_color_code', 'field_686e44e51e5c3'),
(940, 91, 'tags_color_code', '#000000'),
(941, 91, '_tags_color_code', 'field_686e453a1e5c4'),
(942, 91, 'tags_background_color_code', '#000000'),
(943, 91, '_tags_background_color_code', 'field_686e46561e5c5'),
(944, 91, 'meta_image', ''),
(945, 91, '_meta_image', 'field_686cfa01f9a00'),
(946, 91, 'meta_title', ''),
(947, 91, '_meta_title', 'field_686d0105ba4e7'),
(948, 91, 'meta_description', ''),
(949, 91, '_meta_description', 'field_686d01c8ead69'),
(950, 90, '_spotlight_image', ''),
(951, 90, '_edit_last', '1'),
(952, 90, '_sort_order', '3'),
(953, 90, 'title_color_code', '#000000'),
(954, 90, '_title_color_code', 'field_686e44e51e5c3'),
(955, 90, 'tags_color_code', '#000000'),
(956, 90, '_tags_color_code', 'field_686e453a1e5c4'),
(957, 90, 'tags_background_color_code', '#6cf542'),
(958, 90, '_tags_background_color_code', 'field_686e46561e5c5'),
(959, 90, 'meta_image', ''),
(960, 90, '_meta_image', 'field_686cfa01f9a00'),
(961, 90, 'meta_title', ''),
(962, 90, '_meta_title', 'field_686d0105ba4e7'),
(963, 90, 'meta_description', ''),
(964, 90, '_meta_description', 'field_686d01c8ead69'),
(965, 209, '_spotlight_image', ''),
(966, 209, '_sort_order', '1'),
(967, 223, '_edit_last', '1'),
(968, 223, '_sort_order', '1'),
(969, 169, '_sort_order', '3'),
(970, 169, '_spotlight_image', ''),
(971, 167, '_sort_order', '4'),
(972, 167, '_spotlight_image', ''),
(973, 162, '_sort_order', '5'),
(974, 162, '_spotlight_image', ''),
(975, 160, '_sort_order', '6'),
(976, 160, '_spotlight_image', ''),
(977, 158, '_sort_order', '7'),
(978, 158, '_spotlight_image', ''),
(979, 156, '_sort_order', '8'),
(980, 156, '_spotlight_image', ''),
(981, 154, '_sort_order', '9'),
(982, 154, '_spotlight_image', ''),
(983, 150, '_sort_order', '10'),
(984, 150, '_spotlight_image', ''),
(985, 92, '_spotlight_image', ''),
(986, 92, '_sort_order', '1'),
(987, 189, '_spotlight_image', ''),
(988, 189, '_edit_last', '1'),
(989, 189, '_sort_order', '1'),
(990, 190, '_spotlight_image', ''),
(991, 190, '_edit_last', '1'),
(992, 190, '_sort_order', '2'),
(993, 191, '_spotlight_image', ''),
(994, 191, '_edit_last', '1'),
(995, 191, '_sort_order', '3'),
(996, 238, '_spotlight_image', ''),
(997, 238, '_edit_lock', '1752152197:1'),
(998, 239, '_spotlight_image', ''),
(999, 239, '_edit_lock', '1752152631:1'),
(1000, 224, '_edit_last', '1'),
(1001, 224, '_sort_order', '1'),
(1002, 240, '_spotlight_image', ''),
(1003, 240, '_edit_lock', '1752209799:1'),
(1004, 240, '_thumbnail_id', '75'),
(1005, 240, '_edit_last', '1'),
(1006, 240, '_sort_order', '2'),
(1007, 97, '_spotlight_image', ''),
(1008, 97, '_thumbnail_id', '242'),
(1009, 241, 'footnotes', ''),
(1010, 241, 'meta_image', ''),
(1011, 241, '_meta_image', 'field_686cfa01f9a00'),
(1012, 241, 'meta_title', 'BTC Product List'),
(1013, 241, '_meta_title', 'field_686d0105ba4e7'),
(1014, 241, 'meta_description', ''),
(1015, 241, '_meta_description', 'field_686d01c8ead69'),
(1016, 242, '_wp_attached_file', '2025/07/pexels-nicole-avagliano-1132392-2749481-scaled.jpg'),
(1017, 242, '_wp_attachment_metadata', 'a:7:{s:5:\"width\";i:2560;s:6:\"height\";i:1707;s:4:\"file\";s:58:\"2025/07/pexels-nicole-avagliano-1132392-2749481-scaled.jpg\";s:8:\"filesize\";i:521582;s:5:\"sizes\";a:9:{s:6:\"medium\";a:5:{s:4:\"file\";s:51:\"pexels-nicole-avagliano-1132392-2749481-300x200.jpg\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:16215;}s:5:\"large\";a:5:{s:4:\"file\";s:52:\"pexels-nicole-avagliano-1132392-2749481-1024x683.jpg\";s:5:\"width\";i:1024;s:6:\"height\";i:683;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:123803;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:51:\"pexels-nicole-avagliano-1132392-2749481-400x400.jpg\";s:5:\"width\";i:400;s:6:\"height\";i:400;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:35956;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:51:\"pexels-nicole-avagliano-1132392-2749481-768x512.jpg\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:77631;}s:9:\"1536x1536\";a:5:{s:4:\"file\";s:53:\"pexels-nicole-avagliano-1132392-2749481-1536x1024.jpg\";s:5:\"width\";i:1536;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:236128;}s:9:\"2048x2048\";a:5:{s:4:\"file\";s:53:\"pexels-nicole-avagliano-1132392-2749481-2048x1365.jpg\";s:5:\"width\";i:2048;s:6:\"height\";i:1365;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:370826;}s:10:\"btc_medium\";a:5:{s:4:\"file\";s:51:\"pexels-nicole-avagliano-1132392-2749481-800x533.jpg\";s:5:\"width\";i:800;s:6:\"height\";i:533;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:83084;}s:9:\"btc_large\";a:5:{s:4:\"file\";s:52:\"pexels-nicole-avagliano-1132392-2749481-1200x800.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:800;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:160648;}s:9:\"metaimage\";a:5:{s:4:\"file\";s:52:\"pexels-nicole-avagliano-1132392-2749481-1200x630.jpg\";s:5:\"width\";i:1200;s:6:\"height\";i:630;s:9:\"mime-type\";s:10:\"image/jpeg\";s:8:\"filesize\";i:142268;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}s:14:\"original_image\";s:43:\"pexels-nicole-avagliano-1132392-2749481.jpg\";}'),
(1018, 243, '_spotlight_image', ''),
(1019, 243, '_edit_lock', '1752210618:1'),
(1020, 244, '_wp_attached_file', '2025/07/pexels-nicole-avagliano-1132392-2749481-scaled.webp'),
(1021, 244, '_wp_attachment_metadata', 'a:7:{s:5:\"width\";i:2560;s:6:\"height\";i:1707;s:4:\"file\";s:59:\"2025/07/pexels-nicole-avagliano-1132392-2749481-scaled.webp\";s:8:\"filesize\";i:363802;s:5:\"sizes\";a:9:{s:6:\"medium\";a:5:{s:4:\"file\";s:52:\"pexels-nicole-avagliano-1132392-2749481-300x200.webp\";s:5:\"width\";i:300;s:6:\"height\";i:200;s:9:\"mime-type\";s:10:\"image/webp\";s:8:\"filesize\";i:15374;}s:5:\"large\";a:5:{s:4:\"file\";s:53:\"pexels-nicole-avagliano-1132392-2749481-1024x683.webp\";s:5:\"width\";i:1024;s:6:\"height\";i:683;s:9:\"mime-type\";s:10:\"image/webp\";s:8:\"filesize\";i:106674;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:52:\"pexels-nicole-avagliano-1132392-2749481-400x400.webp\";s:5:\"width\";i:400;s:6:\"height\";i:400;s:9:\"mime-type\";s:10:\"image/webp\";s:8:\"filesize\";i:32900;}s:12:\"medium_large\";a:5:{s:4:\"file\";s:52:\"pexels-nicole-avagliano-1132392-2749481-768x512.webp\";s:5:\"width\";i:768;s:6:\"height\";i:512;s:9:\"mime-type\";s:10:\"image/webp\";s:8:\"filesize\";i:69052;}s:9:\"1536x1536\";a:5:{s:4:\"file\";s:54:\"pexels-nicole-avagliano-1132392-2749481-1536x1024.webp\";s:5:\"width\";i:1536;s:6:\"height\";i:1024;s:9:\"mime-type\";s:10:\"image/webp\";s:8:\"filesize\";i:186200;}s:9:\"2048x2048\";a:5:{s:4:\"file\";s:54:\"pexels-nicole-avagliano-1132392-2749481-2048x1365.webp\";s:5:\"width\";i:2048;s:6:\"height\";i:1365;s:9:\"mime-type\";s:10:\"image/webp\";s:8:\"filesize\";i:272726;}s:10:\"btc_medium\";a:5:{s:4:\"file\";s:52:\"pexels-nicole-avagliano-1132392-2749481-800x533.webp\";s:5:\"width\";i:800;s:6:\"height\";i:533;s:9:\"mime-type\";s:10:\"image/webp\";s:8:\"filesize\";i:73294;}s:9:\"btc_large\";a:5:{s:4:\"file\";s:53:\"pexels-nicole-avagliano-1132392-2749481-1200x800.webp\";s:5:\"width\";i:1200;s:6:\"height\";i:800;s:9:\"mime-type\";s:10:\"image/webp\";s:8:\"filesize\";i:132576;}s:9:\"metaimage\";a:5:{s:4:\"file\";s:53:\"pexels-nicole-avagliano-1132392-2749481-1200x630.webp\";s:5:\"width\";i:1200;s:6:\"height\";i:630;s:9:\"mime-type\";s:10:\"image/webp\";s:8:\"filesize\";i:119884;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}s:14:\"original_image\";s:44:\"pexels-nicole-avagliano-1132392-2749481.webp\";}'),
(1025, 91, '_thumbnail_id', '244'),
(1026, 246, '_spotlight_image', ''),
(1027, 246, '_edit_lock', '1752212690:1'),
(1028, 246, '_edit_last', '1'),
(1029, 246, '_sort_order', '0'),
(1030, 246, '_category_id', '91'),
(1031, 247, '_wp_attached_file', '2025/07/shopping.webp'),
(1032, 247, '_wp_attachment_metadata', 'a:6:{s:5:\"width\";i:239;s:6:\"height\";i:450;s:4:\"file\";s:21:\"2025/07/shopping.webp\";s:8:\"filesize\";i:14242;s:5:\"sizes\";a:2:{s:6:\"medium\";a:5:{s:4:\"file\";s:21:\"shopping-159x300.webp\";s:5:\"width\";i:159;s:6:\"height\";i:300;s:9:\"mime-type\";s:10:\"image/webp\";s:8:\"filesize\";i:6994;}s:9:\"thumbnail\";a:5:{s:4:\"file\";s:21:\"shopping-239x400.webp\";s:5:\"width\";i:239;s:6:\"height\";i:400;s:9:\"mime-type\";s:10:\"image/webp\";s:8:\"filesize\";i:12912;}}s:10:\"image_meta\";a:12:{s:8:\"aperture\";s:1:\"0\";s:6:\"credit\";s:0:\"\";s:6:\"camera\";s:0:\"\";s:7:\"caption\";s:0:\"\";s:17:\"created_timestamp\";s:1:\"0\";s:9:\"copyright\";s:0:\"\";s:12:\"focal_length\";s:1:\"0\";s:3:\"iso\";s:1:\"0\";s:13:\"shutter_speed\";s:1:\"0\";s:5:\"title\";s:0:\"\";s:11:\"orientation\";s:1:\"0\";s:8:\"keywords\";a:0:{}}}'),
(1033, 92, '_thumbnail_id', '242'),
(1036, 248, 'footnotes', ''),
(1038, 248, 'meta_image', ''),
(1039, 248, '_meta_image', 'field_686cfa01f9a00'),
(1040, 248, 'meta_title', 'Crafted for Qualityand Sustainability'),
(1041, 248, '_meta_title', 'field_686d0105ba4e7'),
(1042, 248, 'meta_description', ''),
(1043, 248, '_meta_description', 'field_686d01c8ead69'),
(1044, 96, '_spotlight_image', 'http://localhost/btc/wp-content/uploads/2025/07/pexels-nicole-avagliano-1132392-2749481-scaled.jpg'),
(1045, 96, '_thumbnail_id', '76'),
(1046, 96, '_sort_order', '1'),
(1047, 122, '_spotlight_image', ''),
(1048, 249, '_spotlight_image', ''),
(1049, 92, 'sub_title', 'Designed to Perform. Built to Last.'),
(1050, 92, '_sub_title', 'field_6870ac98f309c'),
(1051, 123, '_spotlight_image', ''),
(1052, 124, '_spotlight_image', ''),
(1053, 125, '_spotlight_image', ''),
(1054, 214, '_spotlight_image', 'http://localhost/btc/wp-content/uploads/2025/07/shutterstock_766749757-1440x780-1.jpg'),
(1055, 214, '_sort_order', '2'),
(1060, 96, '_is_spotlight', 'yes'),
(1061, 214, '_is_spotlight', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `wp_posts`
--

CREATE TABLE `wp_posts` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `post_author` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `post_date` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_date_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content` longtext NOT NULL,
  `post_title` text NOT NULL,
  `post_excerpt` text NOT NULL,
  `post_status` varchar(20) NOT NULL DEFAULT 'publish',
  `comment_status` varchar(20) NOT NULL DEFAULT 'open',
  `ping_status` varchar(20) NOT NULL DEFAULT 'open',
  `post_password` varchar(255) NOT NULL DEFAULT '',
  `post_name` varchar(200) NOT NULL DEFAULT '',
  `to_ping` text NOT NULL,
  `pinged` text NOT NULL,
  `post_modified` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_modified_gmt` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `post_content_filtered` longtext NOT NULL,
  `post_parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `guid` varchar(255) NOT NULL DEFAULT '',
  `menu_order` int(11) NOT NULL DEFAULT 0,
  `post_type` varchar(20) NOT NULL DEFAULT 'post',
  `post_mime_type` varchar(100) NOT NULL DEFAULT '',
  `comment_count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_posts`
--

INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(1, 1, '2025-07-08 07:22:58', '2025-07-08 07:22:58', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->', 'Hello world!', '', 'trash', 'open', 'open', '', 'hello-world__trashed', '', '', '2025-07-08 07:31:19', '2025-07-08 07:31:19', '', 0, 'http://localhost/btc/?p=1', 0, 'post', '', 1),
(2, 1, '2025-07-08 07:22:58', '2025-07-08 07:22:58', '', 'Home', '', 'publish', 'closed', 'closed', '', 'home', '', '', '2025-07-09 10:11:27', '2025-07-09 10:11:27', '', 0, 'http://localhost/btc/?page_id=2', 0, 'page', '', 0),
(3, 1, '2025-07-08 07:22:58', '2025-07-08 07:22:58', '<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Who we are</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/btc.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Comments</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Media</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Cookies</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Embedded content from other websites</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Who we share your data with</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">How long we retain your data</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">What rights you have over your data</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Where your data is sent</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p>\n<!-- /wp:paragraph -->\n', 'Privacy Policy', '', 'trash', 'closed', 'open', '', 'privacy-policy__trashed', '', '', '2025-07-08 09:21:21', '2025-07-08 09:21:21', '', 0, 'http://localhost/btc/?page_id=3', 0, 'page', '', 0),
(4, 0, '2025-07-08 07:22:59', '2025-07-08 07:22:59', '<!-- wp:page-list /-->', 'Navigation', '', 'publish', 'closed', 'closed', '', 'navigation', '', '', '2025-07-08 07:22:59', '2025-07-08 07:22:59', '', 0, 'http://localhost/btc/2025/07/08/navigation/', 0, 'wp_navigation', '', 0),
(5, 1, '2025-07-08 07:23:21', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-08 07:23:21', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?p=5', 0, 'post', '', 0),
(6, 1, '2025-07-08 07:28:49', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-08 07:28:49', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?p=6', 0, 'post', '', 0),
(7, 1, '2025-07-08 07:28:49', '2025-07-08 07:28:49', '{\"version\": 3, \"isGlobalStylesUserThemeJSON\": true }', 'Custom Styles', '', 'publish', 'closed', 'closed', '', 'wp-global-styles-twentytwentyfive', '', '', '2025-07-08 07:28:49', '2025-07-08 07:28:49', '', 0, 'http://localhost/btc/2025/07/08/wp-global-styles-twentytwentyfive/', 0, 'wp_global_styles', '', 0),
(8, 1, '2025-07-08 07:30:40', '2025-07-08 07:30:40', '<!-- wp:paragraph -->\n<p>The Board of Directors of the African Development Bank has approved an investment of $100 million in the industrial platform developer and operator Arise Integrated Industrial Platforms Ltd (Arise IIP) to contribute to funding industrial parks and special economic zones across Africa as a part of our industrialization strategic priority and flagship Special Agro-Industrial Processing Zones (SAPZ).</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The industrial platforms developed and operated by Arise IIP are primarily dedicated to supporting the transformation of key agricultural and industrial value chains in African countries that are leading global suppliers of raw commodities but have limited local processing capabilities. The platforms will provide developed industrial land, shared infrastructure and utilities, good export connectivity and simplified administrative procedures to agro-industrial tenants, allowing them to relocate global supply chains and value addition within African countries, while contributing to the reduction of carbon footprint of trade flows.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Arise IIP seeks to replicate its successful industrial platform implementation experience in Gabon, Togo and Benin by establishing Special Economic Zones across other African countries with the aim of improving Africa’s export competitiveness and intra-Africa trade strategies.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><em>“There is economic and social value to be added to African-grown commodities like timber, cashew, cocoa and cotton when they are processed locally instead of being exported in raw form. Through programs like the African Development Bank’s Special Agro-Industrial Processing Zones and investments in Zones partner companies like Arise IIP, we enable transformative, private sector-led agro-industrialization that boosts local processing of commodities, creates jobs and grows rural economies,”</em>&nbsp;said<strong>&nbsp;</strong>Dr. Beth Dunford, the African Development Bank’s Vice President for Agriculture, Human and Social Development.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Based on Arise IIP’s existing portfolio in Gabon (Gabon Special Economic Zone – GSEZ), Benin (Glo Djigbe Industrial Zone – GDIZ) and Togo (Plateforme Industrielle d’Adetikope – PIA), it is estimated that over 400 companies have been on-boarded from 47 industry sectors, which has led to the creation of over 50,000 jobs. The dominant sectors include wood, glass, soya, cashew processing, cotton processing and textiles, ceramics, beverages, pharmaceuticals and meat processing. It is also estimated that over $7 billion has been mobilized by tenant companies within the existing zones.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><em>“This investment in ARISE IIP is a signal of the Bank’s commitment to scaling up industrialization in Africa in value chains where we are competitive. This is also a demonstration of the strategic partnership we have with African MFIs such as the Africa Finance Corporation (AFC) and the Fund for Export Development in Africa (FEDA), the Afreximbank’s equity impact investment arm, who are the principal equity investors in ARISE IIP. This is a good demonstration of our joint goals of making Africa’s capital work better for Africa’s development”</em>, said<strong>&nbsp;</strong>Solomon Quaynor, African Development Bank’s Vice President for Private Sector, Infrastructure and Industrialization.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Gagan Gupta, CEO of Arise IIP, remarked,&nbsp;<em>“The African Development Bank’s investment highlights their confidence in our model as a driver of Africa’s industrial growth. We are excited to strengthen our efforts in transforming local value chains, creating jobs, and supporting sustainable economic development across the continent. The dedication, vision, and hard work of the entire Arise team have been instrumental in building this partnership.”</em></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About ARISE IIP</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><a href=\"https://www.ariseiip.com/\">ARISE Integrated Industrial Platforms (ARISE IIP)&nbsp;</a>is a pan-African developer and operator of world-class industrial parks committed to making Africa thrive. Arise IIP identifies opportunities in commercial and industrial value chains across Africa, and conceives, finances, builds and operates the necessary infrastructure, playing a catalytic role in supporting countries to transition to an industrial economy. Arise IIP is driven by the pursuit of green growth, with an ambition to unlock the continent’s industrial potential while neutralizing carbon emissions and climate impact.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3 class=\"wp-block-heading\">Contact details</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Alexis Adélé</strong>, Communication and External Relations Department</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><a href=\"mailto:media@afdb.org\" target=\"_blank\" rel=\"noreferrer noopener\">media@afdb.org</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Audrey Mebaley</strong>, Global Head of communications – Arise IIP</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><a href=\"mailto:audrey.mebaley@arisenet.com\">audrey.mebaley@arisenet.com</a></p>\n<!-- /wp:paragraph -->', 'The African Development Bank approves an investment of US$100 million in Arise IIP', '', 'publish', 'open', 'open', '', 'the-african-development-bank-approves-an-investment-of-us100-million-in-arise-iip', '', '', '2025-07-09 06:11:43', '2025-07-09 06:11:43', '', 0, 'http://localhost/btc/?p=8', 0, 'post', '', 0),
(9, 1, '2025-07-08 07:30:40', '2025-07-08 07:30:40', '<!-- wp:paragraph -->\n<p>The Board of Directors of the African Development Bank has approved an investment of $100 million in the industrial platform developer and operator Arise Integrated Industrial Platforms Ltd (Arise IIP) to contribute to funding industrial parks and special economic zones across Africa as a part of our industrialization strategic priority and flagship Special Agro-Industrial Processing Zones (SAPZ).</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The industrial platforms developed and operated by Arise IIP are primarily dedicated to supporting the transformation of key agricultural and industrial value chains in African countries that are leading global suppliers of raw commodities but have limited local processing capabilities. The platforms will provide developed industrial land, shared infrastructure and utilities, good export connectivity and simplified administrative procedures to agro-industrial tenants, allowing them to relocate global supply chains and value addition within African countries, while contributing to the reduction of carbon footprint of trade flows.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Arise IIP seeks to replicate its successful industrial platform implementation experience in Gabon, Togo and Benin by establishing Special Economic Zones across other African countries with the aim of improving Africa’s export competitiveness and intra-Africa trade strategies.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><em>“There is economic and social value to be added to African-grown commodities like timber, cashew, cocoa and cotton when they are processed locally instead of being exported in raw form. Through programs like the African Development Bank’s Special Agro-Industrial Processing Zones and investments in Zones partner companies like Arise IIP, we enable transformative, private sector-led agro-industrialization that boosts local processing of commodities, creates jobs and grows rural economies,”</em>&nbsp;said<strong>&nbsp;</strong>Dr. Beth Dunford, the African Development Bank’s Vice President for Agriculture, Human and Social Development.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Based on Arise IIP’s existing portfolio in Gabon (Gabon Special Economic Zone – GSEZ), Benin (Glo Djigbe Industrial Zone – GDIZ) and Togo (Plateforme Industrielle d’Adetikope – PIA), it is estimated that over 400 companies have been on-boarded from 47 industry sectors, which has led to the creation of over 50,000 jobs. The dominant sectors include wood, glass, soya, cashew processing, cotton processing and textiles, ceramics, beverages, pharmaceuticals and meat processing. It is also estimated that over $7 billion has been mobilized by tenant companies within the existing zones.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><em>“This investment in ARISE IIP is a signal of the Bank’s commitment to scaling up industrialization in Africa in value chains where we are competitive. This is also a demonstration of the strategic partnership we have with African MFIs such as the Africa Finance Corporation (AFC) and the Fund for Export Development in Africa (FEDA), the Afreximbank’s equity impact investment arm, who are the principal equity investors in ARISE IIP. This is a good demonstration of our joint goals of making Africa’s capital work better for Africa’s development”</em>, said<strong>&nbsp;</strong>Solomon Quaynor, African Development Bank’s Vice President for Private Sector, Infrastructure and Industrialization.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Gagan Gupta, CEO of Arise IIP, remarked,&nbsp;<em>“The African Development Bank’s investment highlights their confidence in our model as a driver of Africa’s industrial growth. We are excited to strengthen our efforts in transforming local value chains, creating jobs, and supporting sustainable economic development across the continent. The dedication, vision, and hard work of the entire Arise team have been instrumental in building this partnership.”</em></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About ARISE IIP</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><a href=\"https://www.ariseiip.com/\">ARISE Integrated Industrial Platforms (ARISE IIP)&nbsp;</a>is a pan-African developer and operator of world-class industrial parks committed to making Africa thrive. Arise IIP identifies opportunities in commercial and industrial value chains across Africa, and conceives, finances, builds and operates the necessary infrastructure, playing a catalytic role in supporting countries to transition to an industrial economy. Arise IIP is driven by the pursuit of green growth, with an ambition to unlock the continent’s industrial potential while neutralizing carbon emissions and climate impact.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading {\"level\":3} -->\n<h3 class=\"wp-block-heading\">Contact details</h3>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Alexis Adélé</strong>, Communication and External Relations Department</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><a href=\"mailto:media@afdb.org\" target=\"_blank\" rel=\"noreferrer noopener\">media@afdb.org</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Audrey Mebaley</strong>, Global Head of communications – Arise IIP</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><a href=\"mailto:audrey.mebaley@arisenet.com\">audrey.mebaley@arisenet.com</a></p>\n<!-- /wp:paragraph -->', 'The African Development Bank approves an investment of US$100 million in Arise IIP', '', 'inherit', 'closed', 'closed', '', '8-revision-v1', '', '', '2025-07-08 07:30:40', '2025-07-08 07:30:40', '', 8, 'http://localhost/btc/?p=9', 0, 'revision', '', 0),
(10, 1, '2025-07-08 07:31:19', '2025-07-08 07:31:19', '<!-- wp:paragraph -->\n<p>Welcome to WordPress. This is your first post. Edit or delete it, then start writing!</p>\n<!-- /wp:paragraph -->', 'Hello world!', '', 'inherit', 'closed', 'closed', '', '1-revision-v1', '', '', '2025-07-08 07:31:19', '2025-07-08 07:31:19', '', 1, 'http://localhost/btc/?p=10', 0, 'revision', '', 0),
(11, 2, '2025-07-08 07:31:55', '2025-07-08 07:31:55', '<!-- wp:image {\"id\":14,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"http://localhost/btc/wp-content/uploads/2025/07/DSC08735_-1440x780-1.jpg\" alt=\"\" class=\"wp-image-14\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p><strong>Cairo, Egypt:&nbsp;</strong>In a significant move aimed at boosting industrial development across Africa, African Export-Import Bank (Afreximbank) signed a US$450 million global credit facility with ARISE IIP, the leading pan-African developer and operator of world-class industrial parks. This financing will support the development of industrial parks and Special Economic Zones (SEZ), while also providing crucial trade finance support to businesses operating within the ARISE IIP ecosystem.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The US$ 450 million, granted in the context of Afreximbank’s strategic objective of promoting, facilitating, and supporting Africa’s industrialisation ecosystems, is part of a proposed US$ 800-million facility to support ARISE IIP in developing Industrial Parks (IPs) and SEZs in countries such as Nigeria, Cote d’Ivoire, Chad, Kenya, Democratic Republic of Congo (DRC) and Malawi, among others.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group\"><!-- wp:embed {\"url\":\"https://www.youtube.com/watch?v=qzGxK6Uiu04\",\"type\":\"video\",\"providerNameSlug\":\"youtube\",\"responsive\":true,\"className\":\"wp-embed-aspect-16-9 wp-has-aspect-ratio\"} -->\n<figure class=\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio\"><div class=\"wp-block-embed__wrapper\">\nhttps://www.youtube.com/watch?v=qzGxK6Uiu04\n</div></figure>\n<!-- /wp:embed -->\n\n<!-- wp:embed {\"url\":\"https://www.youtube.com/shorts/SChbFSzIsdA\",\"type\":\"video\",\"providerNameSlug\":\"youtube\",\"responsive\":true,\"className\":\"wp-embed-aspect-16-9 wp-has-aspect-ratio\"} -->\n<figure class=\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio\"><div class=\"wp-block-embed__wrapper\">\nhttps://www.youtube.com/shorts/SChbFSzIsdA\n</div></figure>\n<!-- /wp:embed --></div>\n<!-- /wp:group -->\n\n<!-- wp:paragraph -->\n<p>and supporting Africa’s industrialisation ecosystems, is part of a proposed US$ 800-million facility to support ARISE IIP in developing Industrial Parks (IPs) and SEZs in countries such as Nigeria, Cote d’Ivoire, Chad, Kenya, Democratic Republic of Congo (DRC) and Malawi, among others.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":4345} -->\n<figure class=\"wp-block-image\"><img src=\"https://www.ariseiip.com/wp-content/uploads/2025/03/arise-afreximbank-logos-small.jpg\" alt=\"\" class=\"wp-image-4345\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Under the terms of the facility agreement, ARISE IIP will deploy US$ 300 million to finance working capital requirements for its operating Industrial Parks (GDIZ-Benin, PIA-Togo, LAHAM TCHAD-Chad, PEIA-Cote d’Ivoire and BSEZ-Rwanda) and for capital expenditures for the development of new industrial parks in DRC, Kenya, Chad, Nigeria and Cote d’Ivoire.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>ARISE IIP will deploy the remaining US$ 150 million to develop an industrial park in Lilongwe, Malawi, and as trade finance for the activities of its export trading company in Malawi under Afreximbank’s Export Agriculture for Food Security initiative.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Signing the agreement on behalf of ARISE IIP was Arvind Arora, the Chief Treasury Officer, while Kanayo Awani, Executive Vice President, Intra-African Trade and Export Development, signed on behalf of Afreximbank.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Kanayo Awani,</strong>&nbsp;Executive Vice President, Intra-African Trade and Export Development Bank said: “<em>The facility reflects Afreximbank’s ongoing commitment to mobilising financial and technical resources towards the promotion of industrialisation across Africa. This is our way of supporting value addition and structural transformation of African economies. We remain eager to collaborate with key stakeholders to build trusted partnerships and to industrialise African countries. Afreximbank strongly believes that IPs and SEZs are veritable tools that Africa can deploy to fast-track industrial infrastructure development and to promote intra-African trade and export development. With ARISE IIP as an established developer and operator of IPs and SEZs on the continent, we are confident that this facility will contribute to supporting the continental industrialisation agenda.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Arvind Arora</strong>, Chief Treasury Officer of ARISE IIP remarked: “<em>The US$450 million facility represents a major step forward in supporting Africa’s industrialisation efforts. This financing covers critical working capital and capital expenditure needs across various countries, addressing the diverse requirements for industrial development. Africa’s infrastructure investment gap, currently exceeding US$100 billion annually, significantly impacts the continent’s living conditions and its global competitiveness. At ARISE IIP, we are committed to working with strategic partners around the world to bridge this gap and accelerate industrialisation across the continent.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The development of the new IPs and SEZs, along with the expansion of activities in the existing IPs, is expected to result in the attraction of 230 tenants, bringing in an estimated investment of US$ 1.7 billion over the next five years, while total exports from the new IPs and SEZs, once in operation, would reach US$ 5 billion over the five-year period, with domestically-sourced goods and services reaching US$ 3.4 billion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In addition, the new investments in the IPs and SEZs are expected to contribute to the creation of 32,000 direct jobs and 138,000 in-direct jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Afreximbank has been working with ARISE IIP as a strategic partner, focusing on industrialisation initiatives across Africa. The collaboration has seen the Bank and Arise working together on various projects including a USD 5 Billion Africa Textile Renaissance Plan, which intends to create 500,000 MT of African cotton transformation capacity and 500,000 jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (FEDA), Afreximbank’s development impact investment arm, invested USD 300 million in the latest fundraising round, which concluded in October 2024. During this round, Arise IIP raised a total of USD 443 million.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About Afreximbank</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>African Export-Import Bank (Afreximbank) is a Pan-African multilateral financial institution mandated to finance and promote intra-and extra-African trade. For over 30 years, the Bank has been deploying innovative structures to deliver financing solutions that support the transformation of the structure of Africa’s trade, accelerating industrialization and intra-regional trade, thereby boosting economic expansion in Africa. A stalwart supporter of the African Continental Free Trade Agreement (AfCFTA), Afreximbank has launched a Pan-African Payment and Settlement System (PAPSS) that was adopted by the African Union (AU) as the payment and settlement platform to underpin the implementation of the AfCFTA. Working with the AfCFTA Secretariat and the AU, the Bank is setting up a US$10 billion Adjustment Fund to support countries effectively participating in the AfCFTA. At the end of December 2023, Afreximbank’s total assets and contingencies stood at over US$37.3 billion, and its shareholder funds amounted to US$6.1 billion. Afreximbank has investment grade ratings assigned by GCR (international scale) (A), Moody’s (Baa1), Japan Credit Rating Agency (JCR) (A-) and Fitch (BBB). Afreximbank has evolved into a group entity comprising the Bank, its impact fund subsidiary called the Fund for Export Development Africa (FEDA), and its insurance management subsidiary, AfrexInsure (together, “the Group”). The Bank is headquartered in Cairo, Egypt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.afreximbank.com/\" target=\"_blank\" rel=\"noreferrer noopener\">www.afreximbank.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About FEDA (Fund for Export Development in Africa)</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (“FEDA”) is the impact investment subsidiary of the African Export-Import Bank (“Afreximbank” or the “Bank”) set up to provide equity, quasi-equity, and debt capital to finance the multi-billion-dollar funding gap (particularly in equity) needed to transform the Trade sector in Africa. FEDA pursues a multi-sector investment strategy along the intra-African trade, value-added export development, and manufacturing value chain which includes financial services, technology, consumer and retail goods, manufacturing, transport &amp; logistics, agribusiness, as well as ancillary trade enabling infrastructure such as industrial parks.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.fedagroup.org/\" target=\"_blank\" rel=\"noreferrer noopener\">www.fedagroup.org</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About ARISE IIP</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>ARISE Integrated Industrial Platforms (ARISE IIP) is a pan-African developer and operator of world-class industrial parks committed to making Africa thrive. We identify opportunities in commercial and industrial value chains across Africa, and conceive, finance, build and operate the necessary infrastructure, playing a catalytic role in supporting countries to transition to an industrial economy. We are driven by the pursuit of green growth; our ambition is to unlock the continent’s industrial potential while neutralising our carbon emissions and climate impact. ARISE IIP currently operates in 11 countries, including Benin (GDIZ), Togo (PIA), Gabon (GSEZ), Cote d’Ivoire (PEIA), Nigeria (IPRFZ), Republic of Congo (PIC), Democratic Republic of Congo (CIP), Sierra Leone (SIZ), Malawi (MIP), Rwanda (BSEZ), and Chad.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"https://www.ariseiip.com/\">www.ariseiip.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Contact details</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Vincent Musumba</strong><br>Manager, Communications and Events (Media relations) – Afreximbank<br><a href=\"mailto:press@afreximbank.com\">press@afreximbank.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Audrey Mebaley</strong><br>Global Head of Communications – Arise IIP<br><a href=\"mailto:audrey.mebaley@arisenet.com\">audrey.mebaley@arisenet.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:code -->\n<pre class=\"wp-block-code\"><code></code></pre>\n<!-- /wp:code -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'ARISE IIP secures $450 million Afreximbank facility to develop Industrial Parks and Special Economic Zones', '', 'publish', 'open', 'open', '', 'arise-iip-secures-450-million-afreximbank-facility-to-develop-industrial-parks-and-special-economic-zones', '', '', '2025-07-09 06:11:25', '2025-07-09 06:11:25', '', 0, 'http://localhost/btc/?p=11', 0, 'post', '', 0),
(12, 1, '2025-07-08 07:31:55', '2025-07-08 07:31:55', '<!-- wp:paragraph -->\n<p><strong>Cairo, Egypt:&nbsp;</strong>In a significant move aimed at boosting industrial development across Africa, African Export-Import Bank (Afreximbank) signed a US$450 million global credit facility with ARISE IIP, the leading pan-African developer and operator of world-class industrial parks. This financing will support the development of industrial parks and Special Economic Zones (SEZ), while also providing crucial trade finance support to businesses operating within the ARISE IIP ecosystem.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The US$ 450 million, granted in the context of Afreximbank’s strategic objective of promoting, facilitating, and supporting Africa’s industrialisation ecosystems, is part of a proposed US$ 800-million facility to support ARISE IIP in developing Industrial Parks (IPs) and SEZs in countries such as Nigeria, Cote d’Ivoire, Chad, Kenya, Democratic Republic of Congo (DRC) and Malawi, among others.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":4345} -->\n<figure class=\"wp-block-image\"><img src=\"https://www.ariseiip.com/wp-content/uploads/2025/03/arise-afreximbank-logos-small.jpg\" alt=\"\" class=\"wp-image-4345\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Under the terms of the facility agreement, ARISE IIP will deploy US$ 300 million to finance working capital requirements for its operating Industrial Parks (GDIZ-Benin, PIA-Togo, LAHAM TCHAD-Chad, PEIA-Cote d’Ivoire and BSEZ-Rwanda) and for capital expenditures for the development of new industrial parks in DRC, Kenya, Chad, Nigeria and Cote d’Ivoire.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>ARISE IIP will deploy the remaining US$ 150 million to develop an industrial park in Lilongwe, Malawi, and as trade finance for the activities of its export trading company in Malawi under Afreximbank’s Export Agriculture for Food Security initiative.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Signing the agreement on behalf of ARISE IIP was Arvind Arora, the Chief Treasury Officer, while Kanayo Awani, Executive Vice President, Intra-African Trade and Export Development, signed on behalf of Afreximbank.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Kanayo Awani,</strong>&nbsp;Executive Vice President, Intra-African Trade and Export Development Bank said: “<em>The facility reflects Afreximbank’s ongoing commitment to mobilising financial and technical resources towards the promotion of industrialisation across Africa. This is our way of supporting value addition and structural transformation of African economies. We remain eager to collaborate with key stakeholders to build trusted partnerships and to industrialise African countries. Afreximbank strongly believes that IPs and SEZs are veritable tools that Africa can deploy to fast-track industrial infrastructure development and to promote intra-African trade and export development. With ARISE IIP as an established developer and operator of IPs and SEZs on the continent, we are confident that this facility will contribute to supporting the continental industrialisation agenda.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Arvind Arora</strong>, Chief Treasury Officer of ARISE IIP remarked: “<em>The US$450 million facility represents a major step forward in supporting Africa’s industrialisation efforts. This financing covers critical working capital and capital expenditure needs across various countries, addressing the diverse requirements for industrial development. Africa’s infrastructure investment gap, currently exceeding US$100 billion annually, significantly impacts the continent’s living conditions and its global competitiveness. At ARISE IIP, we are committed to working with strategic partners around the world to bridge this gap and accelerate industrialisation across the continent.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The development of the new IPs and SEZs, along with the expansion of activities in the existing IPs, is expected to result in the attraction of 230 tenants, bringing in an estimated investment of US$ 1.7 billion over the next five years, while total exports from the new IPs and SEZs, once in operation, would reach US$ 5 billion over the five-year period, with domestically-sourced goods and services reaching US$ 3.4 billion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In addition, the new investments in the IPs and SEZs are expected to contribute to the creation of 32,000 direct jobs and 138,000 in-direct jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Afreximbank has been working with ARISE IIP as a strategic partner, focusing on industrialisation initiatives across Africa. The collaboration has seen the Bank and Arise working together on various projects including a USD 5 Billion Africa Textile Renaissance Plan, which intends to create 500,000 MT of African cotton transformation capacity and 500,000 jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (FEDA), Afreximbank’s development impact investment arm, invested USD 300 million in the latest fundraising round, which concluded in October 2024. During this round, Arise IIP raised a total of USD 443 million.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About Afreximbank</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>African Export-Import Bank (Afreximbank) is a Pan-African multilateral financial institution mandated to finance and promote intra-and extra-African trade. For over 30 years, the Bank has been deploying innovative structures to deliver financing solutions that support the transformation of the structure of Africa’s trade, accelerating industrialization and intra-regional trade, thereby boosting economic expansion in Africa. A stalwart supporter of the African Continental Free Trade Agreement (AfCFTA), Afreximbank has launched a Pan-African Payment and Settlement System (PAPSS) that was adopted by the African Union (AU) as the payment and settlement platform to underpin the implementation of the AfCFTA. Working with the AfCFTA Secretariat and the AU, the Bank is setting up a US$10 billion Adjustment Fund to support countries effectively participating in the AfCFTA. At the end of December 2023, Afreximbank’s total assets and contingencies stood at over US$37.3 billion, and its shareholder funds amounted to US$6.1 billion. Afreximbank has investment grade ratings assigned by GCR (international scale) (A), Moody’s (Baa1), Japan Credit Rating Agency (JCR) (A-) and Fitch (BBB). Afreximbank has evolved into a group entity comprising the Bank, its impact fund subsidiary called the Fund for Export Development Africa (FEDA), and its insurance management subsidiary, AfrexInsure (together, “the Group”). The Bank is headquartered in Cairo, Egypt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.afreximbank.com/\" target=\"_blank\" rel=\"noreferrer noopener\">www.afreximbank.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About FEDA (Fund for Export Development in Africa)</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (“FEDA”) is the impact investment subsidiary of the African Export-Import Bank (“Afreximbank” or the “Bank”) set up to provide equity, quasi-equity, and debt capital to finance the multi-billion-dollar funding gap (particularly in equity) needed to transform the Trade sector in Africa. FEDA pursues a multi-sector investment strategy along the intra-African trade, value-added export development, and manufacturing value chain which includes financial services, technology, consumer and retail goods, manufacturing, transport &amp; logistics, agribusiness, as well as ancillary trade enabling infrastructure such as industrial parks.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.fedagroup.org/\" target=\"_blank\" rel=\"noreferrer noopener\">www.fedagroup.org</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About ARISE IIP</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>ARISE Integrated Industrial Platforms (ARISE IIP) is a pan-African developer and operator of world-class industrial parks committed to making Africa thrive. We identify opportunities in commercial and industrial value chains across Africa, and conceive, finance, build and operate the necessary infrastructure, playing a catalytic role in supporting countries to transition to an industrial economy. We are driven by the pursuit of green growth; our ambition is to unlock the continent’s industrial potential while neutralising our carbon emissions and climate impact. ARISE IIP currently operates in 11 countries, including Benin (GDIZ), Togo (PIA), Gabon (GSEZ), Cote d’Ivoire (PEIA), Nigeria (IPRFZ), Republic of Congo (PIC), Democratic Republic of Congo (CIP), Sierra Leone (SIZ), Malawi (MIP), Rwanda (BSEZ), and Chad.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"https://www.ariseiip.com/\">www.ariseiip.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Contact details</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Vincent Musumba</strong><br>Manager, Communications and Events (Media relations) – Afreximbank<br><a href=\"mailto:press@afreximbank.com\">press@afreximbank.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Audrey Mebaley</strong><br>Global Head of Communications – Arise IIP<br><a href=\"mailto:audrey.mebaley@arisenet.com\">audrey.mebaley@arisenet.com</a></p>\n<!-- /wp:paragraph -->', 'ARISE IIP secures $450 million Afreximbank facility to develop Industrial Parks and Special Economic Zones', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2025-07-08 07:31:55', '2025-07-08 07:31:55', '', 11, 'http://localhost/btc/?p=12', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(16, 1, '2025-07-08 07:41:38', '2025-07-08 07:41:38', '<!-- wp:paragraph -->\n<p><strong>Cairo, Egypt:&nbsp;</strong>In a significant move aimed at boosting industrial development across Africa, African Export-Import Bank (Afreximbank) signed a US$450 million global credit facility with ARISE IIP, the leading pan-African developer and operator of world-class industrial parks. This financing will support the development of industrial parks and Special Economic Zones (SEZ), while also providing crucial trade finance support to businesses operating within the ARISE IIP ecosystem.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The US$ 450 million, granted in the context of Afreximbank’s strategic objective of promoting, facilitating, and supporting Africa’s industrialisation ecosystems, is part of a proposed US$ 800-million facility to support ARISE IIP in developing Industrial Parks (IPs) and SEZs in countries such as Nigeria, Cote d’Ivoire, Chad, Kenya, Democratic Republic of Congo (DRC) and Malawi, among others.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":4345} -->\n<figure class=\"wp-block-image\"><img src=\"https://www.ariseiip.com/wp-content/uploads/2025/03/arise-afreximbank-logos-small.jpg\" alt=\"\" class=\"wp-image-4345\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Under the terms of the facility agreement, ARISE IIP will deploy US$ 300 million to finance working capital requirements for its operating Industrial Parks (GDIZ-Benin, PIA-Togo, LAHAM TCHAD-Chad, PEIA-Cote d’Ivoire and BSEZ-Rwanda) and for capital expenditures for the development of new industrial parks in DRC, Kenya, Chad, Nigeria and Cote d’Ivoire.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>ARISE IIP will deploy the remaining US$ 150 million to develop an industrial park in Lilongwe, Malawi, and as trade finance for the activities of its export trading company in Malawi under Afreximbank’s Export Agriculture for Food Security initiative.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Signing the agreement on behalf of ARISE IIP was Arvind Arora, the Chief Treasury Officer, while Kanayo Awani, Executive Vice President, Intra-African Trade and Export Development, signed on behalf of Afreximbank.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Kanayo Awani,</strong>&nbsp;Executive Vice President, Intra-African Trade and Export Development Bank said: “<em>The facility reflects Afreximbank’s ongoing commitment to mobilising financial and technical resources towards the promotion of industrialisation across Africa. This is our way of supporting value addition and structural transformation of African economies. We remain eager to collaborate with key stakeholders to build trusted partnerships and to industrialise African countries. Afreximbank strongly believes that IPs and SEZs are veritable tools that Africa can deploy to fast-track industrial infrastructure development and to promote intra-African trade and export development. With ARISE IIP as an established developer and operator of IPs and SEZs on the continent, we are confident that this facility will contribute to supporting the continental industrialisation agenda.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Arvind Arora</strong>, Chief Treasury Officer of ARISE IIP remarked: “<em>The US$450 million facility represents a major step forward in supporting Africa’s industrialisation efforts. This financing covers critical working capital and capital expenditure needs across various countries, addressing the diverse requirements for industrial development. Africa’s infrastructure investment gap, currently exceeding US$100 billion annually, significantly impacts the continent’s living conditions and its global competitiveness. At ARISE IIP, we are committed to working with strategic partners around the world to bridge this gap and accelerate industrialisation across the continent.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The development of the new IPs and SEZs, along with the expansion of activities in the existing IPs, is expected to result in the attraction of 230 tenants, bringing in an estimated investment of US$ 1.7 billion over the next five years, while total exports from the new IPs and SEZs, once in operation, would reach US$ 5 billion over the five-year period, with domestically-sourced goods and services reaching US$ 3.4 billion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In addition, the new investments in the IPs and SEZs are expected to contribute to the creation of 32,000 direct jobs and 138,000 in-direct jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Afreximbank has been working with ARISE IIP as a strategic partner, focusing on industrialisation initiatives across Africa. The collaboration has seen the Bank and Arise working together on various projects including a USD 5 Billion Africa Textile Renaissance Plan, which intends to create 500,000 MT of African cotton transformation capacity and 500,000 jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (FEDA), Afreximbank’s development impact investment arm, invested USD 300 million in the latest fundraising round, which concluded in October 2024. During this round, Arise IIP raised a total of USD 443 million.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About Afreximbank</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>African Export-Import Bank (Afreximbank) is a Pan-African multilateral financial institution mandated to finance and promote intra-and extra-African trade. For over 30 years, the Bank has been deploying innovative structures to deliver financing solutions that support the transformation of the structure of Africa’s trade, accelerating industrialization and intra-regional trade, thereby boosting economic expansion in Africa. A stalwart supporter of the African Continental Free Trade Agreement (AfCFTA), Afreximbank has launched a Pan-African Payment and Settlement System (PAPSS) that was adopted by the African Union (AU) as the payment and settlement platform to underpin the implementation of the AfCFTA. Working with the AfCFTA Secretariat and the AU, the Bank is setting up a US$10 billion Adjustment Fund to support countries effectively participating in the AfCFTA. At the end of December 2023, Afreximbank’s total assets and contingencies stood at over US$37.3 billion, and its shareholder funds amounted to US$6.1 billion. Afreximbank has investment grade ratings assigned by GCR (international scale) (A), Moody’s (Baa1), Japan Credit Rating Agency (JCR) (A-) and Fitch (BBB). Afreximbank has evolved into a group entity comprising the Bank, its impact fund subsidiary called the Fund for Export Development Africa (FEDA), and its insurance management subsidiary, AfrexInsure (together, “the Group”). The Bank is headquartered in Cairo, Egypt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.afreximbank.com/\" target=\"_blank\" rel=\"noreferrer noopener\">www.afreximbank.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About FEDA (Fund for Export Development in Africa)</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (“FEDA”) is the impact investment subsidiary of the African Export-Import Bank (“Afreximbank” or the “Bank”) set up to provide equity, quasi-equity, and debt capital to finance the multi-billion-dollar funding gap (particularly in equity) needed to transform the Trade sector in Africa. FEDA pursues a multi-sector investment strategy along the intra-African trade, value-added export development, and manufacturing value chain which includes financial services, technology, consumer and retail goods, manufacturing, transport &amp; logistics, agribusiness, as well as ancillary trade enabling infrastructure such as industrial parks.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.fedagroup.org/\" target=\"_blank\" rel=\"noreferrer noopener\">www.fedagroup.org</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About ARISE IIP</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>ARISE Integrated Industrial Platforms (ARISE IIP) is a pan-African developer and operator of world-class industrial parks committed to making Africa thrive. We identify opportunities in commercial and industrial value chains across Africa, and conceive, finance, build and operate the necessary infrastructure, playing a catalytic role in supporting countries to transition to an industrial economy. We are driven by the pursuit of green growth; our ambition is to unlock the continent’s industrial potential while neutralising our carbon emissions and climate impact. ARISE IIP currently operates in 11 countries, including Benin (GDIZ), Togo (PIA), Gabon (GSEZ), Cote d’Ivoire (PEIA), Nigeria (IPRFZ), Republic of Congo (PIC), Democratic Republic of Congo (CIP), Sierra Leone (SIZ), Malawi (MIP), Rwanda (BSEZ), and Chad.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"https://www.ariseiip.com/\">www.ariseiip.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Contact details</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Vincent Musumba</strong><br>Manager, Communications and Events (Media relations) – Afreximbank<br><a href=\"mailto:press@afreximbank.com\">press@afreximbank.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Audrey Mebaley</strong><br>Global Head of Communications – Arise IIP<br><a href=\"mailto:audrey.mebaley@arisenet.com\">audrey.mebaley@arisenet.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:code -->\n<pre class=\"wp-block-code\"><code></code></pre>\n<!-- /wp:code -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'ARISE IIP secures $450 million Afreximbank facility to develop Industrial Parks and Special Economic Zones', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2025-07-08 07:41:38', '2025-07-08 07:41:38', '', 11, 'http://localhost/btc/?p=16', 0, 'revision', '', 0),
(17, 1, '2025-07-08 07:42:05', '2025-07-08 07:42:05', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 07:42:05', '2025-07-08 07:42:05', '', 2, 'http://localhost/btc/?p=17', 0, 'revision', '', 0),
(18, 1, '2025-07-08 09:35:19', '2025-07-08 09:35:19', '<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Who we are</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/btc.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Comments</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Media</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Cookies</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Embedded content from other websites</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Who we share your data with</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">How long we retain your data</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">What rights you have over your data</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Where your data is sent</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p>\n<!-- /wp:paragraph -->\n', 'Privacy Policy', '', 'trash', 'closed', 'closed', '', 'privacy-policy__trashed-2', '', '', '2025-07-09 06:55:53', '2025-07-09 06:55:53', '', 0, 'http://localhost/btc/?page_id=18', 0, 'page', '', 0),
(19, 1, '2025-07-08 09:02:32', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-08 09:02:32', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=post&p=19', 0, 'post', '', 0),
(20, 1, '2025-07-08 09:02:59', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-08 09:02:59', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?p=20', 0, 'post', '', 0),
(21, 1, '2025-07-08 09:09:23', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-08 09:09:23', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=post&p=21', 0, 'post', '', 0),
(22, 1, '2025-07-08 09:10:25', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-08 09:10:25', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?p=22', 0, 'post', '', 0),
(23, 1, '2025-07-08 09:10:34', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-08 09:10:34', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=blog&p=23', 0, 'blog', '', 0),
(24, 1, '2025-07-08 09:13:52', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-08 09:13:52', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=blog&p=24', 0, 'blog', '', 0),
(25, 1, '2025-07-08 09:18:03', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-08 09:18:03', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?p=25', 0, 'post', '', 0),
(26, 1, '2025-07-08 09:18:44', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-08 09:18:44', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?p=26', 0, 'post', '', 0),
(27, 1, '2025-07-08 09:19:05', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-08 09:19:05', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?p=27', 0, 'post', '', 0),
(28, 1, '2025-07-08 09:21:21', '2025-07-08 09:21:21', '<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Who we are</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/btc.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Comments</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Media</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Cookies</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Embedded content from other websites</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Who we share your data with</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">How long we retain your data</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">What rights you have over your data</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Where your data is sent</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p>\n<!-- /wp:paragraph -->\n', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '3-revision-v1', '', '', '2025-07-08 09:21:21', '2025-07-08 09:21:21', '', 3, 'http://localhost/btc/?p=28', 0, 'revision', '', 0),
(30, 1, '2025-07-08 09:31:42', '2025-07-08 09:31:42', '', 'Blog Listing', '', 'publish', 'closed', 'closed', '', 'blogs', '', '', '2025-07-09 10:21:07', '2025-07-09 10:21:07', '', 0, 'http://localhost/btc/?page_id=30', 0, 'page', '', 0),
(31, 1, '2025-07-08 09:31:42', '2025-07-08 09:31:42', '', 'Blogs', '', 'inherit', 'closed', 'closed', '', '30-revision-v1', '', '', '2025-07-08 09:31:42', '2025-07-08 09:31:42', '', 30, 'http://localhost/btc/?p=31', 0, 'revision', '', 0),
(32, 1, '2025-07-08 09:35:19', '2025-07-08 09:35:19', '<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Who we are</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Our website address is: http://localhost/btc.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Comments</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>When visitors leave comments on the site we collect the data shown in the comments form, and also the visitor&#8217;s IP address and browser user agent string to help spam detection.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>An anonymized string created from your email address (also called a hash) may be provided to the Gravatar service to see if you are using it. The Gravatar service privacy policy is available here: https://automattic.com/privacy/. After approval of your comment, your profile picture is visible to the public in the context of your comment.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Media</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you upload images to the website, you should avoid uploading images with embedded location data (EXIF GPS) included. Visitors to the website can download and extract any location data from images on the website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Cookies</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment on our site you may opt-in to saving your name, email address and website in cookies. These are for your convenience so that you do not have to fill in your details again when you leave another comment. These cookies will last for one year.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>If you visit our login page, we will set a temporary cookie to determine if your browser accepts cookies. This cookie contains no personal data and is discarded when you close your browser.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>When you log in, we will also set up several cookies to save your login information and your screen display choices. Login cookies last for two days, and screen options cookies last for a year. If you select &quot;Remember Me&quot;, your login will persist for two weeks. If you log out of your account, the login cookies will be removed.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>If you edit or publish an article, an additional cookie will be saved in your browser. This cookie includes no personal data and simply indicates the post ID of the article you just edited. It expires after 1 day.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Embedded content from other websites</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Articles on this site may include embedded content (e.g. videos, images, articles, etc.). Embedded content from other websites behaves in the exact same way as if the visitor has visited the other website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>These websites may collect data about you, use cookies, embed additional third-party tracking, and monitor your interaction with that embedded content, including tracking your interaction with the embedded content if you have an account and are logged in to that website.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Who we share your data with</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you request a password reset, your IP address will be included in the reset email.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">How long we retain your data</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you leave a comment, the comment and its metadata are retained indefinitely. This is so we can recognize and approve any follow-up comments automatically instead of holding them in a moderation queue.</p>\n<!-- /wp:paragraph -->\n<!-- wp:paragraph -->\n<p>For users that register on our website (if any), we also store the personal information they provide in their user profile. All users can see, edit, or delete their personal information at any time (except they cannot change their username). Website administrators can also see and edit that information.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">What rights you have over your data</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>If you have an account on this site, or have left comments, you can request to receive an exported file of the personal data we hold about you, including any data you have provided to us. You can also request that we erase any personal data we hold about you. This does not include any data we are obliged to keep for administrative, legal, or security purposes.</p>\n<!-- /wp:paragraph -->\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Where your data is sent</h2>\n<!-- /wp:heading -->\n<!-- wp:paragraph -->\n<p><strong class=\"privacy-policy-tutorial\">Suggested text: </strong>Visitor comments may be checked through an automated spam detection service.</p>\n<!-- /wp:paragraph -->\n', 'Privacy Policy', '', 'inherit', 'closed', 'closed', '', '18-revision-v1', '', '', '2025-07-08 09:35:19', '2025-07-08 09:35:19', '', 18, 'http://localhost/btc/?p=32', 0, 'revision', '', 0),
(33, 1, '2025-07-08 09:56:17', '2025-07-08 09:56:17', '', 'About Us', '', 'publish', 'closed', 'closed', '', 'about-us', '', '', '2025-07-08 09:56:17', '2025-07-08 09:56:17', '', 0, 'http://localhost/btc/?page_id=33', 0, 'page', '', 0),
(34, 1, '2025-07-08 09:56:17', '2025-07-08 09:56:17', '', 'About Us', '', 'inherit', 'closed', 'closed', '', '33-revision-v1', '', '', '2025-07-08 09:56:17', '2025-07-08 09:56:17', '', 33, 'http://localhost/btc/?p=34', 0, 'revision', '', 0),
(35, 1, '2025-07-08 10:18:38', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-08 10:18:38', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?page_id=35', 0, 'page', '', 0),
(39, 1, '2025-07-08 11:03:14', '2025-07-08 11:03:14', 'a:8:{s:8:\"location\";a:4:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:4:\"post\";}}i:1;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:4:\"page\";}}i:2;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:5:\"event\";}}i:3;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:8:\"category\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";s:12:\"show_in_rest\";i:0;}', 'SEO Meta Data', 'seo-meta-data', 'publish', 'closed', 'closed', '', 'group_686cfa01d739c', '', '', '2025-07-09 10:25:16', '2025-07-09 10:25:16', '', 0, 'http://localhost/btc/?post_type=acf-field-group&#038;p=39', 0, 'acf-field-group', '', 0),
(40, 1, '2025-07-08 11:03:14', '2025-07-08 11:03:14', 'a:17:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:5:\"image\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"return_format\";s:3:\"url\";s:7:\"library\";s:3:\"all\";s:9:\"min_width\";s:0:\"\";s:10:\"min_height\";s:0:\"\";s:8:\"min_size\";s:0:\"\";s:9:\"max_width\";s:0:\"\";s:10:\"max_height\";s:0:\"\";s:8:\"max_size\";s:0:\"\";s:10:\"mime_types\";s:0:\"\";s:17:\"allow_in_bindings\";i:0;s:12:\"preview_size\";s:6:\"medium\";}', 'Meta Image', 'meta_image', 'publish', 'closed', 'closed', '', 'field_686cfa01f9a00', '', '', '2025-07-08 11:03:14', '2025-07-08 11:03:14', '', 39, 'http://localhost/btc/?post_type=acf-field&p=40', 0, 'acf-field', '', 0),
(41, 1, '2025-07-08 11:29:25', '2025-07-08 11:29:25', 'a:12:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:9:\"maxlength\";i:60;s:17:\"allow_in_bindings\";i:0;s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";}', 'Meta Title', 'meta_title', 'publish', 'closed', 'closed', '', 'field_686d0105ba4e7', '', '', '2025-07-08 11:33:29', '2025-07-08 11:33:29', '', 39, 'http://localhost/btc/?post_type=acf-field&#038;p=41', 1, 'acf-field', '', 0),
(42, 1, '2025-07-08 11:29:50', '2025-07-08 11:29:50', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 11:29:50', '2025-07-08 11:29:50', '', 2, 'http://localhost/btc/?p=42', 0, 'revision', '', 0),
(43, 1, '2025-07-08 11:33:29', '2025-07-08 11:33:29', 'a:12:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:9:\"maxlength\";i:160;s:17:\"allow_in_bindings\";i:0;s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";}', 'Meta Description', 'meta_description', 'publish', 'closed', 'closed', '', 'field_686d01c8ead69', '', '', '2025-07-08 11:33:29', '2025-07-08 11:33:29', '', 39, 'http://localhost/btc/?post_type=acf-field&p=43', 2, 'acf-field', '', 0),
(44, 1, '2025-07-08 11:35:09', '2025-07-08 11:35:09', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 11:35:09', '2025-07-08 11:35:09', '', 2, 'http://localhost/btc/?p=44', 0, 'revision', '', 0),
(45, 1, '2025-07-08 11:37:05', '2025-07-08 11:37:05', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 11:37:05', '2025-07-08 11:37:05', '', 2, 'http://localhost/btc/?p=45', 0, 'revision', '', 0),
(46, 1, '2025-07-08 11:42:06', '2025-07-08 11:42:06', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 11:42:06', '2025-07-08 11:42:06', '', 2, 'http://localhost/btc/?p=46', 0, 'revision', '', 0),
(47, 1, '2025-07-08 11:48:14', '2025-07-08 11:48:14', '<!-- wp:image {\"id\":14,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"http://localhost/btc/wp-content/uploads/2025/07/DSC08735_-1440x780-1.jpg\" alt=\"\" class=\"wp-image-14\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p><strong>Cairo, Egypt:&nbsp;</strong>In a significant move aimed at boosting industrial development across Africa, African Export-Import Bank (Afreximbank) signed a US$450 million global credit facility with ARISE IIP, the leading pan-African developer and operator of world-class industrial parks. This financing will support the development of industrial parks and Special Economic Zones (SEZ), while also providing crucial trade finance support to businesses operating within the ARISE IIP ecosystem.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The US$ 450 million, granted in the context of Afreximbank’s strategic objective of promoting, facilitating, and supporting Africa’s industrialisation ecosystems, is part of a proposed US$ 800-million facility to support ARISE IIP in developing Industrial Parks (IPs) and SEZs in countries such as Nigeria, Cote d’Ivoire, Chad, Kenya, Democratic Republic of Congo (DRC) and Malawi, among others.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":4345} -->\n<figure class=\"wp-block-image\"><img src=\"https://www.ariseiip.com/wp-content/uploads/2025/03/arise-afreximbank-logos-small.jpg\" alt=\"\" class=\"wp-image-4345\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Under the terms of the facility agreement, ARISE IIP will deploy US$ 300 million to finance working capital requirements for its operating Industrial Parks (GDIZ-Benin, PIA-Togo, LAHAM TCHAD-Chad, PEIA-Cote d’Ivoire and BSEZ-Rwanda) and for capital expenditures for the development of new industrial parks in DRC, Kenya, Chad, Nigeria and Cote d’Ivoire.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>ARISE IIP will deploy the remaining US$ 150 million to develop an industrial park in Lilongwe, Malawi, and as trade finance for the activities of its export trading company in Malawi under Afreximbank’s Export Agriculture for Food Security initiative.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Signing the agreement on behalf of ARISE IIP was Arvind Arora, the Chief Treasury Officer, while Kanayo Awani, Executive Vice President, Intra-African Trade and Export Development, signed on behalf of Afreximbank.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Kanayo Awani,</strong>&nbsp;Executive Vice President, Intra-African Trade and Export Development Bank said: “<em>The facility reflects Afreximbank’s ongoing commitment to mobilising financial and technical resources towards the promotion of industrialisation across Africa. This is our way of supporting value addition and structural transformation of African economies. We remain eager to collaborate with key stakeholders to build trusted partnerships and to industrialise African countries. Afreximbank strongly believes that IPs and SEZs are veritable tools that Africa can deploy to fast-track industrial infrastructure development and to promote intra-African trade and export development. With ARISE IIP as an established developer and operator of IPs and SEZs on the continent, we are confident that this facility will contribute to supporting the continental industrialisation agenda.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Arvind Arora</strong>, Chief Treasury Officer of ARISE IIP remarked: “<em>The US$450 million facility represents a major step forward in supporting Africa’s industrialisation efforts. This financing covers critical working capital and capital expenditure needs across various countries, addressing the diverse requirements for industrial development. Africa’s infrastructure investment gap, currently exceeding US$100 billion annually, significantly impacts the continent’s living conditions and its global competitiveness. At ARISE IIP, we are committed to working with strategic partners around the world to bridge this gap and accelerate industrialisation across the continent.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The development of the new IPs and SEZs, along with the expansion of activities in the existing IPs, is expected to result in the attraction of 230 tenants, bringing in an estimated investment of US$ 1.7 billion over the next five years, while total exports from the new IPs and SEZs, once in operation, would reach US$ 5 billion over the five-year period, with domestically-sourced goods and services reaching US$ 3.4 billion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In addition, the new investments in the IPs and SEZs are expected to contribute to the creation of 32,000 direct jobs and 138,000 in-direct jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Afreximbank has been working with ARISE IIP as a strategic partner, focusing on industrialisation initiatives across Africa. The collaboration has seen the Bank and Arise working together on various projects including a USD 5 Billion Africa Textile Renaissance Plan, which intends to create 500,000 MT of African cotton transformation capacity and 500,000 jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (FEDA), Afreximbank’s development impact investment arm, invested USD 300 million in the latest fundraising round, which concluded in October 2024. During this round, Arise IIP raised a total of USD 443 million.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About Afreximbank</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>African Export-Import Bank (Afreximbank) is a Pan-African multilateral financial institution mandated to finance and promote intra-and extra-African trade. For over 30 years, the Bank has been deploying innovative structures to deliver financing solutions that support the transformation of the structure of Africa’s trade, accelerating industrialization and intra-regional trade, thereby boosting economic expansion in Africa. A stalwart supporter of the African Continental Free Trade Agreement (AfCFTA), Afreximbank has launched a Pan-African Payment and Settlement System (PAPSS) that was adopted by the African Union (AU) as the payment and settlement platform to underpin the implementation of the AfCFTA. Working with the AfCFTA Secretariat and the AU, the Bank is setting up a US$10 billion Adjustment Fund to support countries effectively participating in the AfCFTA. At the end of December 2023, Afreximbank’s total assets and contingencies stood at over US$37.3 billion, and its shareholder funds amounted to US$6.1 billion. Afreximbank has investment grade ratings assigned by GCR (international scale) (A), Moody’s (Baa1), Japan Credit Rating Agency (JCR) (A-) and Fitch (BBB). Afreximbank has evolved into a group entity comprising the Bank, its impact fund subsidiary called the Fund for Export Development Africa (FEDA), and its insurance management subsidiary, AfrexInsure (together, “the Group”). The Bank is headquartered in Cairo, Egypt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.afreximbank.com/\" target=\"_blank\" rel=\"noreferrer noopener\">www.afreximbank.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About FEDA (Fund for Export Development in Africa)</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (“FEDA”) is the impact investment subsidiary of the African Export-Import Bank (“Afreximbank” or the “Bank”) set up to provide equity, quasi-equity, and debt capital to finance the multi-billion-dollar funding gap (particularly in equity) needed to transform the Trade sector in Africa. FEDA pursues a multi-sector investment strategy along the intra-African trade, value-added export development, and manufacturing value chain which includes financial services, technology, consumer and retail goods, manufacturing, transport &amp; logistics, agribusiness, as well as ancillary trade enabling infrastructure such as industrial parks.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.fedagroup.org/\" target=\"_blank\" rel=\"noreferrer noopener\">www.fedagroup.org</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About ARISE IIP</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>ARISE Integrated Industrial Platforms (ARISE IIP) is a pan-African developer and operator of world-class industrial parks committed to making Africa thrive. We identify opportunities in commercial and industrial value chains across Africa, and conceive, finance, build and operate the necessary infrastructure, playing a catalytic role in supporting countries to transition to an industrial economy. We are driven by the pursuit of green growth; our ambition is to unlock the continent’s industrial potential while neutralising our carbon emissions and climate impact. ARISE IIP currently operates in 11 countries, including Benin (GDIZ), Togo (PIA), Gabon (GSEZ), Cote d’Ivoire (PEIA), Nigeria (IPRFZ), Republic of Congo (PIC), Democratic Republic of Congo (CIP), Sierra Leone (SIZ), Malawi (MIP), Rwanda (BSEZ), and Chad.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"https://www.ariseiip.com/\">www.ariseiip.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Contact details</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Vincent Musumba</strong><br>Manager, Communications and Events (Media relations) – Afreximbank<br><a href=\"mailto:press@afreximbank.com\">press@afreximbank.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Audrey Mebaley</strong><br>Global Head of Communications – Arise IIP<br><a href=\"mailto:audrey.mebaley@arisenet.com\">audrey.mebaley@arisenet.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:code -->\n<pre class=\"wp-block-code\"><code></code></pre>\n<!-- /wp:code -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'ARISE IIP secures $450 million Afreximbank facility to develop Industrial Parks and Special Economic Zones', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2025-07-08 11:48:14', '2025-07-08 11:48:14', '', 11, 'http://localhost/btc/?p=47', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(49, 1, '2025-07-08 11:50:19', '2025-07-08 11:50:19', '<!-- wp:image {\"id\":14,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"http://localhost/btc/wp-content/uploads/2025/07/DSC08735_-1440x780-1.jpg\" alt=\"\" class=\"wp-image-14\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p><strong>Cairo, Egypt:&nbsp;</strong>In a significant move aimed at boosting industrial development across Africa, African Export-Import Bank (Afreximbank) signed a US$450 million global credit facility with ARISE IIP, the leading pan-African developer and operator of world-class industrial parks. This financing will support the development of industrial parks and Special Economic Zones (SEZ), while also providing crucial trade finance support to businesses operating within the ARISE IIP ecosystem.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:embed {\"providerNameSlug\":\"vimeo\",\"responsive\":true} /-->\n\n<!-- wp:paragraph -->\n<p>The US$ 450 million, granted in the context of Afreximbank’s strategic objective of promoting, facilitating, and supporting Africa’s industrialisation ecosystems, is part of a proposed US$ 800-million facility to support ARISE IIP in developing Industrial Parks (IPs) and SEZs in countries such as Nigeria, Cote d’Ivoire, Chad, Kenya, Democratic Republic of Congo (DRC) and Malawi, among others.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":4345} -->\n<figure class=\"wp-block-image\"><img src=\"https://www.ariseiip.com/wp-content/uploads/2025/03/arise-afreximbank-logos-small.jpg\" alt=\"\" class=\"wp-image-4345\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Under the terms of the facility agreement, ARISE IIP will deploy US$ 300 million to finance working capital requirements for its operating Industrial Parks (GDIZ-Benin, PIA-Togo, LAHAM TCHAD-Chad, PEIA-Cote d’Ivoire and BSEZ-Rwanda) and for capital expenditures for the development of new industrial parks in DRC, Kenya, Chad, Nigeria and Cote d’Ivoire.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>ARISE IIP will deploy the remaining US$ 150 million to develop an industrial park in Lilongwe, Malawi, and as trade finance for the activities of its export trading company in Malawi under Afreximbank’s Export Agriculture for Food Security initiative.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Signing the agreement on behalf of ARISE IIP was Arvind Arora, the Chief Treasury Officer, while Kanayo Awani, Executive Vice President, Intra-African Trade and Export Development, signed on behalf of Afreximbank.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Kanayo Awani,</strong>&nbsp;Executive Vice President, Intra-African Trade and Export Development Bank said: “<em>The facility reflects Afreximbank’s ongoing commitment to mobilising financial and technical resources towards the promotion of industrialisation across Africa. This is our way of supporting value addition and structural transformation of African economies. We remain eager to collaborate with key stakeholders to build trusted partnerships and to industrialise African countries. Afreximbank strongly believes that IPs and SEZs are veritable tools that Africa can deploy to fast-track industrial infrastructure development and to promote intra-African trade and export development. With ARISE IIP as an established developer and operator of IPs and SEZs on the continent, we are confident that this facility will contribute to supporting the continental industrialisation agenda.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Arvind Arora</strong>, Chief Treasury Officer of ARISE IIP remarked: “<em>The US$450 million facility represents a major step forward in supporting Africa’s industrialisation efforts. This financing covers critical working capital and capital expenditure needs across various countries, addressing the diverse requirements for industrial development. Africa’s infrastructure investment gap, currently exceeding US$100 billion annually, significantly impacts the continent’s living conditions and its global competitiveness. At ARISE IIP, we are committed to working with strategic partners around the world to bridge this gap and accelerate industrialisation across the continent.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The development of the new IPs and SEZs, along with the expansion of activities in the existing IPs, is expected to result in the attraction of 230 tenants, bringing in an estimated investment of US$ 1.7 billion over the next five years, while total exports from the new IPs and SEZs, once in operation, would reach US$ 5 billion over the five-year period, with domestically-sourced goods and services reaching US$ 3.4 billion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In addition, the new investments in the IPs and SEZs are expected to contribute to the creation of 32,000 direct jobs and 138,000 in-direct jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Afreximbank has been working with ARISE IIP as a strategic partner, focusing on industrialisation initiatives across Africa. The collaboration has seen the Bank and Arise working together on various projects including a USD 5 Billion Africa Textile Renaissance Plan, which intends to create 500,000 MT of African cotton transformation capacity and 500,000 jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (FEDA), Afreximbank’s development impact investment arm, invested USD 300 million in the latest fundraising round, which concluded in October 2024. During this round, Arise IIP raised a total of USD 443 million.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About Afreximbank</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>African Export-Import Bank (Afreximbank) is a Pan-African multilateral financial institution mandated to finance and promote intra-and extra-African trade. For over 30 years, the Bank has been deploying innovative structures to deliver financing solutions that support the transformation of the structure of Africa’s trade, accelerating industrialization and intra-regional trade, thereby boosting economic expansion in Africa. A stalwart supporter of the African Continental Free Trade Agreement (AfCFTA), Afreximbank has launched a Pan-African Payment and Settlement System (PAPSS) that was adopted by the African Union (AU) as the payment and settlement platform to underpin the implementation of the AfCFTA. Working with the AfCFTA Secretariat and the AU, the Bank is setting up a US$10 billion Adjustment Fund to support countries effectively participating in the AfCFTA. At the end of December 2023, Afreximbank’s total assets and contingencies stood at over US$37.3 billion, and its shareholder funds amounted to US$6.1 billion. Afreximbank has investment grade ratings assigned by GCR (international scale) (A), Moody’s (Baa1), Japan Credit Rating Agency (JCR) (A-) and Fitch (BBB). Afreximbank has evolved into a group entity comprising the Bank, its impact fund subsidiary called the Fund for Export Development Africa (FEDA), and its insurance management subsidiary, AfrexInsure (together, “the Group”). The Bank is headquartered in Cairo, Egypt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.afreximbank.com/\" target=\"_blank\" rel=\"noreferrer noopener\">www.afreximbank.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About FEDA (Fund for Export Development in Africa)</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (“FEDA”) is the impact investment subsidiary of the African Export-Import Bank (“Afreximbank” or the “Bank”) set up to provide equity, quasi-equity, and debt capital to finance the multi-billion-dollar funding gap (particularly in equity) needed to transform the Trade sector in Africa. FEDA pursues a multi-sector investment strategy along the intra-African trade, value-added export development, and manufacturing value chain which includes financial services, technology, consumer and retail goods, manufacturing, transport &amp; logistics, agribusiness, as well as ancillary trade enabling infrastructure such as industrial parks.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.fedagroup.org/\" target=\"_blank\" rel=\"noreferrer noopener\">www.fedagroup.org</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About ARISE IIP</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>ARISE Integrated Industrial Platforms (ARISE IIP) is a pan-African developer and operator of world-class industrial parks committed to making Africa thrive. We identify opportunities in commercial and industrial value chains across Africa, and conceive, finance, build and operate the necessary infrastructure, playing a catalytic role in supporting countries to transition to an industrial economy. We are driven by the pursuit of green growth; our ambition is to unlock the continent’s industrial potential while neutralising our carbon emissions and climate impact. ARISE IIP currently operates in 11 countries, including Benin (GDIZ), Togo (PIA), Gabon (GSEZ), Cote d’Ivoire (PEIA), Nigeria (IPRFZ), Republic of Congo (PIC), Democratic Republic of Congo (CIP), Sierra Leone (SIZ), Malawi (MIP), Rwanda (BSEZ), and Chad.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"https://www.ariseiip.com/\">www.ariseiip.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Contact details</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Vincent Musumba</strong><br>Manager, Communications and Events (Media relations) – Afreximbank<br><a href=\"mailto:press@afreximbank.com\">press@afreximbank.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Audrey Mebaley</strong><br>Global Head of Communications – Arise IIP<br><a href=\"mailto:audrey.mebaley@arisenet.com\">audrey.mebaley@arisenet.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:code -->\n<pre class=\"wp-block-code\"><code></code></pre>\n<!-- /wp:code -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'ARISE IIP secures $450 million Afreximbank facility to develop Industrial Parks and Special Economic Zones', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2025-07-08 11:50:19', '2025-07-08 11:50:19', '', 11, 'http://localhost/btc/?p=49', 0, 'revision', '', 0),
(50, 1, '2025-07-08 11:50:38', '2025-07-08 11:50:38', '<!-- wp:image {\"id\":14,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"http://localhost/btc/wp-content/uploads/2025/07/DSC08735_-1440x780-1.jpg\" alt=\"\" class=\"wp-image-14\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p><strong>Cairo, Egypt:&nbsp;</strong>In a significant move aimed at boosting industrial development across Africa, African Export-Import Bank (Afreximbank) signed a US$450 million global credit facility with ARISE IIP, the leading pan-African developer and operator of world-class industrial parks. This financing will support the development of industrial parks and Special Economic Zones (SEZ), while also providing crucial trade finance support to businesses operating within the ARISE IIP ecosystem.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:embed {\"url\":\"https://www.youtube.com/watch?v=qzGxK6Uiu04\",\"type\":\"video\",\"providerNameSlug\":\"youtube\",\"responsive\":true,\"className\":\"wp-embed-aspect-16-9 wp-has-aspect-ratio\"} -->\n<figure class=\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio\"><div class=\"wp-block-embed__wrapper\">\nhttps://www.youtube.com/watch?v=qzGxK6Uiu04\n</div></figure>\n<!-- /wp:embed -->\n\n<!-- wp:paragraph -->\n<p>The US$ 450 million, granted in the context of Afreximbank’s strategic objective of promoting, facilitating, and supporting Africa’s industrialisation ecosystems, is part of a proposed US$ 800-million facility to support ARISE IIP in developing Industrial Parks (IPs) and SEZs in countries such as Nigeria, Cote d’Ivoire, Chad, Kenya, Democratic Republic of Congo (DRC) and Malawi, among others.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":4345} -->\n<figure class=\"wp-block-image\"><img src=\"https://www.ariseiip.com/wp-content/uploads/2025/03/arise-afreximbank-logos-small.jpg\" alt=\"\" class=\"wp-image-4345\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Under the terms of the facility agreement, ARISE IIP will deploy US$ 300 million to finance working capital requirements for its operating Industrial Parks (GDIZ-Benin, PIA-Togo, LAHAM TCHAD-Chad, PEIA-Cote d’Ivoire and BSEZ-Rwanda) and for capital expenditures for the development of new industrial parks in DRC, Kenya, Chad, Nigeria and Cote d’Ivoire.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>ARISE IIP will deploy the remaining US$ 150 million to develop an industrial park in Lilongwe, Malawi, and as trade finance for the activities of its export trading company in Malawi under Afreximbank’s Export Agriculture for Food Security initiative.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Signing the agreement on behalf of ARISE IIP was Arvind Arora, the Chief Treasury Officer, while Kanayo Awani, Executive Vice President, Intra-African Trade and Export Development, signed on behalf of Afreximbank.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Kanayo Awani,</strong>&nbsp;Executive Vice President, Intra-African Trade and Export Development Bank said: “<em>The facility reflects Afreximbank’s ongoing commitment to mobilising financial and technical resources towards the promotion of industrialisation across Africa. This is our way of supporting value addition and structural transformation of African economies. We remain eager to collaborate with key stakeholders to build trusted partnerships and to industrialise African countries. Afreximbank strongly believes that IPs and SEZs are veritable tools that Africa can deploy to fast-track industrial infrastructure development and to promote intra-African trade and export development. With ARISE IIP as an established developer and operator of IPs and SEZs on the continent, we are confident that this facility will contribute to supporting the continental industrialisation agenda.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Arvind Arora</strong>, Chief Treasury Officer of ARISE IIP remarked: “<em>The US$450 million facility represents a major step forward in supporting Africa’s industrialisation efforts. This financing covers critical working capital and capital expenditure needs across various countries, addressing the diverse requirements for industrial development. Africa’s infrastructure investment gap, currently exceeding US$100 billion annually, significantly impacts the continent’s living conditions and its global competitiveness. At ARISE IIP, we are committed to working with strategic partners around the world to bridge this gap and accelerate industrialisation across the continent.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The development of the new IPs and SEZs, along with the expansion of activities in the existing IPs, is expected to result in the attraction of 230 tenants, bringing in an estimated investment of US$ 1.7 billion over the next five years, while total exports from the new IPs and SEZs, once in operation, would reach US$ 5 billion over the five-year period, with domestically-sourced goods and services reaching US$ 3.4 billion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In addition, the new investments in the IPs and SEZs are expected to contribute to the creation of 32,000 direct jobs and 138,000 in-direct jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Afreximbank has been working with ARISE IIP as a strategic partner, focusing on industrialisation initiatives across Africa. The collaboration has seen the Bank and Arise working together on various projects including a USD 5 Billion Africa Textile Renaissance Plan, which intends to create 500,000 MT of African cotton transformation capacity and 500,000 jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (FEDA), Afreximbank’s development impact investment arm, invested USD 300 million in the latest fundraising round, which concluded in October 2024. During this round, Arise IIP raised a total of USD 443 million.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About Afreximbank</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>African Export-Import Bank (Afreximbank) is a Pan-African multilateral financial institution mandated to finance and promote intra-and extra-African trade. For over 30 years, the Bank has been deploying innovative structures to deliver financing solutions that support the transformation of the structure of Africa’s trade, accelerating industrialization and intra-regional trade, thereby boosting economic expansion in Africa. A stalwart supporter of the African Continental Free Trade Agreement (AfCFTA), Afreximbank has launched a Pan-African Payment and Settlement System (PAPSS) that was adopted by the African Union (AU) as the payment and settlement platform to underpin the implementation of the AfCFTA. Working with the AfCFTA Secretariat and the AU, the Bank is setting up a US$10 billion Adjustment Fund to support countries effectively participating in the AfCFTA. At the end of December 2023, Afreximbank’s total assets and contingencies stood at over US$37.3 billion, and its shareholder funds amounted to US$6.1 billion. Afreximbank has investment grade ratings assigned by GCR (international scale) (A), Moody’s (Baa1), Japan Credit Rating Agency (JCR) (A-) and Fitch (BBB). Afreximbank has evolved into a group entity comprising the Bank, its impact fund subsidiary called the Fund for Export Development Africa (FEDA), and its insurance management subsidiary, AfrexInsure (together, “the Group”). The Bank is headquartered in Cairo, Egypt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.afreximbank.com/\" target=\"_blank\" rel=\"noreferrer noopener\">www.afreximbank.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About FEDA (Fund for Export Development in Africa)</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (“FEDA”) is the impact investment subsidiary of the African Export-Import Bank (“Afreximbank” or the “Bank”) set up to provide equity, quasi-equity, and debt capital to finance the multi-billion-dollar funding gap (particularly in equity) needed to transform the Trade sector in Africa. FEDA pursues a multi-sector investment strategy along the intra-African trade, value-added export development, and manufacturing value chain which includes financial services, technology, consumer and retail goods, manufacturing, transport &amp; logistics, agribusiness, as well as ancillary trade enabling infrastructure such as industrial parks.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.fedagroup.org/\" target=\"_blank\" rel=\"noreferrer noopener\">www.fedagroup.org</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About ARISE IIP</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>ARISE Integrated Industrial Platforms (ARISE IIP) is a pan-African developer and operator of world-class industrial parks committed to making Africa thrive. We identify opportunities in commercial and industrial value chains across Africa, and conceive, finance, build and operate the necessary infrastructure, playing a catalytic role in supporting countries to transition to an industrial economy. We are driven by the pursuit of green growth; our ambition is to unlock the continent’s industrial potential while neutralising our carbon emissions and climate impact. ARISE IIP currently operates in 11 countries, including Benin (GDIZ), Togo (PIA), Gabon (GSEZ), Cote d’Ivoire (PEIA), Nigeria (IPRFZ), Republic of Congo (PIC), Democratic Republic of Congo (CIP), Sierra Leone (SIZ), Malawi (MIP), Rwanda (BSEZ), and Chad.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"https://www.ariseiip.com/\">www.ariseiip.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Contact details</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Vincent Musumba</strong><br>Manager, Communications and Events (Media relations) – Afreximbank<br><a href=\"mailto:press@afreximbank.com\">press@afreximbank.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Audrey Mebaley</strong><br>Global Head of Communications – Arise IIP<br><a href=\"mailto:audrey.mebaley@arisenet.com\">audrey.mebaley@arisenet.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:code -->\n<pre class=\"wp-block-code\"><code></code></pre>\n<!-- /wp:code -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'ARISE IIP secures $450 million Afreximbank facility to develop Industrial Parks and Special Economic Zones', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2025-07-08 11:50:38', '2025-07-08 11:50:38', '', 11, 'http://localhost/btc/?p=50', 0, 'revision', '', 0),
(51, 1, '2025-07-08 11:51:15', '2025-07-08 11:51:15', '<!-- wp:image {\"id\":14,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"http://localhost/btc/wp-content/uploads/2025/07/DSC08735_-1440x780-1.jpg\" alt=\"\" class=\"wp-image-14\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p><strong>Cairo, Egypt:&nbsp;</strong>In a significant move aimed at boosting industrial development across Africa, African Export-Import Bank (Afreximbank) signed a US$450 million global credit facility with ARISE IIP, the leading pan-African developer and operator of world-class industrial parks. This financing will support the development of industrial parks and Special Economic Zones (SEZ), while also providing crucial trade finance support to businesses operating within the ARISE IIP ecosystem.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The US$ 450 million, granted in the context of Afreximbank’s strategic objective of promoting, facilitating, and supporting Africa’s industrialisation ecosystems, is part of a proposed US$ 800-million facility to support ARISE IIP in developing Industrial Parks (IPs) and SEZs in countries such as Nigeria, Cote d’Ivoire, Chad, Kenya, Democratic Republic of Congo (DRC) and Malawi, among others.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:embed {\"url\":\"https://www.youtube.com/watch?v=qzGxK6Uiu04\",\"type\":\"video\",\"providerNameSlug\":\"youtube\",\"responsive\":true,\"className\":\"wp-embed-aspect-16-9 wp-has-aspect-ratio\"} -->\n<figure class=\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio\"><div class=\"wp-block-embed__wrapper\">\nhttps://www.youtube.com/watch?v=qzGxK6Uiu04\n</div></figure>\n<!-- /wp:embed -->\n\n<!-- wp:paragraph -->\n<p>and supporting Africa’s industrialisation ecosystems, is part of a proposed US$ 800-million facility to support ARISE IIP in developing Industrial Parks (IPs) and SEZs in countries such as Nigeria, Cote d’Ivoire, Chad, Kenya, Democratic Republic of Congo (DRC) and Malawi, among others.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":4345} -->\n<figure class=\"wp-block-image\"><img src=\"https://www.ariseiip.com/wp-content/uploads/2025/03/arise-afreximbank-logos-small.jpg\" alt=\"\" class=\"wp-image-4345\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Under the terms of the facility agreement, ARISE IIP will deploy US$ 300 million to finance working capital requirements for its operating Industrial Parks (GDIZ-Benin, PIA-Togo, LAHAM TCHAD-Chad, PEIA-Cote d’Ivoire and BSEZ-Rwanda) and for capital expenditures for the development of new industrial parks in DRC, Kenya, Chad, Nigeria and Cote d’Ivoire.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>ARISE IIP will deploy the remaining US$ 150 million to develop an industrial park in Lilongwe, Malawi, and as trade finance for the activities of its export trading company in Malawi under Afreximbank’s Export Agriculture for Food Security initiative.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Signing the agreement on behalf of ARISE IIP was Arvind Arora, the Chief Treasury Officer, while Kanayo Awani, Executive Vice President, Intra-African Trade and Export Development, signed on behalf of Afreximbank.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Kanayo Awani,</strong>&nbsp;Executive Vice President, Intra-African Trade and Export Development Bank said: “<em>The facility reflects Afreximbank’s ongoing commitment to mobilising financial and technical resources towards the promotion of industrialisation across Africa. This is our way of supporting value addition and structural transformation of African economies. We remain eager to collaborate with key stakeholders to build trusted partnerships and to industrialise African countries. Afreximbank strongly believes that IPs and SEZs are veritable tools that Africa can deploy to fast-track industrial infrastructure development and to promote intra-African trade and export development. With ARISE IIP as an established developer and operator of IPs and SEZs on the continent, we are confident that this facility will contribute to supporting the continental industrialisation agenda.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Arvind Arora</strong>, Chief Treasury Officer of ARISE IIP remarked: “<em>The US$450 million facility represents a major step forward in supporting Africa’s industrialisation efforts. This financing covers critical working capital and capital expenditure needs across various countries, addressing the diverse requirements for industrial development. Africa’s infrastructure investment gap, currently exceeding US$100 billion annually, significantly impacts the continent’s living conditions and its global competitiveness. At ARISE IIP, we are committed to working with strategic partners around the world to bridge this gap and accelerate industrialisation across the continent.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The development of the new IPs and SEZs, along with the expansion of activities in the existing IPs, is expected to result in the attraction of 230 tenants, bringing in an estimated investment of US$ 1.7 billion over the next five years, while total exports from the new IPs and SEZs, once in operation, would reach US$ 5 billion over the five-year period, with domestically-sourced goods and services reaching US$ 3.4 billion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In addition, the new investments in the IPs and SEZs are expected to contribute to the creation of 32,000 direct jobs and 138,000 in-direct jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Afreximbank has been working with ARISE IIP as a strategic partner, focusing on industrialisation initiatives across Africa. The collaboration has seen the Bank and Arise working together on various projects including a USD 5 Billion Africa Textile Renaissance Plan, which intends to create 500,000 MT of African cotton transformation capacity and 500,000 jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (FEDA), Afreximbank’s development impact investment arm, invested USD 300 million in the latest fundraising round, which concluded in October 2024. During this round, Arise IIP raised a total of USD 443 million.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About Afreximbank</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>African Export-Import Bank (Afreximbank) is a Pan-African multilateral financial institution mandated to finance and promote intra-and extra-African trade. For over 30 years, the Bank has been deploying innovative structures to deliver financing solutions that support the transformation of the structure of Africa’s trade, accelerating industrialization and intra-regional trade, thereby boosting economic expansion in Africa. A stalwart supporter of the African Continental Free Trade Agreement (AfCFTA), Afreximbank has launched a Pan-African Payment and Settlement System (PAPSS) that was adopted by the African Union (AU) as the payment and settlement platform to underpin the implementation of the AfCFTA. Working with the AfCFTA Secretariat and the AU, the Bank is setting up a US$10 billion Adjustment Fund to support countries effectively participating in the AfCFTA. At the end of December 2023, Afreximbank’s total assets and contingencies stood at over US$37.3 billion, and its shareholder funds amounted to US$6.1 billion. Afreximbank has investment grade ratings assigned by GCR (international scale) (A), Moody’s (Baa1), Japan Credit Rating Agency (JCR) (A-) and Fitch (BBB). Afreximbank has evolved into a group entity comprising the Bank, its impact fund subsidiary called the Fund for Export Development Africa (FEDA), and its insurance management subsidiary, AfrexInsure (together, “the Group”). The Bank is headquartered in Cairo, Egypt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.afreximbank.com/\" target=\"_blank\" rel=\"noreferrer noopener\">www.afreximbank.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About FEDA (Fund for Export Development in Africa)</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (“FEDA”) is the impact investment subsidiary of the African Export-Import Bank (“Afreximbank” or the “Bank”) set up to provide equity, quasi-equity, and debt capital to finance the multi-billion-dollar funding gap (particularly in equity) needed to transform the Trade sector in Africa. FEDA pursues a multi-sector investment strategy along the intra-African trade, value-added export development, and manufacturing value chain which includes financial services, technology, consumer and retail goods, manufacturing, transport &amp; logistics, agribusiness, as well as ancillary trade enabling infrastructure such as industrial parks.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.fedagroup.org/\" target=\"_blank\" rel=\"noreferrer noopener\">www.fedagroup.org</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About ARISE IIP</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>ARISE Integrated Industrial Platforms (ARISE IIP) is a pan-African developer and operator of world-class industrial parks committed to making Africa thrive. We identify opportunities in commercial and industrial value chains across Africa, and conceive, finance, build and operate the necessary infrastructure, playing a catalytic role in supporting countries to transition to an industrial economy. We are driven by the pursuit of green growth; our ambition is to unlock the continent’s industrial potential while neutralising our carbon emissions and climate impact. ARISE IIP currently operates in 11 countries, including Benin (GDIZ), Togo (PIA), Gabon (GSEZ), Cote d’Ivoire (PEIA), Nigeria (IPRFZ), Republic of Congo (PIC), Democratic Republic of Congo (CIP), Sierra Leone (SIZ), Malawi (MIP), Rwanda (BSEZ), and Chad.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"https://www.ariseiip.com/\">www.ariseiip.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Contact details</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Vincent Musumba</strong><br>Manager, Communications and Events (Media relations) – Afreximbank<br><a href=\"mailto:press@afreximbank.com\">press@afreximbank.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Audrey Mebaley</strong><br>Global Head of Communications – Arise IIP<br><a href=\"mailto:audrey.mebaley@arisenet.com\">audrey.mebaley@arisenet.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:code -->\n<pre class=\"wp-block-code\"><code></code></pre>\n<!-- /wp:code -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'ARISE IIP secures $450 million Afreximbank facility to develop Industrial Parks and Special Economic Zones', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2025-07-08 11:51:15', '2025-07-08 11:51:15', '', 11, 'http://localhost/btc/?p=51', 0, 'revision', '', 0),
(52, 1, '2025-07-08 11:52:09', '2025-07-08 11:52:09', '<!-- wp:image {\"id\":14,\"sizeSlug\":\"full\",\"linkDestination\":\"none\"} -->\n<figure class=\"wp-block-image size-full\"><img src=\"http://localhost/btc/wp-content/uploads/2025/07/DSC08735_-1440x780-1.jpg\" alt=\"\" class=\"wp-image-14\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p><strong>Cairo, Egypt:&nbsp;</strong>In a significant move aimed at boosting industrial development across Africa, African Export-Import Bank (Afreximbank) signed a US$450 million global credit facility with ARISE IIP, the leading pan-African developer and operator of world-class industrial parks. This financing will support the development of industrial parks and Special Economic Zones (SEZ), while also providing crucial trade finance support to businesses operating within the ARISE IIP ecosystem.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The US$ 450 million, granted in the context of Afreximbank’s strategic objective of promoting, facilitating, and supporting Africa’s industrialisation ecosystems, is part of a proposed US$ 800-million facility to support ARISE IIP in developing Industrial Parks (IPs) and SEZs in countries such as Nigeria, Cote d’Ivoire, Chad, Kenya, Democratic Republic of Congo (DRC) and Malawi, among others.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:group {\"layout\":{\"type\":\"constrained\"}} -->\n<div class=\"wp-block-group\"><!-- wp:embed {\"url\":\"https://www.youtube.com/watch?v=qzGxK6Uiu04\",\"type\":\"video\",\"providerNameSlug\":\"youtube\",\"responsive\":true,\"className\":\"wp-embed-aspect-16-9 wp-has-aspect-ratio\"} -->\n<figure class=\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio\"><div class=\"wp-block-embed__wrapper\">\nhttps://www.youtube.com/watch?v=qzGxK6Uiu04\n</div></figure>\n<!-- /wp:embed -->\n\n<!-- wp:embed {\"url\":\"https://www.youtube.com/shorts/SChbFSzIsdA\",\"type\":\"video\",\"providerNameSlug\":\"youtube\",\"responsive\":true,\"className\":\"wp-embed-aspect-16-9 wp-has-aspect-ratio\"} -->\n<figure class=\"wp-block-embed is-type-video is-provider-youtube wp-block-embed-youtube wp-embed-aspect-16-9 wp-has-aspect-ratio\"><div class=\"wp-block-embed__wrapper\">\nhttps://www.youtube.com/shorts/SChbFSzIsdA\n</div></figure>\n<!-- /wp:embed --></div>\n<!-- /wp:group -->\n\n<!-- wp:paragraph -->\n<p>and supporting Africa’s industrialisation ecosystems, is part of a proposed US$ 800-million facility to support ARISE IIP in developing Industrial Parks (IPs) and SEZs in countries such as Nigeria, Cote d’Ivoire, Chad, Kenya, Democratic Republic of Congo (DRC) and Malawi, among others.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:image {\"id\":4345} -->\n<figure class=\"wp-block-image\"><img src=\"https://www.ariseiip.com/wp-content/uploads/2025/03/arise-afreximbank-logos-small.jpg\" alt=\"\" class=\"wp-image-4345\"/></figure>\n<!-- /wp:image -->\n\n<!-- wp:paragraph -->\n<p>Under the terms of the facility agreement, ARISE IIP will deploy US$ 300 million to finance working capital requirements for its operating Industrial Parks (GDIZ-Benin, PIA-Togo, LAHAM TCHAD-Chad, PEIA-Cote d’Ivoire and BSEZ-Rwanda) and for capital expenditures for the development of new industrial parks in DRC, Kenya, Chad, Nigeria and Cote d’Ivoire.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>ARISE IIP will deploy the remaining US$ 150 million to develop an industrial park in Lilongwe, Malawi, and as trade finance for the activities of its export trading company in Malawi under Afreximbank’s Export Agriculture for Food Security initiative.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Signing the agreement on behalf of ARISE IIP was Arvind Arora, the Chief Treasury Officer, while Kanayo Awani, Executive Vice President, Intra-African Trade and Export Development, signed on behalf of Afreximbank.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Kanayo Awani,</strong>&nbsp;Executive Vice President, Intra-African Trade and Export Development Bank said: “<em>The facility reflects Afreximbank’s ongoing commitment to mobilising financial and technical resources towards the promotion of industrialisation across Africa. This is our way of supporting value addition and structural transformation of African economies. We remain eager to collaborate with key stakeholders to build trusted partnerships and to industrialise African countries. Afreximbank strongly believes that IPs and SEZs are veritable tools that Africa can deploy to fast-track industrial infrastructure development and to promote intra-African trade and export development. With ARISE IIP as an established developer and operator of IPs and SEZs on the continent, we are confident that this facility will contribute to supporting the continental industrialisation agenda.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Arvind Arora</strong>, Chief Treasury Officer of ARISE IIP remarked: “<em>The US$450 million facility represents a major step forward in supporting Africa’s industrialisation efforts. This financing covers critical working capital and capital expenditure needs across various countries, addressing the diverse requirements for industrial development. Africa’s infrastructure investment gap, currently exceeding US$100 billion annually, significantly impacts the continent’s living conditions and its global competitiveness. At ARISE IIP, we are committed to working with strategic partners around the world to bridge this gap and accelerate industrialisation across the continent.</em>”</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The development of the new IPs and SEZs, along with the expansion of activities in the existing IPs, is expected to result in the attraction of 230 tenants, bringing in an estimated investment of US$ 1.7 billion over the next five years, while total exports from the new IPs and SEZs, once in operation, would reach US$ 5 billion over the five-year period, with domestically-sourced goods and services reaching US$ 3.4 billion.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>In addition, the new investments in the IPs and SEZs are expected to contribute to the creation of 32,000 direct jobs and 138,000 in-direct jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Afreximbank has been working with ARISE IIP as a strategic partner, focusing on industrialisation initiatives across Africa. The collaboration has seen the Bank and Arise working together on various projects including a USD 5 Billion Africa Textile Renaissance Plan, which intends to create 500,000 MT of African cotton transformation capacity and 500,000 jobs.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (FEDA), Afreximbank’s development impact investment arm, invested USD 300 million in the latest fundraising round, which concluded in October 2024. During this round, Arise IIP raised a total of USD 443 million.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About Afreximbank</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>African Export-Import Bank (Afreximbank) is a Pan-African multilateral financial institution mandated to finance and promote intra-and extra-African trade. For over 30 years, the Bank has been deploying innovative structures to deliver financing solutions that support the transformation of the structure of Africa’s trade, accelerating industrialization and intra-regional trade, thereby boosting economic expansion in Africa. A stalwart supporter of the African Continental Free Trade Agreement (AfCFTA), Afreximbank has launched a Pan-African Payment and Settlement System (PAPSS) that was adopted by the African Union (AU) as the payment and settlement platform to underpin the implementation of the AfCFTA. Working with the AfCFTA Secretariat and the AU, the Bank is setting up a US$10 billion Adjustment Fund to support countries effectively participating in the AfCFTA. At the end of December 2023, Afreximbank’s total assets and contingencies stood at over US$37.3 billion, and its shareholder funds amounted to US$6.1 billion. Afreximbank has investment grade ratings assigned by GCR (international scale) (A), Moody’s (Baa1), Japan Credit Rating Agency (JCR) (A-) and Fitch (BBB). Afreximbank has evolved into a group entity comprising the Bank, its impact fund subsidiary called the Fund for Export Development Africa (FEDA), and its insurance management subsidiary, AfrexInsure (together, “the Group”). The Bank is headquartered in Cairo, Egypt.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.afreximbank.com/\" target=\"_blank\" rel=\"noreferrer noopener\">www.afreximbank.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About FEDA (Fund for Export Development in Africa)</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>The Fund for Export Development in Africa (“FEDA”) is the impact investment subsidiary of the African Export-Import Bank (“Afreximbank” or the “Bank”) set up to provide equity, quasi-equity, and debt capital to finance the multi-billion-dollar funding gap (particularly in equity) needed to transform the Trade sector in Africa. FEDA pursues a multi-sector investment strategy along the intra-African trade, value-added export development, and manufacturing value chain which includes financial services, technology, consumer and retail goods, manufacturing, transport &amp; logistics, agribusiness, as well as ancillary trade enabling infrastructure such as industrial parks.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"http://www.fedagroup.org/\" target=\"_blank\" rel=\"noreferrer noopener\">www.fedagroup.org</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">About ARISE IIP</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p>ARISE Integrated Industrial Platforms (ARISE IIP) is a pan-African developer and operator of world-class industrial parks committed to making Africa thrive. We identify opportunities in commercial and industrial value chains across Africa, and conceive, finance, build and operate the necessary infrastructure, playing a catalytic role in supporting countries to transition to an industrial economy. We are driven by the pursuit of green growth; our ambition is to unlock the continent’s industrial potential while neutralising our carbon emissions and climate impact. ARISE IIP currently operates in 11 countries, including Benin (GDIZ), Togo (PIA), Gabon (GSEZ), Cote d’Ivoire (PEIA), Nigeria (IPRFZ), Republic of Congo (PIC), Democratic Republic of Congo (CIP), Sierra Leone (SIZ), Malawi (MIP), Rwanda (BSEZ), and Chad.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Visit&nbsp;<a href=\"https://www.ariseiip.com/\">www.ariseiip.com</a>&nbsp;for details.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:heading -->\n<h2 class=\"wp-block-heading\">Contact details</h2>\n<!-- /wp:heading -->\n\n<!-- wp:paragraph -->\n<p><strong>Vincent Musumba</strong><br>Manager, Communications and Events (Media relations) – Afreximbank<br><a href=\"mailto:press@afreximbank.com\">press@afreximbank.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p><strong>Audrey Mebaley</strong><br>Global Head of Communications – Arise IIP<br><a href=\"mailto:audrey.mebaley@arisenet.com\">audrey.mebaley@arisenet.com</a></p>\n<!-- /wp:paragraph -->\n\n<!-- wp:code -->\n<pre class=\"wp-block-code\"><code></code></pre>\n<!-- /wp:code -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'ARISE IIP secures $450 million Afreximbank facility to develop Industrial Parks and Special Economic Zones', '', 'inherit', 'closed', 'closed', '', '11-revision-v1', '', '', '2025-07-08 11:52:09', '2025-07-08 11:52:09', '', 11, 'http://localhost/btc/?p=52', 0, 'revision', '', 0),
(53, 1, '2025-07-08 12:06:48', '2025-07-08 12:06:48', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:06:48', '2025-07-08 12:06:48', '', 2, 'http://localhost/btc/?p=53', 0, 'revision', '', 0),
(54, 1, '2025-07-08 12:07:16', '2025-07-08 12:07:16', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:07:16', '2025-07-08 12:07:16', '', 2, 'http://localhost/btc/?p=54', 0, 'revision', '', 0),
(55, 1, '2025-07-08 12:08:10', '2025-07-08 12:08:10', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:08:10', '2025-07-08 12:08:10', '', 2, 'http://localhost/btc/?p=55', 0, 'revision', '', 0),
(56, 1, '2025-07-08 12:10:26', '2025-07-08 12:10:26', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:10:26', '2025-07-08 12:10:26', '', 2, 'http://localhost/btc/?p=56', 0, 'revision', '', 0),
(57, 1, '2025-07-08 12:11:22', '2025-07-08 12:11:22', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:11:22', '2025-07-08 12:11:22', '', 2, 'http://localhost/btc/?p=57', 0, 'revision', '', 0),
(58, 1, '2025-07-08 12:12:17', '2025-07-08 12:12:17', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:12:17', '2025-07-08 12:12:17', '', 2, 'http://localhost/btc/?p=58', 0, 'revision', '', 0),
(59, 1, '2025-07-08 12:13:45', '2025-07-08 12:13:45', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:13:45', '2025-07-08 12:13:45', '', 2, 'http://localhost/btc/?p=59', 0, 'revision', '', 0),
(60, 1, '2025-07-08 12:13:57', '2025-07-08 12:13:57', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:13:57', '2025-07-08 12:13:57', '', 2, 'http://localhost/btc/?p=60', 0, 'revision', '', 0),
(61, 1, '2025-07-08 12:14:50', '2025-07-08 12:14:50', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:14:50', '2025-07-08 12:14:50', '', 2, 'http://localhost/btc/?p=61', 0, 'revision', '', 0),
(63, 1, '2025-07-08 12:16:43', '2025-07-08 12:16:43', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:16:43', '2025-07-08 12:16:43', '', 2, 'http://localhost/btc/?p=63', 0, 'revision', '', 0),
(64, 1, '2025-07-08 12:17:18', '2025-07-08 12:17:18', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:17:18', '2025-07-08 12:17:18', '', 2, 'http://localhost/btc/?p=64', 0, 'revision', '', 0),
(65, 1, '2025-07-08 12:17:59', '2025-07-08 12:17:59', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:17:59', '2025-07-08 12:17:59', '', 2, 'http://localhost/btc/?p=65', 0, 'revision', '', 0),
(66, 1, '2025-07-08 12:19:08', '2025-07-08 12:19:08', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:19:08', '2025-07-08 12:19:08', '', 2, 'http://localhost/btc/?p=66', 0, 'revision', '', 0),
(67, 1, '2025-07-08 12:19:28', '2025-07-08 12:19:28', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:19:28', '2025-07-08 12:19:28', '', 2, 'http://localhost/btc/?p=67', 0, 'revision', '', 0),
(68, 1, '2025-07-08 12:20:22', '2025-07-08 12:20:22', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:20:22', '2025-07-08 12:20:22', '', 2, 'http://localhost/btc/?p=68', 0, 'revision', '', 0),
(69, 1, '2025-07-08 12:21:43', '2025-07-08 12:21:43', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:21:43', '2025-07-08 12:21:43', '', 2, 'http://localhost/btc/?p=69', 0, 'revision', '', 0),
(70, 1, '2025-07-08 12:35:11', '2025-07-08 12:35:11', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-08 12:35:11', '2025-07-08 12:35:11', '', 2, 'http://localhost/btc/?p=70', 0, 'revision', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(75, 1, '2025-07-09 06:08:37', '2025-07-09 06:08:37', '', 'DSC08735_-1440x780', '', 'inherit', 'open', 'closed', '', 'dsc08735_-1440x780', '', '', '2025-07-09 06:08:37', '2025-07-09 06:08:37', '', 0, 'http://localhost/btc/wp-content/uploads/2025/07/DSC08735_-1440x780-1.jpg', 0, 'attachment', 'image/jpeg', 0),
(76, 1, '2025-07-09 06:08:45', '2025-07-09 06:08:45', '', 'Newspaper,,Journalist,,Backgrounds.', '', 'inherit', 'open', 'closed', '', 'newspaperjournalistbackgrounds', '', '', '2025-07-09 06:08:45', '2025-07-09 06:08:45', '', 0, 'http://localhost/btc/wp-content/uploads/2025/07/shutterstock_766749757-1440x780-1.jpg', 0, 'attachment', 'image/jpeg', 0),
(77, 1, '2025-07-09 06:08:47', '2025-07-09 06:08:47', '', 'BTC logo', '', 'inherit', 'open', 'closed', '', 'btc-logo', '', '', '2025-07-09 06:08:47', '2025-07-09 06:08:47', '', 0, 'http://localhost/btc/wp-content/uploads/2025/07/BTC-logo.png', 0, 'attachment', 'image/png', 0),
(78, 1, '2025-07-09 06:10:34', '2025-07-09 06:10:34', '', 'BTC logo', '', 'inherit', 'open', 'closed', '', 'btc-logo-2', '', '', '2025-07-09 06:10:34', '2025-07-09 06:10:34', '', 0, 'http://localhost/btc/wp-content/uploads/2025/07/BTC-logo-1.png', 0, 'attachment', 'image/png', 0),
(79, 1, '2025-07-09 06:10:50', '2025-07-09 06:10:50', 'http://localhost/btc/wp-content/uploads/2025/07/cropped-BTC-logo-1.png', 'BTC logo', '', 'inherit', 'open', 'closed', '', 'btc-logo-3', '', '', '2025-07-09 06:10:50', '2025-07-09 06:10:50', '', 78, 'http://localhost/btc/wp-content/uploads/2025/07/cropped-BTC-logo-1.png', 0, 'attachment', 'image/png', 0),
(80, 1, '2025-07-09 06:11:33', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-09 06:11:33', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?p=80', 0, 'post', '', 0),
(81, 1, '2025-07-09 07:09:25', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 07:09:25', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=81', 0, 'product', '', 0),
(82, 1, '2025-07-09 07:09:39', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 07:09:39', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=category&p=82', 0, 'category', '', 0),
(83, 1, '2025-07-09 07:10:40', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 07:10:40', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=83', 0, 'product', '', 0),
(84, 1, '2025-07-09 07:12:39', '2025-07-09 07:12:39', 'a:8:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:7:\"product\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";s:12:\"show_in_rest\";i:0;}', 'Category', 'category', 'trash', 'closed', 'closed', '', 'group_686e16057a41e__trashed', '', '', '2025-07-10 08:14:44', '2025-07-10 08:14:44', '', 0, 'http://localhost/btc/?post_type=acf-field-group&#038;p=84', 0, 'acf-field-group', '', 0),
(85, 1, '2025-07-09 07:12:39', '2025-07-09 07:12:39', 'a:17:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:12:\"relationship\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"post_type\";a:1:{i:0;s:8:\"category\";}s:11:\"post_status\";s:0:\"\";s:8:\"taxonomy\";s:0:\"\";s:7:\"filters\";a:1:{i:0;s:9:\"post_type\";}s:13:\"return_format\";s:6:\"object\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:17:\"allow_in_bindings\";i:0;s:8:\"elements\";s:0:\"\";s:13:\"bidirectional\";i:0;s:20:\"bidirectional_target\";a:0:{}}', 'Category', 'category', 'trash', 'closed', 'closed', '', 'field_686e160511db5__trashed', '', '', '2025-07-10 08:14:44', '2025-07-10 08:14:44', '', 84, 'http://localhost/btc/?post_type=acf-field&#038;p=85', 0, 'acf-field', '', 0),
(86, 1, '2025-07-09 07:12:45', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 07:12:45', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=86', 0, 'product', '', 0),
(87, 1, '2025-07-09 07:13:33', '2025-07-09 07:13:33', '', 'Active Wear', '', 'publish', 'closed', 'closed', '', 'active-wear', '', '', '2025-07-11 05:55:50', '2025-07-11 05:55:50', '', 0, 'http://localhost/btc/?post_type=category&#038;p=87', 0, 'category', '', 0),
(88, 1, '2025-07-09 07:14:31', '2025-07-09 07:14:31', '', 'Casual Wear', '', 'publish', 'closed', 'closed', '', 'casual-wear', '', '', '2025-07-09 07:14:31', '2025-07-09 07:14:31', '', 0, 'http://localhost/btc/?post_type=category&#038;p=88', 0, 'category', '', 0),
(89, 1, '2025-07-09 07:15:05', '2025-07-09 07:15:05', '', 'Sleep Wear', '', 'publish', 'closed', 'closed', '', 'sleep-wear', '', '', '2025-07-09 07:15:05', '2025-07-09 07:15:05', '', 0, 'http://localhost/btc/?post_type=category&#038;p=89', 0, 'category', '', 0),
(90, 1, '2025-07-09 07:15:54', '2025-07-09 07:15:54', '', 'Athleisure', '', 'publish', 'closed', 'closed', '', 'athleisure', '', '', '2025-07-11 05:54:01', '2025-07-11 05:54:01', '', 0, 'http://localhost/btc/?post_type=category&#038;p=90', 0, 'category', '', 0),
(91, 1, '2025-07-09 07:16:18', '2025-07-09 07:16:18', '', 'Underwear', '', 'publish', 'closed', 'closed', '', 'underwear', '', '', '2025-07-11 05:21:37', '2025-07-11 05:21:37', '', 0, 'http://localhost/btc/?post_type=category&#038;p=91', 0, 'category', '', 0),
(92, 1, '2025-07-09 07:16:38', '2025-07-09 07:16:38', '', 'Uniforms', '', 'publish', 'closed', 'closed', '', 'uniforms', '', '', '2025-07-11 06:18:58', '2025-07-11 06:18:58', '', 0, 'http://localhost/btc/?post_type=category&#038;p=92', 0, 'category', '', 0),
(93, 1, '2025-07-09 07:18:54', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 07:18:54', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=93', 0, 'product', '', 0),
(94, 1, '2025-07-09 07:19:41', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 07:19:41', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=94', 0, 'product', '', 0),
(95, 1, '2025-07-09 07:20:04', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 07:20:04', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=95', 0, 'product', '', 0),
(96, 1, '2025-07-09 07:34:07', '2025-07-09 07:34:07', '', 'Yoga Pants', '', 'publish', 'closed', 'closed', '', 'yoga-pants', '', '', '2025-07-11 06:46:29', '2025-07-11 06:46:29', '', 0, 'http://localhost/btc/?post_type=product&#038;p=96', 0, 'product', '', 0),
(97, 1, '2025-07-09 07:41:14', '2025-07-09 07:41:14', '', 'Products', '', 'publish', 'closed', 'closed', '', 'products', '', '', '2025-07-11 06:13:42', '2025-07-11 06:13:42', '', 0, 'http://localhost/btc/?page_id=97', 0, 'page', '', 0),
(98, 1, '2025-07-09 07:41:14', '2025-07-09 07:41:14', '', 'Products', '', 'inherit', 'closed', 'closed', '', '97-revision-v1', '', '', '2025-07-09 07:41:14', '2025-07-09 07:41:14', '', 97, 'http://localhost/btc/?p=98', 0, 'revision', '', 0),
(99, 1, '2025-07-09 07:58:42', '2025-07-09 07:58:42', '', 'Why BTC', '', 'publish', 'closed', 'closed', '', 'why-btc', '', '', '2025-07-09 10:23:48', '2025-07-09 10:23:48', '', 0, 'http://localhost/btc/?page_id=99', 0, 'page', '', 0),
(100, 1, '2025-07-09 07:58:42', '2025-07-09 07:58:42', '', 'Why BTC', '', 'inherit', 'closed', 'closed', '', '99-revision-v1', '', '', '2025-07-09 07:58:42', '2025-07-09 07:58:42', '', 99, 'http://localhost/btc/?p=100', 0, 'revision', '', 0),
(101, 1, '2025-07-09 08:24:58', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-09 08:24:58', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?p=101', 0, 'post', '', 0),
(102, 1, '2025-07-09 08:29:52', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 08:29:52', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product_category&p=102', 0, 'product_category', '', 0),
(103, 1, '2025-07-09 08:29:53', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 08:29:53', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product_category&p=103', 0, 'product_category', '', 0),
(104, 1, '2025-07-09 08:30:28', '2025-07-09 08:30:28', '', 'Active Wear', '', 'publish', 'closed', 'closed', '', 'active-wear', '', '', '2025-07-09 08:30:28', '2025-07-09 08:30:28', '', 0, 'http://localhost/btc/?post_type=product_category&#038;p=104', 0, 'product_category', '', 0),
(105, 1, '2025-07-09 08:31:21', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 08:31:21', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product_category&p=105', 0, 'product_category', '', 0),
(106, 1, '2025-07-09 08:32:16', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 08:32:16', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=106', 0, 'product', '', 0),
(107, 1, '2025-07-09 09:28:30', '2025-07-09 09:28:30', '', 'Active Wear', '', 'publish', 'closed', 'closed', '', 'active-wear', '', '', '2025-07-09 09:28:30', '2025-07-09 09:28:30', '', 0, 'http://localhost/btc/?post_type=prodcat&#038;p=107', 0, 'prodcat', '', 0),
(108, 1, '2025-07-09 09:46:26', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 09:46:26', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=event&p=108', 0, 'event', '', 0),
(109, 1, '2025-07-09 09:49:48', '2025-07-09 09:49:48', '', 'Contact Us', '', 'publish', 'closed', 'closed', '', 'contact-us', '', '', '2025-07-09 13:04:30', '2025-07-09 13:04:30', '', 0, 'http://localhost/btc/?page_id=109', 0, 'page', '', 0),
(110, 1, '2025-07-09 09:49:48', '2025-07-09 09:49:48', '', 'Contact Us', '', 'inherit', 'closed', 'closed', '', '109-revision-v1', '', '', '2025-07-09 09:49:48', '2025-07-09 09:49:48', '', 109, 'http://localhost/btc/?p=110', 0, 'revision', '', 0),
(111, 1, '2025-07-09 09:52:21', '2025-07-09 09:52:21', '', 'Event', '', 'publish', 'closed', 'closed', '', 'event-1', '', '', '2025-07-10 11:44:18', '2025-07-10 11:44:18', '', 0, 'http://localhost/btc/?post_type=event&#038;p=111', 0, 'event', '', 0),
(112, 1, '2025-07-09 09:54:53', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 09:54:53', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?page_id=112', 0, 'page', '', 0),
(113, 1, '2025-07-09 09:55:10', '2025-07-09 09:55:10', '', 'Events', '', 'publish', 'closed', 'closed', '', 'all-event', '', '', '2025-07-09 10:24:11', '2025-07-09 10:24:11', '', 0, 'http://localhost/btc/?page_id=113', 0, 'page', '', 0),
(114, 1, '2025-07-09 09:55:10', '2025-07-09 09:55:10', '', 'Events', '', 'inherit', 'closed', 'closed', '', '113-revision-v1', '', '', '2025-07-09 09:55:10', '2025-07-09 09:55:10', '', 113, 'http://localhost/btc/?p=114', 0, 'revision', '', 0),
(115, 1, '2025-07-09 10:04:04', '2025-07-09 10:04:04', '', 'Blogs', '', 'inherit', 'closed', 'closed', '', '30-revision-v1', '', '', '2025-07-09 10:04:04', '2025-07-09 10:04:04', '', 30, 'http://localhost/btc/?p=115', 0, 'revision', '', 0),
(116, 1, '2025-07-09 10:05:33', '2025-07-09 10:05:33', '', 'Blog Listing', '', 'inherit', 'closed', 'closed', '', '30-revision-v1', '', '', '2025-07-09 10:05:33', '2025-07-09 10:05:33', '', 30, 'http://localhost/btc/?p=116', 0, 'revision', '', 0),
(117, 1, '2025-07-09 10:06:30', '2025-07-09 10:06:30', '', 'Blog Listing', '', 'inherit', 'closed', 'closed', '', '30-revision-v1', '', '', '2025-07-09 10:06:30', '2025-07-09 10:06:30', '', 30, 'http://localhost/btc/?p=117', 0, 'revision', '', 0),
(118, 1, '2025-07-09 10:09:38', '2025-07-09 10:09:38', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-09 10:09:38', '2025-07-09 10:09:38', '', 2, 'http://localhost/btc/?p=118', 0, 'revision', '', 0),
(119, 1, '2025-07-09 10:11:27', '2025-07-09 10:11:27', '', 'Home', '', 'inherit', 'closed', 'closed', '', '2-revision-v1', '', '', '2025-07-09 10:11:27', '2025-07-09 10:11:27', '', 2, 'http://localhost/btc/?p=119', 0, 'revision', '', 0),
(120, 1, '2025-07-09 10:23:48', '2025-07-09 10:23:48', '', 'Why BTC', '', 'inherit', 'closed', 'closed', '', '99-revision-v1', '', '', '2025-07-09 10:23:48', '2025-07-09 10:23:48', '', 99, 'http://localhost/btc/?p=120', 0, 'revision', '', 0),
(121, 1, '2025-07-09 10:24:11', '2025-07-09 10:24:11', '', 'Events', '', 'inherit', 'closed', 'closed', '', '113-revision-v1', '', '', '2025-07-09 10:24:11', '2025-07-09 10:24:11', '', 113, 'http://localhost/btc/?p=121', 0, 'revision', '', 0),
(122, 1, '2025-07-09 10:38:01', '2025-07-09 10:38:01', 'a:8:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:8:\"category\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";s:12:\"show_in_rest\";i:0;}', 'Details', 'details', 'publish', 'closed', 'closed', '', 'group_686e44e5365c5', '', '', '2025-07-11 06:19:34', '2025-07-11 06:19:34', '', 0, 'http://localhost/btc/?post_type=acf-field-group&#038;p=122', 0, 'acf-field-group', '', 0),
(123, 1, '2025-07-09 10:38:01', '2025-07-09 10:38:01', 'a:12:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:25:\"Hex color code Ex:#000000\";s:8:\"required\";i:1;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:7:\"#000000\";s:9:\"maxlength\";i:7;s:17:\"allow_in_bindings\";i:0;s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";}', 'Title Color Code', 'title_color_code', 'publish', 'closed', 'closed', '', 'field_686e44e51e5c3', '', '', '2025-07-11 06:19:34', '2025-07-11 06:19:34', '', 122, 'http://localhost/btc/?post_type=acf-field&#038;p=123', 1, 'acf-field', '', 0),
(124, 1, '2025-07-09 10:38:01', '2025-07-09 10:38:01', 'a:12:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:25:\"Hex color code Ex:#000000\";s:8:\"required\";i:1;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:7:\"#000000\";s:9:\"maxlength\";i:7;s:17:\"allow_in_bindings\";i:0;s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";}', 'Tags Color Code', 'tags_color_code', 'publish', 'closed', 'closed', '', 'field_686e453a1e5c4', '', '', '2025-07-11 06:19:34', '2025-07-11 06:19:34', '', 122, 'http://localhost/btc/?post_type=acf-field&#038;p=124', 2, 'acf-field', '', 0),
(125, 1, '2025-07-09 10:38:01', '2025-07-09 10:38:01', 'a:12:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:25:\"Hex color code Ex:#000000\";s:8:\"required\";i:1;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:7:\"#000000\";s:9:\"maxlength\";i:7;s:17:\"allow_in_bindings\";i:0;s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";}', 'Tags Background Color Code', 'tags_background_color_code', 'publish', 'closed', 'closed', '', 'field_686e46561e5c5', '', '', '2025-07-11 06:19:34', '2025-07-11 06:19:34', '', 122, 'http://localhost/btc/?post_type=acf-field&#038;p=125', 3, 'acf-field', '', 0),
(126, 1, '2025-07-09 10:57:38', '2025-07-09 10:57:38', '', 'Textile Park', '', 'publish', 'closed', 'closed', '', 'textile-park', '', '', '2025-07-09 10:57:38', '2025-07-09 10:57:38', '', 0, 'http://localhost/btc/?page_id=126', 0, 'page', '', 0),
(127, 1, '2025-07-09 10:57:38', '2025-07-09 10:57:38', '', 'Textile Park', '', 'inherit', 'closed', 'closed', '', '126-revision-v1', '', '', '2025-07-09 10:57:38', '2025-07-09 10:57:38', '', 126, 'http://localhost/btc/?p=127', 0, 'revision', '', 0),
(128, 1, '2025-07-09 11:00:07', '2025-07-09 11:00:07', '', 'Sustainability', '', 'publish', 'closed', 'closed', '', 'sustainability', '', '', '2025-07-09 11:00:07', '2025-07-09 11:00:07', '', 0, 'http://localhost/btc/?page_id=128', 0, 'page', '', 0),
(129, 1, '2025-07-09 11:00:07', '2025-07-09 11:00:07', '', 'Sustainability', '', 'inherit', 'closed', 'closed', '', '128-revision-v1', '', '', '2025-07-09 11:00:07', '2025-07-09 11:00:07', '', 128, 'http://localhost/btc/?p=129', 0, 'revision', '', 0),
(130, 1, '2025-07-09 11:02:23', '2025-07-09 11:02:23', '', 'Capabilities', '', 'publish', 'closed', 'closed', '', 'capabilities', '', '', '2025-07-09 11:02:23', '2025-07-09 11:02:23', '', 0, 'http://localhost/btc/?page_id=130', 0, 'page', '', 0),
(131, 1, '2025-07-09 11:02:23', '2025-07-09 11:02:23', '', 'Capabilities', '', 'inherit', 'closed', 'closed', '', '130-revision-v1', '', '', '2025-07-09 11:02:23', '2025-07-09 11:02:23', '', 130, 'http://localhost/btc/?p=131', 0, 'revision', '', 0),
(132, 1, '2025-07-09 11:06:23', '2025-07-09 11:06:23', '', 'BTC logo', '', 'inherit', 'open', 'closed', '', 'btc-logo-4', '', '', '2025-07-09 11:06:23', '2025-07-09 11:06:23', '', 0, 'http://localhost/btc/wp-content/uploads/2025/07/BTC-logo.svg', 0, 'attachment', 'image/svg+xml', 0),
(133, 1, '2025-07-09 11:39:45', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 11:39:45', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=client&p=133', 0, 'client', '', 0),
(134, 1, '2025-07-09 12:03:28', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'closed', '', '', '', '', '2025-07-09 12:03:28', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=ufaq&p=134', 0, 'ufaq', '', 0),
(135, 1, '2025-07-09 12:07:37', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-09 12:07:37', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?p=135', 0, 'post', '', 0),
(136, 1, '2025-07-09 12:10:31', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 12:10:31', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=faq&p=136', 0, 'faq', '', 0),
(137, 1, '2025-07-09 12:10:48', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 12:10:48', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=faq&p=137', 0, 'faq', '', 0),
(138, 1, '2025-07-09 12:13:12', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 12:13:12', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=faq&p=138', 0, 'faq', '', 0),
(139, 1, '2025-07-09 12:13:33', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 12:13:33', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=faq&p=139', 0, 'faq', '', 0),
(140, 1, '2025-07-09 12:14:36', '2025-07-09 12:14:36', '<!-- wp:paragraph -->\n<p>Africa’s expected market size of cosmetics is around $21 billion, plus the country\'s young, growing population and rising disposable incomes create a booming market for cosmetics. Untapped demand, natural resources for production, and digital growth make it a high-potential investment destination.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p></p>\n<!-- /wp:paragraph -->', 'Why invest in Africa’s cosmetic sector?', '', 'publish', 'closed', 'closed', '', 'why-invest-in-africas-cosmetic-sector', '', '', '2025-07-09 12:29:41', '2025-07-09 12:29:41', '', 0, 'http://localhost/btc/?post_type=faq&#038;p=140', 0, 'faq', '', 0),
(141, 1, '2025-07-09 12:15:03', '2025-07-09 12:15:03', '<!-- wp:paragraph -->\n<p>Demand is surging due to urbanization, an expanding middle class, and a preference for products catering to diverse skin tones and natural ingredients. Consumers increasingly seek quality, inclusive, and sustainable beauty products.</p>\n<!-- /wp:paragraph -->', 'What is the demand for cosmetics in Africa?', '', 'publish', 'closed', 'closed', '', 'what-is-the-demand-for-cosmetics-in-africa', '', '', '2025-07-09 12:29:27', '2025-07-09 12:29:27', '', 0, 'http://localhost/btc/?post_type=faq&#038;p=141', 0, 'faq', '', 0),
(142, 1, '2025-07-09 12:15:27', '2025-07-09 12:15:27', '<!-- wp:paragraph -->\n<p><a href=\"https://africaforinvestors.com/locations/nigeria\" target=\"_blank\" rel=\"noreferrer noopener\">Nigeria</a>, South Africa, Kenya, and Egypt lead with their large consumer bases, growing e-commerce sectors, and supportive business environments. Emerging markets like Ghana and <a href=\"https://africaforinvestors.com/locations/ivory-coast\" target=\"_blank\" rel=\"noreferrer noopener\">Côte d’Ivoire</a> also show strong growth potential.</p>\n<!-- /wp:paragraph -->', 'Which countries offer the best opportunities in Africa’s cosmetic market?', '', 'publish', 'closed', 'closed', '', 'which-countries-offer-the-best-opportunities-in-africas-cosmetic-market', '', '', '2025-07-09 12:28:42', '2025-07-09 12:28:42', '', 0, 'http://localhost/btc/?post_type=faq&#038;p=142', 0, 'faq', '', 0),
(143, 1, '2025-07-09 12:18:10', '2025-07-09 12:18:10', 'a:8:{s:8:\"location\";a:3:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:7:\"product\";}}i:1;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:8:\"category\";}}i:2;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:4:\"page\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";s:12:\"show_in_rest\";i:0;}', 'FAQ Section', 'faq-section', 'trash', 'closed', 'closed', '', 'group_686e5d9da32cd__trashed', '', '', '2025-07-09 12:20:27', '2025-07-09 12:20:27', '', 0, 'http://localhost/btc/?post_type=acf-field-group&#038;p=143', 0, 'acf-field-group', '', 0),
(144, 1, '2025-07-09 12:18:10', '2025-07-09 12:18:10', 'a:17:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:12:\"relationship\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"post_type\";a:1:{i:0;s:3:\"faq\";}s:11:\"post_status\";s:0:\"\";s:8:\"taxonomy\";s:0:\"\";s:7:\"filters\";a:1:{i:0;s:9:\"post_type\";}s:13:\"return_format\";s:6:\"object\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:17:\"allow_in_bindings\";i:0;s:8:\"elements\";s:0:\"\";s:13:\"bidirectional\";i:0;s:20:\"bidirectional_target\";a:0:{}}', 'faqs', 'faqs', 'trash', 'closed', 'closed', '', 'field_686e5d9da2fef__trashed', '', '', '2025-07-09 12:20:27', '2025-07-09 12:20:27', '', 143, 'http://localhost/btc/?post_type=acf-field&#038;p=144', 0, 'acf-field', '', 0),
(145, 1, '2025-07-09 12:23:03', '2025-07-09 12:23:03', 'a:8:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:3:\"faq\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";s:12:\"show_in_rest\";i:0;}', 'Page Type', 'page-type', 'trash', 'closed', 'closed', '', 'group_686e5e9410630__trashed', '', '', '2025-07-09 12:36:22', '2025-07-09 12:36:22', '', 0, 'http://localhost/btc/?post_type=acf-field-group&#038;p=145', 0, 'acf-field-group', '', 0),
(147, 1, '2025-07-09 12:25:44', '2025-07-09 12:25:44', 'a:17:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:12:\"relationship\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:9:\"post_type\";a:3:{i:0;s:7:\"product\";i:1;s:8:\"category\";i:2;s:4:\"page\";}s:11:\"post_status\";s:0:\"\";s:8:\"taxonomy\";s:0:\"\";s:7:\"filters\";a:1:{i:0;s:9:\"post_type\";}s:13:\"return_format\";s:6:\"object\";s:3:\"min\";s:0:\"\";s:3:\"max\";s:0:\"\";s:17:\"allow_in_bindings\";i:0;s:8:\"elements\";s:0:\"\";s:13:\"bidirectional\";i:0;s:20:\"bidirectional_target\";a:0:{}}', 'Page', 'product', 'trash', 'closed', 'closed', '', 'field_686e5fa6c9a91__trashed', '', '', '2025-07-09 12:36:22', '2025-07-09 12:36:22', '', 145, 'http://localhost/btc/?post_type=acf-field&#038;p=147', 0, 'acf-field', '', 0),
(148, 1, '2025-07-09 12:29:04', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 12:29:04', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=faq&p=148', 0, 'faq', '', 0),
(149, 1, '2025-07-09 12:40:06', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-09 12:40:06', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=149', 0, 'product', '', 0),
(150, 1, '2025-07-10 05:46:41', '2025-07-10 05:46:41', '', 'Peek & Cloppenburg', '', 'publish', 'closed', 'closed', '', 'peek-cloppenburg', '', '', '2025-07-10 12:41:45', '2025-07-10 12:41:45', '', 0, 'http://localhost/btc/?post_type=client&#038;p=150', 0, 'client', '', 0),
(152, 1, '2025-07-10 05:46:49', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 05:46:49', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=client&p=152', 0, 'client', '', 0),
(153, 1, '2025-07-10 05:48:52', '2025-07-10 05:48:52', 'Peek & Cloppenburg', 'Peek & Cloppenburg', 'Peek & Cloppenburg', 'inherit', 'open', 'closed', '', 'peek-cloppenburg-2', '', '', '2025-07-10 05:49:01', '2025-07-10 05:49:01', '', 150, 'http://localhost/btc/wp-content/uploads/2025/07/Peek-Cloppenburg.png', 0, 'attachment', 'image/png', 0),
(154, 1, '2025-07-10 05:59:06', '2025-07-10 05:59:06', '', 'Celio', '', 'publish', 'closed', 'closed', '', 'celio', '', '', '2025-07-10 12:41:38', '2025-07-10 12:41:38', '', 0, 'http://localhost/btc/?post_type=client&#038;p=154', 0, 'client', '', 0),
(155, 1, '2025-07-10 05:58:54', '2025-07-10 05:58:54', '', 'celio', '', 'inherit', 'open', 'closed', '', 'celio', '', '', '2025-07-10 05:58:54', '2025-07-10 05:58:54', '', 154, 'http://localhost/btc/wp-content/uploads/2025/07/celio.png', 0, 'attachment', 'image/png', 0),
(156, 1, '2025-07-10 05:59:48', '2025-07-10 05:59:48', '', 'El Corte Inglés', '', 'publish', 'closed', 'closed', '', 'el-corte-ingles', '', '', '2025-07-10 12:41:31', '2025-07-10 12:41:31', '', 0, 'http://localhost/btc/?post_type=client&#038;p=156', 0, 'client', '', 0),
(157, 1, '2025-07-10 05:59:34', '2025-07-10 05:59:34', 'El Corte Inglés', 'El Corte Inglés', 'El Corte Inglés', 'inherit', 'open', 'closed', '', 'el-corte-ingles', '', '', '2025-07-10 05:59:43', '2025-07-10 05:59:43', '', 156, 'http://localhost/btc/wp-content/uploads/2025/07/El-Corte-Ingles.png', 0, 'attachment', 'image/png', 0),
(158, 1, '2025-07-10 06:04:13', '2025-07-10 06:04:13', '', 'Gemo', '', 'publish', 'closed', 'closed', '', 'gemo', '', '', '2025-07-10 12:41:19', '2025-07-10 12:41:19', '', 0, 'http://localhost/btc/?post_type=client&#038;p=158', 0, 'client', '', 0),
(159, 1, '2025-07-10 06:04:01', '2025-07-10 06:04:01', 'Gemo', 'Gemo', 'Gemo', 'inherit', 'open', 'closed', '', 'gemo', '', '', '2025-07-10 06:04:07', '2025-07-10 06:04:07', '', 158, 'http://localhost/btc/wp-content/uploads/2025/07/Gemo.png', 0, 'attachment', 'image/png', 0),
(160, 1, '2025-07-10 06:04:38', '2025-07-10 06:04:38', '', 'Kiabi', '', 'publish', 'closed', 'closed', '', '160', '', '', '2025-07-10 12:41:10', '2025-07-10 12:41:10', '', 0, 'http://localhost/btc/?post_type=client&#038;p=160', 0, 'client', '', 0),
(161, 1, '2025-07-10 06:04:30', '2025-07-10 06:04:30', 'kiabi', 'kiabi', 'kiabi', 'inherit', 'open', 'closed', '', 'kiabi', '', '', '2025-07-10 06:04:36', '2025-07-10 06:04:36', '', 160, 'http://localhost/btc/wp-content/uploads/2025/07/kiabi.png', 0, 'attachment', 'image/png', 0),
(162, 1, '2025-07-10 06:05:41', '2025-07-10 06:05:41', '', 'Mango', '', 'publish', 'closed', 'closed', '', 'mango', '', '', '2025-07-10 12:41:04', '2025-07-10 12:41:04', '', 0, 'http://localhost/btc/?post_type=client&#038;p=162', 0, 'client', '', 0),
(163, 1, '2025-07-10 06:05:26', '2025-07-10 06:05:26', 'Mango', 'Mango', 'Mango', 'inherit', 'open', 'closed', '', 'mango', '', '', '2025-07-10 06:05:38', '2025-07-10 06:05:38', '', 162, 'http://localhost/btc/wp-content/uploads/2025/07/Mango.png', 0, 'attachment', 'image/png', 0),
(164, 1, '2025-07-10 06:05:47', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:05:47', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=client&p=164', 0, 'client', '', 0),
(166, 1, '2025-07-10 06:06:51', '2025-07-10 06:06:51', '', 'place', '', 'inherit', 'open', 'closed', '', 'place', '', '', '2025-07-10 06:06:51', '2025-07-10 06:06:51', '', 0, 'http://localhost/btc/wp-content/uploads/2025/07/place.png', 0, 'attachment', 'image/png', 0),
(167, 1, '2025-07-10 06:08:02', '2025-07-10 06:08:02', '', 'Place', '', 'publish', 'closed', 'closed', '', 'place', '', '', '2025-07-10 12:40:54', '2025-07-10 12:40:54', '', 0, 'http://localhost/btc/?post_type=client&#038;p=167', 0, 'client', '', 0),
(168, 1, '2025-07-10 06:07:45', '2025-07-10 06:07:45', 'Place', 'Place', 'Place', 'inherit', 'open', 'closed', '', 'place-2', '', '', '2025-07-10 06:07:59', '2025-07-10 06:07:59', '', 167, 'http://localhost/btc/wp-content/uploads/2025/07/place-1.png', 0, 'attachment', 'image/png', 0),
(169, 1, '2025-07-10 06:08:50', '2025-07-10 06:08:50', '', 'US Polo Assn', '', 'publish', 'closed', 'closed', '', 'us-polo-assn', '', '', '2025-07-10 12:40:47', '2025-07-10 12:40:47', '', 0, 'http://localhost/btc/?post_type=client&#038;p=169', 0, 'client', '', 0),
(170, 1, '2025-07-10 06:08:19', '2025-07-10 06:08:19', 'US Polo Assn', 'us polo assn', 'US Polo Assn', 'inherit', 'open', 'closed', '', 'us-polo-assn', '', '', '2025-07-10 06:08:48', '2025-07-10 06:08:48', '', 169, 'http://localhost/btc/wp-content/uploads/2025/07/us-polo-assn.png', 0, 'attachment', 'image/png', 0),
(171, 1, '2025-07-10 06:09:36', '2025-07-10 06:09:36', '', 'Walmart', '', 'publish', 'closed', 'closed', '', 'walmart', '', '', '2025-07-10 12:34:51', '2025-07-10 12:34:51', '', 0, 'http://localhost/btc/?post_type=client&#038;p=171', 0, 'client', '', 0),
(172, 1, '2025-07-10 06:09:26', '2025-07-10 06:09:26', 'Walmart', 'Walmart', 'Walmart', 'inherit', 'open', 'closed', '', 'walmart', '', '', '2025-07-10 06:09:32', '2025-07-10 06:09:32', '', 171, 'http://localhost/btc/wp-content/uploads/2025/07/Walmart.png', 0, 'attachment', 'image/png', 0),
(173, 1, '2025-07-10 06:09:56', '2025-07-10 06:09:56', '', 'ZARA', '', 'publish', 'closed', 'closed', '', 'zara', '', '', '2025-07-10 12:34:38', '2025-07-10 12:34:38', '', 0, 'http://localhost/btc/?post_type=client&#038;p=173', 0, 'client', '', 0),
(174, 1, '2025-07-10 06:09:46', '2025-07-10 06:09:46', 'zara', 'zara', 'zara', 'inherit', 'open', 'closed', '', 'zara', '', '', '2025-07-10 06:09:53', '2025-07-10 06:09:53', '', 173, 'http://localhost/btc/wp-content/uploads/2025/07/zara.png', 0, 'attachment', 'image/png', 0),
(175, 1, '2025-07-10 06:23:24', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:23:24', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=175', 0, 'product', '', 0),
(176, 1, '2025-07-10 06:32:10', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:32:10', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=176', 0, 'customization_type', '', 0),
(180, 1, '2025-07-10 06:40:35', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:40:35', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=180', 0, 'customization_type', '', 0),
(181, 1, '2025-07-10 06:41:05', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:41:05', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=181', 0, 'customization_type', '', 0),
(182, 1, '2025-07-10 06:41:10', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:41:10', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=182', 0, 'customization_type', '', 0),
(183, 1, '2025-07-10 06:41:13', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:41:13', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=183', 0, 'customization_type', '', 0),
(184, 1, '2025-07-10 06:41:21', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:41:21', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=184', 0, 'customization_type', '', 0),
(185, 1, '2025-07-10 06:41:34', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:41:34', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=185', 0, 'customization_type', '', 0),
(186, 1, '2025-07-10 06:41:36', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:41:36', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=186', 0, 'customization_type', '', 0),
(187, 1, '2025-07-10 06:42:02', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:42:02', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=187', 0, 'customization_type', '', 0),
(188, 1, '2025-07-10 06:42:08', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 06:42:08', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=188', 0, 'customization_type', '', 0),
(189, 1, '2025-07-10 07:04:11', '2025-07-10 07:04:11', '<!-- wp:paragraph -->\n<p>All fabrics used for Activewear are chosen to maximize comfort, flexibility, and performance</p>\n<!-- /wp:paragraph -->', 'Fabric Types', '', 'publish', 'closed', 'closed', '', 'fabric-types', '', '', '2025-07-10 12:46:32', '2025-07-10 12:46:32', '', 0, 'http://localhost/btc/?post_type=customiz_category&#038;p=189', 0, 'customiz_category', '', 0),
(190, 1, '2025-07-10 07:04:24', '2025-07-10 07:04:24', '<!-- wp:paragraph -->\n<p>Activewear uses yarn counts tailored to performance needs and durability</p>\n<!-- /wp:paragraph -->', 'Yarn Count', '', 'publish', 'closed', 'closed', '', 'yarn-count', '', '', '2025-07-10 12:46:38', '2025-07-10 12:46:38', '', 0, 'http://localhost/btc/?post_type=customiz_category&#038;p=190', 0, 'customiz_category', '', 0),
(191, 1, '2025-07-10 07:04:41', '2025-07-10 07:04:41', '<!-- wp:paragraph -->\n<p>These enhancements are designed to boost performance, style, and overall garment quality</p>\n<!-- /wp:paragraph -->', 'Value Addition', '', 'publish', 'closed', 'closed', '', 'value-addition', '', '', '2025-07-10 12:46:44', '2025-07-10 12:46:44', '', 0, 'http://localhost/btc/?post_type=customiz_category&#038;p=191', 0, 'customiz_category', '', 0),
(192, 1, '2025-07-10 07:14:43', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 07:14:43', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=192', 0, 'customization_type', '', 0),
(193, 1, '2025-07-10 07:15:00', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 07:15:00', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=193', 0, 'customization_type', '', 0),
(194, 1, '2025-07-10 07:15:20', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 07:15:20', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=194', 0, 'customization_type', '', 0),
(195, 1, '2025-07-10 07:15:31', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 07:15:31', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=195', 0, 'customization_type', '', 0),
(196, 1, '2025-07-10 07:15:38', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 07:15:38', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customization_type&p=196', 0, 'customization_type', '', 0),
(197, 1, '2025-07-10 07:16:20', '2025-07-10 07:16:20', '<!-- wp:paragraph -->\n<p>Lightweight, breathable; ideal for performance t-shirts &amp; base layers</p>\n<!-- /wp:paragraph -->', 'Single Jersey', '', 'publish', 'closed', 'closed', '', 'single-jersey', '', '', '2025-07-10 07:16:20', '2025-07-10 07:16:20', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=197', 0, 'customization_type', '', 0),
(198, 1, '2025-07-10 07:17:50', '2025-07-10 07:17:50', '<!-- wp:paragraph -->\n<p>Structured and breathable; commonly used in sports polos</p>\n<!-- /wp:paragraph -->', 'Pique', '', 'publish', 'closed', 'closed', '', 'pique', '', '', '2025-07-10 07:17:50', '2025-07-10 07:17:50', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=198', 0, 'customization_type', '', 0),
(199, 1, '2025-07-10 07:19:18', '2025-07-10 07:19:18', '<!-- wp:paragraph -->\n<p>Brushed inner surface for warmth; used in hoodies and winter activewear</p>\n<!-- /wp:paragraph -->', 'Fleece', '', 'publish', 'closed', 'closed', '', 'fleece', '', '', '2025-07-10 07:19:18', '2025-07-10 07:19:18', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=199', 0, 'customization_type', '', 0),
(200, 1, '2025-07-10 07:19:45', '2025-07-10 07:19:45', '<!-- wp:paragraph -->\n<p>Loop-backed, great for sweatshirts, joggers &amp; casual gym wear</p>\n<!-- /wp:paragraph -->', 'Terry (French Terry)', '', 'publish', 'closed', 'closed', '', 'terry-french-terry', '', '', '2025-07-10 07:19:45', '2025-07-10 07:19:45', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=200', 0, 'customization_type', '', 0),
(201, 1, '2025-07-10 07:20:02', '2025-07-10 07:20:02', '<!-- wp:paragraph -->\n<p>Used for cuffs, collars, waistbands, and high-flex zones</p>\n<!-- /wp:paragraph -->', 'Ribs', '', 'publish', 'closed', 'closed', '', 'ribs', '', '', '2025-07-10 07:20:02', '2025-07-10 07:20:02', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=201', 0, 'customization_type', '', 0),
(202, 1, '2025-07-10 07:20:53', '2025-07-10 07:20:53', '<!-- wp:paragraph -->\n<p>Heavier and thicker knits, ideal for fleece, terry joggers, and hoodies</p>\n<!-- /wp:paragraph -->', '10’s to 20’s', '', 'publish', 'closed', 'closed', '', '10s-to-20s', '', '', '2025-07-10 07:20:53', '2025-07-10 07:20:53', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=202', 0, 'customization_type', '', 0),
(203, 1, '2025-07-10 07:21:20', '2025-07-10 07:21:20', '<!-- wp:paragraph -->\n<p>Mid-weight for t-shirts, polos, and training wear</p>\n<!-- /wp:paragraph -->', '20’s to 30’s', '', 'publish', 'closed', 'closed', '', '20s-to-30s', '', '', '2025-07-10 07:21:20', '2025-07-10 07:21:20', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=203', 0, 'customization_type', '', 0),
(204, 1, '2025-07-10 07:21:38', '2025-07-10 07:21:38', '<!-- wp:paragraph -->\n<p>Lightweight, used in base layers, breathable tees, and performance tops</p>\n<!-- /wp:paragraph -->', '30’s to 45’s', '', 'publish', 'closed', 'closed', '', '30s-to-45s', '', '', '2025-07-10 07:21:38', '2025-07-10 07:21:38', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=204', 0, 'customization_type', '', 0),
(205, 1, '2025-07-10 08:10:04', '2025-07-10 08:10:04', '<!-- wp:paragraph -->\n<p>Deep, lasting colors for stripes and heathers; great for polos and tees.</p>\n<!-- /wp:paragraph -->', 'Yarn Dyeing', '', 'publish', 'closed', 'closed', '', 'yarn-dyeing', '', '', '2025-07-10 08:10:04', '2025-07-10 08:10:04', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=205', 0, 'customization_type', '', 0),
(206, 1, '2025-07-10 08:10:24', '2025-07-10 08:10:24', '<!-- wp:paragraph -->\n<p>Sublimation, heat transfer, and pigment prints for bold graphics and logos.</p>\n<!-- /wp:paragraph -->', 'Printing', '', 'publish', 'closed', 'closed', '', 'printing', '', '', '2025-07-10 08:10:24', '2025-07-10 08:10:24', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=206', 0, 'customization_type', '', 0),
(207, 1, '2025-07-10 08:10:37', '2025-07-10 08:10:37', '<!-- wp:paragraph -->\n<p>Clean, minimal branding on active jackets, hoodies, and polos.</p>\n<!-- /wp:paragraph -->', 'Embroidery', '', 'publish', 'closed', 'closed', '', 'embroidery', '', '', '2025-07-10 08:11:48', '2025-07-10 08:11:48', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=207', 0, 'customization_type', '', 0),
(208, 1, '2025-07-10 08:10:50', '2025-07-10 08:10:50', '<!-- wp:paragraph -->\n<p>Enzyme/silicone washes for extra softness, better shrinkage control, and comfort.</p>\n<!-- /wp:paragraph -->', 'Laundry', '', 'publish', 'closed', 'closed', '', 'laundry', '', '', '2025-07-10 08:11:58', '2025-07-10 08:11:58', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=208', 0, 'customization_type', '', 0),
(209, 1, '2025-07-10 08:11:06', '2025-07-10 08:11:06', '<!-- wp:paragraph -->\n<p>In-knit stripe patterns for a sporty look, no need for extra printing.</p>\n<!-- /wp:paragraph -->', 'Auto Striper', '', 'publish', 'closed', 'closed', '', 'auto-striper', '', '', '2025-07-10 12:37:05', '2025-07-10 12:37:05', '', 0, 'http://localhost/btc/?post_type=customization_type&#038;p=209', 0, 'customization_type', '', 0),
(210, 1, '2025-07-10 08:13:15', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 08:13:15', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=210', 0, 'product', '', 0),
(211, 1, '2025-07-10 08:20:11', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 08:20:11', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=category&p=211', 0, 'category', '', 0),
(212, 1, '2025-07-10 08:20:15', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 08:20:15', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=category&p=212', 0, 'category', '', 0),
(213, 1, '2025-07-10 08:20:17', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 08:20:17', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=category&p=213', 0, 'category', '', 0),
(214, 1, '2025-07-10 08:24:29', '2025-07-10 08:24:29', '', 'Gym T-Shirts', '', 'publish', 'closed', 'closed', '', 'gym-t-shirts', '', '', '2025-07-11 07:00:56', '2025-07-11 07:00:56', '', 0, 'http://localhost/btc/?post_type=product&#038;p=214', 0, 'product', '', 0),
(215, 1, '2025-07-10 08:25:01', '2025-07-10 08:25:01', '', 'T-Shirts', '', 'publish', 'closed', 'closed', '', 't-shirts', '', '', '2025-07-10 10:00:57', '2025-07-10 10:00:57', '', 0, 'http://localhost/btc/?post_type=product&#038;p=215', 0, 'product', '', 0),
(216, 1, '2025-07-10 08:36:11', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 08:36:11', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=216', 0, 'product', '', 0),
(218, 1, '2025-07-10 09:59:52', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 09:59:52', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=product&p=218', 0, 'product', '', 0),
(219, 1, '2025-07-10 10:15:47', '2025-07-10 10:15:47', '<!-- wp:paragraph -->\n<p>Chief Operating Officer</p>\n<!-- /wp:paragraph -->', 'Josi Vireshwar', '', 'publish', 'closed', 'closed', '', 'josi-vireshwar', '', '', '2025-07-10 10:15:47', '2025-07-10 10:15:47', '', 0, 'http://localhost/btc/?post_type=leadership&#038;p=219', 0, 'leadership', '', 0),
(220, 1, '2025-07-10 10:16:51', '2025-07-10 10:16:51', '<!-- wp:paragraph -->\n<p>Senior Vice President, Marketing</p>\n<!-- /wp:paragraph -->', 'Vikas Budhiraj', '', 'publish', 'closed', 'closed', '', 'vikas-budhiraj', '', '', '2025-07-10 10:16:51', '2025-07-10 10:16:51', '', 0, 'http://localhost/btc/?post_type=leadership&#038;p=220', 0, 'leadership', '', 0),
(221, 1, '2025-07-10 10:18:33', '2025-07-10 10:18:33', '<!-- wp:paragraph -->\n<p>Head of Textile Operations</p>\n<!-- /wp:paragraph -->', 'R. Periyaponnam', '', 'publish', 'closed', 'closed', '', 'r-periyaponnam', '', '', '2025-07-10 10:18:33', '2025-07-10 10:18:33', '', 0, 'http://localhost/btc/?post_type=leadership&#038;p=221', 0, 'leadership', '', 0),
(222, 1, '2025-07-10 10:19:27', '2025-07-10 10:19:27', '<!-- wp:paragraph -->\n<p>Chief Financial Officer</p>\n<!-- /wp:paragraph -->', 'Landry Echui', '', 'publish', 'closed', 'closed', '', 'landry-echui', '', '', '2025-07-10 10:19:27', '2025-07-10 10:19:27', '', 0, 'http://localhost/btc/?post_type=leadership&#038;p=222', 0, 'leadership', '', 0),
(223, 1, '2025-07-10 10:20:28', '2025-07-10 10:20:28', '<!-- wp:paragraph -->\n<p>Sr. General Manager for Garmenting Operations</p>\n<!-- /wp:paragraph -->', 'Girish Sannappa', '', 'publish', 'closed', 'closed', '', 'girish-sannappa', '', '', '2025-07-10 12:37:59', '2025-07-10 12:37:59', '', 0, 'http://localhost/btc/?post_type=leadership&#038;p=223', 0, 'leadership', '', 0),
(224, 1, '2025-07-10 10:30:04', '2025-07-10 10:30:04', '<!-- wp:paragraph -->\n<p><strong>Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>\n<!-- /wp:paragraph -->', 'What is Lorem Ipsum?', '', 'publish', 'closed', 'closed', '', 'heading', '', '', '2025-07-11 04:55:44', '2025-07-11 04:55:44', '', 0, 'http://localhost/btc/?post_type=homecapability&#038;p=224', 0, 'homecapability', '', 0),
(225, 1, '2025-07-10 11:04:15', '2025-07-10 11:04:15', 'a:8:{s:8:\"location\";a:1:{i:0;a:1:{i:0;a:3:{s:5:\"param\";s:9:\"post_type\";s:8:\"operator\";s:2:\"==\";s:5:\"value\";s:5:\"event\";}}}s:8:\"position\";s:6:\"normal\";s:5:\"style\";s:7:\"default\";s:15:\"label_placement\";s:3:\"top\";s:21:\"instruction_placement\";s:5:\"label\";s:14:\"hide_on_screen\";s:0:\"\";s:11:\"description\";s:0:\"\";s:12:\"show_in_rest\";i:0;}', 'Event Details', 'event-details', 'publish', 'closed', 'closed', '', 'group_686f9d7353f8a', '', '', '2025-07-10 11:06:44', '2025-07-10 11:06:44', '', 0, 'http://localhost/btc/?post_type=acf-field-group&#038;p=225', 0, 'acf-field-group', '', 0),
(226, 1, '2025-07-10 11:04:15', '2025-07-10 11:04:15', 'a:12:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:9:\"maxlength\";i:50;s:17:\"allow_in_bindings\";i:0;s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";}', 'Event Location', 'event_location', 'publish', 'closed', 'closed', '', 'field_686f9d731b8df', '', '', '2025-07-10 11:04:15', '2025-07-10 11:04:15', '', 225, 'http://localhost/btc/?post_type=acf-field&p=226', 0, 'acf-field', '', 0),
(227, 1, '2025-07-10 11:04:15', '2025-07-10 11:04:15', 'a:10:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:11:\"date_picker\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:1;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:14:\"display_format\";s:5:\"d/m/Y\";s:13:\"return_format\";s:5:\"d/m/Y\";s:9:\"first_day\";i:1;s:17:\"allow_in_bindings\";i:0;}', 'Event Data', 'event_data', 'publish', 'closed', 'closed', '', 'field_686f9da31b8e0', '', '', '2025-07-10 11:04:15', '2025-07-10 11:04:15', '', 225, 'http://localhost/btc/?post_type=acf-field&p=227', 1, 'acf-field', '', 0);
INSERT INTO `wp_posts` (`ID`, `post_author`, `post_date`, `post_date_gmt`, `post_content`, `post_title`, `post_excerpt`, `post_status`, `comment_status`, `ping_status`, `post_password`, `post_name`, `to_ping`, `pinged`, `post_modified`, `post_modified_gmt`, `post_content_filtered`, `post_parent`, `guid`, `menu_order`, `post_type`, `post_mime_type`, `comment_count`) VALUES
(229, 1, '2025-07-10 11:06:44', '2025-07-10 11:06:44', 'a:12:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:8:\"textarea\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:9:\"maxlength\";s:0:\"\";s:17:\"allow_in_bindings\";i:0;s:4:\"rows\";s:0:\"\";s:11:\"placeholder\";s:0:\"\";s:9:\"new_lines\";s:0:\"\";}', 'Map Embed Code', 'map_embed_code', 'publish', 'closed', 'closed', '', 'field_686f9e6ffe130', '', '', '2025-07-10 11:06:44', '2025-07-10 11:06:44', '', 225, 'http://localhost/btc/?post_type=acf-field&p=229', 2, 'acf-field', '', 0),
(230, 1, '2025-07-10 11:11:29', '2025-07-10 11:11:29', '', 'New Slideshow', '', 'publish', 'closed', 'closed', '', 'new-slideshow', '', '', '2025-07-10 11:11:29', '2025-07-10 11:11:29', '', 0, 'http://localhost/btc/?post_type=ml-slider&p=230', 0, 'ml-slider', '', 0),
(231, 1, '2025-07-10 11:11:54', '2025-07-10 11:11:54', '', 'celio', '', 'inherit', 'open', 'closed', '', 'celio-2', '', '', '2025-07-10 11:11:54', '2025-07-10 11:11:54', '', 0, 'http://localhost/btc/wp-content/uploads/2025/07/celio-1.png', 0, 'attachment', 'image/png', 0),
(232, 1, '2025-07-10 11:11:56', '2025-07-10 11:11:56', '', 'Slider 230 - image', '', 'publish', 'closed', 'closed', '', 'slider-230-image', '', '', '2025-07-10 11:12:22', '2025-07-10 11:12:22', '', 0, 'http://localhost/btc/?post_type=ml-slide&#038;p=232', 0, 'ml-slide', '', 0),
(233, 1, '2025-07-10 11:12:14', '2025-07-10 11:12:14', '', 'Slider 230 - image', '', 'publish', 'closed', 'closed', '', 'slider-230-image-2', '', '', '2025-07-10 11:12:22', '2025-07-10 11:12:22', '', 0, 'http://localhost/btc/?post_type=ml-slide&#038;p=233', 1, 'ml-slide', '', 0),
(234, 1, '2025-07-10 11:14:35', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 11:14:35', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=acf-field-group&p=234', 0, 'acf-field-group', '', 0),
(235, 1, '2025-07-10 11:32:37', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 11:32:37', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?page_id=235', 0, 'page', '', 0),
(236, 1, '2025-07-10 11:32:39', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 11:32:39', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=event&p=236', 0, 'event', '', 0),
(237, 1, '2025-07-10 12:34:44', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 12:34:44', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=client&p=237', 0, 'client', '', 0),
(238, 1, '2025-07-10 12:59:01', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 12:59:01', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=event&p=238', 0, 'event', '', 0),
(239, 1, '2025-07-10 13:06:16', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'closed', 'closed', '', '', '', '', '2025-07-10 13:06:16', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?post_type=customiz_category&p=239', 0, 'customiz_category', '', 0),
(240, 1, '2025-07-11 04:56:39', '2025-07-11 04:56:39', '<!-- wp:paragraph -->\n<p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>\n<!-- /wp:paragraph -->', 'Why do we use it?', '', 'publish', 'closed', 'closed', '', 'why-do-we-use-it', '', '', '2025-07-11 04:56:39', '2025-07-11 04:56:39', '', 0, 'http://localhost/btc/?post_type=homecapability&#038;p=240', 0, 'homecapability', '', 0),
(241, 1, '2025-07-11 05:05:47', '2025-07-11 05:05:47', '', 'Crafted for Qualityand Sustainability', '', 'inherit', 'closed', 'closed', '', '97-revision-v1', '', '', '2025-07-11 05:05:47', '2025-07-11 05:05:47', '', 97, 'http://localhost/btc/?p=241', 0, 'revision', '', 0),
(242, 1, '2025-07-11 05:10:55', '2025-07-11 05:10:55', '', 'pexels-nicole-avagliano-1132392-2749481', '', 'inherit', 'open', 'closed', '', 'pexels-nicole-avagliano-1132392-2749481', '', '', '2025-07-11 05:10:55', '2025-07-11 05:10:55', '', 97, 'http://localhost/btc/wp-content/uploads/2025/07/pexels-nicole-avagliano-1132392-2749481.jpg', 0, 'attachment', 'image/jpeg', 0),
(243, 1, '2025-07-11 05:12:41', '0000-00-00 00:00:00', '', 'Auto Draft', '', 'auto-draft', 'open', 'open', '', '', '', '', '2025-07-11 05:12:41', '0000-00-00 00:00:00', '', 0, 'http://localhost/btc/?p=243', 0, 'post', '', 0),
(244, 1, '2025-07-11 05:12:52', '2025-07-11 05:12:52', '', 'pexels-nicole-avagliano-1132392-2749481', '', 'inherit', 'open', 'closed', '', 'pexels-nicole-avagliano-1132392-2749481-2', '', '', '2025-07-11 05:12:52', '2025-07-11 05:12:52', '', 0, 'http://localhost/btc/wp-content/uploads/2025/07/pexels-nicole-avagliano-1132392-2749481.webp', 0, 'attachment', 'image/webp', 0),
(246, 1, '2025-07-11 05:44:33', '2025-07-11 05:44:33', '', 'Vests', '', 'publish', 'closed', 'closed', '', 'vests', '', '', '2025-07-11 05:44:33', '2025-07-11 05:44:33', '', 0, 'http://localhost/btc/?post_type=product&#038;p=246', 0, 'product', '', 0),
(247, 1, '2025-07-11 05:45:10', '2025-07-11 05:45:10', '', 'shopping', '', 'inherit', 'open', 'closed', '', 'shopping', '', '', '2025-07-11 05:45:10', '2025-07-11 05:45:10', '', 92, 'http://localhost/btc/wp-content/uploads/2025/07/shopping.webp', 0, 'attachment', 'image/webp', 0),
(248, 1, '2025-07-11 06:13:42', '2025-07-11 06:13:42', '', 'Products', '', 'inherit', 'closed', 'closed', '', '97-revision-v1', '', '', '2025-07-11 06:13:42', '2025-07-11 06:13:42', '', 97, 'http://localhost/btc/?p=248', 0, 'revision', '', 0),
(249, 1, '2025-07-11 06:18:39', '2025-07-11 06:18:39', 'a:12:{s:10:\"aria-label\";s:0:\"\";s:4:\"type\";s:4:\"text\";s:12:\"instructions\";s:0:\"\";s:8:\"required\";i:0;s:17:\"conditional_logic\";i:0;s:7:\"wrapper\";a:3:{s:5:\"width\";s:0:\"\";s:5:\"class\";s:0:\"\";s:2:\"id\";s:0:\"\";}s:13:\"default_value\";s:0:\"\";s:9:\"maxlength\";i:100;s:17:\"allow_in_bindings\";i:0;s:11:\"placeholder\";s:0:\"\";s:7:\"prepend\";s:0:\"\";s:6:\"append\";s:0:\"\";}', 'Sub Title', 'sub_title', 'publish', 'closed', 'closed', '', 'field_6870ac98f309c', '', '', '2025-07-11 06:19:34', '2025-07-11 06:19:34', '', 122, 'http://localhost/btc/?post_type=acf-field&#038;p=249', 0, 'acf-field', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_termmeta`
--

CREATE TABLE `wp_termmeta` (
  `meta_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

-- --------------------------------------------------------

--
-- Table structure for table `wp_terms`
--

CREATE TABLE `wp_terms` (
  `term_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL DEFAULT '',
  `slug` varchar(200) NOT NULL DEFAULT '',
  `term_group` bigint(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_terms`
--

INSERT INTO `wp_terms` (`term_id`, `name`, `slug`, `term_group`) VALUES
(1, 'News', 'news', 0),
(2, 'twentytwentyfive', 'twentytwentyfive', 0),
(3, 'Blogs', 'blogs', 0),
(4, '230', '230', 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_relationships`
--

CREATE TABLE `wp_term_relationships` (
  `object_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `term_order` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_relationships`
--

INSERT INTO `wp_term_relationships` (`object_id`, `term_taxonomy_id`, `term_order`) VALUES
(1, 1, 0),
(7, 2, 0),
(8, 3, 0),
(11, 3, 0),
(232, 4, 0),
(233, 4, 0);

-- --------------------------------------------------------

--
-- Table structure for table `wp_term_taxonomy`
--

CREATE TABLE `wp_term_taxonomy` (
  `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL,
  `term_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `taxonomy` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `parent` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `count` bigint(20) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_term_taxonomy`
--

INSERT INTO `wp_term_taxonomy` (`term_taxonomy_id`, `term_id`, `taxonomy`, `description`, `parent`, `count`) VALUES
(1, 1, 'category', '', 0, 0),
(2, 2, 'wp_theme', '', 0, 1),
(3, 3, 'category', '', 0, 2),
(4, 4, 'ml-slider', '', 0, 2);

-- --------------------------------------------------------

--
-- Table structure for table `wp_usermeta`
--

CREATE TABLE `wp_usermeta` (
  `umeta_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL DEFAULT 0,
  `meta_key` varchar(255) DEFAULT NULL,
  `meta_value` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_usermeta`
--

INSERT INTO `wp_usermeta` (`umeta_id`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 1, 'nickname', 'superadmin'),
(2, 1, 'first_name', ''),
(3, 1, 'last_name', ''),
(4, 1, 'description', ''),
(5, 1, 'rich_editing', 'true'),
(6, 1, 'syntax_highlighting', 'true'),
(7, 1, 'comment_shortcuts', 'false'),
(8, 1, 'admin_color', 'coffee'),
(9, 1, 'use_ssl', '0'),
(10, 1, 'show_admin_bar_front', 'true'),
(11, 1, 'locale', ''),
(12, 1, 'wp_capabilities', 'a:1:{s:13:\"administrator\";b:1;}'),
(13, 1, 'wp_user_level', '10'),
(14, 1, 'dismissed_wp_pointers', 'plugin_editor_notice,theme_editor_notice'),
(15, 1, 'show_welcome_panel', '0'),
(17, 1, 'wp_dashboard_quick_press_last_post_id', '5'),
(18, 1, 'wp_user-settings', 'libraryContent=browse&mfold=o'),
(19, 1, 'wp_user-settings-time', '1752127677'),
(20, 1, 'session_tokens', 'a:4:{s:64:\"6d6c5ef75962ee648d7e87ac90eeb76fb258ac2903431ed57c1e263ed3ca35ca\";a:4:{s:10:\"expiration\";i:1752211462;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:111:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36\";s:5:\"login\";i:1752038662;}s:64:\"057a45826d10a2c611494359db4f80d2352b6556c66ed1d25fee9939d1ce96b8\";a:4:{s:10:\"expiration\";i:1752227107;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:111:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36\";s:5:\"login\";i:1752054307;}s:64:\"779fe67e4f66f432a3ed9c1ac35a0787ee526d840952ebf8c7fe1b39777a9330\";a:4:{s:10:\"expiration\";i:1752298194;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:111:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36\";s:5:\"login\";i:1752125394;}s:64:\"be874030e2fbff6bd038121258f6132ba101a64b805cb402c7863a6bf16d5679\";a:4:{s:10:\"expiration\";i:1752382295;s:2:\"ip\";s:3:\"::1\";s:2:\"ua\";s:111:\"Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36\";s:5:\"login\";i:1752209495;}}'),
(21, 1, 'meta-box-order_dashboard', 'a:4:{s:6:\"normal\";s:19:\"dashboard_right_now\";s:4:\"side\";s:62:\"dashboard_quick_press,dashboard_site_health,dashboard_activity\";s:7:\"column3\";s:17:\"dashboard_php_nag\";s:7:\"column4\";s:17:\"dashboard_primary\";}'),
(22, 1, 'wp_persisted_preferences', 'a:3:{s:4:\"core\";a:7:{s:26:\"isComplementaryAreaVisible\";b:1;s:24:\"enableChoosePatternModal\";b:1;s:10:\"openPanels\";a:4:{i:0;s:11:\"post-status\";i:1;s:23:\"taxonomy-panel-ufaq-tag\";i:2;s:28:\"taxonomy-panel-ufaq-category\";i:3;s:23:\"taxonomy-panel-category\";}s:10:\"editorMode\";s:6:\"visual\";s:15:\"distractionFree\";b:0;s:12:\"fixedToolbar\";b:0;s:9:\"focusMode\";b:0;}s:14:\"core/edit-post\";a:3:{s:12:\"welcomeGuide\";b:0;s:23:\"metaBoxesMainOpenHeight\";i:366;s:14:\"fullscreenMode\";b:0;}s:9:\"_modified\";s:24:\"2025-07-11T04:56:22.669Z\";}'),
(23, 2, 'nickname', 'AudreyMebaley'),
(24, 2, 'first_name', 'Audrey'),
(25, 2, 'last_name', 'Audrey'),
(26, 2, 'description', ''),
(27, 2, 'rich_editing', 'true'),
(28, 2, 'syntax_highlighting', 'true'),
(29, 2, 'comment_shortcuts', 'false'),
(30, 2, 'admin_color', 'fresh'),
(31, 2, 'use_ssl', '0'),
(32, 2, 'show_admin_bar_front', 'true'),
(33, 2, 'locale', ''),
(34, 2, 'wp_capabilities', 'a:1:{s:6:\"author\";b:1;}'),
(35, 2, 'wp_user_level', '2'),
(36, 2, 'dismissed_wp_pointers', ''),
(37, 1, 'closedpostboxes_acf-field-group', 'a:0:{}'),
(38, 1, 'metaboxhidden_acf-field-group', 'a:1:{i:0;s:7:\"slugdiv\";}'),
(39, 1, 'closedpostboxes_page', 'a:1:{i:0;s:12:\"btc_seo_meta\";}'),
(40, 1, 'metaboxhidden_page', 'a:0:{}'),
(41, 1, 'meta-box-order_page', 'a:4:{s:6:\"normal\";s:36:\"acf-group_686cfa01d739c,btc_seo_meta\";s:8:\"advanced\";s:0:\"\";s:4:\"side\";s:0:\"\";s:15:\"acf_after_title\";s:0:\"\";}'),
(42, 1, 'closedpostboxes_post', 'a:0:{}'),
(43, 1, 'metaboxhidden_post', 'a:0:{}'),
(44, 1, 'manageedit-acf-taxonomycolumnshidden', 'a:1:{i:0;s:7:\"acf-key\";}'),
(45, 1, 'acf_user_settings', 'a:1:{s:20:\"taxonomies-first-run\";b:1;}'),
(46, 1, 'closedpostboxes_dashboard', 'a:3:{i:0;s:21:\"dashboard_quick_press\";i:1;s:17:\"dashboard_php_nag\";i:2;s:17:\"dashboard_primary\";}'),
(47, 1, 'metaboxhidden_dashboard', 'a:0:{}'),
(48, 1, 'community-events-location', 'a:4:{s:11:\"description\";s:8:\"Gurugram\";s:8:\"latitude\";s:8:\"28.46010\";s:9:\"longitude\";s:8:\"77.02635\";s:7:\"country\";s:2:\"IN\";}'),
(49, 1, 'meta-box-order_customization_type', 'a:4:{s:6:\"normal\";s:0:\"\";s:8:\"advanced\";s:19:\"custom_dropdown_box\";s:4:\"side\";s:0:\"\";s:15:\"acf_after_title\";s:0:\"\";}'),
(50, 1, 'closedpostboxes_customization_type', 'a:0:{}'),
(51, 1, 'metaboxhidden_customization_type', 'a:0:{}'),
(52, 1, 'meta-box-order_product', 'a:4:{s:6:\"normal\";s:0:\"\";s:8:\"advanced\";s:0:\"\";s:4:\"side\";s:37:\"custom_dropdown_box,is_spotlight_meta\";s:15:\"acf_after_title\";s:0:\"\";}'),
(53, 1, 'closedpostboxes_product', 'a:0:{}'),
(54, 1, 'metaboxhidden_product', 'a:0:{}'),
(55, 1, 'wp_media_library_mode', 'grid'),
(56, 1, 'closedpostboxes_category', 'a:0:{}'),
(57, 1, 'metaboxhidden_category', 'a:0:{}'),
(58, 1, 'meta-box-order_category', 'a:4:{s:6:\"normal\";s:37:\"acf-group_686cfa01d739c,category_faqs\";s:8:\"advanced\";s:0:\"\";s:4:\"side\";s:39:\"sort_order_meta,acf-group_686e44e5365c5\";s:15:\"acf_after_title\";s:0:\"\";}'),
(59, 1, 'wp_metaslider_analytics_onboarding_status', 'no'),
(60, 1, 'meta-box-order_event', 'a:4:{s:6:\"normal\";s:61:\"acf-group_686f9d7353f8a,event_gallery,acf-group_686cfa01d739c\";s:8:\"advanced\";s:0:\"\";s:4:\"side\";s:0:\"\";s:15:\"acf_after_title\";s:0:\"\";}');

-- --------------------------------------------------------

--
-- Table structure for table `wp_users`
--

CREATE TABLE `wp_users` (
  `ID` bigint(20) UNSIGNED NOT NULL,
  `user_login` varchar(60) NOT NULL DEFAULT '',
  `user_pass` varchar(255) NOT NULL DEFAULT '',
  `user_nicename` varchar(50) NOT NULL DEFAULT '',
  `user_email` varchar(100) NOT NULL DEFAULT '',
  `user_url` varchar(100) NOT NULL DEFAULT '',
  `user_registered` datetime NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_activation_key` varchar(255) NOT NULL DEFAULT '',
  `user_status` int(11) NOT NULL DEFAULT 0,
  `display_name` varchar(250) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_520_ci;

--
-- Dumping data for table `wp_users`
--

INSERT INTO `wp_users` (`ID`, `user_login`, `user_pass`, `user_nicename`, `user_email`, `user_url`, `user_registered`, `user_activation_key`, `user_status`, `display_name`) VALUES
(1, 'superadmin', '$wp$2y$10$ZMfQgV1KEqt/fDf8rPp6LOzNAlNc/l8WWnbZA.ei2MGkmPd67tsam', 'superadmin', 'rajesh.kumar@thealphagency.com', 'http://localhost/btc', '2025-07-08 07:22:58', '', 0, 'superadmin'),
(2, 'AudreyMebaley', '$wp$2y$10$aiyR39ULFmtb2FB55vftAe1KoLKAtTQqpzx5vhSt2tW8/.k1iJdeO', 'audreymebaley', 'audrey.mebaley@arisenet.com', '', '2025-07-08 07:35:18', '1751960119:$generic$ToCH080ZaablfpjDQaXhXPbPE0ywY1SU-2JHH51C', 0, 'Audrey Audrey');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `comment_id` (`comment_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_comments`
--
ALTER TABLE `wp_comments`
  ADD PRIMARY KEY (`comment_ID`),
  ADD KEY `comment_post_ID` (`comment_post_ID`),
  ADD KEY `comment_approved_date_gmt` (`comment_approved`,`comment_date_gmt`),
  ADD KEY `comment_date_gmt` (`comment_date_gmt`),
  ADD KEY `comment_parent` (`comment_parent`),
  ADD KEY `comment_author_email` (`comment_author_email`(10));

--
-- Indexes for table `wp_links`
--
ALTER TABLE `wp_links`
  ADD PRIMARY KEY (`link_id`),
  ADD KEY `link_visible` (`link_visible`);

--
-- Indexes for table `wp_options`
--
ALTER TABLE `wp_options`
  ADD PRIMARY KEY (`option_id`),
  ADD UNIQUE KEY `option_name` (`option_name`),
  ADD KEY `autoload` (`autoload`);

--
-- Indexes for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_posts`
--
ALTER TABLE `wp_posts`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `post_name` (`post_name`(191)),
  ADD KEY `type_status_date` (`post_type`,`post_status`,`post_date`,`ID`),
  ADD KEY `post_parent` (`post_parent`),
  ADD KEY `post_author` (`post_author`);

--
-- Indexes for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  ADD PRIMARY KEY (`meta_id`),
  ADD KEY `term_id` (`term_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_terms`
--
ALTER TABLE `wp_terms`
  ADD PRIMARY KEY (`term_id`),
  ADD KEY `slug` (`slug`(191)),
  ADD KEY `name` (`name`(191));

--
-- Indexes for table `wp_term_relationships`
--
ALTER TABLE `wp_term_relationships`
  ADD PRIMARY KEY (`object_id`,`term_taxonomy_id`),
  ADD KEY `term_taxonomy_id` (`term_taxonomy_id`);

--
-- Indexes for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  ADD PRIMARY KEY (`term_taxonomy_id`),
  ADD UNIQUE KEY `term_id_taxonomy` (`term_id`,`taxonomy`),
  ADD KEY `taxonomy` (`taxonomy`);

--
-- Indexes for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  ADD PRIMARY KEY (`umeta_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `meta_key` (`meta_key`(191));

--
-- Indexes for table `wp_users`
--
ALTER TABLE `wp_users`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `user_login_key` (`user_login`),
  ADD KEY `user_nicename` (`user_nicename`),
  ADD KEY `user_email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `wp_commentmeta`
--
ALTER TABLE `wp_commentmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_comments`
--
ALTER TABLE `wp_comments`
  MODIFY `comment_ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wp_links`
--
ALTER TABLE `wp_links`
  MODIFY `link_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_options`
--
ALTER TABLE `wp_options`
  MODIFY `option_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=791;

--
-- AUTO_INCREMENT for table `wp_postmeta`
--
ALTER TABLE `wp_postmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1062;

--
-- AUTO_INCREMENT for table `wp_posts`
--
ALTER TABLE `wp_posts`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=250;

--
-- AUTO_INCREMENT for table `wp_termmeta`
--
ALTER TABLE `wp_termmeta`
  MODIFY `meta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `wp_terms`
--
ALTER TABLE `wp_terms`
  MODIFY `term_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wp_term_taxonomy`
--
ALTER TABLE `wp_term_taxonomy`
  MODIFY `term_taxonomy_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wp_usermeta`
--
ALTER TABLE `wp_usermeta`
  MODIFY `umeta_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `wp_users`
--
ALTER TABLE `wp_users`
  MODIFY `ID` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
