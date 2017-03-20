<?php
/**
 * quickstart
 * @author Richard Lynskey <richard@mozor.net>
 * @copyright Copyright (c) 2016-2017, Richard Lynskey
 * @version 1.0.4
 *
 * Built 2017-03-20 12:14 CDT by Richard Lynskey
 *
 */

/**
 * Takes the input $var and returns the integer $default if it is null, not a numeric, and optionally if it is negative
 * If it passes these checks, it will be forcefully converted to an int before being returned
 *
 * @param mixed $var
 * @param int $default
 * @param bool $failIfNegative
 * @return int
 */
function toInt($var, int $default, bool $failIfNegative = false): int
{
    if (is_null($var)) {
        return $default;
    }
    if(!is_numeric($var)) {
        return $default;
    }
    $var = (int) $var;

    if($failIfNegative && $var < 0) {
        return $default;
    }

    return $var;
}