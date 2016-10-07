<?php
/**
 * UserSiteInfoDatabase
 *
 * class from user_site_info table
 * we can use factory in this case if we called this class more
 */
namespace model;
class UserSiteInfoDatabase extends Database {

    /**
     * @var string
     */
    protected $date_value;
    /**
     * @var string
     */
    protected $time_value;
    /**
     * @var string
     */
    protected $prev_url;
    /**
     * @var string
     */
    protected $cur_url;
    /**
     * @var string
     */
    protected $t;
    /**
     * @var string
     */
    protected $tablename = 'user_site_info';

    public function insert() {
        $this->db->query('INSERT into '.$this->tablename.' (date_value, time_value, ip_address, prev_url, cur_url, t) VALUES("'.$this->date_value.'", "'.$this->time_value.'","'.$this->ip_address.'",
        "'.$this->prev_url.'","'.$this->cur_url.'",UNIX_TIMESTAMP(CONCAT_WS(\' \', date_value, time_value)))', MYSQLI_USE_RESULT);
    }


}