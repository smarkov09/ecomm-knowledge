/* db structure */

CREATE TABLE 'categories'(
	'id' SMALLINT NOT NULL AUTO_INCREMENT,
	'category' VARCHAR(30) NOT NULL,
	PRIMARY KEY ('id'),
	UNIQUE KEY 'category' ('category')
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE 'orders' (
	'id' INT UNSIGNED NOT NULL AUTO_INCREMENT,
	'user_id' INT UNSIGNED NOT NULL,
	'transaction_id' VARCHAR(19) NOT NULL,
	'payment_status' VARCHAR(15) NOT NULL,
	'payment_amount' DECIMAL(6,2) UNSIGNED NOT NULL,
	'payment_date_time' TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY ('id'),
	KEY 'user_id' ('user_id'),
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE 'pages' (
	'id' MEDIUMINT UNSIGNED NOT NULL AUTO_INCREMENT,
	'category_id' SMALLINT UNSIGNED NOT NULL,
	'title' VARCHAR(100) NOT NULL,
	'description' TINYTEXT NOT NULL,
	'content' LONGTEXT NOT NULL,
	'date_created' TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY ('id'),
	KEY 'category_id' ('category_id'),
	KEY 'creation_date' ('date_created')
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE 'pdfs' (
	'id' SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
	'tmp_name' CHAR(40) NOT NULL,
	'title' VARCHAR(100) NOT NULL,
	'description' TINYTEXT NOT NULL,
	'file_name' VARCHAR(40) NOT NULL,
	'size' MEDIUMINT UNSIGNED NOT NULL,
	'date_created' TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	PRIMARY KEY ('id'),
	UNIQUE KEY 'tmp_name' ('tmp_name'),
	KEY 'date_created' ('date_created')
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE 'users' (
	'id' INT UNSIGNED NOT NULL AUTO_INCREMENT,
	'type' ENUM('member', 'admin') NOT NULL,
	'username' VARCHAR(30) NOT NULL,
	'email' VARCHAR(80) NOT NULL,
	'pass' VARBINARY(32) NOT NULL,
	'first_name' VARCHAR(20) NOT NULL,
	'last_name' VARCHAR(40) NOT NULL,
	'date_expires' DATE NOT NULL,
	'date_created' TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	'date_modified' TIMESTAMP NOT NULL DEFAULT '0000-00-00 00:00:00',
	PRIMARY KEY ('id'),
	UNIQUE KEY 'username' ('username'),
	UNIQUE KEY 'email' ('email')
) ENGINE=MyISAM DEFAULT CHARSET=utf8;


