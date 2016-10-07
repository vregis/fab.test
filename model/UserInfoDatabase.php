<?php
/**
 * UserInfoDatabase
 *
 * Class from user_info table
 * we can use factory in this case if we called this class more
 */
namespace model;
class UserInfoDatabase extends Database {

    /**
     * @var string
     */
    protected $tablename = 'user_info';

    public function insert() {
        $this->db->query('INSERT into '.$this->tablename.' (ip_address, browser, os) VALUES("'.$this->ip_address.'", "'.$this->browser.'", "'.$this->os.'")', MYSQLI_USE_RESULT);
    }

}