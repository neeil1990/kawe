create table artrix_image_settings
(
	SETTINGS_NAME varchar(255) not NULL,
	SETTINGS_VALUE varchar(255),
	primary key (SETTINGS_NAME)
);
INSERT into artrix_image_settings (SETTINGS_NAME, SETTINGS_VALUE) VALUES ("JPEG_QUALITY", "85");