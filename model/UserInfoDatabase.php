<?php
namespace model;
class UserInfoDatabase extends Database {  // we can use factory in this case if we called this class more

    protected $tablename = 'user_info';

    public function insert() {
        $cc = $this->db->query('INSERT into '.$this->tablename.' (ip_address, browser, os) VALUES("'.$this->ip_address.'", "'.$this->browser.'", "'.$this->os.'")', MYSQLI_USE_RESULT);
    }

}