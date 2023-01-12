<?php

namespace App\Helpers;

class TimeTracker {
    /**
     * Calclate time elapsed
     * @param string $from
     * @return string,boolean 
     */
    public static function timeElapsed($from) {
        $now = time();
        $date = strtotime($from);

    /**
    * To avoid unexpected results, only accept time that is earlier
    *  than or equal to current time
    */
    if ($now >= $date) {
        $difference = $now - $date;

        if ($difference < 60) {

            return 'Just Now';

        } elseif ($difference < 3600) {

            $mins = intval($difference / 60);
            if ($mins == 1) {
                return $mins . ' min ago';
            }
            return $mins . ' mins ago';

        } elseif ($difference < 86400) {

            $hours = intval($difference / 3600);
            if ($hours == 1) {
                return $hours . ' hour ago';
            }
            return $hours . ' hours ago';

        } elseif ($difference < 2592000 ) {

            $days = intval($difference / 86400);
            if ($days == 1) {
                return $days . ' day ago';
            }
            return $days . ' days ago';

        } elseif ($difference < 31104000) {

            $months = intval($difference / 2592000);
            if ($months == 1) {
                return $months . ' month ago';
            }
            return $months . ' months ago';
        } 

        else {

            $years = intval($difference / 31104000);
            if ($years == 1) {
                return $years . ' year ago';
            }
            return $years . ' years ago';
        }
        
        } else {
            return false;
        }
    }
}