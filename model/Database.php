<?php
namespace model;
class Database {

    protected $db;
    protected $tablename = null;
    protected $ip_address;
    protected $browser;
    protected $os;

    public function __construct()
    {
        $connect = Connect::getInstance();
        $this->db = $connect->getConnection();
    }

    public function truncate(){
        if($this->tablename != null){
            $this->db->query('TRUNCATE TABLE '.$this->tablename.'');
        }
    }

    public function setIp($ip){
        $this->ip_address = $ip;
    }

    public function setBrowser($browser){
        $this->browser = $browser;
    }

    public function setOs($os){
        $this->os = $os;
    }

    public function setDateValue($date_value){
        $this->date_value = $date_value;
    }

    public function setTimeValue($time_value){
        $this->time_value = $time_value;
    }

    public function setPrevUrl($prev_url){
        $this->prev_url = $prev_url;
    }

    public function setCurUrl($cur_url){
        $this->cur_url = $cur_url;
    }

    public function setT($t){
        $this->t = $t;
    }


}