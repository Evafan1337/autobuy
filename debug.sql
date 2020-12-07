DROP DATABASE IF EXISTS autobuy;
CREATE DATABASE autobuy
	DEFAULT CHARACTER SET utf8
	DEFAULT COLLATE utf8_general_ci;
USE autobuy;
CREATE TABLE application (
	id INT AUTO_INCREMENT PRIMARY KEY UNIQUE,
	car_name VARCHAR(255),
	year_of_make YEAR,
	gearbox VARCHAR (32),
	suggested_price VARCHAR (255),
	phone_number VARCHAR(255),
	description VARCHAR (1024)
);

CREATE TABLE car_photos (
	application_id INT,
	FOREIGN KEY (application_id) REFERENCES application(id),
	car_image MEDIUMBLOB NOT NULL,
	image_name VARCHAR(255)
);

CREATE TABLE password(
	password VARCHAR(255)
)