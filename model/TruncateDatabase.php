<?php

class TruncateDatabase {  //Decorator
    public function startTruncate(){
        $userinfo = new UserInfoDatabase();
        $userinfo->truncate();
        $usersiteinfo = new UserSiteInfoDatabase();
        $usersiteinfo->truncate();
    }
}