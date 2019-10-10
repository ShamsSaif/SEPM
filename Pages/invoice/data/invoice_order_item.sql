create database if not exists SEPM;

use SEPM;

drop table if exists invoice_order_item

CREATE TABLE `invoice_order_item` (
`order_item_id` int(11) NOT NULL,
`order_id` int(11) NOT NULL,
`item_code` varchar(250) NOT NULL,
`item_name` varchar(250) NOT NULL,
`order_item_quantity` decimal(10,2) NOT NULL,
`order_item_price` decimal(10,2) NOT NULL,
`order_item_final_amount` decimal(10,2) NOT NULL
) ;