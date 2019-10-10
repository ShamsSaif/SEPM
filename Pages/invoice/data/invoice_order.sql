create database if not exists SEPM;

use SEPM;

drop table if exists invoice_order

CREATE TABLE `invoice_order` (
`order_id` int(11) NOT NULL,
`user_id` int(11) NOT NULL,
`order_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
`order_receiver_name` varchar(250) NOT NULL,
`order_receiver_address` text NOT NULL,
`order_total_before_tax` decimal(10,2) NOT NULL,
`order_total_tax` decimal(10,2) NOT NULL,
`order_tax_per` varchar(250) NOT NULL,
`order_total_after_tax` double(10,2) NOT NULL,
`order_amount_paid` decimal(10,2) NOT NULL,
`order_total_amount_due` decimal(10,2) NOT NULL,
`note` text NOT NULL
) ;