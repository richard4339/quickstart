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