<?php
/**
 * TruncateDatabase
 *
 * class truncated tables
 * use pattern adapter
 */
namespace model;
class TruncateDatabase {
    public function startTruncate(){
        $userinfo = new UserInfoDatabase();
        $userinfo->truncate();
        $usersiteinfo = new UserSiteInfoDatabase();
        $usersiteinfo->truncate();
    }
}