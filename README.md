# Codigniter-Language-files-generated-from-database
Codigniter Language files generated from database: Each and every changes from the database just click one button it will re write the curresponding lanaguage files.

Create two table lik lang_cat and translation. Set basic insrtion for these tables and also set one button for apply changes. redirect to that transaltion control it will be automatically write your file.

CREATE TABLE `lang_cat` (
 `lang_cat_id` bigint(100) NOT NULL AUTO_INCREMENT,
 `trans_project_id` bigint(100) DEFAULT NULL,
 `category_name` varchar(100) DEFAULT NULL,
 `priority` int(50) DEFAULT NULL,
 `status` varchar(50) DEFAULT NULL,
 PRIMARY KEY (`menuhouse_lang_cat_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1

CREATE TABLE `translation` (
 `translation_id` bigint(100) NOT NULL AUTO_INCREMENT,
 `lang_cat_id` bigint(100) DEFAULT NULL,
 `title` text,
 `english` text CHARACTER SET utf8,
 `arabic` text CHARACTER SET utf8,
 `status` varchar(50) DEFAULT NULL,
 `priority` int(50) DEFAULT NULL,
 PRIMARY KEY (`menuhouse_translation_id`)
) ENGINE=MyISAM AUTO_INCREMENT=687 DEFAULT CHARSET=latin1
