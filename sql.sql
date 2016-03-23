-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 23, 2016 at 03:09 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `retailernew`
--

-- --------------------------------------------------------

--
-- Table structure for table `mantis_bugnote_table`
--

CREATE TABLE IF NOT EXISTS `mantis_bugnote_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bug_id` int(10) unsigned NOT NULL DEFAULT '0',
  `reporter_id` int(10) unsigned NOT NULL DEFAULT '0',
  `bugnote_text_id` int(10) unsigned NOT NULL DEFAULT '0',
  `view_state` smallint(6) NOT NULL DEFAULT '10',
  `note_type` int(11) DEFAULT '0',
  `note_attr` varchar(250) DEFAULT '',
  `time_tracking` int(10) unsigned NOT NULL DEFAULT '0',
  `last_modified` int(10) unsigned NOT NULL DEFAULT '1',
  `date_submitted` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_bug` (`bug_id`),
  KEY `idx_last_mod` (`last_modified`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_bugnote_text_table`
--

CREATE TABLE IF NOT EXISTS `mantis_bugnote_text_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `note` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_bug_file_table`
--

CREATE TABLE IF NOT EXISTS `mantis_bug_file_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bug_id` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `description` varchar(250) NOT NULL DEFAULT '',
  `diskfile` varchar(250) NOT NULL DEFAULT '',
  `filename` varchar(250) NOT NULL DEFAULT '',
  `folder` varchar(250) NOT NULL DEFAULT '',
  `filesize` int(11) NOT NULL DEFAULT '0',
  `file_type` varchar(250) NOT NULL DEFAULT '',
  `content` longblob NOT NULL,
  `date_added` int(10) unsigned NOT NULL DEFAULT '1',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_bug_file_bug_id` (`bug_id`),
  KEY `idx_diskfile` (`diskfile`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_bug_history_table`
--

CREATE TABLE IF NOT EXISTS `mantis_bug_history_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `bug_id` int(10) unsigned NOT NULL DEFAULT '0',
  `field_name` varchar(64) NOT NULL,
  `old_value` varchar(255) NOT NULL,
  `new_value` varchar(255) NOT NULL,
  `type` smallint(6) NOT NULL DEFAULT '0',
  `date_modified` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_bug_history_bug_id` (`bug_id`),
  KEY `idx_history_user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_bug_monitor_table`
--

