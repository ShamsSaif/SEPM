create database if not exists SEPM;

use SEPM;

drop table if exists invoice_user

CREATE TABLE `invoice_user` (
`id` int(11) NOT NULL,
`email` varchar(100) NOT NULL,
`password` varchar(100) NOT NULL,
`first_name` varchar(100) NOT NULL,
`last_name` varchar(100) NOT NULL,
`mobile` bigint(20) NOT NULL,
`address` text NOT NULL
) ;