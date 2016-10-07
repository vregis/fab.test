<?php
namespace model;
class UpdateLog {

    private $_firstFile = './logs/user_info.log';
    private $_secondFile = './logs/user_site_info.log';


    public function parseFirstLog(){

        $file = file($this->_firstFile);

        if($file){
            foreach($file as $user){
                $userinfo = new UserInfoDatabase();
                $stringpart = explode('|', $user);
                $userinfo->setIp($stringpart[0]);
                $userinfo->setBrowser($stringpart[1]);
                $userinfo->setOs($stringpart[2]);
                $userinfo->insert();
            }
        }

    }

    public function parseSecondLog(){
        $file = file($this->_secondFile);



        if($file){
            foreach($file as $user){
                $userinfo = new UserSiteInfoDatabase();
                $stringpart = explode('|', $user);
                $userinfo->setDateValue($stringpart[0]);
                $userinfo->setTimeValue($stringpart[1]);
                $userinfo->setIp($stringpart[2]);
                $userinfo->setPrevUrl($stringpart[3]);
                $userinfo->setCurUrl($stringpart[4]);
                $userinfo->insert();
            }
        }
    }

}