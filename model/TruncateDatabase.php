<?php
/**
 * TruncateDatabase
 *
 * class truncated tables
 * use pattern adapter
 */
namespace model;

class TruncateDatabase
{
    public function startTruncate()
    {
        $userinfo = new UserInfoDatabase();
        try{
            $userinfo->truncate();
        }catch (\Exception $e){
            echo $e->getMessage();
        }

        $usersiteinfo = new UserSiteInfoDatabase();
        try{
            $usersiteinfo->truncate();
        }catch (\Exception $e){
            $e->getMessage();
        }

    }
}