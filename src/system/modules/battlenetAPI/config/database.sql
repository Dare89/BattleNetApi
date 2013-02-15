-- Contao Repository :: Database setup file
--
-- Copyright (C) 2008-2010 by Peter Koch, IBK Software AG.
-- For license see accompaning file LICENSE.txt
--
-- NOTE: this file was edited with tabs set to 4.
-- 
-- **********************************************************
-- *      ! ! !   I M P O R T A N T  N O T E   ! ! !        *
-- *                                                        *
-- * Do not import this file manually! Use the Contao       *
-- * install tool to create and maintain database tables:   *
-- * - Point your browser to                                *
-- *   http://www.yourdomain.com/contao/install.php         *
-- * - Enter the installation password and click "Login"    *
-- * - Scroll down and click button "Update Database"       *
-- **********************************************************
  
-- --------------------------------------------------------
-- 
-- Table `tl_battlenetapi_wow_character`
-- 
CREATE TABLE `tl_battlenetapi_wow_character` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `name` varchar(32) NOT NULL default '',
  `realm` varchar(32) NOT NULL default '',
  `battlegroup` varchar(255) NOT NULL default '',
  `class` tinyint(2) unsigned NOT NULL default '0',
  `race` tinyint(2) unsigned NOT NULL default '0',
  `gender` tinyint(2) unsigned NOT NULL default '0',
  `level` tinyint(2) unsigned NOT NULL default '0',
  `achievementPoints` int(10) NOT NULL default '0',
  `thumbnail` varchar(255) NOT NULL default '',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`), 
  KEY `name` (`name`),
  KEY `realm` (`realm`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------
-- 
-- Table `tl_battlenetapi_wow_character_feed`
-- 
CREATE TABLE `tl_battlenetapi_wow_character_feed` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `pid` int(10) unsigned NOT NULL default '0',
  `tstamp` int(10) unsigned NOT NULL default '0',
  `type` varchar(15) NOT NULL default '',
  `itemID` int(10) unsigned NOT NULL default '0',
  `achievementID` int(10) unsigned NOT NULL default '0',
  `featOfStrength` char(1) NOT NULL default '',
  `criteriaID` int(10) unsigned NOT NULL default '0',
  `description` varchar(255) NOT NULL default '',
  `orderIndex` int(4) unsigned NOT NULL default '0',
  `max` int(4) unsigned NOT NULL default '0',
  `name` varchar(255) NOT NULL default '',
  `quantity` int(4) unsigned NOT NULL default '0',
  PRIMARY KEY  (`id`),
  KEY `pid` (`pid`), 
  KEY `type` (`type`),
  KEY `itemID` (`itemID`),
  KEY `achievementID` (`achievementID`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;
