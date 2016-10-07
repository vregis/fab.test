<?php

class DatafromviewDatabase extends Database {

    private $_firstUrl;
    private $_lastUrl;
    private $_uniqueUrl;
    private $_time;

    // if we will have more childs which use getters -> move getters to parent Database class

    public function getFirstUrl(){
        return $this->_firstUrl;
    }

    public function getLastUrl(){
        return $this->_lastUrl;
    }

    public function getUniqueUrl(){
        return $this->_uniqueUrl;
    }

    public function getTime(){
        return $this->_time;
    }

    public function getIp(){
        return $this->ip_address;
    }

    public function getOs(){
        return $this->os;
    }

    public function getBrowser(){
        return $this->browser;
    }

    public function setFirstUrl($firstUrl){
        $this->_firstUrl = $firstUrl;
    }

    public function setLastUrl($lastUrl){
        $this->_lastUrl = $lastUrl;
    }

    public function setUniqueUrl($uniqueUrl){
        $this->_uniqueUrl = $uniqueUrl;
    }

    public function setTime($time){
        $this->_time = $time;
    }

    public function getData(){
        $data = $this->db->query('select *, max(t)-min(t) as cur_t, COUNT(DISTINCT prev_url) as count_unique from user_site_info as usi1 join (select prev_url as last_url, ip_address as ip1 from (select * from user_site_info order by t desc) as t group by ip_address) as usi2 on usi2.ip1 = usi1.ip_address join (select cur_url as first_url, ip_address as ip2 from (select * from user_site_info order by t asc) as t1 group by ip_address) as usi3 on usi3.ip2 = usi1.ip_address
join (select browser, os, ip_address as ipp from user_info)  as ui on ui.ipp = usi1.ip_address
group by ip_address');
        $dataArray = [];
        $i=0;
        while($obj=$data->fetch_object()){
            $viewData = new self();
            $viewData->setIp($obj->ip_address);
            $viewData->setOs($obj->os);
            $viewData->setTime($obj->cur_t);
            $viewData->setBrowser($obj->browser);
            $viewData->setFirstUrl($obj->first_url);
            $viewData->setLastUrl($obj->last_url);
            $viewData->setUniqueUrl($obj->count_unique);
            $dataArray[$i] = $viewData;
            $i++;
        }

        return $dataArray;
    }


}