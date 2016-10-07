<?php
namespace model;
class TruncateDatabase {  //Adapter
    public function startTruncate(){
        $userinfo = new UserInfoDatabase();
        $userinfo->truncate();
        $usersiteinfo = new UserSiteInfoDatabase();
        $usersiteinfo->truncate();
    }
}