CREATE TABLE IF NOT EXISTS `mantis_bug_monitor_table` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `bug_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`user_id`,`bug_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_bug_relationship_table`
--

CREATE TABLE IF NOT EXISTS `mantis_bug_relationship_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `source_bug_id` int(10) unsigned NOT NULL DEFAULT '0',
  `destination_bug_id` int(10) unsigned NOT NULL DEFAULT '0',
  `relationship_type` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `idx_relationship_source` (`source_bug_id`),
  KEY `idx_relationship_destination` (`destination_bug_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_bug_revision_table`
--

CREATE TABLE IF NOT EXISTS `mantis_bug_revision_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bug_id` int(10) unsigned NOT NULL,
  `bugnote_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL,
  `type` int(10) unsigned NOT NULL,
  `value` longtext NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_bug_rev_type` (`type`),
  KEY `idx_bug_rev_id_time` (`bug_id`,`timestamp`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_bug_table`
--

CREATE TABLE IF NOT EXISTS `mantis_bug_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `reporter_id` int(10) unsigned NOT NULL DEFAULT '0',
  `handler_id` int(10) unsigned NOT NULL DEFAULT '0',
  `duplicate_id` int(10) unsigned NOT NULL DEFAULT '0',
  `priority` smallint(6) NOT NULL DEFAULT '30',
  `severity` smallint(6) NOT NULL DEFAULT '50',
  `reproducibility` smallint(6) NOT NULL DEFAULT '10',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `resolution` smallint(6) NOT NULL DEFAULT '10',
  `projection` smallint(6) NOT NULL DEFAULT '10',
  `eta` smallint(6) NOT NULL DEFAULT '10',
  `bug_text_id` int(10) unsigned NOT NULL DEFAULT '0',
  `os` varchar(32) NOT NULL DEFAULT '',
  `os_build` varchar(32) NOT NULL DEFAULT '',
  `platform` varchar(32) NOT NULL DEFAULT '',
  `version` varchar(64) NOT NULL DEFAULT '',
  `fixed_in_version` varchar(64) NOT NULL DEFAULT '',
  `build` varchar(32) NOT NULL DEFAULT '',
  `profile_id` int(10) unsigned NOT NULL DEFAULT '0',
  `view_state` smallint(6) NOT NULL DEFAULT '10',
  `summary` varchar(128) NOT NULL DEFAULT '',
  `sponsorship_total` int(11) NOT NULL DEFAULT '0',
  `sticky` tinyint(4) NOT NULL DEFAULT '0',
  `target_version` varchar(64) NOT NULL DEFAULT '',
  `category_id` int(10) unsigned NOT NULL DEFAULT '1',
  `date_submitted` int(10) unsigned NOT NULL DEFAULT '1',
  `due_date` int(10) unsigned NOT NULL DEFAULT '1',
  `last_updated` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_bug_sponsorship_total` (`sponsorship_total`),
  KEY `idx_bug_fixed_in_version` (`fixed_in_version`),
  KEY `idx_bug_status` (`status`),
  KEY `idx_project` (`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_bug_tag_table`
--

CREATE TABLE IF NOT EXISTS `mantis_bug_tag_table` (
  `bug_id` int(10) unsigned NOT NULL DEFAULT '0',
  `tag_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `date_attached` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`bug_id`,`tag_id`),
  KEY `idx_bug_tag_tag_id` (`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_bug_text_table`
--

CREATE TABLE IF NOT EXISTS `mantis_bug_text_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `description` longtext NOT NULL,
  `steps_to_reproduce` longtext NOT NULL,
  `additional_information` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_category_table`
--

CREATE TABLE IF NOT EXISTS `mantis_category_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(128) NOT NULL DEFAULT '',
  `status` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_category_project_name` (`project_id`,`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `mantis_category_table`
--

INSERT INTO `mantis_category_table` (`id`, `project_id`, `user_id`, `name`, `status`) VALUES
(1, 0, 0, 'General', 0);

-- --------------------------------------------------------

--
-- Table structure for table `mantis_config_table`
--

CREATE TABLE IF NOT EXISTS `mantis_config_table` (
  `config_id` varchar(64) NOT NULL,
  `project_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `access_reqd` int(11) DEFAULT '0',
  `type` int(11) DEFAULT '90',
  `value` longtext NOT NULL,
  PRIMARY KEY (`config_id`,`project_id`,`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mantis_config_table`
--

INSERT INTO `mantis_config_table` (`config_id`, `project_id`, `user_id`, `access_reqd`, `type`, `value`) VALUES
('database_version', 0, 0, 90, 1, '183');

-- --------------------------------------------------------

--
-- Table structure for table `mantis_custom_field_project_table`
--

CREATE TABLE IF NOT EXISTS `mantis_custom_field_project_table` (
  `field_id` int(11) NOT NULL DEFAULT '0',
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `sequence` smallint(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`field_id`,`project_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_custom_field_string_table`
--

CREATE TABLE IF NOT EXISTS `mantis_custom_field_string_table` (
  `field_id` int(11) NOT NULL DEFAULT '0',
  `bug_id` int(11) NOT NULL DEFAULT '0',
  `value` varchar(255) NOT NULL DEFAULT '',
  PRIMARY KEY (`field_id`,`bug_id`),
  KEY `idx_custom_field_bug` (`bug_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_custom_field_table`
--

CREATE TABLE IF NOT EXISTS `mantis_custom_field_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL DEFAULT '',
  `type` smallint(6) NOT NULL DEFAULT '0',
  `possible_values` text NOT NULL,
  `default_value` varchar(255) NOT NULL DEFAULT '',
  `valid_regexp` varchar(255) NOT NULL DEFAULT '',
  `access_level_r` smallint(6) NOT NULL DEFAULT '0',
  `access_level_rw` smallint(6) NOT NULL DEFAULT '0',
  `length_min` int(11) NOT NULL DEFAULT '0',
  `length_max` int(11) NOT NULL DEFAULT '0',
  `require_report` tinyint(4) NOT NULL DEFAULT '0',
  `require_update` tinyint(4) NOT NULL DEFAULT '0',
  `display_report` tinyint(4) NOT NULL DEFAULT '0',
  `display_update` tinyint(4) NOT NULL DEFAULT '1',
  `require_resolved` tinyint(4) NOT NULL DEFAULT '0',
  `display_resolved` tinyint(4) NOT NULL DEFAULT '0',
  `display_closed` tinyint(4) NOT NULL DEFAULT '0',
  `require_closed` tinyint(4) NOT NULL DEFAULT '0',
  `filter_by` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_custom_field_name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_email_table`
--

CREATE TABLE IF NOT EXISTS `mantis_email_table` (
  `email_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(64) NOT NULL DEFAULT '',
  `subject` varchar(250) NOT NULL DEFAULT '',
  `metadata` longtext NOT NULL,
  `body` longtext NOT NULL,
  `submitted` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`email_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mantis_email_table`
--

INSERT INTO `mantis_email_table` (`email_id`, `email`, `subject`, `metadata`, `body`, `submitted`) VALUES
(1, 'vantage1.krishna@gmail.com', '[MantisBT] Account registration', 'a:4:{s:7:"headers";a:0:{}s:8:"priority";i:3;s:7:"charset";s:5:"utf-8";s:8:"hostname";s:9:"localhost";}', 'Thank you for registering. You have an account with username "krishna2". In order to complete your registration, visit the following URL (make sure it is entered as the single line) and set your own access password:\n\nhttp://localhost/retailernew/support/verify.php?id=3&confirm_hash=0e78eb354d8aaf15127c555036ff5389\n\nIf you did not request any registration, ignore this message and nothing will happen.\n\nDo not reply to this message', 1456411226),
(2, 'root@localhost', '[MantisBT] Account registration', 'a:4:{s:7:"headers";a:0:{}s:8:"priority";i:3;s:7:"charset";s:5:"utf-8";s:8:"hostname";s:9:"localhost";}', 'The following account has been created:\n\nUsername: krishna2\nE-mail: vantage1.krishna@gmail.com\nRemote IP address: ::1\nhttp://localhost/retailernew/support/\n\nDo not reply to this message', 1456411226);

-- --------------------------------------------------------

--
-- Table structure for table `mantis_filters_table`
--

CREATE TABLE IF NOT EXISTS `mantis_filters_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `project_id` int(11) NOT NULL DEFAULT '0',
  `is_public` tinyint(4) DEFAULT NULL,
  `name` varchar(64) NOT NULL DEFAULT '',
  `filter_string` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_news_table`
--

CREATE TABLE IF NOT EXISTS `mantis_news_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `poster_id` int(10) unsigned NOT NULL DEFAULT '0',
  `view_state` smallint(6) NOT NULL DEFAULT '10',
  `announcement` tinyint(4) NOT NULL DEFAULT '0',
  `headline` varchar(64) NOT NULL DEFAULT '',
  `body` longtext NOT NULL,
  `last_modified` int(10) unsigned NOT NULL DEFAULT '1',
  `date_posted` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_plugin_table`
--

CREATE TABLE IF NOT EXISTS `mantis_plugin_table` (
  `basename` varchar(40) NOT NULL,
  `enabled` tinyint(4) NOT NULL DEFAULT '0',
  `protected` tinyint(4) NOT NULL DEFAULT '0',
  `priority` int(10) unsigned NOT NULL DEFAULT '3',
  PRIMARY KEY (`basename`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mantis_plugin_table`
--

INSERT INTO `mantis_plugin_table` (`basename`, `enabled`, `protected`, `priority`) VALUES
('MantisCoreFormatting', 1, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `mantis_project_file_table`
--

CREATE TABLE IF NOT EXISTS `mantis_project_file_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `title` varchar(250) NOT NULL DEFAULT '',
  `description` varchar(250) NOT NULL DEFAULT '',
  `diskfile` varchar(250) NOT NULL DEFAULT '',
  `filename` varchar(250) NOT NULL DEFAULT '',
  `folder` varchar(250) NOT NULL DEFAULT '',
  `filesize` int(11) NOT NULL DEFAULT '0',
  `file_type` varchar(250) NOT NULL DEFAULT '',
  `content` longblob NOT NULL,
  `date_added` int(10) unsigned NOT NULL DEFAULT '1',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_project_hierarchy_table`
--

CREATE TABLE IF NOT EXISTS `mantis_project_hierarchy_table` (
  `child_id` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  `inherit_parent` int(10) unsigned NOT NULL DEFAULT '0',
  KEY `idx_project_hierarchy_child_id` (`child_id`),
  KEY `idx_project_hierarchy_parent_id` (`parent_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_project_table`
--

CREATE TABLE IF NOT EXISTS `mantis_project_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL DEFAULT '',
  `status` smallint(6) NOT NULL DEFAULT '10',
  `enabled` tinyint(4) NOT NULL DEFAULT '1',
  `view_state` smallint(6) NOT NULL DEFAULT '10',
  `access_min` smallint(6) NOT NULL DEFAULT '10',
  `file_path` varchar(250) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `category_id` int(10) unsigned NOT NULL DEFAULT '1',
  `inherit_global` int(10) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_project_name` (`name`),
  KEY `idx_project_view` (`view_state`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_project_user_list_table`
--

CREATE TABLE IF NOT EXISTS `mantis_project_user_list_table` (
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `access_level` smallint(6) NOT NULL DEFAULT '10',
  PRIMARY KEY (`project_id`,`user_id`),
  KEY `idx_project_user` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_project_version_table`
--

CREATE TABLE IF NOT EXISTS `mantis_project_version_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `version` varchar(64) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `released` tinyint(4) NOT NULL DEFAULT '1',
  `obsolete` tinyint(4) NOT NULL DEFAULT '0',
  `date_order` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_project_version` (`project_id`,`version`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_sponsorship_table`
--

CREATE TABLE IF NOT EXISTS `mantis_sponsorship_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `bug_id` int(11) NOT NULL DEFAULT '0',
  `user_id` int(11) NOT NULL DEFAULT '0',
  `amount` int(11) NOT NULL DEFAULT '0',
  `logo` varchar(128) NOT NULL DEFAULT '',
  `url` varchar(128) NOT NULL DEFAULT '',
  `paid` tinyint(4) NOT NULL DEFAULT '0',
  `date_submitted` int(10) unsigned NOT NULL DEFAULT '1',
  `last_updated` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_sponsorship_bug_id` (`bug_id`),
  KEY `idx_sponsorship_user_id` (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_tag_table`
--

CREATE TABLE IF NOT EXISTS `mantis_tag_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  `date_created` int(10) unsigned NOT NULL DEFAULT '1',
  `date_updated` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`,`name`),
  KEY `idx_tag_name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_tokens_table`
--

CREATE TABLE IF NOT EXISTS `mantis_tokens_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `owner` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `value` longtext NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '1',
  `expiry` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `idx_typeowner` (`type`,`owner`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_user_pref_table`
--

CREATE TABLE IF NOT EXISTS `mantis_user_pref_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `project_id` int(10) unsigned NOT NULL DEFAULT '0',
  `default_profile` int(10) unsigned NOT NULL DEFAULT '0',
  `default_project` int(10) unsigned NOT NULL DEFAULT '0',
  `refresh_delay` int(11) NOT NULL DEFAULT '0',
  `redirect_delay` int(11) NOT NULL DEFAULT '0',
  `bugnote_order` varchar(4) NOT NULL DEFAULT 'ASC',
  `email_on_new` tinyint(4) NOT NULL DEFAULT '0',
  `email_on_assigned` tinyint(4) NOT NULL DEFAULT '0',
  `email_on_feedback` tinyint(4) NOT NULL DEFAULT '0',
  `email_on_resolved` tinyint(4) NOT NULL DEFAULT '0',
  `email_on_closed` tinyint(4) NOT NULL DEFAULT '0',
  `email_on_reopened` tinyint(4) NOT NULL DEFAULT '0',
  `email_on_bugnote` tinyint(4) NOT NULL DEFAULT '0',
  `email_on_status` tinyint(4) NOT NULL DEFAULT '0',
  `email_on_priority` tinyint(4) NOT NULL DEFAULT '0',
  `email_on_priority_min_severity` smallint(6) NOT NULL DEFAULT '10',
  `email_on_status_min_severity` smallint(6) NOT NULL DEFAULT '10',
  `email_on_bugnote_min_severity` smallint(6) NOT NULL DEFAULT '10',
  `email_on_reopened_min_severity` smallint(6) NOT NULL DEFAULT '10',
  `email_on_closed_min_severity` smallint(6) NOT NULL DEFAULT '10',
  `email_on_resolved_min_severity` smallint(6) NOT NULL DEFAULT '10',
  `email_on_feedback_min_severity` smallint(6) NOT NULL DEFAULT '10',
  `email_on_assigned_min_severity` smallint(6) NOT NULL DEFAULT '10',
  `email_on_new_min_severity` smallint(6) NOT NULL DEFAULT '10',
  `email_bugnote_limit` smallint(6) NOT NULL DEFAULT '0',
  `language` varchar(32) NOT NULL DEFAULT 'english',
  `timezone` varchar(32) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_user_print_pref_table`
--

CREATE TABLE IF NOT EXISTS `mantis_user_print_pref_table` (
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `print_pref` varchar(64) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_user_profile_table`
--

CREATE TABLE IF NOT EXISTS `mantis_user_profile_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL DEFAULT '0',
  `platform` varchar(32) NOT NULL DEFAULT '',
  `os` varchar(32) NOT NULL DEFAULT '',
  `os_build` varchar(32) NOT NULL DEFAULT '',
  `description` longtext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `mantis_user_table`
--

CREATE TABLE IF NOT EXISTS `mantis_user_table` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL DEFAULT '',
  `realname` varchar(64) NOT NULL DEFAULT '',
  `email` varchar(64) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `enabled` tinyint(4) NOT NULL DEFAULT '1',
  `protected` tinyint(4) NOT NULL DEFAULT '0',
  `access_level` smallint(6) NOT NULL DEFAULT '10',
  `login_count` int(11) NOT NULL DEFAULT '0',
  `lost_password_request_count` smallint(6) NOT NULL DEFAULT '0',
  `failed_login_count` smallint(6) NOT NULL DEFAULT '0',
  `cookie_string` varchar(64) NOT NULL DEFAULT '',
  `last_visit` int(10) unsigned NOT NULL DEFAULT '1',
  `date_created` int(10) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `idx_user_cookie_string` (`cookie_string`),
  UNIQUE KEY `idx_user_username` (`username`),
  KEY `idx_enable` (`enabled`),
  KEY `idx_access` (`access_level`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `mantis_user_table`
--

INSERT INTO `mantis_user_table` (`id`, `username`, `realname`, `email`, `password`, `enabled`, `protected`, `access_level`, `login_count`, `lost_password_request_count`, `failed_login_count`, `cookie_string`, `last_visit`, `date_created`) VALUES
(1, 'admin', '', 'rinku.vantage@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 1, 0, 90, 6, 0, 0, '8f1e08ab9a4e5379fb4f10edb28874b3d02cc624570d77b7d1df0c3e0117a617', 1457099450, 1456407157),
(10, 'krishna', 'Krishna Kumar', 'krishna.vwt@gmail.com', '8854b47fc05990266cc6df7f69d1adeb', 1, 0, 10, 0, 0, 0, 'hkwfl5LMUh98qTZ9Ho62ZqVr6aeNlNeqtnE3yAfQFAW58kxSnLuVBZTiEDSr23L4', 1, 1458153000),
(3, 'krishna2', '', 'vantage1.krishna@gmail.com', '243bd1ce0387f18005abfc43b001646a', 1, 0, 25, 1, 0, 0, 'f080d81320a1fe2f55f7cc0756803d30abc88ccff2813694bcd299104093138a', 1456411359, 1456411226);

-- --------------------------------------------------------

--
-- Table structure for table `ret_files`
--

CREATE TABLE IF NOT EXISTS `ret_files` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `filename` varchar(200) DEFAULT NULL,
  `filecolumns` text,
  `keyid` varchar(200) NOT NULL,
  `udate` datetime DEFAULT NULL,
  `gdate` datetime DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `ret_files`
--

INSERT INTO `ret_files` (`ID`, `user_id`, `title`, `filename`, `filecolumns`, `keyid`, `udate`, `gdate`) VALUES
(2, 11, 'INF3.csv', 'INF3.csv', 'gdfg', '93f6c207c2ecaf7ed16c0006b43a80c8', '2016-01-28 17:14:24', NULL),
(3, 11, 'esdsae_List.csv', 'esdsae_List.csv', 'dsf', '93f6c207c2ecaf7ed16c0006b43a80c8', '2016-01-28 17:21:58', NULL),
(4, 11, 'esdsae_List4.csv', 'esdsae_List4.csv', 'gd gdfg ', '93f6c207c2ecaf7ed16c0006b43a80c8', '2016-01-29 10:02:05', NULL),
(5, 11, 'club360.sql.gz', 'club360.sql.gz', ' hgfh', '93f6c207c2ecaf7ed16c0006b43a80c8', '2016-01-29 14:38:16', NULL),
(6, 11, 'INF3.csv', 'INF3.csv', 'hgfhgfhgf', '93f6c207c2ecaf7ed16c0006b43a80c8', '2016-02-02 14:55:28', NULL),
(7, 11, 'INF3.csv', 'INF3.csv', 'jhg', '93f6c207c2ecaf7ed16c0006b43a80c8', '2016-02-02 14:55:46', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ret_group`
--

CREATE TABLE IF NOT EXISTS `ret_group` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_owner_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `add_date` datetime NOT NULL,
  PRIMARY KEY (`group_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ret_group`
--

INSERT INTO `ret_group` (`group_id`, `group_owner_id`, `name`, `add_date`) VALUES
(1, 11, 'xyx', '2016-03-23 18:27:45'),
(2, 11, 'group 2', '2016-03-23 18:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `ret_group_users`
--

CREATE TABLE IF NOT EXISTS `ret_group_users` (
  `group_id` int(11) NOT NULL,
  `group_owner_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ret_invited_users`
--

CREATE TABLE IF NOT EXISTS `ret_invited_users` (
  `invited_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(15) NOT NULL,
  `email` varchar(255) NOT NULL,
  `invited_by` int(11) NOT NULL,
  `invited_rand_log` varchar(50) NOT NULL,
  `invited_date` datetime NOT NULL,
  PRIMARY KEY (`invited_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `ret_invited_users`
--

INSERT INTO `ret_invited_users` (`invited_id`, `role`, `email`, `invited_by`, `invited_rand_log`, `invited_date`) VALUES
(2, 'user', 'krishna@vwt.gmail.com', 11, 'FCoLn-XbupS-MTE=', '2016-03-22 17:23:28');

-- --------------------------------------------------------

--
-- Table structure for table `ret_notifications`
--

CREATE TABLE IF NOT EXISTS `ret_notifications` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `msg` text NOT NULL,
  `notification_date` datetime NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `ret_notifications`
--

INSERT INTO `ret_notifications` (`notification_id`, `user_id`, `subject`, `msg`, `notification_date`) VALUES
(1, 34, 'Welcome to  signup on Sigmaways', '<p>Dear Krishna,<br />You&#39;ve successfully signed up your account with us.<br /><br />Thanks,<br />Sigmaways</p>', '2016-03-17 15:57:38'),
(3, 35, 'Welcome to  signup on Sigmaways', '<p>Dear Krishna,<br />You&#39;ve successfully signed up your account with us.<br /><br />Thanks,<br />Sigmaways</p>', '2016-03-17 16:15:37'),
(4, 11, 'Welcome to  signup on Sigmaways', '<p>Dear Krishna,<br />You&#39;ve successfully signed up your account with us.<br /><br />Thanks,<br />Sigmaways</p>', '2016-03-17 16:15:37');

-- --------------------------------------------------------

--
-- Table structure for table `ret_templates`
--

CREATE TABLE IF NOT EXISTS `ret_templates` (
  `template_auto_incr_id` int(11) NOT NULL AUTO_INCREMENT,
  `template_id` int(11) NOT NULL,
  `ID` int(11) NOT NULL,
  `email_from` varchar(255) NOT NULL,
  `email_subject` varchar(255) NOT NULL,
  `email_body_text` text NOT NULL,
  PRIMARY KEY (`template_auto_incr_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `ret_templates`
--

INSERT INTO `ret_templates` (`template_auto_incr_id`, `template_id`, `ID`, `email_from`, `email_subject`, `email_body_text`) VALUES
(9, 9, 11, '{{from_email}}', 'Billing Date Changed', '<p>Dear {{customer_name}},<br /><br />Your subscription account billing date {{change_billing_date}} changed.<br /><br />Thanks,<br />{{company_name}}</p>'),
(20, 1, 11, '{{from_email}}', 'Welcome to {{from_subject}}', '<p>Dear {{customer_name}},<br />You&#39;ve successfully signed up your account with us.<br /><br />Thanks,<br />{{company_name}}</p>'),
(18, 8, 11, '{{from_email}}', 'Plan Changed Notice: Your subscription to {{purchase_plan}} is updated now', '<p>Dear {{customer_name}},</p><p>Your subscription to {{purchase_plan}} is update now.</p><p>Thanks,&lt;br/&gt;{{company_name}}</p>');

-- --------------------------------------------------------

--
-- Table structure for table `ret_usermeta`
--

CREATE TABLE IF NOT EXISTS `ret_usermeta` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `meta_key` varchar(300) DEFAULT NULL,
  `meta_value` longtext,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=97 ;

--
-- Dumping data for table `ret_usermeta`
--

INSERT INTO `ret_usermeta` (`ID`, `user_id`, `meta_key`, `meta_value`) VALUES
(1, 11, 'admin_notification_web', 'Yes'),
(2, 11, 'admin_notification_email', 'Yes'),
(3, 11, 'feature_notification_web', 'No'),
(4, 11, 'feature_notification_email', 'No'),
(5, 11, 'system_status_web', 'Yes'),
(6, 11, 'system_status_email', 'Yes'),
(7, 11, 'configuration_web', 'Yes'),
(8, 11, 'configuration_email', 'Yes'),
(9, 18, 'admin_notification_web', 'No'),
(10, 18, 'admin_notification_email', 'Yes'),
(11, 18, 'feature_notification_web', 'No'),
(12, 18, 'feature_notification_email', 'Yes'),
(13, 18, 'system_status_web', 'No'),
(14, 18, 'system_status_email', 'Yes'),
(15, 18, 'configuration_web', 'No'),
(16, 18, 'configuration_email', 'Yes'),
(17, 22, 'admin_notification_web', 'Yes'),
(18, 22, 'admin_notification_email', 'Yes'),
(19, 22, 'feature_notification_web', 'Yes'),
(20, 22, 'feature_notification_email', 'Yes'),
(21, 22, 'system_status_web', 'Yes'),
(22, 22, 'system_status_email', 'Yes'),
(23, 22, 'configuration_web', 'Yes'),
(24, 22, 'configuration_email', 'Yes'),
(25, 23, 'admin_notification_web', 'Yes'),
(26, 23, 'admin_notification_email', 'Yes'),
(27, 23, 'feature_notification_web', 'Yes'),
(28, 23, 'feature_notification_email', 'Yes'),
(29, 23, 'system_status_web', 'Yes'),
(30, 23, 'system_status_email', 'Yes'),
(31, 23, 'configuration_web', 'Yes'),
(32, 23, 'configuration_email', 'Yes'),
(33, 24, 'admin_notification_web', 'Yes'),
(34, 24, 'admin_notification_email', 'Yes'),
(35, 24, 'feature_notification_web', 'Yes'),
(36, 24, 'feature_notification_email', 'Yes'),
(37, 24, 'system_status_web', 'Yes'),
(38, 24, 'system_status_email', 'Yes'),
(39, 24, 'configuration_web', 'Yes'),
(40, 24, 'configuration_email', 'Yes'),
(41, 25, 'admin_notification_web', 'Yes'),
(42, 25, 'admin_notification_email', 'Yes'),
(43, 25, 'feature_notification_web', 'Yes'),
(44, 25, 'feature_notification_email', 'Yes'),
(45, 25, 'system_status_web', 'Yes'),
(46, 25, 'system_status_email', 'Yes'),
(47, 25, 'configuration_web', 'Yes'),
(48, 25, 'configuration_email', 'Yes'),
(49, 26, 'admin_notification_web', 'Yes'),
(50, 26, 'admin_notification_email', 'Yes'),
(51, 26, 'feature_notification_web', 'Yes'),
(52, 26, 'feature_notification_email', 'Yes'),
(53, 26, 'system_status_web', 'Yes'),
(54, 26, 'system_status_email', 'Yes'),
(55, 26, 'configuration_web', 'Yes'),
(56, 26, 'configuration_email', 'Yes'),
(57, 27, 'admin_notification_web', 'Yes'),
(58, 27, 'admin_notification_email', 'Yes'),
(59, 27, 'feature_notification_web', 'Yes'),
(60, 27, 'feature_notification_email', 'Yes'),
(61, 27, 'system_status_web', 'Yes'),
(62, 27, 'system_status_email', 'Yes'),
(63, 27, 'configuration_web', 'Yes'),
(64, 27, 'configuration_email', 'Yes'),
(65, 28, 'admin_notification_web', 'Yes'),
(66, 28, 'admin_notification_email', 'Yes'),
(67, 28, 'feature_notification_web', 'Yes'),
(68, 28, 'feature_notification_email', 'Yes'),
(69, 28, 'system_status_web', 'Yes'),
(70, 28, 'system_status_email', 'Yes'),
(71, 28, 'configuration_web', 'Yes'),
(72, 28, 'configuration_email', 'Yes'),
(73, 29, 'admin_notification_web', 'Yes'),
(74, 29, 'admin_notification_email', 'Yes'),
(75, 29, 'feature_notification_web', 'Yes'),
(76, 29, 'feature_notification_email', 'Yes'),
(77, 29, 'system_status_web', 'Yes'),
(78, 29, 'system_status_email', 'Yes'),
(79, 29, 'configuration_web', 'Yes'),
(80, 29, 'configuration_email', 'Yes'),
(81, 30, 'admin_notification_web', 'Yes'),
(82, 30, 'admin_notification_email', 'Yes'),
(83, 30, 'feature_notification_web', 'Yes'),
(84, 30, 'feature_notification_email', 'Yes'),
(85, 30, 'system_status_web', 'Yes'),
(86, 30, 'system_status_email', 'Yes'),
(87, 30, 'configuration_web', 'Yes'),
(88, 30, 'configuration_email', 'Yes'),
(89, 31, 'admin_notification_web', 'Yes'),
(90, 31, 'admin_notification_email', 'Yes'),
(91, 31, 'feature_notification_web', 'Yes'),
(92, 31, 'feature_notification_email', 'Yes'),
(93, 31, 'system_status_web', 'Yes'),
(94, 31, 'system_status_email', 'Yes'),
(95, 31, 'configuration_web', 'Yes'),
(96, 31, 'configuration_email', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `ret_users`
--

CREATE TABLE IF NOT EXISTS `ret_users` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `user_pass` varchar(200) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `user_type` varchar(50) DEFAULT 'user',
  `company` varchar(200) DEFAULT NULL,
  `fname` varchar(200) NOT NULL,
  `phoneno` varchar(50) NOT NULL,
  `countrycode` int(5) DEFAULT NULL,
  `mobileno` int(10) DEFAULT NULL,
  `verification_code` varchar(255) DEFAULT NULL,
  `lname` varchar(200) NOT NULL,
  `tokenid` varchar(200) DEFAULT NULL,
  `keyid` varchar(200) DEFAULT NULL,
  `cdate` datetime NOT NULL,
  `udate` datetime DEFAULT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '0',
  `activationkey` varchar(200) NOT NULL,
  `upload_limit` int(10) DEFAULT '1000000',
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `ret_users`
--

INSERT INTO `ret_users` (`ID`, `parent_id`, `user_pass`, `user_email`, `user_type`, `company`, `fname`, `phoneno`, `countrycode`, `mobileno`, `verification_code`, `lname`, `tokenid`, `keyid`, `cdate`, `udate`, `active`, `activationkey`, `upload_limit`) VALUES
(6, 0, '705672dadab30d5b9c5527bf8e7542a6f15e64e4', 'rinku.vantage2@gmail.com', 'supadmin', 'Vantage webtech', 'Rinku', '5765756757', NULL, NULL, NULL, 'Kamboj', '24119a41d0e88eddffe27c71192d0dfc', 'd4f622f8134cb3944f494b6f9fc88b5a', '2015-12-31 15:32:11', '2016-01-18 05:43:29', 1, '20576f46fd5d363c88d2241b2bba1c2deee04b4b', 1000000),
(11, 0, 'e7a4659b7fbef6efbcc97bc4ed16b16bc78d6196', 'rinku.vantage@gmail.com', 'supadmin', 'gdfg', 'gdf', '765757645645', NULL, NULL, NULL, 'hgj', 'ec1faa2dd4d2cc2ffc0429a8ba73883a', '93f6c207c2ecaf7ed16c0006b43a80c8', '2016-01-11 06:44:16', '2016-02-08 17:30:28', 1, 'f5410089877339b350c332c3e19bc1797ee459c8', 1000000),
(35, 11, '47332de3075da27d7f607a5ea73c8c3d2ffa35bc', 'krishna.vwt@gmail.com', 'user', 'Vantage Webtech', 'Krishna', '097708978979', NULL, NULL, NULL, 'Kumar', '055b0c82f1ee986ace6f8bf1c34e0db8', 'a17da65c03349f8b953b02d692ac2914', '2016-03-17 16:15:37', '2016-03-22 15:39:51', 1, 'cbc027edaa58c7a94a0ed0b7025d597be34dad29', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `ret_user_notifications_settings`
--

CREATE TABLE IF NOT EXISTS `ret_user_notifications_settings` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `notify_me_when_customer` tinyint(4) NOT NULL,
  `notify_emails` varchar(255) NOT NULL,
  `email_me_when_register` tinyint(4) NOT NULL,
  `email_customer_when_register` tinyint(4) NOT NULL,
  `notify_payment_success` tinyint(4) NOT NULL,
  `notify_payment_fail` tinyint(4) NOT NULL,
  `notify_refund_success` tinyint(4) NOT NULL,
  `notify_when_trial_end` tinyint(4) NOT NULL,
  `notify_account_renew` tinyint(4) NOT NULL,
  `notify_plan_change` tinyint(4) NOT NULL,
  `notify_billing_date_change` tinyint(4) NOT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `ret_user_notifications_settings`
--

INSERT INTO `ret_user_notifications_settings` (`notification_id`, `user_id`, `notify_me_when_customer`, `notify_emails`, `email_me_when_register`, `email_customer_when_register`, `notify_payment_success`, `notify_payment_fail`, `notify_refund_success`, `notify_when_trial_end`, `notify_account_renew`, `notify_plan_change`, `notify_billing_date_change`) VALUES
(2, 11, 1, '', 1, 1, 1, 0, 0, 0, 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ret_zone`
--

CREATE TABLE IF NOT EXISTS `ret_zone` (
  `zone_id` int(10) NOT NULL AUTO_INCREMENT,
  `country_code` char(2) COLLATE utf8_bin NOT NULL,
  `zone_name` varchar(35) COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`zone_id`),
  KEY `idx_zone_name` (`zone_name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_bin AUTO_INCREMENT=417 ;

--
-- Dumping data for table `ret_zone`
--

INSERT INTO `ret_zone` (`zone_id`, `country_code`, `zone_name`) VALUES
(1, 'AD', 'Europe/Andorra'),
(2, 'AE', 'Asia/Dubai'),
(3, 'AF', 'Asia/Kabul'),
(4, 'AG', 'America/Antigua'),
(5, 'AI', 'America/Anguilla'),
(6, 'AL', 'Europe/Tirane'),
(7, 'AM', 'Asia/Yerevan'),
(8, 'AO', 'Africa/Luanda'),
(9, 'AQ', 'Antarctica/McMurdo'),
(10, 'AQ', 'Antarctica/Rothera'),
(11, 'AQ', 'Antarctica/Palmer'),
(12, 'AQ', 'Antarctica/Mawson'),
(13, 'AQ', 'Antarctica/Davis'),
(14, 'AQ', 'Antarctica/Casey'),
(15, 'AQ', 'Antarctica/Vostok'),
(16, 'AQ', 'Antarctica/DumontDUrville'),
(17, 'AQ', 'Antarctica/Syowa'),
(18, 'AQ', 'Antarctica/Troll'),
(19, 'AR', 'America/Argentina/Buenos_Aires'),
(20, 'AR', 'America/Argentina/Cordoba'),
(21, 'AR', 'America/Argentina/Salta'),
(22, 'AR', 'America/Argentina/Jujuy'),
(23, 'AR', 'America/Argentina/Tucuman'),
(24, 'AR', 'America/Argentina/Catamarca'),
(25, 'AR', 'America/Argentina/La_Rioja'),
(26, 'AR', 'America/Argentina/San_Juan'),
(27, 'AR', 'America/Argentina/Mendoza'),
(28, 'AR', 'America/Argentina/San_Luis'),
(29, 'AR', 'America/Argentina/Rio_Gallegos'),
(30, 'AR', 'America/Argentina/Ushuaia'),
(31, 'AS', 'Pacific/Pago_Pago'),
(32, 'AT', 'Europe/Vienna'),
(33, 'AU', 'Australia/Lord_Howe'),
(34, 'AU', 'Antarctica/Macquarie'),
(35, 'AU', 'Australia/Hobart'),
(36, 'AU', 'Australia/Currie'),
(37, 'AU', 'Australia/Melbourne'),
(38, 'AU', 'Australia/Sydney'),
(39, 'AU', 'Australia/Broken_Hill'),
(40, 'AU', 'Australia/Brisbane'),
(41, 'AU', 'Australia/Lindeman'),
(42, 'AU', 'Australia/Adelaide'),
(43, 'AU', 'Australia/Darwin'),
(44, 'AU', 'Australia/Perth'),
(45, 'AU', 'Australia/Eucla'),
(46, 'AW', 'America/Aruba'),
(47, 'AX', 'Europe/Mariehamn'),
(48, 'AZ', 'Asia/Baku'),
(49, 'BA', 'Europe/Sarajevo'),
(50, 'BB', 'America/Barbados'),
(51, 'BD', 'Asia/Dhaka'),
(52, 'BE', 'Europe/Brussels'),
(53, 'BF', 'Africa/Ouagadougou'),
(54, 'BG', 'Europe/Sofia'),
(55, 'BH', 'Asia/Bahrain'),
(56, 'BI', 'Africa/Bujumbura'),
(57, 'BJ', 'Africa/Porto-Novo'),
(58, 'BL', 'America/St_Barthelemy'),
(59, 'BM', 'Atlantic/Bermuda'),
(60, 'BN', 'Asia/Brunei'),
(61, 'BO', 'America/La_Paz'),
(62, 'BQ', 'America/Kralendijk'),
(63, 'BR', 'America/Noronha'),
(64, 'BR', 'America/Belem'),
(65, 'BR', 'America/Fortaleza'),
(66, 'BR', 'America/Recife'),
(67, 'BR', 'America/Araguaina'),
(68, 'BR', 'America/Maceio'),
(69, 'BR', 'America/Bahia'),
(70, 'BR', 'America/Sao_Paulo'),
(71, 'BR', 'America/Campo_Grande'),
(72, 'BR', 'America/Cuiaba'),
(73, 'BR', 'America/Santarem'),
(74, 'BR', 'America/Porto_Velho'),
(75, 'BR', 'America/Boa_Vista'),
(76, 'BR', 'America/Manaus'),
(77, 'BR', 'America/Eirunepe'),
(78, 'BR', 'America/Rio_Branco'),
(79, 'BS', 'America/Nassau'),
(80, 'BT', 'Asia/Thimphu'),
(81, 'BW', 'Africa/Gaborone'),
(82, 'BY', 'Europe/Minsk'),
(83, 'BZ', 'America/Belize'),
(84, 'CA', 'America/St_Johns'),
(85, 'CA', 'America/Halifax'),
(86, 'CA', 'America/Glace_Bay'),
(87, 'CA', 'America/Moncton'),
(88, 'CA', 'America/Goose_Bay'),
(89, 'CA', 'America/Blanc-Sablon'),
(90, 'CA', 'America/Toronto'),
(91, 'CA', 'America/Nipigon'),
(92, 'CA', 'America/Thunder_Bay'),
(93, 'CA', 'America/Iqaluit'),
(94, 'CA', 'America/Pangnirtung'),
(95, 'CA', 'America/Resolute'),
(96, 'CA', 'America/Atikokan'),
(97, 'CA', 'America/Rankin_Inlet'),
(98, 'CA', 'America/Winnipeg'),
(99, 'CA', 'America/Rainy_River'),
(100, 'CA', 'America/Regina'),
(101, 'CA', 'America/Swift_Current'),
(102, 'CA', 'America/Edmonton'),
(103, 'CA', 'America/Cambridge_Bay'),
(104, 'CA', 'America/Yellowknife'),
(105, 'CA', 'America/Inuvik'),
(106, 'CA', 'America/Creston'),
(107, 'CA', 'America/Dawson_Creek'),
(108, 'CA', 'America/Vancouver'),
(109, 'CA', 'America/Whitehorse'),
(110, 'CA', 'America/Dawson'),
(111, 'CC', 'Indian/Cocos'),
(112, 'CD', 'Africa/Kinshasa'),
(113, 'CD', 'Africa/Lubumbashi'),
(114, 'CF', 'Africa/Bangui'),
(115, 'CG', 'Africa/Brazzaville'),
(116, 'CH', 'Europe/Zurich'),
(117, 'CI', 'Africa/Abidjan'),
(118, 'CK', 'Pacific/Rarotonga'),
(119, 'CL', 'America/Santiago'),
(120, 'CL', 'Pacific/Easter'),
(121, 'CM', 'Africa/Douala'),
(122, 'CN', 'Asia/Shanghai'),
(123, 'CN', 'Asia/Urumqi'),
(124, 'CO', 'America/Bogota'),
(125, 'CR', 'America/Costa_Rica'),
(126, 'CU', 'America/Havana'),
(127, 'CV', 'Atlantic/Cape_Verde'),
(128, 'CW', 'America/Curacao'),
(129, 'CX', 'Indian/Christmas'),
(130, 'CY', 'Asia/Nicosia'),
(131, 'CZ', 'Europe/Prague'),
(132, 'DE', 'Europe/Berlin'),
(133, 'DE', 'Europe/Busingen'),
(134, 'DJ', 'Africa/Djibouti'),
(135, 'DK', 'Europe/Copenhagen'),
(136, 'DM', 'America/Dominica'),
(137, 'DO', 'America/Santo_Domingo'),
(138, 'DZ', 'Africa/Algiers'),
(139, 'EC', 'America/Guayaquil'),
(140, 'EC', 'Pacific/Galapagos'),
(141, 'EE', 'Europe/Tallinn'),
(142, 'EG', 'Africa/Cairo'),
(143, 'EH', 'Africa/El_Aaiun'),
(144, 'ER', 'Africa/Asmara'),
(145, 'ES', 'Europe/Madrid'),
(146, 'ES', 'Africa/Ceuta'),
(147, 'ES', 'Atlantic/Canary'),
(148, 'ET', 'Africa/Addis_Ababa'),
(149, 'FI', 'Europe/Helsinki'),
(150, 'FJ', 'Pacific/Fiji'),
(151, 'FK', 'Atlantic/Stanley'),
(152, 'FM', 'Pacific/Chuuk'),
(153, 'FM', 'Pacific/Pohnpei'),
(154, 'FM', 'Pacific/Kosrae'),
(155, 'FO', 'Atlantic/Faroe'),
(156, 'FR', 'Europe/Paris'),
(157, 'GA', 'Africa/Libreville'),
(158, 'GB', 'Europe/London'),
(159, 'GD', 'America/Grenada'),
(160, 'GE', 'Asia/Tbilisi'),
(161, 'GF', 'America/Cayenne'),
(162, 'GG', 'Europe/Guernsey'),
(163, 'GH', 'Africa/Accra'),
(164, 'GI', 'Europe/Gibraltar'),
(165, 'GL', 'America/Godthab'),
(166, 'GL', 'America/Danmarkshavn'),
(167, 'GL', 'America/Scoresbysund'),
(168, 'GL', 'America/Thule'),
(169, 'GM', 'Africa/Banjul'),
(170, 'GN', 'Africa/Conakry'),
(171, 'GP', 'America/Guadeloupe'),
(172, 'GQ', 'Africa/Malabo'),
(173, 'GR', 'Europe/Athens'),
(174, 'GS', 'Atlantic/South_Georgia'),
(175, 'GT', 'America/Guatemala'),
(176, 'GU', 'Pacific/Guam'),
(177, 'GW', 'Africa/Bissau'),
(178, 'GY', 'America/Guyana'),
(179, 'HK', 'Asia/Hong_Kong'),
(180, 'HN', 'America/Tegucigalpa'),
(181, 'HR', 'Europe/Zagreb'),
(182, 'HT', 'America/Port-au-Prince'),
(183, 'HU', 'Europe/Budapest'),
(184, 'ID', 'Asia/Jakarta'),
(185, 'ID', 'Asia/Pontianak'),
(186, 'ID', 'Asia/Makassar'),
(187, 'ID', 'Asia/Jayapura'),
(188, 'IE', 'Europe/Dublin'),
(189, 'IL', 'Asia/Jerusalem'),
(190, 'IM', 'Europe/Isle_of_Man'),
(191, 'IN', 'Asia/Kolkata'),
(192, 'IO', 'Indian/Chagos'),
(193, 'IQ', 'Asia/Baghdad'),
(194, 'IR', 'Asia/Tehran'),
(195, 'IS', 'Atlantic/Reykjavik'),
(196, 'IT', 'Europe/Rome'),
(197, 'JE', 'Europe/Jersey'),
(198, 'JM', 'America/Jamaica'),
(199, 'JO', 'Asia/Amman'),
(200, 'JP', 'Asia/Tokyo'),
(201, 'KE', 'Africa/Nairobi'),
(202, 'KG', 'Asia/Bishkek'),
(203, 'KH', 'Asia/Phnom_Penh'),
(204, 'KI', 'Pacific/Tarawa'),
(205, 'KI', 'Pacific/Enderbury'),
(206, 'KI', 'Pacific/Kiritimati'),
(207, 'KM', 'Indian/Comoro'),
(208, 'KN', 'America/St_Kitts'),
(209, 'KP', 'Asia/Pyongyang'),
(210, 'KR', 'Asia/Seoul'),
(211, 'KW', 'Asia/Kuwait'),
(212, 'KY', 'America/Cayman'),
(213, 'KZ', 'Asia/Almaty'),
(214, 'KZ', 'Asia/Qyzylorda'),
(215, 'KZ', 'Asia/Aqtobe'),
(216, 'KZ', 'Asia/Aqtau'),
(217, 'KZ', 'Asia/Oral'),
(218, 'LA', 'Asia/Vientiane'),
(219, 'LB', 'Asia/Beirut'),
(220, 'LC', 'America/St_Lucia'),
(221, 'LI', 'Europe/Vaduz'),
(222, 'LK', 'Asia/Colombo'),
(223, 'LR', 'Africa/Monrovia'),
(224, 'LS', 'Africa/Maseru'),
(225, 'LT', 'Europe/Vilnius'),
(226, 'LU', 'Europe/Luxembourg'),
(227, 'LV', 'Europe/Riga'),
(228, 'LY', 'Africa/Tripoli'),
(229, 'MA', 'Africa/Casablanca'),
(230, 'MC', 'Europe/Monaco'),
(231, 'MD', 'Europe/Chisinau'),
(232, 'ME', 'Europe/Podgorica'),
(233, 'MF', 'America/Marigot'),
(234, 'MG', 'Indian/Antananarivo'),
(235, 'MH', 'Pacific/Majuro'),
(236, 'MH', 'Pacific/Kwajalein'),
(237, 'MK', 'Europe/Skopje'),
(238, 'ML', 'Africa/Bamako'),
(239, 'MM', 'Asia/Rangoon'),
(240, 'MN', 'Asia/Ulaanbaatar'),
(241, 'MN', 'Asia/Hovd'),
(242, 'MN', 'Asia/Choibalsan'),
(243, 'MO', 'Asia/Macau'),
(244, 'MP', 'Pacific/Saipan'),
(245, 'MQ', 'America/Martinique'),
(246, 'MR', 'Africa/Nouakchott'),
(247, 'MS', 'America/Montserrat'),
(248, 'MT', 'Europe/Malta'),
(249, 'MU', 'Indian/Mauritius'),
(250, 'MV', 'Indian/Maldives'),
(251, 'MW', 'Africa/Blantyre'),
(252, 'MX', 'America/Mexico_City'),
(253, 'MX', 'America/Cancun'),
(254, 'MX', 'America/Merida'),
(255, 'MX', 'America/Monterrey'),
(256, 'MX', 'America/Matamoros'),
(257, 'MX', 'America/Mazatlan'),
(258, 'MX', 'America/Chihuahua'),
(259, 'MX', 'America/Ojinaga'),
(260, 'MX', 'America/Hermosillo'),
(261, 'MX', 'America/Tijuana'),
(262, 'MX', 'America/Santa_Isabel'),
(263, 'MX', 'America/Bahia_Banderas'),
(264, 'MY', 'Asia/Kuala_Lumpur'),
(265, 'MY', 'Asia/Kuching'),
(266, 'MZ', 'Africa/Maputo'),
(267, 'NA', 'Africa/Windhoek'),
(268, 'NC', 'Pacific/Noumea'),
(269, 'NE', 'Africa/Niamey'),
(270, 'NF', 'Pacific/Norfolk'),
(271, 'NG', 'Africa/Lagos'),
(272, 'NI', 'America/Managua'),
(273, 'NL', 'Europe/Amsterdam'),
(274, 'NO', 'Europe/Oslo'),
(275, 'NP', 'Asia/Kathmandu'),
(276, 'NR', 'Pacific/Nauru'),
(277, 'NU', 'Pacific/Niue'),
(278, 'NZ', 'Pacific/Auckland'),
(279, 'NZ', 'Pacific/Chatham'),
(280, 'OM', 'Asia/Muscat'),
(281, 'PA', 'America/Panama'),
(282, 'PE', 'America/Lima'),
(283, 'PF', 'Pacific/Tahiti'),
(284, 'PF', 'Pacific/Marquesas'),
(285, 'PF', 'Pacific/Gambier'),
(286, 'PG', 'Pacific/Port_Moresby'),
(287, 'PG', 'Pacific/Bougainville'),
(288, 'PH', 'Asia/Manila'),
(289, 'PK', 'Asia/Karachi'),
(290, 'PL', 'Europe/Warsaw'),
(291, 'PM', 'America/Miquelon'),
(292, 'PN', 'Pacific/Pitcairn'),
(293, 'PR', 'America/Puerto_Rico'),
(294, 'PS', 'Asia/Gaza'),
(295, 'PS', 'Asia/Hebron'),
(296, 'PT', 'Europe/Lisbon'),
(297, 'PT', 'Atlantic/Madeira'),
(298, 'PT', 'Atlantic/Azores'),
(299, 'PW', 'Pacific/Palau'),
(300, 'PY', 'America/Asuncion'),
(301, 'QA', 'Asia/Qatar'),
(302, 'RE', 'Indian/Reunion'),
(303, 'RO', 'Europe/Bucharest'),
(304, 'RS', 'Europe/Belgrade'),
(305, 'RU', 'Europe/Kaliningrad'),
(306, 'RU', 'Europe/Moscow'),
(307, 'RU', 'Europe/Simferopol'),
(308, 'RU', 'Europe/Volgograd'),
(309, 'RU', 'Europe/Samara'),
(310, 'RU', 'Asia/Yekaterinburg'),
(311, 'RU', 'Asia/Omsk'),
(312, 'RU', 'Asia/Novosibirsk'),
(313, 'RU', 'Asia/Novokuznetsk'),
(314, 'RU', 'Asia/Krasnoyarsk'),
(315, 'RU', 'Asia/Irkutsk'),
(316, 'RU', 'Asia/Chita'),
(317, 'RU', 'Asia/Yakutsk'),
(318, 'RU', 'Asia/Khandyga'),
(319, 'RU', 'Asia/Vladivostok'),
(320, 'RU', 'Asia/Sakhalin'),
(321, 'RU', 'Asia/Ust-Nera'),
(322, 'RU', 'Asia/Magadan'),
(323, 'RU', 'Asia/Srednekolymsk'),
(324, 'RU', 'Asia/Kamchatka'),
(325, 'RU', 'Asia/Anadyr'),
(326, 'RW', 'Africa/Kigali'),
(327, 'SA', 'Asia/Riyadh'),
(328, 'SB', 'Pacific/Guadalcanal'),
(329, 'SC', 'Indian/Mahe'),
(330, 'SD', 'Africa/Khartoum'),
(331, 'SE', 'Europe/Stockholm'),
(332, 'SG', 'Asia/Singapore'),
(333, 'SH', 'Atlantic/St_Helena'),
(334, 'SI', 'Europe/Ljubljana'),
(335, 'SJ', 'Arctic/Longyearbyen'),
(336, 'SK', 'Europe/Bratislava'),
(337, 'SL', 'Africa/Freetown'),
(338, 'SM', 'Europe/San_Marino'),
(339, 'SN', 'Africa/Dakar'),
(340, 'SO', 'Africa/Mogadishu'),
(341, 'SR', 'America/Paramaribo'),
(342, 'SS', 'Africa/Juba'),
(343, 'ST', 'Africa/Sao_Tome'),
(344, 'SV', 'America/El_Salvador'),
(345, 'SX', 'America/Lower_Princes'),
(346, 'SY', 'Asia/Damascus'),
(347, 'SZ', 'Africa/Mbabane'),
(348, 'TC', 'America/Grand_Turk'),
(349, 'TD', 'Africa/Ndjamena'),
(350, 'TF', 'Indian/Kerguelen'),
(351, 'TG', 'Africa/Lome'),
(352, 'TH', 'Asia/Bangkok'),
(353, 'TJ', 'Asia/Dushanbe'),
(354, 'TK', 'Pacific/Fakaofo'),
(355, 'TL', 'Asia/Dili'),
(356, 'TM', 'Asia/Ashgabat'),
(357, 'TN', 'Africa/Tunis'),
(358, 'TO', 'Pacific/Tongatapu'),
(359, 'TR', 'Europe/Istanbul'),
(360, 'TT', 'America/Port_of_Spain'),
(361, 'TV', 'Pacific/Funafuti'),
(362, 'TW', 'Asia/Taipei'),
(363, 'TZ', 'Africa/Dar_es_Salaam'),
(364, 'UA', 'Europe/Kiev'),
(365, 'UA', 'Europe/Uzhgorod'),
(366, 'UA', 'Europe/Zaporozhye'),
(367, 'UG', 'Africa/Kampala'),
(368, 'UM', 'Pacific/Johnston'),
(369, 'UM', 'Pacific/Midway'),
(370, 'UM', 'Pacific/Wake'),
(371, 'US', 'America/New_York'),
(372, 'US', 'America/Detroit'),
(373, 'US', 'America/Kentucky/Louisville'),
(374, 'US', 'America/Kentucky/Monticello'),
(375, 'US', 'America/Indiana/Indianapolis'),
(376, 'US', 'America/Indiana/Vincennes'),
(377, 'US', 'America/Indiana/Winamac'),
(378, 'US', 'America/Indiana/Marengo'),
(379, 'US', 'America/Indiana/Petersburg'),
(380, 'US', 'America/Indiana/Vevay'),
(381, 'US', 'America/Chicago'),
(382, 'US', 'America/Indiana/Tell_City'),
(383, 'US', 'America/Indiana/Knox'),
(384, 'US', 'America/Menominee'),
(385, 'US', 'America/North_Dakota/Center'),
(386, 'US', 'America/North_Dakota/New_Salem'),
(387, 'US', 'America/North_Dakota/Beulah'),
(388, 'US', 'America/Denver'),
(389, 'US', 'America/Boise'),
(390, 'US', 'America/Phoenix'),
(391, 'US', 'America/Los_Angeles'),
(392, 'US', 'America/Metlakatla'),
(393, 'US', 'America/Anchorage'),
(394, 'US', 'America/Juneau'),
(395, 'US', 'America/Sitka'),
(396, 'US', 'America/Yakutat'),
(397, 'US', 'America/Nome'),
(398, 'US', 'America/Adak'),
(399, 'US', 'Pacific/Honolulu'),
(400, 'UY', 'America/Montevideo'),
(401, 'UZ', 'Asia/Samarkand'),
(402, 'UZ', 'Asia/Tashkent'),
(403, 'VA', 'Europe/Vatican'),
(404, 'VC', 'America/St_Vincent'),
(405, 'VE', 'America/Caracas'),
(406, 'VG', 'America/Tortola'),
(407, 'VI', 'America/St_Thomas'),
(408, 'VN', 'Asia/Ho_Chi_Minh'),
(409, 'VU', 'Pacific/Efate'),
(410, 'WF', 'Pacific/Wallis'),
(411, 'WS', 'Pacific/Apia'),
(412, 'YE', 'Asia/Aden'),
(413, 'YT', 'Indian/Mayotte'),
(414, 'ZA', 'Africa/Johannesburg'),
(415, 'ZM', 'Africa/Lusaka'),
(416, 'ZW', 'Africa/Harare');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
