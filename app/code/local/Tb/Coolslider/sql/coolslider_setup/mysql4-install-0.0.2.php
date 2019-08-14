<?php
/**
 * Tb_Coolslider
 * 
 /****************************************************************************
 *                      MAGENTO EDITION USAGE NOTICE                         *
 ****************************************************************************/
 /* This package designed for Magento Community edition. Author does not provide extension support in case of incorrect edition usage.
 /****************************************************************************
 * @category 	TB
 * @package 	Tb_Coolslider
 * @copyright 	Copyright (c) 2014
 * @license 	http://opensource.org/licenses/OSL-3.0
 */
/**
 */
 ?>
 <?php
$installer = $this;
$installer->startSetup();
$sql=<<<SQLTEXT
DROP TABLE IF EXISTS `cool_slider`;
create table cool_slider(
		`slide_id`int(11) unsigned NOT NULL auto_increment,
		`title` varchar(255) NOT NULL default '',
		`status` smallint(6) NOT NULL default '0',
		`store_id` varchar(255) NOT NULL,
		`url` varchar(255) NULL,
		`image`	varchar(255) NULL,
		`contents` text NULL,
		primary key(slide_id)
		)ENGINE = InnoDB DEFAULT CHARSET = utf8;
		
		CREATE TABLE IF NOT EXISTS `cool_slider_store` (
            `slide_id` smallint(6) unsigned,
            `store_id` smallint(6) unsigned
        ) ENGINE = InnoDB DEFAULT CHARSET = utf8;
	
SQLTEXT;

$installer->run($sql);
$installer->endSetup();