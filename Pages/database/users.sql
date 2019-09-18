create database if not exists SEPM;

use SEPM;

drop table if exists member;

CREATE TABLE `member`(
	`user_id` serial primary key,
	`username` varchar(20),
	`password` char(40),
	`firstname` char(40),
	`lastname` char(40),
	`user_type` varchar(100),
	`email` char(40),
	`reg_date` datetime
);