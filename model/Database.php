<?php
/**
* Database Class
*/
namespace model;

class Database
{

    /**
     * @var string
     */
    protected $db;
    /**
     * @var string
     * default null;
     */
    protected $tablename = null;
    /**
     * @var string
     */
    protected $ip_address;
    /**
     * @var string
     */
    protected $browser;
    /**
     * @var string
     */
    protected $os;

    public function __construct()
    {
        $connect = Connect::getInstance();
        $this->db = $connect->getConnection();
    }

    /**
     * Truncate table, from tablename
     */
    public function truncate()
    {
        if($this->tablename != null){
            $sql = 'TRUNCATE TABLE '.$this->tablename.'';
            if(!$this->db->query($sql)){
                throw new \Exception('Truncate table error');
            }

        }
    }

    /**
     * Setters
     */
    /**
     * @param string $ip
     */
    public function setIp($ip)
    {
        $this->ip_address = $ip;
    }
    /**
     * @param string $browser
     */
    public function setBrowser($browser)
    {
        $this->browser = $browser;
    }
    /**
     * @param string $os
     */
    public function setOs($os)
    {
        $this->os = $os;
    }
    /**
     * @param string $date_value
     */
    public function setDateValue($date_value)
    {
        $this->date_value = $date_value;
    }
    /**
     * @param string $time_value
     */
    public function setTimeValue($time_value)
    {
        $this->time_value = $time_value;
    }
    /**
     * @param string $prev_url
     */
    public function setPrevUrl($prev_url)
    {
        $this->prev_url = $prev_url;
    }
    /**
     * @param string $cur_url
     */
    public function setCurUrl($cur_url)
    {
        $this->cur_url = $cur_url;
    }
    /**
     * @param string $t
     */
    public function setT($t)
    {
        $this->t = $t;
    }


}