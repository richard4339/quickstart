<?php
/**
 * quickstart
 * @author Richard Lynskey <richard@mozor.net>
 * @copyright Copyright (c) 2016, Richard Lynskey
 * @version 1.0.1
 *
 * Built 2016-12-18 13:19 CST by Richard Lynskey
 *
 */

/**
 * Get either a Gravatar URL or complete image tag for a specified email address.
 *
 * @param string $email The email address
 * @param string $s Size in pixels, defaults to 80px [ 1 - 2048 ]
 * @param string $d Default imageset to use [ 404 | mm | identicon | monsterid | wavatar ]
 * @param string $r Maximum rating (inclusive) [ g | pg | r | x ]
 * @param boolean $img True to return a complete IMG tag False for just the URL
 * @param array $attributes Optional, additional key/value attributes to include in the IMG tag
 * @return String containing either just a URL or a complete image tag
 * @source http://gravatar.com/site/implement/images/php/
 */
function get_gravatar($email, $s = 80, $d = 'mm', $r = 'g', $img = false, $attributes = array())
{
    $url = 'https://www.gravatar.com/avatar/';
    $url .= md5(strtolower(trim($email)));
    $url .= "?s=$s&d=$d&r=$r";
    if ($img) {
        $url = '<img src="' . $url . '"';
        foreach ($attributes as $key => $val)
            $url .= ' ' . $key . '="' . $val . '"';
        $url .= ' />';
    }
    return $url;
}

/**
 * Print an array using the print_r() function wrapped in <pre> tags.
 * Can optionally add a class and ID to the <pre> tag
 * @param array $a
 * @param string $class
 * @param string $id
 * @param bool $return
 * @return mixed
 */
function _pr($a, $class = '', $id = '', $return = false)
{
    $pclass = '';
    $pid = '';
    $output = '';
    if ($class != '') {
        $pclass = ' class="' . $class . '"';
    }
    if ($id != '') {
        $pid = ' id="' . $id . '"';
    }
    $output .= '<pre' . $pclass . $pid . '>';
    $output .= print_r($a, true);
    $output .= '</pre>';

    if(!$return) {
        print $output;
    }

    return $output;
}

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
 * Print a "pretty" version of a PHP exception in a nice bootstrap alert
 * @param Exception $ex
 */
function printError($ex)
{

    ?>
    <div class="alert alert-danger" role="alert">
    <strong>Error in <?php echo $ex->getFile(); ?> on line <?php echo $ex->getLine(); ?></strong><br/>
    <?php echo $ex->getMessage(); ?><br/><br/>
    <pre class="in-alert"><?php echo $ex->getTraceAsString(); ?></pre>
    </div><?php
}

/**
 * @param mixed[] $a Array of values to pick from
 * @return mixed
 */
function random($a)
{
    return $a[array_rand($a)];
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