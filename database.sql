CREATE DATABASE IF NOT EXISTS pruebaSunMedia;

USE pruebaSunMedia;

CREATE TABLE IF NOT EXISTS events (
	id INT(11) auto_increment NOT NULL,
	created_at datetime,
	updated_at datetime NULL,
	ip_address varchar(255),
	user_agent varchar(255),
	code_country varchar(2),
	code_event varchar(6),
	CONSTRAINT pk_events PRIMARY KEY (id)
)ENGINE=InnoDb;