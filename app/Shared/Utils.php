<?php
/**
 * Created by IntelliJ IDEA.
 * User: WIN8
 * Date: 16/08/2018
 * Time: 10:58
 */

namespace App\Shared;


class Utils
{

    public static function getTimeDiff($dtime, $atime)
    {
        $nextDay = $dtime > $atime ? 1 : 0;
        $dep = explode(':', $dtime);
        $arr = explode(':', $atime);
        $diff = abs(mktime($dep[0], $dep[1], 0, date('n'), date('j'), date('y')) - mktime($arr[0], $arr[1], 0, date('n'), date('j') + $nextDay, date('y')));
        $hours = floor($diff / (60 * 60));
        $mins = floor(($diff - ($hours * 60 * 60)) / (60));
        $secs = floor(($diff - (($hours * 60 * 60) + ($mins * 60))));

        $hours = (float)$hours;
        $mins = (float)$mins;
        return ($hours + ($mins / 60)) ;
    }

}