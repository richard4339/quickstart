<?php
/**
 * quickstart
 * @author Richard Lynskey <richard@mozor.net>
 * @copyright Copyright (c) 2016-2017, Richard Lynskey
 * @version 1.0.4
 *
 * Built 2017-02-26 11:19 CST by Richard Lynskey
 *
 */

/**
 * Generate a string of random letters and numbers
 * @param int $length (defaults to 10 characters)
 * @return string
 */
function generateRandomString($length = 10)
{
    $characters = str_shuffle('0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
        $randomString = str_shuffle($randomString);
    }
    return str_shuffle($randomString);
}

/**
 * A helper function based on substr[ing] that returns the leftmost $l characters
 * @param string $s The string
 * @param integer $l The number of characters to return (defaults to one character)
 *
 * @return string
 */
function left($s, $l = 1) {
    if(!is_string($s)) {
        return '';
    }
    if(!is_numeric($l))
    {
        return '';
    }
    $l = abs($l);
    if(strlen($s) < 1) {
        return '';
    }
    if(strlen($s) <= $l) {
        return $s;
    }
    if($l < 1) {
        return '';
    }
    return substr($s, 0, $l);
}

/**
 * A helper function based on substr[ing] that returns the rightmost $l characters
 * @param string $s The string
 * @param integer $l The number of characters to return (defaults to one character)
 *
 * @return string
 */
function right($s, $l = 1) {
    if(!is_string($s)) {
        return '';
    }
    if(!is_numeric($l))
    {
        return '';
    }
    $l = abs($l);
    if(strlen($s) < 1) {
        return '';
    }
    if(strlen($s) <= $l) {
        return $s;
    }
    if($l < 1) {
        return '';
    }
    return substr($s, $l * -1);
}

/**
 * @param DateTime $date
 * @return string
 */
function intervalFormat(DateTime $date)
{
    $interval = $date->diff(new \DateTime('now'));

    $format = array();
    if(isset($interval->y)) {
        $format[] = "%y years";
    }
    if(isset($interval->m)) {
        $format[] = "%m months";
    }
    if(isset($interval->d)) {
        $format[] = "%d days";
    }
    if(isset($interval->h)) {
        $format[] = "%h hours";
    }
    if(isset($interval->i)) {
        $format[] = "%i minutes";
    }
    return $interval->format(implode(', ', $format) . ' ago');
}

?>