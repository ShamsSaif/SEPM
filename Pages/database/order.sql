create database if not exists sepm;

use sepm;

drop table if exists orders;

CREATE TABLE `orders`(
	`order_id` serial primary key,
	`username` varchar(20),
	`firstname` char(40),
	`lastname` char(40),
	`email` char(40),
	`pick_location` varchar(40),
	`pick_time` varchar(20),
	`deliver_location` varchar(40),
	`deliver_time` varchar(20)
	

);