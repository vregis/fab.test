<?php

class UserSiteInfoDatabase extends Database {  // we can use factory in this case if we called this class more

    protected $date_value;
    protected $time_value;
    protected $prev_url;
    protected $cur_url;
    protected $t;
    protected $tablename = 'user_site_info';

    public function insert() {
        $this->db->query('INSERT into '.$this->tablename.' (date_value, time_value, ip_address, prev_url, cur_url, t) VALUES("'.$this->date_value.'", "'.$this->time_value.'","'.$this->ip_address.'",
        "'.$this->prev_url.'","'.$this->cur_url.'",UNIX_TIMESTAMP(CONCAT_WS(\' \', date_value, time_value)))', MYSQLI_USE_RESULT);
    }


}