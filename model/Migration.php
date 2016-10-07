<?php
namespace model;
class Migration extends Database
{
    public function run()
    {
        $this->db->query('CREATE TABLE IF NOT EXISTS `user_site_info` (
        `id` int(11) NOT NULL PRIMARY KEY,
        `date_value` date NOT NULL,
        `time_value` time NOT NULL,
        `ip_address` varchar(250) NOT NULL,
        `prev_url` varchar(250) NOT NULL,
        `cur_url` varchar(250) NOT NULL,
        `t` varchar(250) NOT NULL
        ) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8;');

        $this->db->query('CREATE TABLE IF NOT EXISTS `user_info` (
        `id` int(11) NOT NULL,
        `ip_address` varchar(250) NOT NULL,
        `browser` varchar(250) NOT NULL,
        `os` varchar(250) NOT NULL
        ) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;');

    }
}