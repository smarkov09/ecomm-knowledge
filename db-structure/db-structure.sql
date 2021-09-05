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

